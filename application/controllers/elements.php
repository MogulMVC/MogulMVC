<?php

/**
*
* All interface elements easy to view
* @Author Alan James - alanjames1987@gmail.com
*
*/

class elements {

  function index(){

    MLoad::lib_framework("MMessages.php");
    MLoad::lib_framework("MSWF.php");

    /** Required Page Elements */
    $data['page_title'] = "Elements";
    MLoad::view("elements.php", $data);
  }

}

?>