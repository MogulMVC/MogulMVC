<?php
if (!defined('SERVER_ROOT')) {
	header('Location: /error_404');
	exit ;
}

date_default_timezone_set('America/New_York');

// Application
define('APPLICATION_COMPANY', 'Application Company');
define('APPLICATION_NAME', 'Application Name');
define('APPLICATION_DESCRIPTION', 'Application Description');
define('APPLICATION_ID', 'SomeUniqueID');
define('APPLICATION_PASSWORD', 'mogulpass321456');
define('APPLICATION_VERSION', '130418');

// Environment
// 'development' 'production'
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
define('APPLICATION_IMG', 'public/img');
define('APPLICATION_LIB_CSS', 'lib/css');
define('APPLICATION_LIB_JS', 'lib/js');
define('APPLICATION_LIB_PHP', 'lib/php');
define('APPLICATION_MISC', 'public/misc');
define('APPLICATION_MODEL', 'model');
define('APPLICATION_PUBLIC', 'public');
define('APPLICATION_PUBLIC_CSS', 'public/css');
define('APPLICATION_PUBLIC_JS', 'public/js');
define('APPLICATION_UPLOAD', 'public/upload');
define('APPLICATION_VIEW', 'view');
define('APPLICATION_VO', 'model/vo');

// Controllers
define('APPLICATION_DEFAULT_CONTROLLER', 'Main');
define('APPLICATION_ERROR_404_CONTROLLER', 'Main');

// Templates
//File locations start within the APPLICATION_VIEW folder
define('APPLICATION_HEAD', 'template/head');
define('APPLICATION_HEADER', 'template/header');
define('APPLICATION_FOOTER', 'template/footer');
define('APPLICATION_FOOT', 'template/foot');

// Favicon
// File locations start within the APPLICATION_IMG folder
// 16x16 ico file
define('APPLICATION_FAVICON', 'favicon.ico');

// File locations start within the APPLICATION_IMG folder
// 64x64 png file
define('APPLICATION_ICON', 'icon.png');
