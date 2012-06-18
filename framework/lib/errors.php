<?php if(!defined("SERVER_ROOT")){header("/error_404");exit;}

function error_404_show($display_error = "") {

  header('HTTP/1.0 404 Not Found');

  require_once(SERVER_ROOT . "/" . APPLICATION . "/" . APPLICATION_CONTROLLERS . "/" . APPLICATION_ERROR_404_CONTROLLER);

  $error_404_class = basename(APPLICATION_ERROR_404_CONTROLLER, ".php");

  if (!is_object($error_404_class)) {
      $error_object = new $error_404_class();
  }

  $error_object->index();

  exit($display_error);
}

?>