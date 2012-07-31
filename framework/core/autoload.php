<?php if(!defined("SERVER_ROOT")){header("/error_404");exit;}

foreach($AUTOLOAD_LIB_FRAMEWORK as $lib_framework){
  MLoad::lib_framework($lib_framework);
}

foreach($AUTOLOAD_LIB_APPLICATION as $lib_application){
  MLoad::lib_application($lib_application);
}

?>