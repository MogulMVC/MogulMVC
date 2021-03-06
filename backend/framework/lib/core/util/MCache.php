<?php

// Create the page if it doesn't exist
function ob_callback() {

	$page_uuid = MCache::page_uuid();

	$page_location = BACKEND_ROOT . '/' . APPLICATION_BACKEND_CACHE . '/' . $page_uuid;
	$page_content = ob_get_contents();

	// Remove whitespace
	$page_content = preg_replace('!\s+!smi', ' ', $page_content);

	file_put_contents($page_location, $page_content);

	return false;

}

class MCache {

	public static function page_uuid() {

		$cookie_string = implode(',', $_COOKIE);
		$uri_string = $_SERVER['REQUEST_URI'];
		$files_string = implode(',', $_FILES);
		$get_string = implode(',', $_GET);
		$post_string = implode(',', $_POST);
		$request_string = implode(',', $_REQUEST);

		$session_string = '';
		if (isset($_SESSION)) {
			$session_string = implode(',', $_SESSION);
		}

		$page_uuid = md5($cookie_string . $uri_string . $files_string . $get_string . $post_string . $request_string . $session_string);

		return $page_uuid;

	}

	public static function cache($minutes) {

		// Serve up the page if it exists
		$page_uuid = self::page_uuid();

		if (file_exists(BACKEND_ROOT . '/' . APPLICATION_BACKEND_CACHE . '/' . $page_uuid)) {

			$creation_time = filemtime(BACKEND_ROOT . '/' . APPLICATION_BACKEND_CACHE . '/' . $page_uuid);

			if (time() - $creation_time < $minutes * 60) {
				echo file_get_contents(BACKEND_ROOT . '/' . APPLICATION_BACKEND_CACHE . '/' . $page_uuid);
				exit();
			}

		}

		// Create the page if it doesn't exist
		ob_start('ob_callback');

	}

	public static function clear() {

		// delete backend directory
		$file_array = glob(BACKEND_ROOT . '/' . APPLICATION_BACKEND_CACHE . '/*');

		foreach ($file_array as $file) {
			unlink($file);
		}
		
		// delete frontend directory
		$file_array = glob(FRONTEND_ROOT . '/' . APPLICATION_FRONTEND_CACHE . '/*');

		foreach ($file_array as $file) {
			unlink($file);
		}

	}

}
