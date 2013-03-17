<?php
if (!defined('SERVER_ROOT')) {
	header('/error_404');
	exit ;
}

$GLOBALS['LOAD_CSS_FRAMEWORK'] = array();
$GLOBALS['LOAD_CSS_APPLICATION'] = array();
$GLOBALS['LOAD_CSS_EXTERNAL'] = array();

$GLOBALS['LOAD_JS_FRAMEWORK'] = array();
$GLOBALS['LOAD_JS_APPLICATION'] = array();
$GLOBALS['LOAD_JS_EXTERNAL'] = array();

class MLoad {

	/********** Models / VO Functions **********/

	public static function model($model) {

		if (!empty($model)) {

			// Add extension if one doesn't exist
			if (!substr(strrchr($model, '.'), 1)) {
				$model = $model . '.php';
			}

			if (!file_exists(SERVER_ROOT . '/' . APPLICATION . '/' . APPLICATION_MODEL . '/' . $model)) {
				trigger_error('error - ' . $model . ' not found.');
			}

			require_once (SERVER_ROOT . '/' . APPLICATION . '/' . APPLICATION_MODEL . '/' . $model);

		}

	}

	public static function vo($vo) {

		if (!empty($vo)) {

			// Add extension if one doesn't exist
			if (!substr(strrchr($vo, '.'), 1)) {
				$vo = $vo . '.php';
			}

			if (!file_exists(SERVER_ROOT . '/' . APPLICATION . '/' . APPLICATION_VO . '/' . $vo)) {
				trigger_error('error - ' . $vo . ' not found.', E_USER_ERROR);
			}

			require_once (SERVER_ROOT . '/' . APPLICATION . '/' . APPLICATION_VO . '/' . $vo);

		}

	}

	/********** View Functions **********/

	public static function view($view, $data = '') {

		// Convert the data array to variables
		if (!empty($data)) {
			foreach ($data as $key => $value) {
				$$key = $value;
			}
		}

		// Start loading the view
		if (!empty($view)) {

			// Add extension if one doesn't exist
			if (!substr(strrchr($view, '.'), 1)) {
				$view = $view . '.php';
			}

			//Define the sections
			$head = '';
			if (APPLICATION_HEAD != '') {

				$head_file = dirname(APPLICATION_HEAD) . '/' . basename(APPLICATION_HEAD, '.php') . '.php';
				
				if (!file_exists(SERVER_ROOT . '/' . APPLICATION . '/' . APPLICATION_VIEW . '/' . $head_file)) {
					trigger_error('error - head not found.', E_USER_ERROR);
				}

				$head = SERVER_ROOT . '/' . APPLICATION . '/' . APPLICATION_VIEW . '/' . $head_file;
			}
			
			$header = '';
			if (APPLICATION_HEADER != '') {

				$header_file = dirname(APPLICATION_HEADER) . '/' . basename(APPLICATION_HEADER, '.php') . '.php';
				
				if (!file_exists(SERVER_ROOT . '/' . APPLICATION . '/' . APPLICATION_VIEW . '/' . $header_file)) {
					trigger_error('error - header not found.', E_USER_ERROR);
				}

				$header = SERVER_ROOT . '/' . APPLICATION . '/' . APPLICATION_VIEW . '/' . $header_file;
			}

			$footer = '';
			if (APPLICATION_FOOTER != '') {

				$footer_file = dirname(APPLICATION_FOOTER) . '/' . basename(APPLICATION_FOOTER, '.php') . '.php';

				if (!file_exists(SERVER_ROOT . '/' . APPLICATION . '/' . APPLICATION_VIEW . '/' . $footer_file)) {
					trigger_error('error - footer not found.', E_USER_ERROR);
				}

				$footer = SERVER_ROOT . '/' . APPLICATION . '/' . APPLICATION_VIEW . '/' . $footer_file;
			}

			$foot = '';
			if (APPLICATION_FOOT != '') {

				$foot_file = dirname(APPLICATION_FOOT) . '/' . basename(APPLICATION_FOOT, '.php') . '.php';

				if (!file_exists(SERVER_ROOT . '/' . APPLICATION . '/' . APPLICATION_VIEW . '/' . $foot_file)) {
					trigger_error('error - foot not found.', E_USER_ERROR);
				}

				$foot = SERVER_ROOT . '/' . APPLICATION . '/' . APPLICATION_VIEW . '/' . $foot_file;
			}

			//Construst the Page

			if (!empty($head)) {
				require ($head);
			}

			if (!empty($header)) {
				require ($header);
			}

			if (!file_exists(SERVER_ROOT . '/' . APPLICATION . '/' . APPLICATION_VIEW . '/' . $view)) {
				trigger_error('error - ' . $view . ' not found.', E_USER_ERROR);
			}

			require (SERVER_ROOT . '/' . APPLICATION . '/' . APPLICATION_VIEW . '/' . $view);

			if (!empty($footer)) {
				require ($footer);
			}

			if (!empty($foot)) {
				require ($foot);
			}

		}

		exit();

	}

