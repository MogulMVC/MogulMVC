<?php if(!defined("SERVER_ROOT")){header("/error_404");exit;}

/**
*
* @Author Alan James - alanjames1987@gmail.com
*
*/

class MSWF {

  public static function video_player($width = "640", $height = "360", $file = "", $file_hd = "", $thumbnail = "", $autostart = FALSE){
    require(SERVER_ROOT . "/" . FRAMEWORK . "/" . FRAMEWORK_TEMPLATE . "/video_player.php");
  }

}

?>