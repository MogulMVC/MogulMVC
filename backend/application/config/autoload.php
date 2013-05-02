<?php
if (!defined('BACKEND_ROOT')) {
	header('Location: /error_404');
	exit ;
}

$GLOBALS['AUTOLOAD_PHP_FRAMEWORK'] = array();
$GLOBALS['AUTOLOAD_PHP_APPLICATION'] = array();

$GLOBALS['AUTOLOAD_CSS_FRAMEWORK'] = array('vendor/normalize', 'core/MIcons', 'core/MStyle', 'core/style');
$GLOBALS['AUTOLOAD_CSS_APPLICATION'] = array();
$GLOBALS['AUTOLOAD_CSS_EXTERNAL'] = array();

$GLOBALS['AUTOLOAD_JS_FRAMEWORK'] = array('vendor/jquery', 'core/MScript', 'core/script');
$GLOBALS['AUTOLOAD_JS_APPLICATION'] = array();
$GLOBALS['AUTOLOAD_JS_EXTERNAL'] = array();
