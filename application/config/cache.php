<?php
if (!defined('SERVER_ROOT')) {
	header('/error_404');
	exit ;
}

$GLOBALS['cache'] = true;
$GLOBALS['cache_max'] = 15;
