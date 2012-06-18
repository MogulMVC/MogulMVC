<?php if(!defined("SERVER_ROOT")){header("/error_404");exit;}

//Order Matters
require_once(SERVER_ROOT . '/' . FRAMEWORK . '/core/config.php');
require_once(SERVER_ROOT . '/' . APPLICATION . '/config/config.php');

require_once(SERVER_ROOT . '/' . FRAMEWORK . '/core/session.php');
require_once(SERVER_ROOT . '/' . FRAMEWORK . '/core/database.php');
require_once(SERVER_ROOT . '/' . FRAMEWORK . '/core/environment.php');

//Used to load all the other libraries
require_once(SERVER_ROOT . '/' . FRAMEWORK . '/' .FRAMEWORK_LIB . '/load.php');

//Load needed core libraries
//string.php must come first
library_framework_load('string.php');
//The rest are alphabetical
library_framework_load('cli.php');
library_framework_load('errors.php');
library_framework_load('url.php');

//Autoload the libraries defined in the application autoload
require_once(SERVER_ROOT . '/' . APPLICATION . '/config/autoload.php');
require_once(SERVER_ROOT . '/' . FRAMEWORK . '/core/autoload.php');

//Application constants must come after framework constants
require_once(SERVER_ROOT . '/' . FRAMEWORK . '/core/constants.php');
require_once(SERVER_ROOT . '/' . APPLICATION . '/config/constants.php');

require_once(SERVER_ROOT . '/' . FRAMEWORK . '/core/controllers.php');

?>