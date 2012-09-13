<?php if(!defined('SERVER_ROOT')){header('/error_404');exit;}

//Order Matters
require_once(SERVER_ROOT . '/' . FRAMEWORK . '/core/config.php');
require_once(SERVER_ROOT . '/' . APPLICATION . '/config/config.php');

require_once(SERVER_ROOT . '/' . FRAMEWORK . '/core/session.php');
require_once(SERVER_ROOT . '/' . FRAMEWORK . '/core/database.php');
require_once(SERVER_ROOT . '/' . FRAMEWORK . '/core/environment.php');

//Used to load all the other libraries
require_once(SERVER_ROOT . '/' . FRAMEWORK . '/' .FRAMEWORK_LIB_PHP . '/util/MLoad.php');

//Load needed core libraries
//MStrings.php must come first
MLoad::php_framework('util/MStrings.php');

//The rest are alphabetical
MLoad::php_framework('util/MCLI.php');
MLoad::php_framework('util/MErrors.php');
MLoad::php_framework('util/MURL.php');

//Autoload the libraries defined in the application autoload
require_once(SERVER_ROOT . '/' . APPLICATION . '/config/autoload.php');
require_once(SERVER_ROOT . '/' . FRAMEWORK . '/core/autoload.php');

//Application constants must come after core constants
require_once(SERVER_ROOT . '/' . FRAMEWORK . '/core/constants.php');
require_once(SERVER_ROOT . '/' . APPLICATION . '/config/constants.php');

require_once(SERVER_ROOT . '/' . FRAMEWORK . '/core/dispatcher.php');

?>