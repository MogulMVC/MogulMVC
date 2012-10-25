<?php

$GLOBALS['PDO'] = array();

require_once (SERVER_ROOT . '/' . APPLICATION . '/config/database.php');

$DB_TYPE_COUNT = count($DB_TYPE);
$DB_HOST_COUNT = count($DB_HOST);
$DB_USER_COUNT = count($DB_USER);
$DB_PASS_COUNT = count($DB_PASS);
$DB_NAME_COUNT = count($DB_NAME);

if ($DB_TYPE_COUNT != $DB_HOST_COUNT || $DB_HOST_COUNT != $DB_USER_COUNT || $DB_USER_COUNT != $DB_PASS_COUNT || $DB_PASS_COUNT != $DB_NAME_COUNT) {
	exit('error - Inconsistent number of databases entries.');
}
for ($i = 0; $i < $DB_HOST_COUNT; $i++) {

	if ($DB_HOST_COUNT > 0) {
		if (!empty($DB_TYPE[$i]) && !empty($DB_HOST[$i]) && !empty($DB_USER[$i]) && !empty($DB_PASS[$i]) && !empty($DB_NAME[$i])) {
			$GLOBALS['PDO'][$i] = new PDO($DB_TYPE[$i] . ':host=' . $DB_HOST[$i] . ';dbname=' . $DB_NAME[$i], $DB_USER[$i], $DB_PASS[$i]);
			$GLOBALS['PDO'][$i] -> setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
		}
	}

}
