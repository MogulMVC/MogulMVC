<?php
if (!defined('BACKEND_ROOT')) {
	header('Location: /error_404');
	exit ;
}

class MNumber {

	public static function random($min, $max, $decimal_points = 5) {
		$multiplier = pow(10, $decimal_points);
		return mt_rand($min * $multiplier, $max * $multiplier) / $multiplier;
	}

	public function to_boolean($value) {

		// Check if it's a string of true or false
		if (is_numeric($value) && $value >= 1) {
			return TRUE;
		}

		return FALSE;

	}

}
