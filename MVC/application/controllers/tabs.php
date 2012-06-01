<?php

/**
*
* @Author Alan James - alanjames1987@gmail.com
*
*/

class tabs {

  function index(){
    $data['page_title'] = "Tabs";
    view_load("tabs.php", $data);
  }

  function old(){
    $data['page_title'] = "Tabs";
    view_load("tabs_old.php", $data);
  }

}

?>