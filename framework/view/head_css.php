<?php

require (SERVER_ROOT . '/' . APPLICATION . '/config/autoload.php');

// Development
if (APPLICATION_ENVIRONMENT == 'development') {

	// Custom/Forked CSS
	MLoad::css_framework('core/MStyle.css', 'echo');
	MLoad::css_framework('core/MIcons.css', 'echo');

	// MVC Specific CSS
	MLoad::css_framework('core/style.css', 'echo');

	//Autoload Framework CSS
	foreach ($GLOBALS['AUTOLOAD_CSS_FRAMEWORK'] as $CSS) {
		MLoad::css_framework($CSS, 'echo');
	}

	//Autoload Application CSS
	foreach ($GLOBALS['AUTOLOAD_CSS_APPLICATION'] as $CSS) {
		MLoad::css_application($CSS, 'echo');
	}

}

// Production
if (APPLICATION_ENVIRONMENT == 'production') {

	// Minify all JS if no cached file exists
	if (!file_exists(SERVER_ROOT . '/' . APPLICATION . '/' . APPLICATION_CACHE . '/' . 'application' . APPLICATION_VERSION . '.css')) {

		MLoad::php_framework('3rdparty/util/cssmin');

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
