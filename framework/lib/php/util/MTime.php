<?php if(!defined('SERVER_ROOT')){header('/error_404');exit;}

/**
*
* @Author Alan James - alanjames1987@gmail.com
*
*/

class MTime {

  public static function sec2hms ($sec) 
  {

    // start with a blank string
    $hms = '';
    
    // do the hours first: there are 3600 seconds in an hour, so if we divide
    // the total number of seconds by 3600 and throw away the remainder, we're
    // left with the number of hours in those seconds
    $hours = intval(intval($sec) / 3600); 
    
    // dividing the total seconds by 60 will give us the number of minutes
    // in total, but we're interested in *minutes past the hour* and to get
    // this, we have to divide by 60 again and then use the remainder
    $minutes = intval(($sec / 60) % 60); 

    // seconds past the minute are found by dividing the total number of seconds
    // by 60 and using the remainder
    $seconds = intval($sec % 60); 

    // add hours to $hms
    if($hours > 0){
      $hms .= str_pad($hours, 2, '0', STR_PAD_LEFT). ':';
    }
    
    // add minutes to $hms
    if($hours > 0 || $minutes > 0){
      $hms .= str_pad($minutes, 2, '0', STR_PAD_LEFT). ':';
    }
    
    // add seconds to $hms
    if($minutes > 0 || $seconds > 0){
      $hms .= str_pad($seconds, 2, '0', STR_PAD_LEFT);
    }

    return $hms;
    
  }
  
}
  
?>