<?php
if (!defined('SERVER_ROOT')) {header('/error_404');
	exit ;
}
?>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	
	<?php if(!empty($page_title)): ?>
		<title><?php echo $page_title . " - " . APPLICATION_NAME; ?></title>
		<meta name="title" content="<?php echo $page_title . " - " . APPLICATION_NAME; ?>" />
	<?php else: ?>
		<title><?php echo APPLICATION_NAME; ?></title>
		<meta name="title" content="<?php echo APPLICATION_NAME; ?>" />
	<?php endif; ?>
	
	<?php if(!empty($page_description)): ?>
		<meta name="description" content="<?php echo $page_description; ?>" />
	<?php endif; ?>
	
	<?php if(!empty($page_keywords)): ?>
		<meta name="keywords" content="<?php echo $page_keywords; ?>" />
	<?php endif; ?>
	
	<?php if(defined('APPLICATION_FAVICON') && constant('APPLICATION_FAVICON') !== ''): ?>
		<link rel="shortcut icon" href="<?php echo '/' . APPLICATION . '/' . APPLICATION_IMG . '/' . APPLICATION_FAVICON; ?>" />
	<?php endif; ?>
	
	<?php
	require (SERVER_ROOT . '/' . APPLICATION . '/config/autoload.php');

	// CSS

	// Custom/Forked CSS
	MLoad::css_framework_include('core/MStyle.css');

	// MVC Specific CSS
	MLoad::css_framework_include('core/style.css');

	//Autoload Framework CSS
	foreach ($AUTOLOAD_CSS_FRAMEWORK as $CSS) {
		MLoad::css_framework_include($CSS);
	}

	//Include all CSS file that were loaded with the js_framework_load function
	foreach ($GLOBALS["LOAD_CSS_FRAMEWORK"] as $CSS) {
		MLoad::css_framework_include($CSS);
	}
	
	//Autoload Application CSS
	foreach ($AUTOLOAD_CSS_APPLICATION as $CSS) {
		MLoad::css_application_include($CSS);
	}

	//Include all CSS file that were loaded with the js_application_load function
	foreach ($GLOBALS["LOAD_CSS_APPLICATION"] as $CSS) {
		MLoad::css_application_include($CSS);
	}

	// JavaScript

	// Third Party JavaScript/jQuery Libraries
	MLoad::js_framework_include('3rdparty/jquery.js');
	MLoad::js_framework_include('3rdparty/jquery.ui.js');
	MLoad::js_framework_include('3rdparty/jquery.placeholder.js');

	// Custom/Forked JavaScript/jQuery Libraries
	MLoad::js_framework_include('core/MScript.js');

	// MVC Specific JS
	MLoad::js_framework_include('core/script.js');

	// Autoload Framework JavaScript
	foreach ($AUTOLOAD_JS_FRAMEWORK as $JS) {
		MLoad::js_framework_include($JS);
	}

	// Include all JavaScript file that were loaded with the js_framework_load function
	foreach ($GLOBALS['LOAD_JS_FRAMEWORK'] as $JS) {
		MLoad::js_framework_include($JS);
	}

	// Autoload Application JavaScript
	foreach ($AUTOLOAD_JS_APPLICATION as $JS) {
		MLoad::js_application_include($JS);
	}

	// Include all JavaScript file that were loaded with the js_application_load function
	foreach ($GLOBALS['LOAD_JS_APPLICATION'] as $JS) {
		MLoad::js_application_include($JS);
	}
	?>

</head>

<body>