	public static function page($page, $data = '') {

		// Convert the data array to variables
		if (!empty($data)) {
			foreach ($data as $key => $value) {
				$$key = $value;
			}
		}

		// Start loading the frame
		if (!empty($page)) {

			// Add extension if one doesn't exist
			if (!substr(strrchr($page, '.'), 1)) {
				$page = $page . '.php';
			}

			//Define the sections
			$head = '';
			if (APPLICATION_HEAD != '') {

				$head_file = dirname(APPLICATION_HEAD) . '/' . basename(APPLICATION_HEAD, '.php') . '.php';
				
				if (!file_exists(SERVER_ROOT . '/' . APPLICATION . '/' . APPLICATION_VIEW . '/' . $head_file)) {
					trigger_error('error - head not found.', E_USER_ERROR);
				}

				$head = SERVER_ROOT . '/' . APPLICATION . '/' . APPLICATION_VIEW . '/' . $head_file;
			}
			
			$foot = '';
			if (APPLICATION_FOOT != '') {

				$foot_file = dirname(APPLICATION_FOOT) . '/' . basename(APPLICATION_FOOT, '.php') . '.php';

				if (!file_exists(SERVER_ROOT . '/' . APPLICATION . '/' . APPLICATION_VIEW . '/' . $foot_file)) {
					trigger_error('error - foot not found.', E_USER_ERROR);
				}

				$foot = SERVER_ROOT . '/' . APPLICATION . '/' . APPLICATION_VIEW . '/' . $foot_file;
			}

			//Construst the Frame
			if (!empty($head)) {
				require ($head);
			}

			if (!file_exists(SERVER_ROOT . '/' . APPLICATION . '/' . APPLICATION_VIEW . '/' . $page)) {
				trigger_error('error - ' . $page . ' not found.', E_USER_ERROR);
			}

			require (SERVER_ROOT . '/' . APPLICATION . '/' . APPLICATION_VIEW . '/' . $page);

			if (!empty($foot)) {
				require ($foot);
			}

		}

	}

	public static function template_framework($template, $data = '') {

		// Convert the data array to variables
		if (!empty($data)) {
			foreach ($data as $key => $value) {
				$$key = $value;
			}
		}

		// Start loading the template
		if (!empty($template)) {

			// Add extension if one doesn't exist
			if (!substr(strrchr($template, '.'), 1)) {
				$template = $template . '.php';
			}

			if (!file_exists(SERVER_ROOT . '/' . FRAMEWORK . '/' . FRAMEWORK_VIEW . '/' . $template)) {
				trigger_error('error - ' . $template . ' not found.', E_USER_ERROR);
			}

			require (SERVER_ROOT . '/' . FRAMEWORK . '/' . FRAMEWORK_VIEW . '/' . $template);
		}

	}

	public static function template_application($template, $data = '') {

		// Convert the data array to variables
		if (!empty($data)) {
			foreach ($data as $key => $value) {
				$$key = $value;
			}
		}

		// Start loading the template
		if (!empty($template)) {

			// Add extension if one doesn't exist
			if (!substr(strrchr($template, '.'), 1)) {
				$template = $template . '.php';
			}

			if (!file_exists(SERVER_ROOT . '/' . APPLICATION . '/' . APPLICATION_VIEW . '/' . $template)) {
				trigger_error('error - ' . $template . ' not found.', E_USER_ERROR);
			}

			require (SERVER_ROOT . '/' . APPLICATION . '/' . APPLICATION_VIEW . '/' . $template);
		}

	}

	/********** PHP Functions **********/

	public static function php_framework($library) {

		if (!empty($library)) {

			// Add extension if one doesn't exist
			if (!substr(strrchr($library, '.'), 1)) {
				$library = $library . '.php';
			}

			if (!file_exists(SERVER_ROOT . '/' . FRAMEWORK . '/' . FRAMEWORK_LIB_PHP . '/' . $library)) {
				trigger_error('error - ' . $library . ' not found.', E_USER_ERROR);
			}

			require_once (SERVER_ROOT . '/' . FRAMEWORK . '/' . FRAMEWORK_LIB_PHP . '/' . $library);
		}

	}

