<?php if(!defined("SERVER_ROOT")){header("/error_404");exit;}

foreach($AUTOLOAD_LIB_FRAMEWORK as $library_framework){
  MLoad::library_framework($library_framework);
}

foreach($AUTOLOAD_LIB_APPLICATION as $library_application){
  MLoad::library_application($library_application);
}

?>