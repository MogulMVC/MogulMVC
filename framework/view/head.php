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
		<link rel="shortcut icon" href="<?php echo '/' . APPLICATION . '/' . APPLICATION_IMG . '/' . APPLICATION_FAVICON . '?' . APPLICATION_VERSION; ?>" />
	<?php endif; ?>
	
	<?php
	require (SERVER_ROOT . '/' . APPLICATION . '/config/autoload.php');

	/********** CSS **********/

	// Development
	if (APPLICATION_ENVIRONMENT == 'development') {

		// Custom/Forked CSS
		MLoad::css_framework('core/MStyle.css', 'echo');
		MLoad::css_framework('core/MIcons.css', 'echo');

		// MVC Specific CSS
		MLoad::css_framework('core/style.css', 'echo');

		//Autoload Framework CSS
		foreach ($AUTOLOAD_CSS_FRAMEWORK as $CSS) {
			MLoad::css_framework($CSS, 'echo');
		}

		//Autoload Application CSS
		foreach ($AUTOLOAD_CSS_APPLICATION as $CSS) {
			MLoad::css_application($CSS, 'echo');
		}

	}

	// Production
	if (APPLICATION_ENVIRONMENT == 'production') {

		// Minify all JS if no cached file exists
		if (!file_exists(SERVER_ROOT . '/' . APPLICATION . '/' . APPLICATION_CACHE . '/' . 'application' . APPLICATION_VERSION . '.css')) {

			MLoad::php_framework('3rdparty/cssmin');

			// Minify the CSS files while merging them
			$css_file = CssMin::minify(file_get_contents(SERVER_ROOT . '/' . FRAMEWORK . '/' . FRAMEWORK_LIB_CSS . '/core/MStyle.min.css', 'return'));
			$css_file .= CssMin::minify(file_get_contents(SERVER_ROOT . '/' . FRAMEWORK . '/' . FRAMEWORK_LIB_CSS . '/core/MIcons.min.css', 'return'));
			$css_file .= CssMin::minify(file_get_contents(SERVER_ROOT . '/' . FRAMEWORK . '/' . FRAMEWORK_LIB_CSS . '/core/style.css', 'return'));

			foreach ($AUTOLOAD_CSS_APPLICATION as $CSS) {
				$css_file .= CssMin::minify(file_get_contents(SERVER_ROOT . '/' . FRAMEWORK . '/' . FRAMEWORK_LIB_CSS . '/' . $CSS, 'return'));
			}

			$css_file = CssMin::minify($css_file);

			file_put_contents(SERVER_ROOT . '/' . APPLICATION . '/' . APPLICATION_CACHE . '/application' . APPLICATION_VERSION . '.css', $css_file);
		}

		MLoad::css_cache('application' . APPLICATION_VERSION . '.css', 'echo');

	}

	// These files are loaded on a per page basis and shouldn't be merged into the application.js

	//Include all CSS file that were loaded with the js_framework_load function
	foreach ($GLOBALS["LOAD_CSS_FRAMEWORK"] as $CSS) {
		MLoad::css_framework($CSS, 'echo');
	}

	//Include all CSS file that were loaded with the js_application_load function
	foreach ($GLOBALS["LOAD_CSS_APPLICATION"] as $CSS) {
		MLoad::css_application($CSS, 'echo');
	}

	/********** JavaScript **********/

	// Development
	if (APPLICATION_ENVIRONMENT == 'development') {

		// Third Party JavaScript/jQuery Libraries
		MLoad::js_framework('3rdparty/jquery.js', 'echo');
		MLoad::js_framework('3rdparty/jquery.ui.js', 'echo');

		// Custom/Forked JavaScript/jQuery Libraries
		MLoad::js_framework('core/MScript.js', 'echo');

		// MVC Specific JS
		MLoad::js_framework('core/script.js', 'echo');

		// Autoload Framework JavaScript
		foreach ($AUTOLOAD_JS_FRAMEWORK as $JS) {
			MLoad::js_framework($JS, 'echo');
		}

		// Autoload Application JavaScript
		foreach ($AUTOLOAD_JS_APPLICATION as $JS) {
			MLoad::js_application($JS, 'echo');
		}

	}

	// Production
	if (APPLICATION_ENVIRONMENT == 'production') {

		// Minify all JS if no cached file exists
		if (!file_exists(SERVER_ROOT . '/' . APPLICATION . '/' . APPLICATION_CACHE . '/' . 'application' . APPLICATION_VERSION . '.js')) {

			MLoad::php_framework('3rdparty/jsmin');

			// Minify the JS files while merging them
			$js_file = JSMin::minify(file_get_contents(SERVER_ROOT . '/' . FRAMEWORK . '/' . FRAMEWORK_LIB_JS . '/3rdparty/jquery.min.js', 'return'));
			$js_file .= JSMin::minify(file_get_contents(SERVER_ROOT . '/' . FRAMEWORK . '/' . FRAMEWORK_LIB_JS . '/3rdparty/jquery.min.ui.js', 'return'));

			$js_file .= JSMin::minify(file_get_contents(SERVER_ROOT . '/' . FRAMEWORK . '/' . FRAMEWORK_LIB_JS . '/core/MScript.min.js', 'return'));
			$js_file .= JSMin::minify(file_get_contents(SERVER_ROOT . '/' . FRAMEWORK . '/' . FRAMEWORK_LIB_JS . '/core/script.js', 'return'));

			foreach ($AUTOLOAD_JS_APPLICATION as $JS) {
				$js_file .= JSMin::minify(file_get_contents(SERVER_ROOT . '/' . FRAMEWORK . '/' . FRAMEWORK_LIB_JS . '/' . $JS, 'return'));
			}
			
			$js_file = JSMin::minify($js_file);

			file_put_contents(SERVER_ROOT . '/' . APPLICATION . '/' . APPLICATION_CACHE . '/application' . APPLICATION_VERSION . '.js', $js_file);
		}

		MLoad::js_cache('application' . APPLICATION_VERSION . '.js', 'echo');

	}

	// These files are loaded on a per page basis and shouldn't be merged into the application.js

	// Include all JavaScript file that were loaded with the js_framework_load function
	foreach ($GLOBALS['LOAD_JS_FRAMEWORK'] as $JS) {
		MLoad::js_framework($JS, 'echo');
	}

	// Include all JavaScript file that were loaded with the js_application_load function
	foreach ($GLOBALS['LOAD_JS_APPLICATION'] as $JS) {
		MLoad::js_application($JS, 'echo');
	}
	?>

</head>

<body>