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

  /********** Models / VOs **********/

  public static function model($model){

    if(!empty($model)){
      require_once(SERVER_ROOT."/".APPLICATION."/".APPLICATION_MODEL."/".$model);
    }
    
  }

  public static function vo($vo){
  
    if(!empty($vo)){
      require_once(SERVER_ROOT."/".APPLICATION."/".APPLICATION_VO."/".$vo);
    }
    
  }

  /********** Views **********/

  public static function view($view, $data = "") {

      if(!empty($data)){
	foreach($data as $key => $value){
	  $$key = $value;
	}
      }

      $header = "";
      if(APPLICATION_HEADER != ""){
	$header = SERVER_ROOT."/".APPLICATION."/".APPLICATION_VIEW."/".APPLICATION_HEADER;
      }

      $footer = "";
      if(APPLICATION_FOOTER != ""){
	$footer = SERVER_ROOT."/".APPLICATION."/".APPLICATION_VIEW."/".APPLICATION_FOOTER;
      }

      //Construst the Page

      require(SERVER_ROOT."/".FRAMEWORK."/".FRAMEWORK_TEMPLATE."/".FRAMEWORK_HEAD);

      if(!empty($header)){
	require($header);
      }

      if(!empty($view)) {
	require(SERVER_ROOT."/".APPLICATION."/".APPLICATION_VIEW."/".$view);
      }
      
      if(!empty($footer)){
	require($footer);
      }

      require(SERVER_ROOT."/".FRAMEWORK."/".FRAMEWORK_TEMPLATE."/".FRAMEWORK_FOOT);
  }

  public static function frame($frame, $data = "") {

      if(!empty($data)){
	foreach($data as $key => $value){
	  $$key = $value;
	}
      }

      //Construst the Frame

      self::css_framework("core/style_frame.css");
      
      require(SERVER_ROOT."/".FRAMEWORK."/".FRAMEWORK_TEMPLATE."/".FRAMEWORK_HEAD);

      if(!empty($frame)) {
	require(SERVER_ROOT."/".APPLICATION."/".APPLICATION_VIEW."/".$frame);
      }

      require(SERVER_ROOT."/".FRAMEWORK."/".FRAMEWORK_TEMPLATE."/".FRAMEWORK_FOOT);

  }

  public static function element_framework($element, $data = ""){

      if(!empty($data)){
	foreach($data as $key => $value){
	  $$key = $value;
	}
      }
      
      if(!empty($element)) {
	require(SERVER_ROOT."/".FRAMEWORK."/".FRAMEWORK_TEMPLATE."/".$element);
      }

  }

  public static function element_application($element, $data = ""){

      if(!empty($data)){
	foreach($data as $key => $value){
	  $$key = $value;
	}
      }

      if(!empty($element)) {
	require(SERVER_ROOT."/".APPLICATION."/".APPLICATION_VIEW."/".$element);
      }
      
  }

  /********** PHP Libraries **********/

  public static function php_framework($library) {

    if(!empty($library)){
      require_once(SERVER_ROOT."/".FRAMEWORK."/".FRAMEWORK_LIB_PHP."/".$library);
    }

  }

  public static function php_application($library) {

    if(!empty($library)){
      require_once(SERVER_ROOT."/".APPLICATION."/".APPLICATION_LIB."/".$library);
    }

  }
  
  /********** JavaScript Libraries **********/

  public static function js_framework($js){
  
    if(!file_exists(SERVER_ROOT."/".FRAMEWORK."/" .FRAMEWORK_LIB_JS."/".$js)){
      exit("error - ".$js." not found.");
    }
  
    array_push($GLOBALS["LOAD_JS_FRAMEWORK"], $js);

  }

  public static function js_framework_include($js){
  
    if(!file_exists(SERVER_ROOT."/".FRAMEWORK."/" .FRAMEWORK_LIB_JS."/".$js)){
      exit("error - ".$js." not found.");
    }
 
    $src = "/".FRAMEWORK."/" .FRAMEWORK_LIB_JS."/".$js;
    echo '<script src="'.$src.'?'.FRAMEWORK_VERSION.'"></script>';

  }

  public static function js_application($js){
  
    if(!file_exists(SERVER_ROOT."/".APPLICATION."/" .APPLICATION_JS."/".$js)){
      exit("error - ".$js." not found.");
    }
  
    array_push($GLOBALS["LOAD_JS_APPLICATION"], $js);

  }

  public static function js_application_include($js){
  
    if(!file_exists(SERVER_ROOT."/".APPLICATION."/" .APPLICATION_JS."/".$js)){
      exit("error - ".$js." not found.");
    }
    
    $src = "/".APPLICATION."/" .APPLICATION_JS."/".$js;
    echo '<script src="'.$src.'?'.APPLICATION_VERSION.'"></script>';
  
  }
  
  /********** CSS Libraries **********/

  public static function css_framework($css){
  
    if(!file_exists(SERVER_ROOT."/".FRAMEWORK."/" .FRAMEWORK_LIB_CSS."/".$css)){
      exit("error - ".$css." not found.");
    }
  
    array_push($GLOBALS["LOAD_CSS_FRAMEWORK"], $css);
    
  }

  public static function css_framework_include($css){
  
    if(!file_exists(SERVER_ROOT."/".FRAMEWORK."/" .FRAMEWORK_LIB_CSS."/".$css)){
      exit("error - ".$css." not found.");
    }

    $src = "/".FRAMEWORK."/" .FRAMEWORK_LIB_CSS."/".$css;
    echo '<link href="'.$src.'?'.FRAMEWORK_VERSION.'" type="text/css" rel="stylesheet" />';
    
  }

  public static function css_application($css){
  
    if(!file_exists(SERVER_ROOT."/".APPLICATION."/" .APPLICATION_CSS."/".$css)){
      exit("error - ".$css." not found.");
    }
    
    array_push($GLOBALS["LOAD_CSS_APPLICATION"], $css);
  
  }

  public static function css_application_include($css){
  
    if(!file_exists(SERVER_ROOT."/".APPLICATION."/" .APPLICATION_CSS."/".$css)){
      exit("error - ".$css." not found.");
    }
  
    $src = "/".APPLICATION."/" .APPLICATION_CSS."/".$css;
    echo '<link href="'.$src.'?'.APPLICATION_VERSION.'" type="text/css" rel="stylesheet" />';

  }

  /********** Images **********/

  public static function img_framework($img){
  
    if(!file_exists(SERVER_ROOT."/".FRAMEWORK."/".FRAMEWORK_IMG."/".$img)){
      exit("error - ".$img." not found.");
    }
    
    return "/".FRAMEWORK."/".FRAMEWORK_IMG."/".$img."?".FRAMEWORK_VERSION;
    
  }

  public static function img_application($img){
  
    if(!file_exists(SERVER_ROOT."/".APPLICATION."/".APPLICATION_IMG."/".$img)){
      exit("error - ".$img." not found.");
    }
      
    return "/".APPLICATION."/".APPLICATION_IMG."/".$img."?".APPLICATION_VERSION;
    
  }

  public static function icon_framework($icon){
    return self::img_framework("icons/".$icon);
  }

}

?>