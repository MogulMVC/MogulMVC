<?php
if (!defined('SERVER_ROOT')) {
	header('/error_404');
	exit ;
}

/********** Via the Web **********/

if (!MCLI::cli_is()) {
	define('NL', '<br />');
}

/********** Via the CLI **********/

elseif (MCLI::cli_is()) {
	define('NL', '\n');
}
