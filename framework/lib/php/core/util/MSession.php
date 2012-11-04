<?php
if (!defined('SERVER_ROOT')) {header('/error_404');
	exit ;
}

if (!empty($_SERVER['REMOTE_ADDR'])) {
	session_start();
}
