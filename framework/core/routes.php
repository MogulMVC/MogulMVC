<?php
if (!defined('SERVER_ROOT')) {header('/error_404');
	exit ;
}

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
