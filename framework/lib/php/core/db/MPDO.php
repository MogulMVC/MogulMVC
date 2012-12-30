<?php
if (!defined('SERVER_ROOT')) {header('/error_404');
	exit ;
}

require_once (SERVER_ROOT . '/' . APPLICATION . '/config/database.php');

// Count the entries
$DB_TYPE_COUNT = count($GLOBALS['DB_TYPE']);
$DB_HOST_COUNT = count($GLOBALS['DB_HOST']);
$DB_USER_COUNT = count($GLOBALS['DB_USER']);
$DB_PASS_COUNT = count($GLOBALS['DB_PASS']);
$DB_NAME_COUNT = count($GLOBALS['DB_NAME']);

// Exit if there is a misconfigured amount of connections
if (
	$DB_TYPE_COUNT != $DB_HOST_COUNT || 
	$DB_HOST_COUNT != $DB_USER_COUNT || 
	$DB_USER_COUNT != $DB_PASS_COUNT || 
	$DB_PASS_COUNT != $DB_NAME_COUNT
) {
	exit('error - Inconsistent number of databases entries.');
}

$GLOBALS['MPDO'] = array();

// Create connection if there are connections configured
if ($DB_HOST_COUNT > 0) {
	
	for ($i = 0; $i < $DB_HOST_COUNT; $i++) {
		if (
			!empty($GLOBALS['DB_CONNECTION'][$i]) && 
			!empty($GLOBALS['DB_TYPE'][$i]) && 
			!empty($GLOBALS['DB_USER'][$i]) && 
			!empty($GLOBALS['DB_PASS'][$i]) && 
			!empty($GLOBALS['DB_HOST'][$i]) && 
			!empty($GLOBALS['DB_NAME'][$i])
		) {
			$GLOBALS['MPDO'][$i] = new PDO($GLOBALS['DB_TYPE'][$i] . ':host=' . $GLOBALS['DB_HOST'][$i] . ';port=' . $GLOBALS['DB_PORT'][$i] . ';dbname=' . $GLOBALS['DB_NAME'][$i], $GLOBALS['DB_USER'][$i], $GLOBALS['DB_PASS'][$i]);
			$GLOBALS['MPDO'][$i] -> setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
		}
	}
	
}
