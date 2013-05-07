<?php
if (!defined('BACKEND_ROOT')) {
	header('Location: /error_404');
	exit ;
}

require_once (BACKEND_ROOT . '/config/database.php');

MLoad::php_framework('vendor/db/ActiveRecord');

$connections = array();

// Create connection if there are connections configured
for ($i = 0; $i < count($GLOBALS['DB']); $i++) {

	$array = array_slice($GLOBALS['DB'], $i, 1, TRUE);
	$key = key($array);

	$type = $array[$key]['type'];
	$host = $array[$key]['host'];
	$port = $array[$key]['port'];
	$name = $array[$key]['name'];
	$user = $array[$key]['user'];
	$pass = $array[$key]['pass'];

	$value = $type . '://' . $user . ':' . $pass . '@' . $host . ':' . $port . '/' . $name;
	$connections[$key] = $value;

}

// must issue a "use" statement in your closure if passing variables
ActiveRecord\Config::initialize(function($cfg) use ($connections) {

	$default_connection = key(array_slice($GLOBALS['DB'], 0, 1, TRUE));

	$cfg -> set_model_directory(BACKEND_ROOT . '/' . APPLICATION_MODEL);
	$cfg -> set_connections($connections);
	$cfg -> set_default_connection($default_connection);

});

// Create the base class
class MActiveRecord extends ActiveRecord\model {

}
