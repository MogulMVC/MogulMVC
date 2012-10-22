<?php
if (!defined('SERVER_ROOT')) {header('/error_404');
	exit ;
}

/********** Via the CLI **********/
if (MCLI::cli_is()) {

	$URI_ARRAY = array();

	foreach ($_SERVER['argv'] as $argument) {
		$argument_safe = MStrings::sub_before($argument, '?');
		array_push($URI_ARRAY, $argument_safe);
	}

}

/********** Via the Web **********/

if (!MCLI::cli_is()) {
	$URI = MStrings::sub_before($_SERVER['REQUEST_URI'], '?');
	$URI_ARRAY = explode('/', $URI);
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

// Application Manifest
elseif ($CLASS == 'application.xml' && $FUNCTION == 'index') {
	header("Content-Type:text/xml");

	// Output an XML file describing the application
	// Must be written this way
	echo '<?xml version="1.0" encoding="UTF-8" standalone="yes"?>
<application>
	<name>' . APPLICATION_NAME . '</name>
	<description>' . APPLICATION_DESCRIPTION . '</description>
	<id>' . APPLICATION_ID . '</id>
	<icon>' . MURL::base() . '/' . APPLICATION . '/' . APPLICATION_IMG . '/' . APPLICATION_ICON . '</icon>
</application>';

	exit ;
}

// Action
elseif ($CLASS == APPLICATION_ACTION_URL) {

	//Check if the action exists
	if (!file_exists(SERVER_ROOT . '/' . APPLICATION . '/' . APPLICATION_ACTION . '/' . $FUNCTION . '.php')) {
		MErrors::error_404();
	}

	//Run the action
	require_once (SERVER_ROOT . '/' . APPLICATION . '/' . APPLICATION_ACTION . '/' . $FUNCTION . '.php');

	exit ;
}

// API
elseif ($CLASS == APPLICATION_API_URL) {

	// Check if the api exists
	if (!file_exists(SERVER_ROOT . '/' . APPLICATION . '/' . APPLICATION_API . '/' . $FUNCTION . '.php')) {
		MErrors::error_404();
	}

	require_once (SERVER_ROOT . '/' . APPLICATION . '/' . APPLICATION_API . '/' . $FUNCTION . '.php');

	exit ;
}

// Cron Job
elseif ($CLASS == APPLICATION_JOB) {

	// Check if the job exists
	if (!file_exists(SERVER_ROOT . '/' . APPLICATION . '/' . APPLICATION_JOB . '/' . $FUNCTION . '.php')) {
		MErrors::error_404();
	}

	require_once (SERVER_ROOT . '/' . APPLICATION . '/' . APPLICATION_JOB . '/' . $FUNCTION . '.php');

	exit ;
}

// Setup
elseif ($CLASS == APPLICATION_SETUP) {

	if (APPLICATION_ENVIRONMENT == 'development') {

		// Check if the job exists
		if (!file_exists(SERVER_ROOT . '/' . APPLICATION . '/' . APPLICATION_SETUP . '/' . $FUNCTION . '.php')) {
			MErrors::error_404();
		}

		require_once (SERVER_ROOT . '/' . APPLICATION . '/' . APPLICATION_SETUP . '/' . $FUNCTION . '.php');

		exit ;

	}

	// Show 404 if application isn't in development mode
	MErrors::error_404();

}

// Controller
else {

	// Used to route
	require_once ('routes.php');

	// All classes start with a capital letter
	$CLASS = ucfirst($CLASS);

	// Check if the controller exist
	if (!file_exists(SERVER_ROOT . '/' . APPLICATION . '/' . APPLICATION_CONTROLLER . '/' . $CLASS . '.php')) {
		MErrors::error_404();
	}

	// Instantiate the controller object
	require_once (SERVER_ROOT . '/' . APPLICATION . '/' . APPLICATION_CONTROLLER . '/' . $CLASS . '.php');

	$OBJECT = new $CLASS();

	// If function is set
	if (!empty($FUNCTION)) {

		// Check if the function exists
		if (!method_exists($OBJECT, $FUNCTION)) {
			MErrors::error_404();
		}

		$OBJECT -> $FUNCTION();
	}
}
