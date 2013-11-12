<?php

/********** Point of Entry **********/

// Via the Web
if (MRequest::is_web()) {
	
	$URI = MString::sub_before($_SERVER['REQUEST_URI'], '?');
	$URI_ARRAY = explode('/', $URI);
	
}

// Via the CLI
elseif (MRequest::is_cli()) {
	
	$URI_ARRAY = array();

	foreach ($_SERVER['argv'] as $argument) {
		$argument_safe = MString::sub_before($argument, '?');
		array_push($URI_ARRAY, $argument_safe);
	}
	
}

/********** Define Important Stuff **********/

//If route 1 is empty
$SEGMENT1 = basename(APPLICATION_DEFAULT_CONTROLLER, '.php');
if (!empty($URI_ARRAY[1])) {
	$SEGMENT1 = $URI_ARRAY[1];
}

//If route 2 is empty
$SEGMENT2 = 'index';
if (!empty($URI_ARRAY[2])) {
	$SEGMENT2 = $URI_ARRAY[2];
}

/********** Choices Choices, So Many Choices **********/

//These choices go in order of likelihood

// Action
if ($SEGMENT1 == APPLICATION_ACTION_URL) {

	//Check if the action exists
	if (!file_exists(BACKEND_ROOT . '/' . APPLICATION_ACTION . '/' . $SEGMENT2 . '.php')) {
		MError::error_404();
	}

	//Run the action
	require_once (BACKEND_ROOT . '/' . APPLICATION_ACTION . '/' . $SEGMENT2 . '.php');

	exit();
	
}

// API
elseif ($SEGMENT1 == APPLICATION_API_URL) {

	// Check if the api exists
	if (!file_exists(BACKEND_ROOT . '/' . APPLICATION_API . '/' . $SEGMENT2 . '.php')) {
		MError::error_404();
	}

	require_once (BACKEND_ROOT . '/' . APPLICATION_API . '/' . $SEGMENT2 . '.php');

	exit();
	
}

// Command
elseif ($SEGMENT1 == APPLICATION_COMMAND) {

	// Check if the application password matches
	// Password is the second segment
	if (empty($URI_ARRAY[2]) || $URI_ARRAY[2] != APPLICATION_PASSWORD) {
		MError::error_404();
	}

	// Check if the command exists
	// Using $URI_ARRAY[3] because password is number 2
	if (!file_exists(BACKEND_ROOT . '/' . APPLICATION_COMMAND . '/' . $URI_ARRAY[3] . '.php')) {
		MError::error_404();
	}

	require_once (BACKEND_ROOT . '/' . APPLICATION_COMMAND . '/' . $URI_ARRAY[3] . '.php');

	exit();
	
}

// Controller
else {

	require_once (BACKEND_ROOT . '/config/routes.php');

	if (!empty($ROUTE)) {

		foreach ($ROUTE as $from => $to) {

			$from_segments = explode('/', $from);
			$to_segments = explode('/', $to);

			$from_segment1 = $from_segments[0];
			$from_segment2 =  $from_segments[1];
			
		 	$to_segment1 = $to_segments[0];
			$to_segment2 = $to_segments[1];

			//If the controller class matches something in the routes
			if ($SEGMENT1 == $from_segment1) {

				//Check if the function matches
				// Only reroute index in condition 1 or 4
				// 1 - Check if route reroutes all subpages
				// 2 - Check if route reroutes all numbers
				// 3 - Check if route reroutes all strings
				// 4 - Check if route reroutes a subpage
				if (
					$from_segment2 == '*' || 
					(is_numeric($SEGMENT2) && $SEGMENT2 != 'index' && $from_segment2 == '#') ||
					(!is_numeric($SEGMENT2) && $SEGMENT2 != 'index' && $from_segment2 == '@') ||  
					$from_segment2 == $SEGMENT2 
				) 
				{
					$SEGMENT1 = $to_segment1;
					$SEGMENT2 = $to_segment2;
				}

			}

		}

	}

	// All controllers start with a capital letter
	$SEGMENT1 = ucfirst($SEGMENT1);

	// Check if the controller exist
	if (!file_exists(BACKEND_ROOT . '/' . APPLICATION_CONTROLLER . '/' . $SEGMENT1 . '.php')) {
		MError::error_404();
	}

	// Instantiate the controller object
	require_once (BACKEND_ROOT . '/' . APPLICATION_CONTROLLER . '/' . $SEGMENT1 . '.php');

	$OBJECT = new $SEGMENT1();

	// Check if the function exists
	if (!method_exists($OBJECT, $SEGMENT2)) {
		MError::error_404();
	}

	$OBJECT -> $SEGMENT2();
	
}
