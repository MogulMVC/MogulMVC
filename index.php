<?php

/**
 *
 * Start the application compilation process
 * Generates error messages if problems happen
 * @Author Alan James - alanjames1987@gmail.com
 *
 */

define('SERVER_ROOT', dirname(__FILE__));

define('FRAMEWORK', 'framework');
define('APPLICATION', 'application');

if (!is_dir(SERVER_ROOT . "/" . FRAMEWORK)) {
	exit('error - No framework installed.');
}

if (!is_dir(SERVER_ROOT . "/" . APPLICATION)) {
	exit('error - No application installed.');
}

require_once (SERVER_ROOT . "/" . FRAMEWORK . '/bootstrapper.php');
?>