<?php
if (!defined('SERVER_ROOT')) {
	header('Location: /error_404');
	exit ;
}

require_once (SERVER_ROOT . '/' . APPLICATION . '/config/database.php');

MLoad::php_framework('3rdparty/db/ActiveRecord');

$connections = array();

// Create connection if there are connections configured
for ($i = 0; $i < count($GLOBALS['DB']); $i++) {

	$array = array_slice($GLOBALS['DB'], $i, 1, true);
	$key = key($array);

	$type = $array[$key]['type'];
	$host = $array[$key]['host'];
	$port = $array[$key]['port'];
	$name = $array[$key]['name'];
	$user = $array[$key]['user'];
	$pass = $array[$key]['pass'];

	$value = $type . '://' . $user . ':' . $pass . '@' . $host . '[:' . $port . ']/' . $name;
	$connections[$key] = $value;

}

$default_connection = key(array_slice($GLOBALS['DB'], 0, 1, true));

// must issue a "use" statement in your closure if passing variables
ActiveRecord\Config::initialize(function($cfg) use ($connections) {
	$cfg -> set_model_directory(SERVER_ROOT . '/' . APPLICATION . '/' . APPLICATION_MODEL);
	$cfg -> set_connections($connections);
	$cfg -> set_default_connection($default_connection);
});

// Create the base class
class MActiveRecord extends ActiveRecord\model {

}