	public static function php_application($library) {

		if (!empty($library)) {

			// Add extension if one doesn't exist
			if (!substr(strrchr($library, '.'), 1)) {
				$library = $library . '.php';
			}

			if (!file_exists(SERVER_ROOT . '/' . APPLICATION . '/' . APPLICATION_LIB_PHP . '/' . $library)) {
				trigger_error('error - ' . $library . ' not found.', E_USER_ERROR);
			}

			require_once (SERVER_ROOT . '/' . APPLICATION . '/' . APPLICATION_LIB_PHP . '/' . $library);
		}

	}

	/********** JavaScript Functions **********/

	public static function js_framework($js, $direction = null, $useHTTP = false) {

		if (!empty($js)) {

			// Add extension if one doesn't exist
			if (!substr(strrchr($js, '.'), 1)) {
				$js = $js . '.js';
			}

			// Check if the file exists
			if (!file_exists(SERVER_ROOT . '/' . FRAMEWORK . '/' . FRAMEWORK_LIB_JS . '/' . $js)) {
				trigger_error('error - ' . $js . ' not found in ' . FRAMEWORK . '/' . FRAMEWORK_LIB_JS . '.', E_USER_ERROR);
			}

			$version = filemtime(SERVER_ROOT . '/' . FRAMEWORK . '/' . FRAMEWORK_LIB_JS . '/' . $js);

			// If use HTTP is true include an HTTP section
			$src = '/' . FRAMEWORK . '/' . FRAMEWORK_LIB_JS . '/' . $js;
			if ($useHTTP) {
				$src = 'http://' . $_SERVER['SERVER_NAME'] . '/' . FRAMEWORK . '/' . FRAMEWORK_LIB_JS . '/' . $js;
			}

			// Only include it as part of the global js
			if ($direction == null) {
				array_push($GLOBALS['LOAD_JS_FRAMEWORK'], $js);
			}

			// Echo the link
			elseif ($direction == 'echo') {
				echo '<script src="' . $src . '?' . $version . '"></script>';
			}

			// Return the link
			return '<script src="' . $src . '?' . $version . '"></script>';

		}

	}

	public static function js_application($js, $direction = null, $useHTTP = false) {

		if (!empty($js)) {

			// Default location is the public folder
			$location = APPLICATION . '/' . APPLICATION_PUBLIC_JS;
			$ext = '';

			// Add extension if one doesn't exist
			if (!substr(strrchr($js, '.'), 1)) {
				$js = $js . '.js';
			}

			// Check if the file exists in the public folder
			if (!file_exists(SERVER_ROOT . '/' . $location . '/' . $js)) {
				
				// Change the location to the lib folder
				$location = APPLICATION . '/' . APPLICATION_LIB_JS;
				$ext = '.php';
				
				// Check if the file exists in the lib folder
				if (!file_exists(SERVER_ROOT . '/' . $location . '/' . $js . '.php')) {
					trigger_error('error - ' . $js . ' not found in ' . $location . '.', E_USER_ERROR);
				}
				
			}

			$version = filemtime(SERVER_ROOT . '/' . $location . '/' . $js . $ext);

			$src = $location . '/' . $js . $ext;
			
			// If use HTTP is true include an HTTP section
			if ($useHTTP) {
				$src = 'http://' . $_SERVER['SERVER_NAME'] . '/' . $location . '/' . $js . $ext;
			}

			// Only include it as part of the global js
			if ($direction == null) {
				array_push($GLOBALS['LOAD_JS_APPLICATION'], $js);
			}

			// Echo the link
			elseif ($direction == 'echo') {
				echo '<script src="/' . $src . '?' . $version . '"></script>';
			}

			// Return the link
			return '<script src="/' . $src . '?' . $version . '"></script>';

		}

	}

