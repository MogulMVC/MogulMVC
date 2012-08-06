<?php if(!defined("SERVER_ROOT")){header("/error_404");exit;}

/********** Via the CLI **********/
if(MCLI::cli_is()){

  $URI_ARRAY = array();

  foreach($_SERVER['argv'] as $argument){
    $argument_safe = MString::sub_before($argument, "?");
    array_push($URI_ARRAY, $argument_safe);
  }

}

/********** Via the Web **********/

if(!MCLI::cli_is()){
  $URI = MStrings::sub_before($_SERVER['REQUEST_URI'], "?");
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

/**Robots.txt*/
if($CLASS == "robots.txt"){
  header('Content-Type: text');
  require(SERVER_ROOT."/". APPLICATION."/".APPLICATION_CONTROLLER."/".APPLICATION_ROBOTS_TXT_CONTROLLER);
  exit;
}

/**Action*/
elseif($CLASS == APPLICATION_ACTION){

  //Check if the controller and class exist
  if(!file_exists(SERVER_ROOT."/".APPLICATION."/".APPLICATION_ACTION."/".$FUNCTION.".php")){
    MErrors::error_404();
  }

  //Run the action
  require_once(SERVER_ROOT."/".APPLICATION."/".APPLICATION_ACTION."/".$FUNCTION.".php");

  exit;
}

/**Api*/
elseif($CLASS == APPLICATION_API){

  //Check if the controller and class exist
  if(!file_exists(SERVER_ROOT."/".APPLICATION."/".APPLICATION_API."/".$FUNCTION.".php")){
    MErrors::error_404();
  }

  require_once(SERVER_ROOT."/".APPLICATION."/".APPLICATION_API."/".$FUNCTION.".php");

  exit;
}

/**Cron Job*/
elseif($CLASS == APPLICATION_JOB){

  //Check if the controller and class exist
  if(!file_exists(SERVER_ROOT."/".APPLICATION."/".APPLICATION_JOB."/".$FUNCTION.".php")){
    MErrors::error_404();
  }

  require_once(SERVER_ROOT."/".APPLICATION."/".APPLICATION_JOB."/".$FUNCTION.".php");

  exit;
}

/**Controller*/
else{

  //Used to route
  require_once("routes.php");

  //Check if the controller and class exist
  if(!file_exists(SERVER_ROOT."/".APPLICATION."/".APPLICATION_CONTROLLER."/".$CLASS.".php")){
    MErrors::error_404();
  }

  //Instantiate the controller object
  require_once(SERVER_ROOT."/".APPLICATION."/".APPLICATION_CONTROLLER."/".$CLASS.".php");
  $OBJECT = new $CLASS();

  //If function is set
  if(!empty($FUNCTION)){

    //Check if the function exists
    if(!method_exists($OBJECT, $FUNCTION)){
      MErrors::error_404();
    }

    $OBJECT->$FUNCTION();
  }
}

?>