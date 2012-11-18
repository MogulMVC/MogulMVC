<?php
if (!defined('SERVER_ROOT')) {header('/error_404');
	exit ;
}

date_default_timezone_set('America/New_York');

// Application
define('APPLICATION_COMPANY', 'Application Company');
define('APPLICATION_NAME', 'Application Name');
define('APPLICATION_DESCRIPTION', 'Application Description');
define('APPLICATION_ID', 'SomeUniqueID');
define('APPLICATION_PASSWORD', 'mogulpass321456');
define('APPLICATION_VERSION', '121118');

// Environment
define('APPLICATION_ENVIRONMENT', 'development');

// URL Keywords
define('APPLICATION_ACTION_URL', 'action');
define('APPLICATION_API_URL', 'api');

// Directories
define('APPLICATION_ACTION', 'controller/action');
define('APPLICATION_API', 'controller/api');
define('APPLICATION_CACHE', 'cache');
define('APPLICATION_COMMAND', 'command');
define('APPLICATION_CONTROLLER', 'controller');
define('APPLICATION_DOC', 'doc');
define('APPLICATION_IMG', 'img');
define('APPLICATION_LIB_AS', 'lib/as');
define('APPLICATION_LIB_CSS', 'lib/css');
define('APPLICATION_LIB_JS', 'lib/js');
define('APPLICATION_LIB_PHP', 'lib/php');
define('APPLICATION_MODEL', 'model');
define('APPLICATION_UPLOAD', 'upload');
define('APPLICATION_VID', 'vid');
define('APPLICATION_VIEW', 'view');
define('APPLICATION_VO', 'model/vo');

// Controllers
define('APPLICATION_DEFAULT_CONTROLLER', 'Main.php');
define('APPLICATION_ERROR_404_CONTROLLER', 'Error_404.php');

// Templates
//File locations start within the APPLICATION_VIEW folder
define('APPLICATION_HEADER', 'template/header.php');
define('APPLICATION_FOOTER', 'template/footer.php');

// Favicon
// File locations start within the APPLICATION_IMG folder
// 16x16 ico file
define('APPLICATION_FAVICON', 'favicon.ico');

// File locations start within the APPLICATION_IMG folder
// 64x64 png file
define('APPLICATION_ICON', 'icon.png');
