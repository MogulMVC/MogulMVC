<?php

class test {

  function testtime(){
  
    MLoad::lib_framework("MTime.php");
    
    $seconds = MURL::segment(3);
    
    echo MTime::sec2hms($seconds);
  
  }

}

?>