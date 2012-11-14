<?php
if (!defined('SERVER_ROOT')) {header('/error_404');
	exit ;
}

// Only start a session if being run from the web
if (!empty($_SERVER['REMOTE_ADDR'])) {
	require_once (SERVER_ROOT . '/' . APPLICATION . '/config/session.php');
	session_start();
}
