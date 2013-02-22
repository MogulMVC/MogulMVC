<?php
if (!defined('SERVER_ROOT')) {
	header('/error_404');
	exit ;
}

require_once (SERVER_ROOT . '/' . APPLICATION . '/config/database.php');

$GLOBALS['MPDO'] = array();

class MPDO {

	public static function connection($connection) {

		// Check if $connection is a valid connection
		if (!is_numeric($connection) && array_key_exists($connection, $GLOBALS['DB'])) {
			$i = $connection;
		}

		// Check if $connection is a valid index
		elseif ($connection < count($GLOBALS['DB'])) {
			$indices = array_keys($GLOBALS['DB']);
			$i = $indices[$connection];
		}

		// $connection is not valid
		else {
			exit('error - ' . $connection . ' is an invalid database connection');
		}

		// Check if the pdo connection has already been created
		if (isset($GLOBALS['MPDO'][$i])) {
			return $GLOBALS['MPDO'][$i];
		}

		$type = $GLOBALS['DB'][$i]['type'];
		$host = $GLOBALS['DB'][$i]['host'];
		$port = $GLOBALS['DB'][$i]['port'];
		$name = $GLOBALS['DB'][$i]['name'];
		$user = $GLOBALS['DB'][$i]['user'];
		$pass = $GLOBALS['DB'][$i]['pass'];

		// Create a new pdo connection
		$GLOBALS['MPDO'][$i] = new PDO($type . ':host=' . $host . ';port=' . $port . ';dbname=' . $name , $user, $pass);
		$GLOBALS['MPDO'][$i] -> setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

		// Return the newly created pdo connection
		return $GLOBALS['MPDO'][$i];

	}

}
