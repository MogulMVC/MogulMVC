<?php
if (!defined('BACKEND_ROOT')) {
	header('Location: /error_404');
	exit ;
}

// I might add this later
// ini_set('session.gc_probability', 100);
// ini_set('session.gc_divisor', 100);
ini_set('session.cookie_lifetime', 60 * 60 * 24 * 365);

require_once (BACKEND_ROOT . '/config/session.php');

// Check if a database is being used to store session data
if ($GLOBALS['SESSION_DB']) {

	// Define the callback functions
	function MSessionOpen() {

		if (!isset($_COOKIE['session_id'])) {
			// Set a cookie to hold the session id
			setcookie('session_id', session_id(), time() + 60 * 60 * 24 * 365, '/', MURL::domain());
		}

		if (isset($_COOKIE['session_id'])) {
			session_id($_COOKIE['session_id']);
		}

	}

	function MSessionClose() {

	}

	function MSessionRead($id) {

		$db_connection = new PDO($GLOBALS['SESSION']['type'] . ':host=' . $GLOBALS['SESSION']['host'] . ';dbname=' . $GLOBALS['SESSION']['name'], $GLOBALS['SESSION']['user'], $GLOBALS['SESSION']['pass']);

		$query = $db_connection -> prepare('SELECT * from ' . $GLOBALS['SESSION']['table'] . ' WHERE id = ?');
		$query -> execute(array($id));
		$result = $query -> fetch();

		$db_connection = null;

		// I don't understand the following code yet
		// but it works with JSON in the database
		// so I am happy for now
		$tmp = $_SESSION;

		$temp = json_decode($result['data']);
		$_SESSION = (array)$temp;

		if (isset($_SESSION) && !empty($_SESSION) && $_SESSION != null) {

			$new_data = session_encode();
			$_SESSION = $tmp;
			return $new_data;

		} else {

			return '';

		}

	}

	function MSessionWrite($id, $data) {

		// Store the original session
		$original_session = $_SESSION;

		// Decode the session and store it back into $_SESSION
		session_decode($data);

		// Turn decoded session into JSON
		$data = json_encode($_SESSION);

		// Change the session data back to the old session
		// The JSON will be stored in the database while PHP keeps its original session
		$_SESSION = $original_session;

		// Create an access time
		$access = time();

		$db_connection = new PDO($GLOBALS['SESSION']['type'] . ':host=' . $GLOBALS['SESSION']['host'] . ';dbname=' . $GLOBALS['SESSION']['name'], $GLOBALS['SESSION']['user'], $GLOBALS['SESSION']['pass']);

		$query = $db_connection -> prepare('REPLACE INTO ' . $GLOBALS['SESSION']['table'] . ' VALUES  (?, ?, ?)');
		$query -> execute(array($id, $access, $data));

		$db_connection = null;

	}

	function MSessionDestroy($id) {

		$db_connection = new PDO($GLOBALS['SESSION']['type'] . ':host=' . $GLOBALS['SESSION']['host'] . ';dbname=' . $GLOBALS['SESSION']['name'], $GLOBALS['SESSION']['user'], $GLOBALS['SESSION']['pass']);

		$query = $db_connection -> prepare('DELETE from ' . $GLOBALS['SESSION']['table'] . ' WHERE id = ?');
		$query -> execute(array($id));

		$db_connection = null;

	}

	function MSessionClean($max) {

		$old = time() - $max;

		$db_connection = new PDO($GLOBALS['SESSION']['type'] . ':host=' . $GLOBALS['SESSION']['host'] . ';dbname=' . $GLOBALS['SESSION']['name'], $GLOBALS['SESSION']['user'], $GLOBALS['SESSION']['pass']);

		$query = $db_connection -> prepare('DELETE from ' . $GLOBALS['SESSION']['table'] . ' WHERE  access < ?');
		$query -> execute(array($old));

		$db_connection = null;

	}

	session_set_save_handler('MSessionOpen', 'MSessionClose', 'MSessionRead', 'MSessionWrite', 'MSessionDestroy', 'MSessionClean');

}

// Start the session
session_start();
