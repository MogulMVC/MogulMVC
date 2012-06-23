<?php if(!defined("SERVER_ROOT")){header("/error_404");exit;}

/**
*
* @Author Alan James - alanjames1987@gmail.com
*
*/

class MValidator {

  public static function email($email){
  
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
      return true;
    }
    
    return false;
    
  }

}

?>