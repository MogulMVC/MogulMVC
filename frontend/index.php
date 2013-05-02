<?php

/**
 *
 * Start the application compilation process
 * @Author Alan James - alanjames1987@gmail.com
 *
 */

define('BACKEND_ROOT', dirname(__FILE__) . '/../backend');
define('FRONTEND_ROOT', dirname(__FILE__));

define('FRAMEWORK', 'framework');
define('APPLICATION', 'application');

if (!is_dir(BACKEND_ROOT . '/' . FRAMEWORK)) {
	exit('error - No framework installed.');
}

if (!is_dir(BACKEND_ROOT . '/' . APPLICATION)) {
	exit('error - No application installed.');
}

require_once (BACKEND_ROOT . '/' . FRAMEWORK . '/bootstrapper.php');