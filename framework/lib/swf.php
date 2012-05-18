<?php if(!defined("SERVER_ROOT")){header("/error_404");exit;}

function video_player($width = "640", $height = "360", $file = "", $file_hd = "", $thumbnail = "", $autostart = FALSE){
  require(SERVER_ROOT . "/" . FRAMEWORK . "/" . FRAMEWORK_TEMPLATES . "/video_player.php");
}

?>