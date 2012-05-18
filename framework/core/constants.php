<?php if(!defined("SERVER_ROOT")){header("/error_404");exit;}

if (php_sapi_name() == 'cli' && empty($_SERVER['REMOTE_ADDR'])) {
  define("NL", "\n");
} else {
  define("NL", "<br />");
}

?>