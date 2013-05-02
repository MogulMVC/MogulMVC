<?php

/**
 *
 * Start the application compilation process
 * @Author Alan James - alanjames1987@gmail.com
 *
 */

define('SERVER_ROOT', dirname(__FILE__) . '../back');

define('FRAMEWORK', 'framework');
define('APPLICATION', 'application');

if (!is_dir(SERVER_ROOT . '/' . FRAMEWORK)) {
	exit('error - No framework installed.');
}

if (!is_dir(SERVER_ROOT . '/' . APPLICATION)) {
	exit('error - No application installed.');
}

require_once (SERVER_ROOT . '/' . FRAMEWORK . '/bootstrapper.php');