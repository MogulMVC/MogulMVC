<?php

class MCLI {

	public static function cli_is() {
		// If from command line or from Cron
		if (php_sapi_name() == 'cli' || php_sapi_name() == cgi-fcgi) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

}