	public static function js_cache($js, $useHTTP = false) {

		if (!empty($js)) {

			// Add extension if one doesn't exist
			if (!substr(strrchr($js, '.'), 1)) {
				$js = $js . '.js';
			}

			// Check if the file exists
			if (!file_exists(SERVER_ROOT . '/' . APPLICATION . '/' . APPLICATION_CACHE . '/' . $js)) {
				trigger_error('error - ' . $js . ' not found in ' . APPLICATION . '/' . APPLICATION_CACHE . '.', E_USER_ERROR);
			}

			$version = filemtime(SERVER_ROOT . '/' . APPLICATION . '/' . APPLICATION_CACHE . '/' . $js);

			// If use HTTP is true include an HTTP section
			$src = '/' . APPLICATION . '/' . APPLICATION_CACHE . '/' . $js;
			if ($useHTTP) {
				$src = 'http://' . $_SERVER['SERVER_NAME'] . '/' . APPLICATION . '/' . APPLICATION_CACHE . '/' . $js;
			}

			// Echo the link
			if ($direction == 'echo') {
				echo '<script src="' . $src . '?' . $version . '"></script>';
			}

			// Return the link
			return '<script src="' . $src . '?' . $version . '"></script>';

		}

	}
	
	public static function js_external($js, $direction = null) {

		if (!empty($js)) {

			// Only include it as part of the global js
			if ($direction == null) {
				array_push($GLOBALS['LOAD_JS_EXTERNAL'], $js);
			}

			// Echo the link
			elseif ($direction == 'echo') {
				echo '<script src="' . $js . '"></script>';
			}

			// Return the link
			return '<script src="' . $js . '"></script>';

		}

	}

	/********** CSS Functions **********/

	public static function css_framework($css, $direction = null, $useHTTP = false) {

		if (!empty($css)) {

			// Add extension if one doesn't exist
			if (!substr(strrchr($css, '.'), 1)) {
				$css = $css . '.css';
			}

			// Check if the file exists
			if (!file_exists(SERVER_ROOT . '/' . FRAMEWORK . '/' . FRAMEWORK_LIB_CSS . '/' . $css)) {
				trigger_error('error - ' . $css . ' not found in ' . FRAMEWORK . '/' . FRAMEWORK_LIB_CSS . '.', E_USER_ERROR);
			}

			$version = filemtime(SERVER_ROOT . '/' . FRAMEWORK . '/' . FRAMEWORK_LIB_CSS . '/' . $css);

			// If use HTTP is true include an HTTP section
			$src = '/' . FRAMEWORK . '/' . FRAMEWORK_LIB_CSS . '/' . $css;
			if ($useHTTP) {
				$src = 'http://' . $_SERVER['SERVER_NAME'] . '/' . FRAMEWORK . '/' . FRAMEWORK_LIB_CSS . '/' . $css;
			}

			// Only include it as part of the global js
			if ($direction == null) {
				array_push($GLOBALS['LOAD_CSS_FRAMEWORK'], $js);
			}

			// Echo the link
			elseif ($direction == 'echo') {
				echo '<link href="' . $src . '?' . $version . '" type="text/css" rel="stylesheet" />';
			}

			// Return the link
			return '<link href="' . $src . '?' . $version . '" type="text/css" rel="stylesheet" />';

		}

	}

	public static function css_application($css, $direction = null, $useHTTP = false) {

		if (!empty($css)) {

			// Default location is the public folder
			$location = APPLICATION . '/' . APPLICATION_PUBLIC_CSS;
			$ext = '';

			// Add extension if one doesn't exist
			if (!substr(strrchr($css, '.'), 1)) {
				$css = $css . '.css';
			}

			// Check if the file exists
			if (!file_exists(SERVER_ROOT . '/' . $location . '/' . $css)) {
				
				// Change the location to the lib folder
				$location = APPLICATION . '/' . APPLICATION_LIB_CSS;
				$ext = '.php';
				
				// Check if the file exists in the lib folder
				if (!file_exists(SERVER_ROOT . '/' . $location . '/' . $css . '.php')) {
					trigger_error('error - ' . $css . ' not found in ' . $location . '.', E_USER_ERROR);
				}
			}

			$version = filemtime(SERVER_ROOT . '/' . $location . '/' . $css . $ext);

			$src = $location . '/' . $css . $ext;

			// If use HTTP is true include an HTTP section
			if ($useHTTP) {
				$src = 'http://' . $_SERVER['SERVER_NAME'] . '/' . $location . '/' . $css . $ext;
			}

			// Only include it as part of the global js
			if ($direction == null) {
				array_push($GLOBALS['LOAD_CSS_APPLICATION'], $css);
			}

			// Echo the link
			elseif ($direction == 'echo') {
				echo '<link href="/' . $src . '?' . $version . '" type="text/css" rel="stylesheet" />';
			}

			// Return the link
			return '<link href="/' . $src . '?' . $version . '" type="text/css" rel="stylesheet" />';

		}

	}

