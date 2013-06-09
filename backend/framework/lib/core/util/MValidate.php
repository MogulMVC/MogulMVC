<?php
if (!defined('BACKEND_ROOT')) {
	header('Location: /error_404');
	exit ;
}

class MValidate {

	// The email function uses regular expressions to check the validity of an e-mail address.
	public static function email($email) {

		if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
			return TRUE;
		}

		return FALSE;

	}

	// Validates that a variable is declared, exists in memory, and has some value.
	// "", " ", array(), 0, FALSE will return TRUE as they are declared variables.
	// An undeclared variable or NULL will return FALSE.
	public static function optional(&$input) {
		return isset($input);
	}

	// Validates that a variable is decalred and has a non empty value.
	// 0, FALSE will return TRUE.
	// "", " ", array(), an undeclared variable, and NULL will return FALSE.
	public static function required(&$input) {

		if ($input === 0 || $input === FALSE) {
			return TRUE;
		}

		// Strip the whitespace
		$inputNew = str_replace(' ', '', $input);

		if (!empty($inputNew)) {
			return TRUE;
		}

		return FALSE;
	}

	// Validates that a variable contains only the values in the array.
	// The input can not have any values other than what is in the array.
	public static function only_contain($input, $choices) {

		// Set a default valid
		// The loop will change this to FALSE if it isn't valid
		$valid = TRUE;

		// If input is a string convert it to an array
		if (is_string($input)) {
			$input = str_split($input);
		}

		// Loop over the input
		foreach ($input as $value) {

			$loop_valid = FALSE;

			// Loop over the choices
			foreach ($choices as $choice) {

				// If the item is in the choice make the loop true and break the loop
				if ($value == $choice) {
					$loop_valid = TRUE;
					break;
				}

			}

			// Break the loop if the loop is invalid
			// The input can only contain whats in the array
			// So if any section of the input is invalid the entire input is invalid
			if (!$loop_valid) {
				$valid = FALSE;
				break;
			}

		}

		return $valid;

	}

	// Validates that a variable contains every value in the array.
	// It can have other characters but must have what is in the array.
	public static function must_contain($input, $choices) {

		// If input is a string convert it to an array
		if (is_string($input)) {
			$input = str_split($input);
		}

		// Create an array to check matches against
		$matches = array();

		for ($i = 0; $i < count($choices); $i++) {
			$matches[$i] = false;
		}

		// Loop over the choices array checking if each choice is found in the input array
		for ($i = 0; $i < count($choices); $i++) {

			for ($j = 0; $j < count($input); $j++) {

				// Check for a match
				if ($input[$j] == $choices[$i]) {
					$matches[$i] = true;
				}

			}

		}

		// The following loop needs to assume they are valid
		$valid = true;

		for ($i = 0; $i < count($matches); $i++) {
			// If any match is found to be false valid is false
			if (!$matches[$i]) {
				$valid = false;
			}
		}

		return $valid;

	}

	// Validates that a variable does not contain what is in the array.
	// It can have other characters but must not have what is in the array.
	public static function cant_contain($input, $choices) {

		// If input is a string convert it to an array
		if (is_string($input)) {
			$input = str_split($input);
		}
		
		// Loop over the choices array checking if each choice is found in the input array
		for ($i = 0; $i < count($choices); $i++) {

			for ($j = 0; $j < count($input); $j++) {

				// Check for a match
				if ($input[$j] == $choices[$i]) {
					return FALSE;
				}

			}

		}
		
		// If no match was found return true
		return TRUE;

	}

	// Validates that a variable is in a list of choices.
	public static function included_in($input, $choices) {

		$valid = FALSE;

		foreach ($choices as $choice) {
			if ($input == $choice) {
				$valid = TRUE;
			}
		}

		return $valid;

	}

	// Validates that a variable is not in a list of choices.
	public static function excluded_from($input, $choices) {

		$valid = TRUE;

		foreach ($choices as $choice) {
			if ($input == $choice) {
				$valid = FALSE;
			}
		}

		return $valid;

	}

	// Validates that a Variable is between two numbers.
	public static function between($input, $min, $max) {

		if ($input > $min && $input < $max) {
			return TRUE;
		}

		return FALSE;

	}

	// Validates that an input is a multiple of a number.
	public static function multiple_of($input, $multiple) {

		if ($input % $multiple == 0) {
			return TRUE;
		}

		return FALSE;

	}

	// Validates that an input is an even number.
	public static function even($input) {

		if ($input % 2 == 0) {
			return TRUE;
		}

		return FALSE;

	}

	// Validates that an input is an odd number.
	public static function odd($input) {

		if ($input % 2 != 0) {
			return TRUE;
		}

		return FALSE;

	}

	// Validates that a state or abbriation for a state is a valid state.
	// Washington DC is considered a state to this function.
	// This function is case insensitive.
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
