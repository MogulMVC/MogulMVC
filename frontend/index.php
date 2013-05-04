<?php

/**
 *
 * Start the application compilation process
 * @Author Alan James - alanjames1987@gmail.com
 *
 */

// The location of each folder with no trailing slash
define('BACKEND_ROOT', dirname(__FILE__) . '/../backend');
define('FRONTEND_ROOT', dirname(__FILE__));

// The names of the framework and application folders
// These should be the same for the backend and frontend
define('FRAMEWORK', 'framework');
define('APPLICATION', 'application');

if (!is_dir(BACKEND_ROOT . '/' . FRAMEWORK)) {
	exit('error - No backend framework installed.');
}

if (!is_dir(BACKEND_ROOT . '/' . APPLICATION)) {
	exit('error - No backend application installed.');
}

if (!is_dir(FRONTEND_ROOT . '/' . FRAMEWORK)) {
	exit('error - No frontend framework installed.');
}

if (!is_dir(FRONTEND_ROOT . '/' . APPLICATION)) {
	exit('error - No frontend application installed.');
}

require_once (BACKEND_ROOT . '/' . FRAMEWORK . '/bootstrapper.php');
