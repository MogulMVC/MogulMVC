<?php
if (!defined('SERVER_ROOT')) {header('/error_404');
	exit ;
}

date_default_timezone_set('America/New_York');

define('FRAMEWORK_VERSION', "120808");

define('FRAMEWORK_IMG', 'img');
define('FRAMEWORK_LIB_AS', 'lib/as');
define('FRAMEWORK_LIB_CSS', 'lib/css');
define('FRAMEWORK_LIB_JS', 'lib/js');
define('FRAMEWORK_LIB_PHP', 'lib/php');
define('FRAMEWORK_VIEW', 'view');

define("FRAMEWORK_HEAD", "head.php");
define("FRAMEWORK_FOOT", "foot.php");
?>