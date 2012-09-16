<?php

/**
 *
 * @Author Alan James - alanjames1987@gmail.com
 *
 */

class MValidator {

	public static function email($email) {

		if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
			return true;
		}

		return false;

	}

	public static function color_hex($color) {

		$valid = false;

		$color = preg_replace('/[^0-9a-fA-F\n]/', '', $color);

		if (strlen($color) == 3 || strlen($color) == 6) {
			$valid = true;
		}

		return $valid;

	}

}
?>