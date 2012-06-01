<?php if(!defined("SERVER_ROOT")){header("/error_404");exit;}

/********** Via the CLI **********/
if(cli_is()){

  $URI_ARRAY = array();

  foreach($_SERVER['argv'] as $argument){
    $argument_safe = string_sub_before($argument, "?");
    array_push($URI_ARRAY, $argument_safe);
  }

}

/********** Via the Web **********/

if(!cli_is()){
  $URI = string_sub_before($_SERVER['REQUEST_URI'], "?");
  $URI_ARRAY = explode("/", $URI);
}

/********** Define Important Stuff **********/

//If Class is empty
if(empty($URI_ARRAY[1])){
  $CLASS = basename(APPLICATION_DEFAULT_CONTROLLER, ".php");
}else{
  $CLASS = $URI_ARRAY[1];
}

//If Functions is empty
if(empty($URI_ARRAY[2])){
  $FUNCTION = "index";
}else{
  $FUNCTION = $URI_ARRAY[2];
}

/********** Choices Choices, So Many Choices **********/

/**Favicon.ico*/
if($CLASS == "favicon.ico"){
  header('Content-type: image/png');
  require(SERVER_ROOT."/". APPLICATION."/".APPLICATION_IMG."/".APPLICATION_FAVICON);
  exit;
}

/**Robots.txt*/
elseif($CLASS == "robots.txt"){
  header('Content-Type: text');
  require(SERVER_ROOT."/". APPLICATION."/".APPLICATION_CONTROLLERS."/".APPLICATION_ROBOTS_TXT_CONTROLLER);
  exit;
}

/**Actions*/
elseif($CLASS == APPLICATION_ACTIONS){

  //Check if the controller and class exist
  if(!file_exists(SERVER_ROOT."/".APPLICATION."/".APPLICATION_ACTIONS."/".$FUNCTION.".php")){
    error_404_show();
  }

  //Run the action
  require_once(SERVER_ROOT."/".APPLICATION."/".APPLICATION_ACTIONS."/".$FUNCTION.".php");

  exit;
}

/**Apis*/
elseif($CLASS == APPLICATION_APIS){

  //Check if the controller and class exist
  if(!file_exists(SERVER_ROOT."/".APPLICATION."/".APPLICATION_APIS."/".$FUNCTION.".php")){
    error_404_show();
  }

  require_once(SERVER_ROOT."/".APPLICATION."/".APPLICATION_APIS."/".$FUNCTION.".php");

  exit;
}

/**Cron Jobs*/
elseif($CLASS == APPLICATION_JOBS){

  //Check if the controller and class exist
  if(!file_exists(SERVER_ROOT."/".APPLICATION."/".APPLICATION_JOBS."/".$FUNCTION.".php")){
    error_404_show();
  }

  require_once(SERVER_ROOT."/".APPLICATION."/".APPLICATION_JOBS."/".$FUNCTION.".php");

  exit;
}

/**Controllers*/
else{

  //Used to route
  require_once("routes.php");

  //Check if the controller and class exist
  if(!file_exists(SERVER_ROOT."/".APPLICATION."/".APPLICATION_CONTROLLERS."/".$CLASS.".php")){
    error_404_show();
  }

  //Instantiate the controller object
  require_once(SERVER_ROOT."/".APPLICATION."/".APPLICATION_CONTROLLERS."/".$CLASS.".php");
  $OBJECT = new $CLASS();

  //If function is set
  if(!empty($FUNCTION)){

    //Check if the function exists
    if(!method_exists($OBJECT, $FUNCTION)){
      error_404_show();
    }

    $OBJECT->$FUNCTION();
  }
}

?>