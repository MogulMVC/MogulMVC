<?php 

class Test {

	function index() {
		MLoad::php_framework('3rdparty/cssmin');
		$file = SERVER_ROOT . '/framework/lib/css/core/MStyle.css'; 
		$css = CssMin::minify(file_get_contents($file));
		file_put_contents(SERVER_ROOT . '/' . APPLICATION . '/' . APPLICATION_CACHE . '/autoload' . APPLICATION_VERSION . '.css', $css);
	}

}
