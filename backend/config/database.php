<?php
if (!defined('BACKEND_ROOT')) {
	header('Location: /error_404');
	exit ;
}

$GLOBALS['MDB'] = array(

	/* 
	The following is an example of a DB connection

	'connection_name' => array(
		'type' => 'dbtype',
		'host' => 'localhost',
		'port' => '3306',
		'name' => 'dbname',
		'user' => 'dbuser',
		'pass' => 'dbpass'
	)

	If you have multiple connections you should seperate them with a comma
	*/
	
);