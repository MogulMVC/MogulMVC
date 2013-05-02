<?php

/*
 * Mogul MVC by Alan James
 * version 130428
 * recommended PHP version 5.3
 */

if (!defined('BACKEND_ROOT')) {
	header('Location: /error_404');
	exit ;
}

define('FRAMEWORK_VERSION', '130428');

// Backend Framework Directories
define('FRAMEWORK_IMG', 'img');
define('FRAMEWORK_PHP', 'lib');
define('FRAMEWORK_VIEW', 'view');

// Frontend Framework Directories
define('FRAMEWORK_CSS', 'css');
define('FRAMEWORK_JS', 'js');

// Application Backend Directories
define('APPLICATION_ACTION', 'controller/action');
define('APPLICATION_API', 'controller/api');
define('APPLICATION_CACHE', 'cache');
define('APPLICATION_COMMAND', 'command');
define('APPLICATION_CONTROLLER', 'controller');
define('APPLICATION_LIB_PHP', 'lib/php');
define('APPLICATION_MODEL', 'model');
define('APPLICATION_VIEW', 'view');
define('APPLICATION_VO', 'model/vo');

// Application Frontend Directories
define('APPLICATION_LIB_CSS', 'lib/css');
define('APPLICATION_LIB_JS', 'lib/js');
define('APPLICATION_IMG', 'public/img');
define('APPLICATION_MISC', 'public/misc');
define('APPLICATION_PUBLIC', 'public');
define('APPLICATION_UPLOAD', 'public/upload');