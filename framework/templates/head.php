<?php if(!defined("SERVER_ROOT")){header("/error_404");exit;}?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    
<html xmlns="http://www.w3.org/1999/xhtml">

  <head>

    <meta http-equiv="content-type" content="text/html;charset=utf-8" />

    <?php if(!empty($page_title)): ?>
      <title><?php echo $page_title . " - " . APPLICATION_NAME; ?></title>
      <meta name="title" content="<?php echo $page_title . " - " . APPLICATION_NAME; ?>" />
    <?php else:?>
      <title><?php echo APPLICATION_NAME; ?></title>
      <meta name="title" content="<?php echo APPLICATION_NAME; ?>" />
    <?php endif;?>

    <?php if (!empty($page_description)): ?>
	<meta name="description" content="<?php echo $page_description; ?>" />
    <?php endif; ?>

    <?php if (!empty($page_keywords)): ?>
	<meta name="keywords" content="<?php echo $page_keywords; ?>" />
    <?php endif; ?>

    <?php
    
      require(SERVER_ROOT . "/" . APPLICATION . '/config/autoload.php');
    
      /** CSS */
    
      /* Third Party CSS */ 
      css_framework_include("3rdparty/colorpicker.css");

      /* Custom/Forked CSS */
      css_framework_include("core/style.css");

      //Autoload CSS
      foreach($AUTOLOAD_CSS_FRAMEWORK as $CSS){
	css_framework_include($CSS);
      }
      
      foreach($AUTOLOAD_CSS_APPLICATION as $CSS){
	css_application_include($CSS);
      }
      
      //Include all CSS file that were loaded with the js_framework_load function
      foreach($GLOBALS["LOAD_CSS_FRAMEWORK"] as $CSS){
	css_framework_include($CSS);
      }
      
      //Include all CSS file that were loaded with the js_application_load function
      foreach($GLOBALS["LOAD_CSS_APPLICATION"] as $CSS){
	css_application_include($CSS);
      }

      /** JavaScript */
      
      /* Third Party JavaScript/jQuery Libraries */
      js_framework_include("3rdparty/jquery.js");
      js_framework_include("3rdparty/jquery.ui.js");
      js_framework_include("3rdparty/jquery.ui.touch.js");
      js_framework_include("3rdparty/jquery.hashchange.js");
      js_framework_include("3rdparty/jquery.easytabs.js");
      js_framework_include("3rdparty/jquery.scrollTo.js");
      js_framework_include("3rdparty/colorpicker.js");

      /* Custom/Forked JavaScript/jQuery Libraries */
      js_framework_include("core/jquery.tip.js");
      js_framework_include("core/jquery.htmlAnimate.js");

      js_framework_include("core/config.js");
      js_framework_include("core/functions.js");
      js_framework_include("core/events.js");

      //Autoload JavaScript
      foreach($AUTOLOAD_JS_FRAMEWORK as $JS){
	js_framework_include($JS);
      }
      
      foreach($AUTOLOAD_JS_APPLICATION as $JS){
	js_application_include($JS);
      }

      //Include all JavaScript file that were loaded with the js_framework_load function
      foreach($GLOBALS["LOAD_JS_FRAMEWORK"] as $JS){
	js_framework_include($JS);
      }
      
      //Include all JavaScript file that were loaded with the js_application_load function
      foreach($GLOBALS["LOAD_JS_APPLICATION"] as $JS){
	js_application_include($JS);
      }
	
    ?>

  </head>

  <body>