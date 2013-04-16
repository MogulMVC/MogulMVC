<?php
if (!defined('SERVER_ROOT')) {
	header('Location: /error_404');
	exit ;
}

class MType {

	public function string2Boolean($value) {

		// Check if it's a string of true or false
		if (is_string($value) && ($value == 'true' || $value == 'TRUE')) {
			return TRUE;
		}

		// Check if it's a string of 1 or 0
		if (is_string($value) && $value == '1') {
			return TRUE;
		}

		return FALSE;

	}

}
