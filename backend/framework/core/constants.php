<?php

/********** Via the Web **********/

if (MRequest::is_web()) {
	define('NL', '<br />');
}

/********** Via the CLI **********/

elseif (MRequest::is_cli()) {
	define('NL', '\n');
}
