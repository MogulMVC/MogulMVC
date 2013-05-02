<?php
if (!defined('SERVER_ROOT')) {
	header('Location: /error_404');
	exit ;
}

class MValidate {

	public static function email($email) {

		if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
			return TRUE;
		}

		return FALSE;

	}

	// Validates that a Variable is declared and exists in memory
	// An empty string, 0, or false, will return true
	public static function optional($input) {

	}

	// Validates that a Variable is decalred and has a value
	// An empty string does not validate but 0 and false do
	public static function required($input) {

	}

	// Validates that a Variable contains only what is in the array
	// It can only have what is in the array
	public static function only_contain($input, $array) {

	}

	// Validates that a Variable contains what is in the array
	// It can have other characters but must have what is in the array
	public static function must_contain($input, $array) {

	}

	// Validates that a Variable is between two numbers
	public static function between($value, $min, $max) {

		if ($value > $min && $value < $max) {
			return TRUE;
		}

		return FALSE;

	}

	public static function multiple_of($number, $multiple) {

		if ($number % $multiple == 0) {
			return TRUE;
		}

		return FALSE;

	}

	public static function state($state) {

		$stateString = strtolower($state);

		$stateAbbreviationArray = array('ak', 'al', 'ar', 'as', 'az', 'ca', 'co', 'ct', 'dc', 'de', 'fl', 'ga', 'gu', 'hi', 'ia', 'id', 'il', 'in', 'ks', 'ky', 'la', 'ma', 'md', 'me', 'mh', 'mi', 'mn', 'mo', 'ms', 'mt', 'nc', 'nd', 'ne', 'nh', 'nj', 'nm', 'nv', 'ny', 'oh', 'ok', 'or', 'pa', 'pr', 'pw', 'ri', 'sc', 'sd', 'tn', 'tx', 'ut', 'va', 'vi', 'vt', 'wa', 'wi', 'wv', 'wy');
		$stateArray = array('alabama', 'alaska', 'arizona', 'arkansas', 'california', 'colorado', 'connecticut', 'delaware', 'florida', 'georgia', 'hawaii', 'idaho', 'illinois', 'indiana', 'iowa', 'iansas', 'kentucky', 'louisiana', 'maine', 'maryland', 'massachusetts', 'michigan', 'minnesota', 'mississippi', 'missouri', 'montana', 'nebraska', 'nevada', 'new hampshire', 'new jersey', 'new mexico', 'new york', 'north carolina', 'north dakota', 'ohio', 'oklahoma', 'oregon', 'pennsylvania', 'rhode island', 'south carolina', 'south dakota', 'tennessee', 'texas', 'utah', 'vermont', 'virginia', 'washington', 'west virginia', 'wisconsin', 'wyoming');

		// Check the abbreviations
		for ($i = 0, $j = count($stateAbbreviationArray); $i < $j; $i++) {

			if ($stateString == $stateAbbreviationArray[$i]) {
				return TRUE;
			}

		}

		// Check the full name
		for ($i = 0, $j = count($stateArray); $i < $j; $i++) {

			if ($stateString == $stateArray[$i]) {
				return TRUE;
			}

		}

		// If the state was not found
		return FALSE;

	}

}
