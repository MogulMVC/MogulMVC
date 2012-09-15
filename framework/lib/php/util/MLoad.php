<?php
if (!defined('SERVER_ROOT')) {header('/error_404');
	exit ;
}

/**
 *
 * @Author Alan James - alanjames1987@gmail.com
 *
 */

$GLOBALS['LOAD_CSS_FRAMEWORK'] = array();
$GLOBALS['LOAD_CSS_APPLICATION'] = array();

$GLOBALS['LOAD_JS_FRAMEWORK'] = array();
$GLOBALS['LOAD_JS_APPLICATION'] = array();

class MLoad {

	/********** Models / VOs **********/

	public static function model($model) {

		if (!empty($model)) {

			if (!file_exists(SERVER_ROOT . '/' . APPLICATION . '/' . APPLICATION_MODEL . '/' . $model)) {
				trigger_error('error - ' . $model . ' not found.', E_USER_ERROR);
			}

			require_once (SERVER_ROOT . '/' . APPLICATION . '/' . APPLICATION_MODEL . '/' . $model);

		}

	}

	public static function vo($vo) {

		if (!empty($vo)) {

			if (!file_exists(SERVER_ROOT . '/' . APPLICATION . '/' . APPLICATION_VO . '/' . $vo)) {
				trigger_error('error - ' . $vo . ' not found.', E_USER_ERROR);
			}

			require_once (SERVER_ROOT . '/' . APPLICATION . '/' . APPLICATION_VO . '/' . $vo);

		}

	}

	/********** Views **********/

