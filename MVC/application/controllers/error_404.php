<?php

/**
*
* 404 Error
* @Author Alan James - alanjames1987@gmail.com
*
*/

class error_404 {

  function index() {
    /** Required Page Elements */
    $data['page_title'] = "Error 404";
    view_load("error_404.php", $data);
  }

}

?>