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

	function array2Object($array) {
		
		if (!is_array($array)) {
			return $array;
		}

		$object = new stdClass();
		if (is_array($array) && count($array) > 0) {
			foreach ($array as $name => $value) {
				$name = strtolower(trim($name));
				if (!empty($name)) {
					$object -> $name = arrayToObject($value);
				}
			}
			return $object;
		} else {
			return FALSE;
		}
		
	}

}
