<?php
if (!defined('SERVER_ROOT')) {header('/error_404');
	exit ;
}

//Application
define('APPLICATION_COMPANY', 'Application Company');
define('APPLICATION_NAME', 'Application Name');
define('APPLICATION_VERSION', '120925');

//Environment
define('APPLICATION_ENVIRONMENT', 'development');

//Directories
define('APPLICATION_ACTION', 'action');
define('APPLICATION_API', 'api');
define('APPLICATION_CONTROLLER', 'controller');
define('APPLICATION_DOC', 'doc');
define('APPLICATION_IMG', 'img');
define('APPLICATION_JOB', 'job');
define('APPLICATION_LIB_AS', 'lib/as');
define('APPLICATION_LIB_CSS', 'lib/css');
define('APPLICATION_LIB_JS', 'lib/js');
define('APPLICATION_LIB_PHP', 'lib/php');
define('APPLICATION_MODEL', 'model');
define('APPLICATION_UPLOAD', 'upload');
define('APPLICATION_VID', 'vid');
define('APPLICATION_VIEW', 'view');
define('APPLICATION_VO', 'model/vo');

//Controllers
define('APPLICATION_DEFAULT_CONTROLLER', 'Elements.php');
define('APPLICATION_ERROR_404_CONTROLLER', 'Error_404.php');

//Templates
//File locations start within the APPLICATION_VIEW folder
define('APPLICATION_HEADER', 'inc/header.php');
define('APPLICATION_FOOTER', 'inc/footer.php');

//Favicon
//File locations start within the APPLICATION_IMG folder
define('APPLICATION_FAVICON', 'favicon.ico');
?>