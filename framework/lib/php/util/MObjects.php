<?php
if (!defined('SERVER_ROOT')) {header('/error_404');
	exit ;
}

/**
 *
 * @Author Alan James - alanjames1987@gmail.com
 *
 */

class MObjects {

	public static function array_to_object($array) {

		foreach ($array as $key => $value) {

			if (is_array($value)) {
				$obj -> $key = new stdClass();
				array_to_obj($value, $obj -> $key);
			} else {
				$obj -> $key = $value;
			}

		}

		return $obj;

	}

}
?>