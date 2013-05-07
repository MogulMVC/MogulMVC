<?php
if (!defined('BACKEND_ROOT')) {
	header('Location: /error_404');
	exit ;
}

class MError {

	public static function error_404($display_error = '') {

		header('HTTP/1.0 404 Not Found');

		$error_404_file = basename(APPLICATION_ERROR_404_CONTROLLER, '.php') . '.php';

		require_once (BACKEND_ROOT . '/' . APPLICATION_CONTROLLER . '/' . $error_404_file);

		$error_404_class = basename(APPLICATION_ERROR_404_CONTROLLER, '.php');

		$error_404_class = ucfirst($error_404_class);

		if (!is_object($error_404_class)) {
			$error_object = new $error_404_class();
		}

		$error_object -> index();

		exit($display_error);
	}

}
