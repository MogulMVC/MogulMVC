<?php

/**
*
* All interface elements easy to view
* @Author Alan James - alanjames1987@gmail.com
*
*/

class Elements {

  function index(){

    MLoad::php_framework('ui/MMessages.php');
    MLoad::php_framework('ui/MSWF.php');

    /** Required Page Elements */
    $data['page_title'] = 'Elements';
    MLoad::view('elements.php', $data);
  }

}

?>