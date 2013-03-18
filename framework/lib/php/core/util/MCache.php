<?php
if (!defined('SERVER_ROOT')) {
	header('/error_404');
	exit ;
}

require_once (SERVER_ROOT . '/' . APPLICATION . '/config/cache.php');

if ($GLOBALS['cache']) {

	function page_uuid() {

		$cookie_string = implode(',', $_COOKIE);
		$env_string = implode(',', $_ENV);
		$files_string = implode(',', $_FILES);
		$get_string = implode(',', $_GET);
		$post_string = implode(',', $_POST);
		$request_string = implode(',', $_REQUEST);

		$session_string = '';
		if (isset($_SESSION)) {
			$session_string = implode(',', $_SESSION);
		}

		$page_uuid = md5($cookie_string . $env_string . $files_string . $get_string . $post_string . $request_string . $session_string . $_SERVER['REQUEST_URI']);

		return $page_uuid;

	}

	// Serve up the page if it exists
	$page_uuid = page_uuid();

	if (file_exists(SERVER_ROOT . '/' . APPLICATION . '/' . APPLICATION_CACHE . '/' . $page_uuid)) {

		$creation_time = filemtime(SERVER_ROOT . '/' . APPLICATION . '/' . APPLICATION_CACHE . '/' . $page_uuid);

		if(time() - $creation_time < $GLOBALS['cache_max'] * 60){
			echo file_get_contents(SERVER_ROOT . '/' . APPLICATION . '/' . APPLICATION_CACHE . '/' . $page_uuid);
			exit();
		}

	}

	// Create the page if it doesn't exist
	function ob_callback() {

		$page_uuid = page_uuid();

		$page_location = SERVER_ROOT . '/' . APPLICATION . '/' . APPLICATION_CACHE . '/' . $page_uuid;
		$page_content = ob_get_contents();

		file_put_contents($page_location, $page_content);

		return false;

	}

	ob_start('ob_callback');

}
