<?php
if (!defined('SERVER_ROOT')) {
	header('/error_404');
	exit ;
}

$GLOBALS['AUTOLOAD_PHP_FRAMEWORK'] = array();
$GLOBALS['AUTOLOAD_PHP_APPLICATION'] = array();

$GLOBALS['AUTOLOAD_CSS_FRAMEWORK'] = array('core/MIcons', 'core/MStyle', 'core/style');
$GLOBALS['AUTOLOAD_CSS_APPLICATION'] = array();
$GLOBALS['AUTOLOAD_CSS_EXTERNAL'] = array();

$GLOBALS['AUTOLOAD_JS_FRAMEWORK'] = array('3rdparty/jquery', 'core/MScript', 'core/script');
$GLOBALS['AUTOLOAD_JS_APPLICATION'] = array();
$GLOBALS['AUTOLOAD_JS_EXTERNAL'] = array('http://code.jquery.com/mobile/1.3.0/jquery.mobile-1.3.0.min.js');
