<?php
if (!defined('SERVER_ROOT')) {
	header('/error_404');
	exit ;
}

class MType {

	public function string_to_boolean($value) {

		// Check if it's a string of true or false
		if (is_string($value) && $value == 'true') {
			$value = true;
		}

		if (is_string($value) && $value == 'false') {
			$value = false;
		}

		// Check if it's a string of 1 or 0
		if (is_string($value) && $value == '1') {
			$value = true;
		}

		if (is_string($value) && $value == '0') {
			$value = false;
		}

		return $value;

	}

}
