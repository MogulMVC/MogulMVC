<?php

/**
 *
 * Obscure IDs by converting them to a different base system
 * Legacy support will be provided by changing the length of the strings
 * @Author Alan James - alanjames1987@gmail.com
 *
 */

class MConvertID {

  public static function offset($length){

    $min_string = pow(10, $length - 1);
    return base_convert($min_string, 36, 10);

  }

  public static function string_id($input){

    $output = 0;

    //Other lengths might come in the future
    if(strlen($input) == 5){

      //The minimum number to achive 5 digits
      $offset = self::offset(5);

      $temp = base_convert($input, 36, 10);

      $output = $temp - $offset;

    }

    return $output;

  }

  public static function id_string($input, $length = 5){

    $output = 0;

    //Other lengths might come in the future
    if($length == 5){

      //The minimum number to achive 5 digits
      $offset = self::offset(5);

      $temp = $input + $offset;

      $output = base_convert($temp, 10, 36);

    }

    return $output;

  }

}

?>