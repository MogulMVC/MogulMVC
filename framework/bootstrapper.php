<?php
if (!defined('SERVER_ROOT')) {
	header('Location: /error_404');
	exit ;
}

// Application config must come after framework config
require_once (SERVER_ROOT . '/' . FRAMEWORK . '/core/config.php');
require_once (SERVER_ROOT . '/' . APPLICATION . '/config/config.php');
require_once (SERVER_ROOT . '/' . FRAMEWORK . '/core/environment.php');

// Used to load all the other libraries
require_once (SERVER_ROOT . '/' . FRAMEWORK . '/' . FRAMEWORK_LIB_PHP . '/core/util/MLoad.php');

// Load needed core libraries
// MString must come first
MLoad::php_framework('core/util/MString');

// The rest are alphabetical
// These are needed for the dispatcher
MLoad::php_framework('core/util/MRequest');
MLoad::php_framework('core/util/MError');
MLoad::php_framework('core/util/MURL');

// Application constants must come after framework constants
require_once (SERVER_ROOT . '/' . FRAMEWORK . '/core/constants.php');
require_once (SERVER_ROOT . '/' . APPLICATION . '/config/constants.php');

// Application variables
require_once (SERVER_ROOT . '/' . FRAMEWORK . '/core/variables.php');
require_once (SERVER_ROOT . '/' . APPLICATION . '/config/variables.php');

// Application autoload list the libraries to be loaded
// Framework autoload loads them
require_once (SERVER_ROOT . '/' . APPLICATION . '/config/autoload.php');
require_once (SERVER_ROOT . '/' . FRAMEWORK . '/core/autoload.php');

// The router determines the controller and function to run
require_once (SERVER_ROOT . '/' . FRAMEWORK . '/core/router.php');
