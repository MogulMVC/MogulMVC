<?php if(!defined("SERVER_ROOT")){header("/error_404");exit;}

//Application
define("APPLICATION_COMPANY", "Application Company");
define("APPLICATION_NAME", "Application Name");
define("APPLICATION_VERSION", "120522");

//Environment
define("APPLICATION_ENVIRONMENT", "development");

//Directories
define("APPLICATION_ACTIONS", "actions");
define("APPLICATION_APIS", "apis");
define("APPLICATION_CONTROLLERS", "controllers");
define("APPLICATION_CSS", "css");
define("APPLICATION_IMG", "img");
define("APPLICATION_JS", "js");
define("APPLICATION_JOBS", "jobs");
define("APPLICATION_LIB", "lib");
define("APPLICATION_MODELS", "models");
define("APPLICATION_SWF", "swf");
define("APPLICATION_UPLOADS", "uploads");
define("APPLICATION_VID", "vid");
define("APPLICATION_VIEWS", "views");

//Controllers
define("APPLICATION_DEFAULT_CONTROLLER", "elements.php");
define("APPLICATION_ERROR_404_CONTROLLER", "error_404.php");
define("APPLICATION_ROBOTS_TXT_CONTROLLER", "robots.php");

//File locations start within the APPLICATION_VIEWS folder
define("APPLICATION_HEADER", "includes/header.php");
define("APPLICATION_FOOTER", "includes/footer.php");

//Favicon
//File locations start within the APPLICATION_IMG folder
define("APPLICATION_FAVICON", "favicon.ico");

?>