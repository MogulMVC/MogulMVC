<?php
if (!defined('SERVER_ROOT')) {
	header('Location: /error_404');
	exit ;
}

class MRequest {

	public static function is_cli() {
		// if the remote addr is empty it is run by the cli or cron
		if (empty($_SERVER['REMOTE_ADDR'])) {
			return TRUE;
		} else {
			return false;
		}
	}

	public static function is_web() {
		// if the remote addr is empty it is run by the cli or cron
		if (!empty($_SERVER['REMOTE_ADDR'])) {
			return TRUE;
		} else {
			return false;
		}
	}

}
