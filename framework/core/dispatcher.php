<?php
if (!defined('SERVER_ROOT')) {header('/error_404');
	exit ;
}

/********** Via the Web **********/

if (!MCLI::cli_is()) {
	$URI = MString::sub_before($_SERVER['REQUEST_URI'], '?');
	$URI_ARRAY = explode('/', $URI);
}

/********** Via the CLI **********/

elseif (MCLI::cli_is()) {
	$URI_ARRAY = array();

	foreach ($_SERVER['argv'] as $argument) {
		$argument_safe = MString::sub_before($argument, '?');
		array_push($URI_ARRAY, $argument_safe);
	}
}

/********** Define Important Stuff **********/

//If Class is empty
if (empty($URI_ARRAY[1])) {
	$CLASS = basename(APPLICATION_DEFAULT_CONTROLLER, '.php');
} else {
	$CLASS = $URI_ARRAY[1];
}

//If Functions is empty
if (empty($URI_ARRAY[2])) {
	$FUNCTION = 'index';
} else {
	$FUNCTION = $URI_ARRAY[2];
}

/********** Choices Choices, So Many Choices **********/

// Robots.txt
if ($CLASS == 'robots.txt') {
	header('Content-Type: text');
	require (SERVER_ROOT . '/' . APPLICATION . '/config/robots.txt');
	exit ;
}

// Application Manifest JSON
elseif ($CLASS == 'application.js' && $FUNCTION == 'index') {
	header("Content-Type:application/json");

	$application = new stdClass();
	$application -> name = APPLICATION_NAME;
	$application -> description = APPLICATION_DESCRIPTION;
	$application -> id = APPLICATION_ID;
	$application -> icon = MURL::base() . '/' . APPLICATION . '/' . APPLICATION_IMG . '/' . APPLICATION_ICON . '?' . APPLICATION_VERSION;

	// Output an JSON file describing the application
	echo json_encode($application);

	exit ;
}

// Application Manifest XML
elseif ($CLASS == 'application.xml' && $FUNCTION == 'index') {
	header("Content-Type:text/xml");

	// Output an XML file describing the application
	// Must be written this way
	echo '<?xml version="1.0" encoding="UTF-8" standalone="yes"?>
<application>
	<name>' . APPLICATION_NAME . '</name>
	<description>' . APPLICATION_DESCRIPTION . '</description>
	<id>' . APPLICATION_ID . '</id>
	<icon>' . MURL::base() . '/' . APPLICATION . '/' . APPLICATION_IMG . '/' . APPLICATION_ICON . '?' . APPLICATION_VERSION . '</icon>
</application>';

	exit ;
}

// Action
elseif ($CLASS == APPLICATION_ACTION_URL) {

	//Check if the action exists
	if (!file_exists(SERVER_ROOT . '/' . APPLICATION . '/' . APPLICATION_ACTION . '/' . $FUNCTION . '.php')) {
		MError::error_404();
	}

	//Run the action
	require_once (SERVER_ROOT . '/' . APPLICATION . '/' . APPLICATION_ACTION . '/' . $FUNCTION . '.php');

	exit ;
}

// API
elseif ($CLASS == APPLICATION_API_URL) {

	// Check if the api exists
	if (!file_exists(SERVER_ROOT . '/' . APPLICATION . '/' . APPLICATION_API . '/' . $FUNCTION . '.php')) {
		MError::error_404();
	}

	require_once (SERVER_ROOT . '/' . APPLICATION . '/' . APPLICATION_API . '/' . $FUNCTION . '.php');

	exit ;
}

// Command
elseif ($CLASS == APPLICATION_COMMAND) {

	// Check if the application password matches
	// Password is the second segment
	if (empty($URI_ARRAY[2]) || $URI_ARRAY[2] != APPLICATION_PASSWORD) {
		MError::error_404();
	}

	// Check if the command exists
	// Using $URI_ARRAY[3] because password is number 2
	if (!file_exists(SERVER_ROOT . '/' . APPLICATION . '/' . APPLICATION_COMMAND . '/' . $URI_ARRAY[3] . '.php')) {
		MError::error_404();
	}

	require_once (SERVER_ROOT . '/' . APPLICATION . '/' . APPLICATION_COMMAND . '/' . $URI_ARRAY[3] . '.php');

	exit ;
}

// Controller
else {

	require_once (SERVER_ROOT . '/' . APPLICATION . '/config/routes.php');

	if (!empty($ROUTE)) {

		foreach ($ROUTE as $from => $to) {

			$from_segments = explode('/', $from);
			$to_segments = explode('/', $to);

			//If the controller class matches something in the routes
			if ($CLASS == $from_segments[0]) {

				//Catch empty functions and set to index as the default
				if (empty($FUNCTION)) {
					$FUNCTION = 'index';
				}

				//Check if the function matches
				if ($FUNCTION == $from_segments[1] || $from_segments[1] == '*' || ($from_segments[1] == '#' && is_numeric($FUNCTION))) {
					$CLASS = $to_segments[0];
					$FUNCTION = $to_segments[1];
				}

			}

		}

	}

	// All classes start with a capital letter
	$CLASS = ucfirst($CLASS);

	// Check if the controller exist
	if (!file_exists(SERVER_ROOT . '/' . APPLICATION . '/' . APPLICATION_CONTROLLER . '/' . $CLASS . '.php')) {
		MError::error_404();
	}

	// Instantiate the controller object
	require_once (SERVER_ROOT . '/' . APPLICATION . '/' . APPLICATION_CONTROLLER . '/' . $CLASS . '.php');

	$OBJECT = new $CLASS();

	// If function is set
	if (!empty($FUNCTION)) {

		// Check if the function exists
		if (!method_exists($OBJECT, $FUNCTION)) {
			MError::error_404();
		}

		$OBJECT -> $FUNCTION();
	}
}
