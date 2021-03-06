<?php

require_once (BACKEND_ROOT . '/config/database.php');

$GLOBALS['MPDO'] = array();

class MPDO {

	public static function connection($connection) {

		// Check if $connection is a valid connection
		if (!is_numeric($connection) && array_key_exists($connection, $GLOBALS['MDB'])) {
			$i = $connection;
		}

		// Check if $connection is a valid index
		elseif ($connection <= count($GLOBALS['MDB'])) {
			$indices = array_keys($GLOBALS['MDB']);
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

		$type = $GLOBALS['MDB'][$i]['type'];
		$host = $GLOBALS['MDB'][$i]['host'];
		$port = $GLOBALS['MDB'][$i]['port'];
		$name = $GLOBALS['MDB'][$i]['name'];
		$user = $GLOBALS['MDB'][$i]['user'];
		$pass = $GLOBALS['MDB'][$i]['pass'];

		// Create a new pdo connection
		$GLOBALS['MPDO'][$i] = new PDO($type . ':host=' . $host . ';port=' . $port . ';dbname=' . $name, $user, $pass);
		$GLOBALS['MPDO'][$i] -> setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

		// Return the newly created pdo connection
		return $GLOBALS['MPDO'][$i];

	}

}
