<?php if(!defined("SERVER_ROOT")){header("/error_404");exit;}

if(APPLICATION_ENVIRONMENT == 'development'){
  error_reporting(E_ALL);
}
else if(APPLICATION_ENVIRONMENT == 'production'){
  error_reporting(0);
}
else{
  exit('APPLICATION_ENVIRONMENT is not set correctly.');
}

?>