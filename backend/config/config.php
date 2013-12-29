<?php

date_default_timezone_set('America/New_York');

// Application
define('APPLICATION_COMPANY', 'Application Company');
define('APPLICATION_NAME', 'Application Name');
define('APPLICATION_DESCRIPTION', 'Application Description');
define('APPLICATION_PASSWORD', 'mogulpass321456');
define('APPLICATION_VERSION', '0.0.1');

// Environment
// 'development' 'production'
define('APPLICATION_ENVIRONMENT', 'development');

// URL Keywords
define('APPLICATION_ACTION_URL', 'action');
define('APPLICATION_API_URL', 'api');

// Controllers
define('APPLICATION_DEFAULT_CONTROLLER', 'Main');
define('APPLICATION_ERROR_404_CONTROLLER', 'Error_404');

// Templates
//File locations start within the application view directory
define('APPLICATION_HEAD', '_template/head');
define('APPLICATION_HEADER', '_template/header');
define('APPLICATION_FOOTER', '_template/footer');
define('APPLICATION_FOOT', '_template/foot');