	public static function view($view, $data = '') {

		if (!empty($data)) {
			foreach ($data as $key => $value) {
				$$key = $value;
			}
		}

		if (!empty($view)) {

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

	}

	public static function frame($frame, $data = '') {

		if (!empty($data)) {
			foreach ($data as $key => $value) {
				$$key = $value;
			}
		}

		if (!empty($frame)) {

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

	public static function element_framework($element, $data = '') {

		if (!empty($data)) {
			foreach ($data as $key => $value) {
				$$key = $value;
			}
		}

		if (!empty($element)) {

			if (!file_exists(SERVER_ROOT . '/' . FRAMEWORK . '/' . FRAMEWORK_VIEW . '/' . $element)) {
				trigger_error('error - ' . $element . ' not found.', E_USER_ERROR);
			}

			require (SERVER_ROOT . '/' . FRAMEWORK . '/' . FRAMEWORK_VIEW . '/' . $element);
		}

	}

	public static function element_application($element, $data = '') {

		if (!empty($data)) {
			foreach ($data as $key => $value) {
				$$key = $value;
			}
		}

		if (!empty($element)) {

			if (!file_exists(SERVER_ROOT . '/' . APPLICATION . '/' . APPLICATION_VIEW . '/' . $element)) {
				trigger_error('error - ' . $element . ' not found.', E_USER_ERROR);
			}

			require (SERVER_ROOT . '/' . APPLICATION . '/' . APPLICATION_VIEW . '/' . $element);
		}

	}

	/********** PHP Libraries **********/

	public static function php_framework($library) {

		if (!empty($library)) {

			if (!file_exists(SERVER_ROOT . '/' . FRAMEWORK . '/' . FRAMEWORK_LIB_PHP . '/' . $library)) {
				trigger_error('error - ' . $library . ' not found.', E_USER_ERROR);
			}

			require_once (SERVER_ROOT . '/' . FRAMEWORK . '/' . FRAMEWORK_LIB_PHP . '/' . $library);
		}

	}

	public static function php_application($library) {

		if (!empty($library)) {

			if (!file_exists(SERVER_ROOT . '/' . APPLICATION . '/' . APPLICATION_LIB_PHP . '/' . $library)) {
				trigger_error('error - ' . $library . ' not found.', E_USER_ERROR);
			}

			require_once (SERVER_ROOT . '/' . APPLICATION . '/' . APPLICATION_LIB_PHP . '/' . $library);
		}

	}

	/********** JavaScript Libraries **********/

	public static function js_framework($js) {

		if (!empty($js)) {

			if (!file_exists(SERVER_ROOT . '/' . FRAMEWORK . '/' . FRAMEWORK_LIB_JS . '/' . $js)) {
				trigger_error('error - ' . $js . ' not found.', E_USER_ERROR);
			}

			array_push($GLOBALS['LOAD_JS_FRAMEWORK'], $js);

		}

	}

	public static function js_framework_include($js) {

		if (!empty($js)) {

			if (!file_exists(SERVER_ROOT . '/' . FRAMEWORK . '/' . FRAMEWORK_LIB_JS . '/' . $js)) {
				trigger_error('error - ' . $js . ' not found.', E_USER_ERROR);
			}

			$src = '/' . FRAMEWORK . '/' . FRAMEWORK_LIB_JS . '/' . $js;
			echo '<script src="' . $src . '?' . FRAMEWORK_VERSION . '"></script>';

		}

	}

	public static function js_application($js) {

		if (!empty($js)) {

			if (!file_exists(SERVER_ROOT . '/' . APPLICATION . '/' . APPLICATION_LIB_JS . '/' . $js)) {
				trigger_error('error - ' . $js . ' not found.', E_USER_ERROR);
			}

			array_push($GLOBALS['LOAD_JS_APPLICATION'], $js);

		}

	}

	public static function js_application_include($js) {

		if (!empty($js)) {

			if (!file_exists(SERVER_ROOT . '/' . APPLICATION . '/' . APPLICATION_LIB_JS . '/' . $js)) {
				trigger_error('error - ' . $js . ' not found.', E_USER_ERROR);
			}

			$src = '/' . APPLICATION . '/' . APPLICATION_LIB_JS . '/' . $js;
			echo '<script src="' . $src . '?' . APPLICATION_VERSION . '"></script>';

		}

	}

	/********** CSS Libraries **********/

	public static function css_framework($css) {

		if (!empty($css)) {

			if (!file_exists(SERVER_ROOT . '/' . FRAMEWORK . '/' . FRAMEWORK_LIB_CSS . '/' . $css)) {
				trigger_error('error - ' . $css . ' not found.', E_USER_ERROR);
			}

			array_push($GLOBALS['LOAD_CSS_FRAMEWORK'], $css);

		}

	}

	public static function css_framework_include($css) {

		if (!empty($css)) {

			if (!file_exists(SERVER_ROOT . '/' . FRAMEWORK . '/' . FRAMEWORK_LIB_CSS . '/' . $css)) {
				trigger_error('error - ' . $css . ' not found.', E_USER_ERROR);
			}

			$src = '/' . FRAMEWORK . '/' . FRAMEWORK_LIB_CSS . '/' . $css;
			echo '<link href="' . $src . '?' . FRAMEWORK_VERSION . '" type="text/css" rel="stylesheet" />';

		}

	}

	public static function css_application($css) {

		if (!empty($css)) {

			if (!file_exists(SERVER_ROOT . '/' . APPLICATION . '/' . APPLICATION_LIB_CSS . '/' . $css)) {
				trigger_error('error - ' . $css . ' not found.', E_USER_ERROR);
			}

			array_push($GLOBALS['LOAD_CSS_APPLICATION'], $css);
		}

	}

	public static function css_application_include($css) {

		if (!empty($css)) {

			if (!file_exists(SERVER_ROOT . '/' . APPLICATION . '/' . APPLICATION_LIB_CSS . '/' . $css)) {
				trigger_error('error - ' . $css . ' not found.', E_USER_ERROR);
			}

			$src = '/' . APPLICATION . '/' . APPLICATION_LIB_CSS . '/' . $css;
			echo '<link href="' . $src . '?' . APPLICATION_VERSION . '" type="text/css" rel="stylesheet" />';

		}

	}

	/********** Images **********/

	public static function img_framework($img) {

		if (!empty($img)) {

			if (!file_exists(SERVER_ROOT . '/' . FRAMEWORK . '/' . FRAMEWORK_IMG . '/' . $img)) {
				trigger_error('error - ' . $img . ' not found.', E_USER_ERROR);
			}

			return '/' . FRAMEWORK . '/' . FRAMEWORK_IMG . '/' . $img . '?' . FRAMEWORK_VERSION;

		}

		return NULL;

	}

	public static function img_application($img) {

		if (!empty($img)) {

			if (!file_exists(SERVER_ROOT . '/' . APPLICATION . '/' . APPLICATION_IMG . '/' . $img)) {
				trigger_error('error - ' . $img . ' not found.', E_USER_ERROR);
			}

			return '/' . APPLICATION . '/' . APPLICATION_IMG . '/' . $img . '?' . APPLICATION_VERSION;

		}

		return NULL;

	}

	public static function icon_framework($icon) {

		if (!empty($icon)) {

			return self::img_framework('icons/' . $icon);

		}

	}

}
?>