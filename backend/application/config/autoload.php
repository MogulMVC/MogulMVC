<?php
if (!defined('BACKEND_ROOT')) {
	header('Location: /error_404');
	exit ;
}

$GLOBALS['AUTOLOAD_PHP_FRAMEWORK'] = array();
$GLOBALS['AUTOLOAD_PHP_APPLICATION'] = array();

$GLOBALS['AUTOLOAD_CSS_FRAMEWORK'] = array('vendor/jquery-ui', 'vendor/normalize', 'core/MStyle', 'core/MIcons', 'core/style');
$GLOBALS['AUTOLOAD_CSS_APPLICATION'] = array('vendor/test', 'core/style');
$GLOBALS['AUTOLOAD_CSS_EXTERNAL'] = array('http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-combined.min.css');

$GLOBALS['AUTOLOAD_JS_FRAMEWORK'] = array('vendor/html5shiv', 'vendor/html5shiv-printshiv', 'vendor/IE7', 'vendor/IE8', 'vendor/IE9', 'vendor/jquery', 'vendor/jquery-ui', 'vendor/modernizr', 'vendor/swfobject', 'core/MScript', 'core/script');
$GLOBALS['AUTOLOAD_JS_APPLICATION'] = array('vendor/test', 'core/script');
$GLOBALS['AUTOLOAD_JS_EXTERNAL'] = array('http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/js/bootstrap.min.js');
