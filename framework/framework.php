<?php if(!defined("SERVER_ROOT")){header("/error_404");exit;}

/**
*
* Gather all the required libraries
* @Author Alan James - alanjames1987@gmail.com
*
*/

//Order Matters
require_once(SERVER_ROOT . '/' . FRAMEWORK . '/core/config.php');
require_once(SERVER_ROOT . '/' . APPLICATION . '/config/config.php');

require_once(SERVER_ROOT . '/' . FRAMEWORK . '/core/session.php');
require_once(SERVER_ROOT . '/' . FRAMEWORK . '/core/database.php');
require_once(SERVER_ROOT . '/' . FRAMEWORK . '/core/environment.php');

//Used to load all the other libraries
require_once(SERVER_ROOT . '/' . FRAMEWORK . '/' .FRAMEWORK_LIB . '/MLoad.php');

//Load needed core libraries
//MStrings.php must come first
MLoad::lib_framework('MStrings.php');

//The rest are alphabetical
MLoad::lib_framework('MCLI.php');
MLoad::lib_framework('MErrors.php');
MLoad::lib_framework('MURL.php');

//Autoload the libraries defined in the application autoload
require_once(SERVER_ROOT . '/' . APPLICATION . '/config/autoload.php');
require_once(SERVER_ROOT . '/' . FRAMEWORK . '/core/autoload.php');

//Application constants must come after core constants
require_once(SERVER_ROOT . '/' . FRAMEWORK . '/core/constants.php');
require_once(SERVER_ROOT . '/' . APPLICATION . '/config/constants.php');

require_once(SERVER_ROOT . '/' . FRAMEWORK . '/core/controllers.php');

?>