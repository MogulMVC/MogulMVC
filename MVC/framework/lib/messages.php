<?php if(!defined("SERVER_ROOT")){header("/error_404");exit;}

function message_complete($title = "", $description = "", $bg = FALSE) {
  require(SERVER_ROOT . "/" . FRAMEWORK . "/" .FRAMEWORK_TEMPLATES . "/message_complete.php");
}

function message_warning($title = "", $description = "",  $bg = FALSE) {
  require(SERVER_ROOT . "/" . FRAMEWORK . "/" .FRAMEWORK_TEMPLATES . "/message_warning.php");
}

function message_loading($title = "", $description = "",  $bg = FALSE) {
  require(SERVER_ROOT . "/" . FRAMEWORK . "/" .FRAMEWORK_TEMPLATES . "/message_loading.php");
}

?>