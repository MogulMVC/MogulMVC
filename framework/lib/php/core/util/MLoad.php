<?php

$GLOBALS['LOAD_CSS_FRAMEWORK'] = array();
$GLOBALS['LOAD_CSS_APPLICATION'] = array();

$GLOBALS['LOAD_JS_FRAMEWORK'] = array();
$GLOBALS['LOAD_JS_APPLICATION'] = array();

class MLoad {

	/********** Models / VO Functions **********/

	public static function model($model) {

		if (!empty($model)) {

			// Add extension if one doesn't exist
			if(!substr(strrchr($model,'.'),1)){
				$model = $model . '.php';
			}

			if (!file_exists(SERVER_ROOT . '/' . APPLICATION . '/' . APPLICATION_MODEL . '/' . $model)) {
				trigger_error('error - ' . $model . ' not found.', E_USER_ERROR);
			}

			require_once (SERVER_ROOT . '/' . APPLICATION . '/' . APPLICATION_MODEL . '/' . $model);

		}

	}

	public static function vo($vo) {

		if (!empty($vo)) {

			// Add extension if one doesn't exist
			if(!substr(strrchr($vo,'.'),1)){
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
			$header = '';
			if (APPLICATION_HEADER != '') {

				if (!file_exists(SERVER_ROOT . '/' . APPLICATION . '/' . APPLICATION_VIEW . '/' . APPLICATION_HEADER)) {
					trigger_error('error - header not found.', E_USER_ERROR);
				}

				$header = SERVER_ROOT . '/' . APPLICATION . '/' . APPLICATION_VIEW . '/' . APPLICATION_HEADER;
			}

			$footer = '';
			if (APPLICATION_FOOTER != '') {

				if (!file_exists(SERVER_ROOT . '/' . APPLICATION . '/' . APPLICATION_VIEW . '/' . APPLICATION_FOOTER)) {
					trigger_error('error - footer not found.', E_USER_ERROR);
				}

				$footer = SERVER_ROOT . '/' . APPLICATION . '/' . APPLICATION_VIEW . '/' . APPLICATION_FOOTER;
			}

			//Construst the Page

			require (SERVER_ROOT . '/' . FRAMEWORK . '/' . FRAMEWORK_VIEW . '/' . FRAMEWORK_HEAD);

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

			require (SERVER_ROOT . '/' . FRAMEWORK . '/' . FRAMEWORK_VIEW . '/' . FRAMEWORK_FOOT);

		}

		exit();

	}

	public static function frame($frame, $data = '') {

		// Convert the data array to variables
		if (!empty($data)) {
			foreach ($data as $key => $value) {
				$$key = $value;
			}
		}
		
		// Start loading the frame
		if (!empty($frame)) {

			// Add extension if one doesn't exist
			if(!substr(strrchr($frame,'.'),1)){
				$frame = $frame . '.php';
			}

			//Construst the Frame

			self::css_framework('core/style_frame.css');

			require (SERVER_ROOT . '/' . FRAMEWORK . '/' . FRAMEWORK_VIEW . '/' . FRAMEWORK_HEAD);

			if (!file_exists(SERVER_ROOT . '/' . APPLICATION . '/' . APPLICATION_VIEW . '/' . $frame)) {
				trigger_error('error - ' . $frame . ' not found.', E_USER_ERROR);
			}

			require (SERVER_ROOT . '/' . APPLICATION . '/' . APPLICATION_VIEW . '/' . $frame);

			require (SERVER_ROOT . '/' . FRAMEWORK . '/' . FRAMEWORK_VIEW . '/' . FRAMEWORK_FOOT);

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
			if(!substr(strrchr($template,'.'),1)){
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
			if(!substr(strrchr($template,'.'),1)){
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
			if(!substr(strrchr($library,'.'),1)){
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
			if(!substr(strrchr($library,'.'),1)){
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
			if(!substr(strrchr($js,'.'),1)){
				$js = $js . '.js';
			}

			// Check if the file exists
			if (!file_exists(SERVER_ROOT . '/' . FRAMEWORK . '/' . FRAMEWORK_LIB_JS . '/' . $js)) {
				trigger_error('error - ' . $js . ' not found.', E_USER_ERROR);
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

			// Return the link
			elseif ($direction == 'return') {
				return '<script src="' . $src . '?' . $version . '"></script>';
			}

			// Echo the link
			elseif ($direction == 'echo') {
				echo '<script src="' . $src . '?' . $version . '"></script>';
			}

		}

	}

	public static function js_application($js, $direction = null, $useHTTP = false) {

		if (!empty($js)) {

			// Add extension if one doesn't exist
			if(!substr(strrchr($js,'.'),1)){
				$js = $js . '.js';
			}

			// Check if the file exists
			if (!file_exists(SERVER_ROOT . '/' . APPLICATION . '/' . APPLICATION_LIB_JS . '/' . $js)) {
				trigger_error('error - ' . $js . ' not found.', E_USER_ERROR);
			}

			$version = filemtime(SERVER_ROOT . '/' . APPLICATION . '/' . APPLICATION_LIB_JS . '/' . $js);

			// If use HTTP is true include an HTTP section
			$src = '/' . APPLICATION . '/' . APPLICATION_LIB_JS . '/' . $js;
			if ($useHTTP) {
				$src = 'http://' . $_SERVER['SERVER_NAME'] . '/' . APPLICATION . '/' . APPLICATION_LIB_JS . '/' . $js;
			}

			// Only include it as part of the global js
			if ($direction == null) {
				array_push($GLOBALS['LOAD_JS_APPLICATION'], $js);
			}

			// Return the link
			elseif ($direction == 'return') {
				return '<script src="' . $src . '?' . $version . '"></script>';
			}

			// Echo the link
			elseif ($direction == 'echo') {
				echo '<script src="' . $src . '?' . $version . '"></script>';
			}

		}

	}

	public static function js_cache($js, $direction, $useHTTP = false) {

		if (!empty($js)) {

			// Add extension if one doesn't exist
			if(!substr(strrchr($js,'.'),1)){
				$js = $js . '.js';
			}

			// Check if the file exists
			if (!file_exists(SERVER_ROOT . '/' . APPLICATION . '/' . APPLICATION_CACHE . '/' . $js)) {
				trigger_error('error - ' . $js . ' not found.', E_USER_ERROR);
			}

			$version = filemtime(SERVER_ROOT . '/' . APPLICATION . '/' . APPLICATION_CACHE . '/' . $js);

			// If use HTTP is true include an HTTP section
			$src = '/' . APPLICATION . '/' . APPLICATION_CACHE . '/' . $js;
			if ($useHTTP) {
				$src = 'http://' . $_SERVER['SERVER_NAME'] . '/' . APPLICATION . '/' . APPLICATION_CACHE . '/' . $js;
			}

			// Return the link
			elseif ($direction == 'return') {
				return '<script src="' . $src . '?' . $version . '"></script>';
			}

			// Echo the link
			elseif ($direction == 'echo') {
				echo '<script src="' . $src . '?' . $version . '"></script>';
			}

		}

	}

	/********** CSS Functions **********/

	public static function css_framework($css, $direction = null, $useHTTP = false) {

		if (!empty($css)) {

			// Add extension if one doesn't exist
			if(!substr(strrchr($css,'.'),1)){
				$css = $css . '.css';
			}

			// Check if the file exists
			if (!file_exists(SERVER_ROOT . '/' . FRAMEWORK . '/' . FRAMEWORK_LIB_CSS . '/' . $css)) {
				trigger_error('error - ' . $css . ' not found.', E_USER_ERROR);
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

			// Return the link
			elseif ($direction == 'return') {
				return '<link href="' . $src . '?' . $version . '" type="text/css" rel="stylesheet" />';
			}

			// Echo the link
			elseif ($direction == 'echo') {
				echo '<link href="' . $src . '?' . $version . '" type="text/css" rel="stylesheet" />';
			}

		}

	}

	public static function css_application($css, $direction = null, $useHTTP = false) {

		if (!empty($css)) {

			// Add extension if one doesn't exist
			if(!substr(strrchr($css,'.'),1)){
				$css = $css . '.css';
			}

			// Check if the file exists
			if (!file_exists(SERVER_ROOT . '/' . APPLICATION . '/' . APPLICATION_LIB_CSS . '/' . $css)) {
				trigger_error('error - ' . $css . ' not found.', E_USER_ERROR);
			}

			$version = filemtime(SERVER_ROOT . '/' . APPLICATION . '/' . APPLICATION_LIB_CSS . '/' . $css);

			// If use HTTP is true include an HTTP section
			$src = '/' . APPLICATION . '/' . APPLICATION_LIB_CSS . '/' . $css;
			if ($useHTTP) {
				$src = 'http://' . $_SERVER['SERVER_NAME'] . '/' . APPLICATION . '/' . APPLICATION_LIB_CSS . '/' . $css;
			}

			// Only include it as part of the global js
			if ($direction == null) {
				array_push($GLOBALS['LOAD_CSS_APPLICATION'], $css);
			}

			// Return the link
			elseif ($direction == 'return') {
				return '<link href="' . $src . '?' . $version . '" type="text/css" rel="stylesheet" />';
			}

			// Echo the link
			elseif ($direction == 'echo') {
				echo '<link href="' . $src . '?' . $version . '" type="text/css" rel="stylesheet" />';
			}

		}

	}

	public static function css_cache($css, $direction, $useHTTP = false) {

		if (!empty($css)) {

			// Add extension if one doesn't exist
			if(!substr(strrchr($css,'.'),1)){
				$css = $css . '.css';
			}

			// Check if the file exists
			if (!file_exists(SERVER_ROOT . '/' . APPLICATION . '/' . APPLICATION_CACHE . '/' . $css)) {
				trigger_error('error - ' . $css . ' not found.', E_USER_ERROR);
			}

			$version = filemtime(SERVER_ROOT . '/' . APPLICATION . '/' . APPLICATION_CACHE . '/' . $css);

			// If use HTTP is true include an HTTP section
			$src = '/' . APPLICATION . '/' . APPLICATION_CACHE . '/' . $css;
			if ($useHTTP) {
				$src = 'http://' . $_SERVER['SERVER_NAME'] . '/' . APPLICATION . '/' . APPLICATION_CACHE . '/' . $css;
			}

			// Return the link
			elseif ($direction == 'return') {
				return '<link href="' . $src . '?' . $version . '" type="text/css" rel="stylesheet" />';
			}

			// Echo the link
			elseif ($direction == 'echo') {
				echo '<link href="' . $src . '?' . $version . '" type="text/css" rel="stylesheet" />';
			}

		}

	}


	/********** Image Functions **********/

	public static function img_framework($img) {

		if (!empty($img)) {

			// Check if the file exists
			if (!file_exists(SERVER_ROOT . '/' . FRAMEWORK . '/' . FRAMEWORK_IMG . '/' . $img)) {
				trigger_error('error - ' . $img . ' not found.', E_USER_ERROR);
			}

			$version = filemtime(SERVER_ROOT . '/' . FRAMEWORK . '/' . FRAMEWORK_IMG . '/' . $img);

			return '/' . FRAMEWORK . '/' . FRAMEWORK_IMG . '/' . $img . '?' . $version;

		}

		return NULL;
	}

	public static function img_application($img) {

		if (!empty($img)) {

			// Check if the file exists
			if (!file_exists(SERVER_ROOT . '/' . APPLICATION . '/' . APPLICATION_IMG . '/' . $img)) {
				trigger_error('error - ' . $img . ' not found.', E_USER_ERROR);
			}

			$version = filemtime(SERVER_ROOT . '/' . APPLICATION . '/' . APPLICATION_IMG . '/' . $img);
			
			return '/' . APPLICATION . '/' . APPLICATION_IMG . '/' . $img . '?' . $version;

		}

		return NULL;
	}

	public static function icon_framework($icon) {

		if (!empty($icon)) {
			return self::img_framework('icon/' . $icon);
		}

	}

}
