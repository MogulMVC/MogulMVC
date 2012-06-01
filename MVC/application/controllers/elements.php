<?php

/**
*
* All interface elements easy to view
* @Author Alan James - alanjames1987@gmail.com
*
*/

class elements {

  function index(){

    library_framework_load("messages.php");
    library_framework_load("swf.php");

    /** Required Page Elements */
    $data['page_title'] = "Elements";
    view_load("elements.php", $data);
  }

}

?>