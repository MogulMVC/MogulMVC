<?php

/*
 * Mogul MVC by Alan James
 * version 130508
 * recommended PHP version 5.3
 */

if (!defined('BACKEND_ROOT')) {
	header('Location: /error_404');
	exit ;
}

define('FRAMEWORK_VERSION', '130508');

// Backend Framework Directories
define('FRAMEWORK_PHP', 'lib');
define('FRAMEWORK_VIEW', 'view');

// Frontend Framework Directories
define('FRAMEWORK_CSS', 'css');
define('FRAMEWORK_JS', 'js');
define('FRAMEWORK_IMG', 'img');

// Application Backend Directories
define('APPLICATION_ACTION', 'controller/action');
define('APPLICATION_API', 'controller/api');
define('APPLICATION_BACKEND_CACHE', 'cache');
define('APPLICATION_COMMAND', 'command');
define('APPLICATION_CONTROLLER', 'controller');
define('APPLICATION_PHP', 'lib');
define('APPLICATION_MODEL', 'model');
define('APPLICATION_VIEW', 'view');
define('APPLICATION_VO', 'model/vo');

// Application Frontend Directories
define('APPLICATION_CSS', 'css');
define('APPLICATION_JS', 'js');
define('APPLICATION_IMG', 'img');
define('APPLICATION_MISC', 'misc');
define('APPLICATION_UPLOAD', 'upload');
define('APPLICATION_FRONTEND_CACHE', 'cache');