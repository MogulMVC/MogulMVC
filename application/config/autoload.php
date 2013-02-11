<?php
if (!defined('SERVER_ROOT')) {header('/error_404');
	exit ;
}

$GLOBALS['AUTOLOAD_PHP_FRAMEWORK'] = array('core/db/MPDO');
$GLOBALS['AUTOLOAD_PHP_APPLICATION'] = array();

$GLOBALS['AUTOLOAD_CSS_FRAMEWORK'] = array('core/MIcons', 'core/MStyle', 'core/style');
$GLOBALS['AUTOLOAD_CSS_APPLICATION'] = array();

$GLOBALS['AUTOLOAD_JS_FRAMEWORK'] = array('3rdparty/jquery', '3rdparty/jquery-ui', 'core/MScript', 'core/script');
$GLOBALS['AUTOLOAD_JS_APPLICATION'] = array();
