<?php
if (!defined('SERVER_ROOT')) {header('/error_404');
	exit ;
}

require_once (SERVER_ROOT . '/' . APPLICATION . '/config/database.php');

if ($DB_WARN == FALSE) {
	//Framework wide error_reporting will be set in the environment core file
	error_reporting(0);
}

$DB_HOST_COUNT = count($DB_HOST);
$DB_USER_COUNT = count($DB_USER);
$DB_PASS_COUNT = count($DB_PASS);
$DB_NAME_COUNT = count($DB_NAME);

if ($DB_HOST_COUNT != $DB_USER_COUNT || $DB_USER_COUNT != $DB_PASS_COUNT || $DB_PASS_COUNT != $DB_NAME_COUNT) {
	exit('error - Inconsistent number of databases entries.');
}

if ($DB_HOST_COUNT > 0) {

	for ($i = 0; $i != $DB_HOST_COUNT; $i++) {

		if (!empty($DB_HOST[$i]) && !empty($DB_USER[$i]) && !empty($DB_PASS[$i]) && !empty($DB_NAME[$i])) {

			$DB_CONNECTED = mysql_connect($DB_HOST[$i], $DB_USER[$i], $DB_PASS[$i]);
			$DB_SELECTED = mysql_select_db($DB_NAME[$i]);

		}
	}
}
