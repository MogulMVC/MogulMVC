<?php if(!defined('SERVER_ROOT')){header('/error_404');exit;}

/**
*
* @Author Alan James - alanjames1987@gmail.com
*
*/

class MMessages {

  public static function complete($title = '', $description = '', $bg = 'none'){
    require(SERVER_ROOT . '/' . FRAMEWORK . '/' .FRAMEWORK_TEMPLATE . '/message_complete.php');
  }

  public static function warning($title = '', $description = '',  $bg = 'none'){
    require(SERVER_ROOT . '/' . FRAMEWORK . '/' .FRAMEWORK_TEMPLATE . '/message_warning.php');
  }

  public static function loading($title = '', $description = '',  $bg = 'none'){
    require(SERVER_ROOT . '/' . FRAMEWORK . '/' .FRAMEWORK_TEMPLATE . '/message_loading.php');
  }

}

?>