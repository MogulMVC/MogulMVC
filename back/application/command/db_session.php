<?php
if (!defined('SERVER_ROOT')) {
	header('Location: /error_404');
	exit ;
}

MLoad::php_framework('core/util/MSession');

// Set up the session table if applicable
if ($GLOBALS['SESSION_DB']) {

	$DB = new PDO($GLOBALS['SESSION']['type'] . ':host=' . $GLOBALS['SESSION']['host'] . ';dbname=' . $GLOBALS['SESSION']['name'], $GLOBALS['SESSION']['user'], $GLOBALS['SESSION']['pass']);

	$query = $DB -> prepare('CREATE TABLE IF NOT EXISTS ' . $GLOBALS['SESSION']['table'] . ' (
	  id varchar(32) NOT NULL PRIMARY KEY,
	  access INT(10) unsigned,
	  data TEXT)');
	$query -> execute();
}

echo 'Session Table Created';
