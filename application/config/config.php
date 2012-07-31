<?php if(!defined('SERVER_ROOT')){header('/error_404');exit;}

//Application
define('APPLICATION_COMPANY', 'Application Company');
define('APPLICATION_NAME', 'Application Name');
define('APPLICATION_VERSION', '120601');

//Environment
define('APPLICATION_ENVIRONMENT', 'development');

//Directories
define('APPLICATION_ACTION', 'action');
define('APPLICATION_API', 'api');
define('APPLICATION_CONTROLLER', 'controller');
define('APPLICATION_CSS', 'css');
define('APPLICATION_DOC', 'doc');
define('APPLICATION_IMG', 'img');
define('APPLICATION_JOB', 'job');
define('APPLICATION_JS', 'js');
define('APPLICATION_LIB', 'lib');
define('APPLICATION_MODEL', 'model');
define('APPLICATION_SWF', 'swf');
define('APPLICATION_UPLOAD', 'upload');
define('APPLICATION_VID', 'vid');
define('APPLICATION_VIEW', 'view');
define('APPLICATION_VO', 'vo');

//Controllers
define('APPLICATION_DEFAULT_CONTROLLER', 'elements.php');
define('APPLICATION_ERROR_404_CONTROLLER', 'error_404.php');
define('APPLICATION_ROBOTS_TXT_CONTROLLER', 'robots.php');

//File locations start within the APPLICATION_VIEW folder
define('APPLICATION_HEADER', 'includes/header.php');
define('APPLICATION_FOOTER', 'includes/footer.php');

//Favicon
//File locations start within the APPLICATION_IMG folder
define('APPLICATION_FAVICON', 'favicon.ico');

?>