	public static function css_cache($css, $direction = 'return') {

		if (!empty($css)) {

			// Add extension if one doesn't exist
			if (!substr(strrchr($css, '.'), 1)) {
				$css = $css . '.css';
			}

			// Check if the file exists
			if (!file_exists(SERVER_ROOT . '/' . APPLICATION . '/' . APPLICATION_CACHE . '/' . $css)) {
				trigger_error('error - ' . $css . ' not found in ' . APPLICATION . '/' . APPLICATION_CACHE . '.', E_USER_ERROR);
			}

			$version = filemtime(SERVER_ROOT . '/' . APPLICATION . '/' . APPLICATION_CACHE . '/' . $css);

			// If use HTTP is true include an HTTP section
			$src = '/' . APPLICATION . '/' . APPLICATION_CACHE . '/' . $css;
			if ($useHTTP) {
				$src = 'http://' . $_SERVER['SERVER_NAME'] . '/' . APPLICATION . '/' . APPLICATION_CACHE . '/' . $css;
			}

			// Echo the link
			if ($direction == 'echo') {
				echo '<link href="' . $src . '?' . $version . '" type="text/css" rel="stylesheet" />';
			}

			// Return the link
			return '<link href="' . $src . '?' . $version . '" type="text/css" rel="stylesheet" />';

		}

	}
	
	public static function css_external($css, $direction = null) {

		if (!empty($css)) {

			// Only include it as part of the global js
			if ($direction == null) {
				array_push($GLOBALS['LOAD_CSS_EXTERNAL'], $js);
			}

			// Echo the link
			elseif ($direction == 'echo') {
				echo '<link href="' . $css . '" type="text/css" rel="stylesheet" />';
			}

			// Return the link
			return '<link href="' . $css . '" type="text/css" rel="stylesheet" />';

		}

	}

	/********** Image Functions **********/

	public static function img_src_framework($img, $direction = 'return', $useHTTP = false) {

		if (!empty($img)) {

			// Check if the file exists
			if (!file_exists(SERVER_ROOT . '/' . FRAMEWORK . '/' . FRAMEWORK_IMG . '/' . $img)) {
				trigger_error('error - image ' . $img . ' not found in '. FRAMEWORK . '/' . FRAMEWORK_IMG .'.', E_USER_ERROR);
			}

			$version = filemtime(SERVER_ROOT . '/' . FRAMEWORK . '/' . FRAMEWORK_IMG . '/' . $img);

			$src = '/' . FRAMEWORK . '/' . FRAMEWORK_IMG . '/' . $img . '?' . $version;
			
			// If use HTTP is true include an HTTP section
			if ($useHTTP) {
				$src = 'http://' . $_SERVER['SERVER_NAME'] . '/' . FRAMEWORK . '/' . FRAMEWORK_IMG . '/' . $img . '?' . $version;
			}

			// Echo the link
			if ($direction == 'echo') {
				echo '/' . FRAMEWORK . '/' . FRAMEWORK_IMG . '/' . $img . '?' . $version;
			}

			// Return the link
			return '/' . FRAMEWORK . '/' . FRAMEWORK_IMG . '/' . $img . '?' . $version;

		}

		return NULL;
	}

	public static function img_src_application($img, $direction = 'return', $useHTTP = false) {

		if (!empty($img)) {

			// Check if the file exists
			if (!file_exists(SERVER_ROOT . '/' . APPLICATION . '/' . APPLICATION_IMG . '/' . $img)) {
				trigger_error('error - image ' . $img . ' not found in '. APPLICATION . '/' . APPLICATION_IMG .'.', E_USER_ERROR);
			}

			$version = filemtime(SERVER_ROOT . '/' . APPLICATION . '/' . APPLICATION_IMG . '/' . $img);

			$src = '/' . APPLICATION . '/' . APPLICATION_IMG . '/' . $img . '?' . $version;
			
			// If use HTTP is true include an HTTP section
			if ($useHTTP) {
				$src = 'http://' . $_SERVER['SERVER_NAME'] . '/' . APPLICATION . '/' . APPLICATION_IMG . '/' . $img . '?' . $version;
			}

			// Echo the link
			if ($direction == 'echo') {
				echo '/' . APPLICATION . '/' . APPLICATION_IMG . '/' . $img . '?' . $version;
			}

			// Return the link
			return '/' . APPLICATION . '/' . APPLICATION_IMG . '/' . $img . '?' . $version;

		}

		return NULL;
	}

	public static function icon_framework($icon, $direction = 'return', $useHTTP = false) {

		if (!empty($icon)) {
			return self::img_framework('icon/' . $icon, $direction, $useHTTP);
		}

	}

}
