<?php

class MCLI {

	public static function cli_is() {
		// if (php_sapi_name() == 'cli') {
		// if the remote addr is empty it is run by the cli or cron
		if (empty($_SERVER['REMOTE_ADDR'])) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

}
