<?php if(!defined("SERVER_ROOT")){header("/error_404");exit;}

/**
*
* @Author Alan James - alanjames1987@gmail.com
*
*/

$GLOBALS["LOAD_CSS_FRAMEWORK"] = array();
$GLOBALS["LOAD_CSS_APPLICATION"] = array();

$GLOBALS["LOAD_JS_FRAMEWORK"] = array();
$GLOBALS["LOAD_JS_APPLICATION"] = array();

class MLoad {

  /********** Libraries **********/

  public static function library_framework($library) {

    if(empty($library)){
      echo "Error - No library selected.";
    }else{
      require_once(SERVER_ROOT."/".FRAMEWORK."/".FRAMEWORK_LIB."/".$library);
    }

  }

  public static function lib_framework($library) {
    self::library_framework($library);
  }

  public static function library_application($library) {

    if(empty($library)){
      echo "Error - No library selected.";
    }else{
      require_once(SERVER_ROOT."/".APPLICATION."/".APPLICATION_LIB."/".$library);
    }

  }

  public static function lib_application($library) {
    self::library_application($library);
  }

  /********** Models **********/

  public static function model($model, $data = ""){

    if(!empty($data)){
      foreach($data as $key => $value){
	$$key = $value;
      }
    }

    require_once(SERVER_ROOT."/".APPLICATION."/".APPLICATION_MODELS."/".$model);

  }

  public static function vo($vo){
  
    require_once(SERVER_ROOT."/".APPLICATION."/".APPLICATION_VOS."/".$vo);
    
  }

  /********** Views **********/

  public static function view($view, $data = "") {

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

  public static function frame($frame, $data = "") {

      if (empty($frame)) {
	  exit("View not set.");
      }

      if(!empty($data)){
	foreach($data as $key => $value){
	  $$key = $value;
	}
      }

      //Construst the Frame

      self::css_framework("style_frame.css");
      
      require(SERVER_ROOT."/".FRAMEWORK."/".FRAMEWORK_TEMPLATES."/".FRAMEWORK_HEAD);

      require(SERVER_ROOT."/".APPLICATION."/".APPLICATION_VIEWS."/".$frame);

      require(SERVER_ROOT."/".FRAMEWORK."/".FRAMEWORK_TEMPLATES."/".FRAMEWORK_FOOT);

  }

  public static function element_framework($element, $data = ""){

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

  public static function element_application($element, $data = ""){

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

  public static function css_framework($css){
    if(file_exists(SERVER_ROOT."/".FRAMEWORK."/" .FRAMEWORK_CSS."/".$css)){
      array_push($GLOBALS["LOAD_CSS_FRAMEWORK"], $css);
    }
  }

  public static function css_framework_include($css){
    if(file_exists(SERVER_ROOT."/".FRAMEWORK."/" .FRAMEWORK_CSS."/".$css)){
      $src = "/".FRAMEWORK."/" .FRAMEWORK_CSS."/".$css;
      echo '<link href="'.$src.'?'.FRAMEWORK_VERSION.'" type="text/css" rel="stylesheet" />';
    }
  }

  public static function css_application($css){
    if(file_exists(SERVER_ROOT."/".APPLICATION."/" .APPLICATION_CSS."/".$css)){
      array_push($GLOBALS["LOAD_CSS_APPLICATION"], $css);
    }
  }

  public static function css_application_include($css){
    if(file_exists(SERVER_ROOT."/".APPLICATION."/" .APPLICATION_CSS."/".$css)){
      $src = "/".APPLICATION."/" .APPLICATION_CSS."/".$css;
      echo '<link href="'.$src.'?'.APPLICATION_VERSION.'" type="text/css" rel="stylesheet" />';
    }
  }

  /********** JavaScript **********/

  public static function js_framework($js){
    if(file_exists(SERVER_ROOT."/".FRAMEWORK."/" .FRAMEWORK_JS."/".$js)){
      array_push($GLOBALS["LOAD_JS_FRAMEWORK"], $js);
    }
  }

  public static function js_framework_include($js){
    if(file_exists(SERVER_ROOT."/".FRAMEWORK."/" .FRAMEWORK_JS."/".$js)){
      $src = "/".FRAMEWORK."/" .FRAMEWORK_JS."/".$js;
      echo '<script src="'.$src.'?'.FRAMEWORK_VERSION.'" type="text/javascript"></script>';
      return '<script src="'.$src.'?'.FRAMEWORK_VERSION.'" type="text/javascript"></script>';
    }
  }

  public static function js_application($js){
    if(file_exists(SERVER_ROOT."/".APPLICATION."/" .APPLICATION_JS."/".$js)){
      array_push($GLOBALS["LOAD_JS_APPLICATION"], $js);
    }
  }

  public static function js_application_include($js){
    if(file_exists(SERVER_ROOT."/".APPLICATION."/" .APPLICATION_JS."/".$js)){
      $src = "/".APPLICATION."/" .APPLICATION_JS."/".$js;
      echo '<script src="'.$src.'?'.APPLICATION_VERSION.'" type="text/javascript"></script>';
    }
  }

  /********** Images **********/

  public static function img_framework($img){
    if(file_exists(SERVER_ROOT."/".FRAMEWORK."/".FRAMEWORK_IMG."/".$img)){
      return "/".FRAMEWORK."/".FRAMEWORK_IMG."/".$img."?".FRAMEWORK_VERSION;
    }
  }

  public static function img_application($img){
    if(file_exists(SERVER_ROOT."/".APPLICATION."/".APPLICATION_IMG."/".$img)){
      return "/".APPLICATION."/".APPLICATION_IMG."/".$img."?".APPLICATION_VERSION;
    }
  }

  public static function icon_framework($icon){
    return self::img_framework("icons/".$icon);
  }

}

?>