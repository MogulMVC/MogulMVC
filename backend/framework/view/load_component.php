<?php

require (BACKEND_ROOT . '/config/autoload.php');

if (count($GLOBALS['AUTOLOAD_COMPONENT'])) {
	echo "\n" . '<!-- Load Components -->' . "\n";
}

//Autoload Component
foreach ($GLOBALS['AUTOLOAD_COMPONENT'] as $component) {
	MLoad::component($component, 'echo');
	echo "\n";
}

// These files are loaded on a per page basis and shouldn't be merged into the application.css

//Include all component files that were loaded with the component function
foreach ($GLOBALS['LOAD_COMPONENT'] as $component) {
	MLoad::component($component, 'echo');
}
