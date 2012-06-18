<?php if(!defined("SERVER_ROOT")){header("/error_404");exit;}

/********** Libraries **********/

function library_framework_load($library) {

  if(empty($library)){
    echo "Error - No library selected.";
  }else{
    require_once(SERVER_ROOT."/".FRAMEWORK."/".FRAMEWORK_LIB."/".$library);
  }

}

function lib_framework_load($library) {
  library_framework_load($library);
}

function library_application_load($library) {

  if(empty($library)){
    echo "Error - No library selected.";
  }else{
    require_once(SERVER_ROOT."/".APPLICATION."/".APPLICATION_LIB."/".$library);
  }

}

function lib_application_load($library) {
  library_application_load($library);
}

/********** Models **********/

function model_load($model, $data = ""){

  if(!empty($data)){
    foreach($data as $key => $value){
      $$key = $value;
    }
  }

  require_once(SERVER_ROOT."/".APPLICATION."/".APPLICATION_MODELS."/".$model);

}

function vo_load($vo){

  require_once(SERVER_ROOT."/".APPLICATION."/".APPLICATION_VOS."/".$vo);

}

/********** Views **********/

function view_load($view, $data = "") {

    if(empty($view)) {
      exit("View not set.");
    }

    if(!empty($data)){
      foreach($data as $key => $value){
	$$key = $value;
      }
    }

    $header = "";
    if(APPLICATION_HEADER != ""){
      $header = SERVER_ROOT."/".APPLICATION."/".APPLICATION_VIEWS."/".APPLICATION_HEADER;
    }

    $footer = "";
    if(APPLICATION_FOOTER != ""){
      $footer = SERVER_ROOT."/".APPLICATION."/".APPLICATION_VIEWS."/".APPLICATION_FOOTER;
    }

    //Construst the Page

    require(SERVER_ROOT."/".FRAMEWORK."/".FRAMEWORK_TEMPLATES."/".FRAMEWORK_HEAD);

    if(!empty($header)){
      require($header);
    }


    require(SERVER_ROOT."/".APPLICATION."/".APPLICATION_VIEWS."/".$view);
    
    if(!empty($footer)){
      require($footer);
    }

    require(SERVER_ROOT."/".FRAMEWORK."/".FRAMEWORK_TEMPLATES."/".FRAMEWORK_FOOT);
}

function frame_load($frame, $data = "") {

    if (empty($frame)) {
        exit("View not set.");
    }

    if(!empty($data)){
      foreach($data as $key => $value){
	$$key = $value;
      }
    }

    //Construst the Frame

    css_framework_load("style_frame.css");
    
    require(SERVER_ROOT."/".FRAMEWORK."/".FRAMEWORK_TEMPLATES."/".FRAMEWORK_HEAD);

    require(SERVER_ROOT."/".APPLICATION."/".APPLICATION_VIEWS."/".$frame);

    require(SERVER_ROOT."/".FRAMEWORK."/".FRAMEWORK_TEMPLATES."/".FRAMEWORK_FOOT);

}

function element_framework_load($element, $data = ""){

    if (empty($element)) {
        exit("Element not set.");
    }

    if(!empty($data)){
      foreach($data as $key => $value){
	$$key = $value;
      }
    }

    require(SERVER_ROOT."/".FRAMEWORK."/".FRAMEWORK_TEMPLATES."/".$element);

}

function element_load($element, $data = ""){

    if (empty($element)) {
        exit("Element not set.");
    }

    if(!empty($data)){
      foreach($data as $key => $value){
	$$key = $value;
      }
    }

    require(SERVER_ROOT."/".APPLICATION."/".APPLICATION_VIEWS."/".$element);

}

/********** CSS **********/

$GLOBALS["LOAD_CSS_FRAMEWORK"] = array();
$GLOBALS["LOAD_CSS_APPLICATION"] = array();

function css_framework_load($css){
  if(file_exists(SERVER_ROOT."/".FRAMEWORK."/" .FRAMEWORK_CSS."/".$css)){
    array_push($GLOBALS["LOAD_CSS_FRAMEWORK"], $css);
  }
}

function css_framework_include($css){
  if(file_exists(SERVER_ROOT."/".FRAMEWORK."/" .FRAMEWORK_CSS."/".$css)){
    $src = "/".FRAMEWORK."/" .FRAMEWORK_CSS."/".$css;
    echo '<link href="'.$src.'?'.FRAMEWORK_VERSION.'" type="text/css" rel="stylesheet" />';
  }
}

function css_application_load($css){
  if(file_exists(SERVER_ROOT."/".APPLICATION."/" .APPLICATION_CSS."/".$css)){
    array_push($GLOBALS["LOAD_CSS_APPLICATION"], $css);
  }
}

function css_application_include($css){
  if(file_exists(SERVER_ROOT."/".APPLICATION."/" .APPLICATION_CSS."/".$css)){
    $src = "/".APPLICATION."/" .APPLICATION_CSS."/".$css;
    echo '<link href="'.$src.'?'.APPLICATION_VERSION.'" type="text/css" rel="stylesheet" />';
  }
}

/********** JavaScript **********/

$GLOBALS["LOAD_JS_FRAMEWORK"] = array();
$GLOBALS["LOAD_JS_APPLICATION"] = array();

function js_framework_load($js){
  if(file_exists(SERVER_ROOT."/".FRAMEWORK."/" .FRAMEWORK_JS."/".$js)){
    array_push($GLOBALS["LOAD_JS_FRAMEWORK"], $js);
  }
}

function js_framework_include($js){
  if(file_exists(SERVER_ROOT."/".FRAMEWORK."/" .FRAMEWORK_JS."/".$js)){
    $src = "/".FRAMEWORK."/" .FRAMEWORK_JS."/".$js;
    echo '<script src="'.$src.'?'.FRAMEWORK_VERSION.'" type="text/javascript"></script>';
    return '<script src="'.$src.'?'.FRAMEWORK_VERSION.'" type="text/javascript"></script>';
  }
}

function js_application_load($js){
  if(file_exists(SERVER_ROOT."/".APPLICATION."/" .APPLICATION_JS."/".$js)){
    array_push($GLOBALS["LOAD_JS_APPLICATION"], $js);
  }
}

function js_application_include($js){
  if(file_exists(SERVER_ROOT."/".APPLICATION."/" .APPLICATION_JS."/".$js)){
    $src = "/".APPLICATION."/" .APPLICATION_JS."/".$js;
    echo '<script src="'.$src.'?'.APPLICATION_VERSION.'" type="text/javascript"></script>';
  }
}

/********** Images **********/

function img_framework_load($img){
  if(file_exists(SERVER_ROOT."/".FRAMEWORK."/".FRAMEWORK_IMG."/".$img)){
    return "/".FRAMEWORK."/".FRAMEWORK_IMG."/".$img."?".FRAMEWORK_VERSION;
  }
}

function img_application_load($img){
  if(file_exists(SERVER_ROOT."/".APPLICATION."/".APPLICATION_IMG."/".$img)){
    return "/".APPLICATION."/".APPLICATION_IMG."/".$img."?".APPLICATION_VERSION;
  }
}

function icon_framework_load($icon){
  return img_framework_load("icons/".$icon);
}

?>