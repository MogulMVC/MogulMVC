<?php if(!defined('SERVER_ROOT')){header('/error_404');exit;}

/**
*
* @Author Alan James - alanjames1987@gmail.com
*
*/

class MTemperature{

  public static function c2f($value){
    return $value *  9/5 + 32;
  }

  public static function c2k($value){
    return $value + 273.15;
  }

  public static function f2c($value){
    return ($value - 32) * 5/9;
  }

  public static function f2k($value){
    return (5/9 * ($value - 32) + 273);
  }

  public static function k2c($value){
    return $value - 273.15;
  }

  public static function k2f($value){
    return (($value - 273) * 1.8) + 32;
  }
  
}

?>
