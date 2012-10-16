<?php
if (!defined('SERVER_ROOT')) {header('/error_404');
	exit ;
}

if (php_sapi_name() == 'cli' || php_sapi_name() == 'cgi-fcgi') {
	define('NL', '\n');
} else {
	define('NL', '<br />');
}

