<?php

define('SERVER_ROOT', dirname(__FILE__));

define('FRAMEWORK', 'framework');
define('APPLICATION', 'application');

if (!is_dir(SERVER_ROOT . "/" . FRAMEWORK)) {
    exit('Error - No framework installed.');
}

if (!is_dir(SERVER_ROOT . "/" . APPLICATION)) {
    exit('Error - No application instralled.');
}

require_once(SERVER_ROOT . "/" . FRAMEWORK . '/framework.php');

?>