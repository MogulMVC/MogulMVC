<?php

/* 
 * Mogul MVC by Alan James
 * version 130228
 * recommended PHP version 5.3
 */

if (!defined('SERVER_ROOT')) {
	header('/error_404');
	exit ;
}

define('FRAMEWORK_VERSION', '130228');

define('FRAMEWORK_IMG', 'img');
define('FRAMEWORK_LIB_AS', 'lib/as');
define('FRAMEWORK_LIB_CSS', 'lib/css');
define('FRAMEWORK_LIB_JS', 'lib/js');
define('FRAMEWORK_LIB_PHP', 'lib/php');
define('FRAMEWORK_VIEW', 'view');

define('FRAMEWORK_HEAD', 'head.php');
define('FRAMEWORK_FOOT', 'foot.php');
