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
		function _open() {
			
			if (!isset($_COOKIE['session_id'])) {
				// Set a cookie to hold the session id
				setcookie('session_id', session_id(), time() + 60 * 60 * 24 * 365, '/', MURL::domain());
			}
			
			if (isset($_COOKIE['session_id'])) {
				session_id($_COOKIE['session_id']);
			}
			
		}

		function _close() {
		}

		function _read($id) {

			$DB = new PDO($GLOBALS['SESSION_TYPE'] . ':host=' . $GLOBALS['SESSION_HOST'] . ';dbname=' . $GLOBALS['SESSION_NAME'], $GLOBALS['SESSION_USER'], $GLOBALS['SESSION_PASS']);

			$query = $DB -> prepare("SELECT * from " . $GLOBALS['SESSION_TABLE'] . " WHERE id = ?");
			$query -> execute(array($id));
			$result = $query -> fetch();

			$DB = null;

			return $result['data'];

		}

		function _write($id, $data) {

			$access = time();

			$DB = new PDO($GLOBALS['SESSION_TYPE'] . ':host=' . $GLOBALS['SESSION_HOST'] . ';dbname=' . $GLOBALS['SESSION_NAME'], $GLOBALS['SESSION_USER'], $GLOBALS['SESSION_PASS']);

			$query = $DB -> prepare("REPLACE INTO " . $GLOBALS['SESSION_TABLE'] . " VALUES  (?, ?, ?)");
			$query -> execute(array($id, $access, $data));

			$DB = null;

		}

		function _destroy($id) {

			$DB = new PDO($GLOBALS['SESSION_TYPE'] . ':host=' . $GLOBALS['SESSION_HOST'] . ';dbname=' . $GLOBALS['SESSION_NAME'], $GLOBALS['SESSION_USER'], $GLOBALS['SESSION_PASS']);

			$query = $DB -> prepare("DELETE from " . $GLOBALS['SESSION_TABLE'] . " WHERE id = ?");
			$query -> execute(array($id));

			$DB = null;

		}

		function _clean($max) {

			$old = time() - $max;

			$DB = new PDO($GLOBALS['SESSION_TYPE'] . ':host=' . $GLOBALS['SESSION_HOST'] . ';dbname=' . $GLOBALS['SESSION_NAME'], $GLOBALS['SESSION_USER'], $GLOBALS['SESSION_PASS']);

			$query = $DB -> prepare("DELETE from " . $GLOBALS['SESSION_TABLE'] . " WHERE  access < ?");
			$query -> execute(array($old));

			$DB = null;

		}

		session_set_save_handler('_open', '_close', '_read', '_write', '_destroy', '_clean');

	}

	// Start the session
	session_start();

}
