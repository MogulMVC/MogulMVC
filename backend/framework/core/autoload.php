<?php
if (!defined('BACKEND_ROOT')) {
	header('Location: /error_404');
	exit ;
}

foreach ($GLOBALS['AUTOLOAD_PHP_FRAMEWORK'] as $php_framework) {
	MLoad::php_framework($php_framework);
}

foreach ($GLOBALS['AUTOLOAD_PHP_APPLICATION'] as $php_application) {
	MLoad::php_application($php_application);
}
