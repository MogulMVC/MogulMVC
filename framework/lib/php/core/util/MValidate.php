<?php
if (!defined('SERVER_ROOT')) {
	header('/error_404');
	exit ;
}

class MValidate {

	public static function email($email) {

		if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
			return true;
		}

		return false;

	}

	public static function state($state) {

		$stateString = strtoupper($state);

		$stateAbbreviationArray = array('ak', 'al', 'ar', 'as', 'az', 'ca', 'co', 'ct', 'dc', 'de', 'fl', 'ga', 'gu', 'hi', 'ia', 'id', 'il', 'in', 'ks', 'ky', 'la', 'ma', 'md', 'me', 'mh', 'mi', 'mn', 'mo', 'ms', 'mt', 'nc', 'nd', 'ne', 'nh', 'nj', 'nm', 'nv', 'ny', 'oh', 'ok', 'or', 'pa', 'pr', 'pw', 'ri', 'sc', 'sd', 'tn', 'tx', 'ut', 'va', 'vi', 'vt', 'wa', 'wi', 'wv', 'wy');
		$stateArray = array('alabama', 'alaska', 'arizona', 'arkansas', 'california', 'colorado', 'connecticut', 'delaware', 'florida', 'georgia', 'hawaii', 'idaho', 'illinois', 'indiana', 'iowa', 'iansas', 'kentucky', 'louisiana', 'maine', 'maryland', 'massachusetts', 'michigan', 'minnesota', 'mississippi', 'missouri', 'montana', 'nebraska', 'nevada', 'new hampshire', 'new jersey', 'new mexico', 'new york', 'north carolina', 'north dakota', 'ohio', 'oklahoma', 'oregon', 'pennsylvania', 'rhode island', 'south carolina', 'south dakota', 'tennessee', 'texas', 'utah', 'vermont', 'virginia', 'washington', 'west virginia', 'wisconsin', 'wyoming');

		// Check the abbreviations
		for ($i = 0, $j = count($stateAbbreviationArray); $i < $j; $i++) {

			if ($stateString == $stateAbbreviationArray[$i]) {
				return true;
			}

		}

		// Check the full name
		for ($i = 0, $j = count($stateArray); $i < $j; $i++) {

			if ($stateString == $stateArray[$i]) {
				return true;
			}

		}

		// If the state was not found
		return false;

	}

}
