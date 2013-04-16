<?php
if (!defined('SERVER_ROOT')) {
	header('Location: /error_404');
	exit ;
}

class MString {

	public static function random($length) {
		$possible_characters = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', 'A', 'B', 'C', 'D', 'E', '', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z');

		$string = '';

		for ($i = 0; $i < $length; $i++) {
			$random_number = rand(0, count($possible_characters));

			$random_character = $possible_characters[$random_number];

			$string .= $random_character;

		}

		return $string;
	}

	public static function sub_before($string, $character) {
		if ($character_position = strpos($string, $character)) {
			$string = substr($string, 0, $character_position);
		}

		return $string;
	}

	public static function newline_remove($string) {
		return preg_replace('/[\n\r]/', ' ', $string);
	}

	public static function url_link($string, $nofollow = TRUE) {
		if ($nofollow) {
			$string = preg_replace('/(http:\/\/[^\s]+)/', '<a href=\'$1\' rel=\'nofollow\'>$1</a>', $string);
		} else {
			$string = preg_replace('/(http:\/\/[^\s]+)/', '<a href=\'$1\'>$1</a>', $string);
		}

		return $string;
	}

	public static function url_title($string, $seperator = '-') {
		$string = str_replace(' ', $seperator, $title);
		return ($string);
	}

}
