<?php if(!defined("SERVER_ROOT")){header("/error_404");exit;}

function url_current() {
  return "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
}

function url_segment($segment) {
  $uri = explode("/",  $_SERVER['REQUEST_URI']);

  if(!empty($uri[$segment])){
    return string_sub_before($uri[$segment], "?");
  }else{
    return NULL;
  }

}

function curl($url){
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
  $data = curl_exec($ch);
  curl_close($ch);
  return $data;
}

?>
