<?php
if (!defined('SERVER_ROOT')) {
	header('Location: /error_404');
	exit ;
}

$GLOBALS['AUTOLOAD_PHP_FRAMEWORK'] = array();
$GLOBALS['AUTOLOAD_PHP_APPLICATION'] = array();

$GLOBALS['AUTOLOAD_CSS_FRAMEWORK'] = array('3rdparty/normalize', 'core/MIcons', 'core/MStyle', 'core/style');
$GLOBALS['AUTOLOAD_CSS_APPLICATION'] = array();
$GLOBALS['AUTOLOAD_CSS_EXTERNAL'] = array();

$GLOBALS['AUTOLOAD_JS_FRAMEWORK'] = array('3rdparty/jquery', 'core/MScript', 'core/script');
$GLOBALS['AUTOLOAD_JS_APPLICATION'] = array();
$GLOBALS['AUTOLOAD_JS_EXTERNAL'] = array();
