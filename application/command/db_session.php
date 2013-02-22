<?php
if (!defined('SERVER_ROOT')) {
	header('/error_404');
	exit ;
}

MLoad::php_framework('core/util/MSession');

// Set up the session table if applicable
if($GLOBALS['SESSION_DB']){
	
	$DB = $GLOBALS['MSESSION'];
	
	$query = $DB -> prepare("CREATE TABLE IF NOT EXISTS ".$GLOBALS['SESSION_TABLE']." (
	  id varchar(32) NOT NULL PRIMARY KEY,
	  access INT(10) unsigned,
	  data TEXT)");
	$query -> execute();
}

echo 'Session Tabel Created';