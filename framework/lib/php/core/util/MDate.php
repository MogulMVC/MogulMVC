<?php
if (!defined('SERVER_ROOT')) {
	header('/error_404');
	exit ;
}

class MDate {

	public static function datetime() {

		return date('Y-m-d H:i:s');

	}

}
