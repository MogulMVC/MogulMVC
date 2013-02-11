<?php

require (SERVER_ROOT . '/' . APPLICATION . '/config/autoload.php');

// Development
if (APPLICATION_ENVIRONMENT == 'development') {

	// Autoload Framework JavaScript
	foreach ($GLOBALS['AUTOLOAD_JS_FRAMEWORK'] as $JS) {
		MLoad::js_framework($JS, 'echo');
	}

	// Autoload Application JavaScript
	foreach ($GLOBALS['AUTOLOAD_JS_APPLICATION'] as $JS) {
		MLoad::js_application($JS, 'echo');
	}
	
	// Autoload External JavaScript
	foreach ($GLOBALS['AUTOLOAD_JS_EXTERNAL'] as $JS) {
		MLoad::js_external($JS, 'echo');
	}

}

// Production
if (APPLICATION_ENVIRONMENT == 'production') {

	// Minify all JS if no cached file exists
	if (!file_exists(SERVER_ROOT . '/' . APPLICATION . '/' . APPLICATION_CACHE . '/' . 'application' . APPLICATION_VERSION . '.js')) {

		MLoad::php_framework('3rdparty/util/jsmin');

		$js_file = '';

		// Minify the framework js
		foreach ($GLOBALS['AUTOLOAD_JS_FRAMEWORK'] as $JS) {
			// Add extension if one doesn't exist
			if (!substr(strrchr($JS, '.'), 1)) {
				$JS = $JS . '.js';
			}
			$js_file .= JSMin::minify(file_get_contents(SERVER_ROOT . '/' . FRAMEWORK . '/' . FRAMEWORK_LIB_JS . '/' . $JS));
		}

		// Minify the application js
		foreach ($GLOBALS['AUTOLOAD_JS_APPLICATION'] as $JS) {
			// Add extension if one doesn't exist
			if (!substr(strrchr($JS, '.'), 1)) {
				$JS = $JS . '.js';
			}
			$js_file .= JSMin::minify(file_get_contents(SERVER_ROOT . '/' . APPLICATION . '/' . APPLICATION_LIB_JS . '/' . $JS));
		}

		$js_file = JSMin::minify($js_file);

		file_put_contents(SERVER_ROOT . '/' . APPLICATION . '/' . APPLICATION_CACHE . '/application' . APPLICATION_VERSION . '.js', $js_file);
	}

	MLoad::js_cache('application' . APPLICATION_VERSION . '.js', 'echo');

}

// These files are loaded on a per page basis and shouldn't be merged into the application.js

// Include all JavaScript files that were loaded with the js_framework function
foreach ($GLOBALS['LOAD_JS_FRAMEWORK'] as $JS) {
	MLoad::js_framework($JS, 'echo');
}

// Include all JavaScript files that were loaded with the js_framework function
foreach ($GLOBALS['LOAD_JS_APPLICATION'] as $JS) {
	MLoad::js_application($JS, 'echo');
}

// Include all JavaScript files that were loaded with the js_framework function
foreach ($GLOBALS['LOAD_JS_EXTERNAL'] as $JS) {
	MLoad::js_external($JS, 'echo');
}
