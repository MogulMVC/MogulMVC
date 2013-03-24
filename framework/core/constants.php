<?php
if (!defined('SERVER_ROOT')) {
	header('Location: /error_404');
	exit ;
}

/********** Via the Web **********/

if (MRequest::is_web()) {
	define('NL', '<br />');
}

/********** Via the CLI **********/

elseif (MRequest::is_cli()) {
	define('NL', '\n');
}
