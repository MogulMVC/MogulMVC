<?php
if (!defined('SERVER_ROOT')) {header('/error_404');
	exit ;
}

// Only start a session if being run from the web
if (!empty($_SERVER['REMOTE_ADDR'])) {

	require_once (SERVER_ROOT . '/' . APPLICATION . '/config/session.php');

	// Check if a database is being used to store session data
	if ($GLOBALS['SESSION_DB']) {

		if (
			!empty($GLOBALS['SESSION_TYPE']) && 
			!empty($GLOBALS['SESSION_USER']) && 
			!empty($GLOBALS['SESSION_PASS']) && 
			!empty($GLOBALS['SESSION_HOST']) && 
			!empty($GLOBALS['SESSION_NAME']) && 
			!empty($GLOBALS['SESSION_TABLE'])
		) {
			$GLOBALS['MSESSION'] = new PDO($GLOBALS['SESSION_TYPE'] . ':host=' . $GLOBALS['SESSION_HOST'] . ';dbname=' . $GLOBALS['SESSION_NAME'], $GLOBALS['SESSION_USER'], $GLOBALS['SESSION_PASS']);
		}

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

			$DB = new PDO($GLOBALS['SESSION_TYPE'] . ':host=' . $GLOBALS['SESSION_HOST'] . ';dbname=' . $GLOBALS['SESSION_NAME'], $GLOBALS['SESSION_USER'], $GLOBALS['SESSION_PASS']);

			$query = $DB -> prepare('SELECT * from ' . $GLOBALS['SESSION_TABLE'] . ' WHERE id = ?');
			$query -> execute(array($id));
			$result = $query -> fetch();

			$DB = null;

			// I don't understand the following code yet
			// but it works with JSON in the database
			// so I am happy for now
			$tmp = $_SESSION;

			$temp = json_decode($result['data']);
			$_SESSION = (array) $temp;

			if (isset($_SESSION) && !empty($_SESSION) && $_SESSION != null) {

				$new_data = session_encode();
				$_SESSION = $tmp;
				return $new_data;

			} else {

				return "";

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

			$DB = new PDO($GLOBALS['SESSION_TYPE'] . ':host=' . $GLOBALS['SESSION_HOST'] . ';dbname=' . $GLOBALS['SESSION_NAME'], $GLOBALS['SESSION_USER'], $GLOBALS['SESSION_PASS']);

			$query = $DB -> prepare('REPLACE INTO ' . $GLOBALS['SESSION_TABLE'] . ' VALUES  (?, ?, ?)');
			$query -> execute(array($id, $access, $data));

			$DB = null;

		}

		function MSessionDestroy($id) {

			$DB = new PDO($GLOBALS['SESSION_TYPE'] . ':host=' . $GLOBALS['SESSION_HOST'] . ';dbname=' . $GLOBALS['SESSION_NAME'], $GLOBALS['SESSION_USER'], $GLOBALS['SESSION_PASS']);

			$query = $DB -> prepare('DELETE from ' . $GLOBALS['SESSION_TABLE'] . ' WHERE id = ?');
			$query -> execute(array($id));

			$DB = null;

		}

		function MSessionClean($max) {

			$old = time() - $max;

			$DB = new PDO($GLOBALS['SESSION_TYPE'] . ':host=' . $GLOBALS['SESSION_HOST'] . ';dbname=' . $GLOBALS['SESSION_NAME'], $GLOBALS['SESSION_USER'], $GLOBALS['SESSION_PASS']);

			$query = $DB -> prepare('DELETE from ' . $GLOBALS['SESSION_TABLE'] . ' WHERE  access < ?');
			$query -> execute(array($old));

			$DB = null;

		}

		session_set_save_handler('MSessionOpen', 'MSessionClose', 'MSessionRead', 'MSessionWrite', 'MSessionDestroy', 'MSessionClean');

	}

	// Start the session
	session_start();

}
