<?php
if (!defined('BACKEND_ROOT')) {
	header('Location: /error_404');
	exit ;
}

require (BACKEND_ROOT . '/' . APPLICATION . '/config/autoload.php');

// Development
if (APPLICATION_ENVIRONMENT == 'development') {

	if (count($GLOBALS['AUTOLOAD_CSS_FRAMEWORK'])) {
		echo "\n" . '<!-- Load CSS Framework -->' . "\n";
	}

	//Autoload Framework CSS
	foreach ($GLOBALS['AUTOLOAD_CSS_FRAMEWORK'] as $CSS) {
		MLoad::css_framework($CSS, 'echo');
		echo "\n";
	}

	if (count($GLOBALS['AUTOLOAD_CSS_APPLICATION'])) {
		echo "\n" . '<!-- Load CSS Application -->' . "\n";
	}

	//Autoload Application CSS
	foreach ($GLOBALS['AUTOLOAD_CSS_APPLICATION'] as $CSS) {
		MLoad::css_application($CSS, 'echo');
		echo "\n";
	}

	if (count($GLOBALS['AUTOLOAD_CSS_EXTERNAL'])) {
		echo "\n" . '<!-- Load CSS External -->' . "\n";
	}

	//Autoload External CSS
	foreach ($GLOBALS['AUTOLOAD_CSS_EXTERNAL'] as $CSS) {
		MLoad::css_external($CSS, 'echo');
		echo "\n";
	}

}

// Production
if (APPLICATION_ENVIRONMENT == 'production') {

	// Minify all JS if no cached file exists
	if (!file_exists(FRONTEND_ROOT . '/' . APPLICATION . '/' . APPLICATION_FRONTEND_CACHE . '/' . 'main' . APPLICATION_VERSION . '.css')) {

		MLoad::php_framework('vendor/util/cssmin');

		$css_file = '';

		// Minify the framework css
		foreach ($GLOBALS['AUTOLOAD_CSS_FRAMEWORK'] as $CSS) {
			
			// Add extension if one doesn't exist
			if (!substr(strrchr($CSS, '.'), 1)) {
				$CSS = $CSS . '.css';
			}
			
			$css_file .= CssMin::minify(file_get_contents(FRONTEND_ROOT . '/' . FRAMEWORK . '/' . FRAMEWORK_CSS . '/' . $CSS));
			
		}

		// Minify the application css
		foreach ($GLOBALS['AUTOLOAD_CSS_APPLICATION'] as $CSS) {
			
			// Add extension if one doesn't exist
			if (!substr(strrchr($CSS, '.'), 1)) {
				$CSS = $CSS . '.css';
			}
			
			$css_file .= CssMin::minify(file_get_contents(FRONTEND_ROOT . '/' . APPLICATION . '/' . APPLICATION_CSS . '/' . $CSS));
			
		}

		$css_file = CssMin::minify($css_file);

		file_put_contents(FRONTEND_ROOT . '/' . APPLICATION . '/' . APPLICATION_FRONTEND_CACHE . '/main' . APPLICATION_VERSION . '.css', $css_file);
	}

	MLoad::css_cache('main' . APPLICATION_VERSION . '.css', 'echo');

}

// These files are loaded on a per page basis and shouldn't be merged into the application.css

//Include all CSS files that were loaded with the css_framework function
foreach ($GLOBALS['LOAD_CSS_FRAMEWORK'] as $CSS) {
	MLoad::css_framework($CSS, 'echo');
}

//Include all CSS files that were loaded with the css_framework function
foreach ($GLOBALS['LOAD_CSS_APPLICATION'] as $CSS) {
	MLoad::css_application($CSS, 'echo');
}

//Include all CSS files that were loaded with the css_framework function
foreach ($GLOBALS['LOAD_CSS_EXTERNAL'] as $CSS) {
	MLoad::css_external($CSS, 'echo');
}
