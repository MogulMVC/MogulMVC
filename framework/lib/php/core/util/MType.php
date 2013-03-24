<?php
if (!defined('SERVER_ROOT')) {
	header('Location: /error_404');
	exit ;
}

class MType {

	public function string2boolean($value) {

		// Check if it's a string of true or false
		if (is_string($value) && $value == 'true') {
			return true;
		}

		// Check if it's a string of 1 or 0
		if (is_string($value) && $value == '1') {
			return true;
		}

		return FALSE;

	}
	
}
