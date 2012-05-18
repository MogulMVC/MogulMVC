<?php if(!defined("SERVER_ROOT")){header("/error_404");exit;}

function cli_is(){
  if(php_sapi_name() == 'cli' && empty($_SERVER['REMOTE_ADDR'])){
    return TRUE;
  }else{
    return FALSE;
  }
}

?>