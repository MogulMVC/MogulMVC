<?php if(!defined('SERVER_ROOT')){header('/error_404');exit;}

$file_hd_string = '';
if(!empty($file_hd)){
  $file_hd_string = '&hd.file=' . $file_hd . '&plugins=hd-1';
}

$thumbnail_srting = '';
if(!empty($thumbnail)){
$thumbnail_srting = '&image=' . $thumbnail;
}

$autostart_string = '';
if($autostart){
  $autostart_string = '&autostart=true';
}

?>

<object width="<?php echo $width;?>" height="<?php echo $height;?>" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000">
  <param name="movie" value="<?php echo '/' . FRAMEWORK . '/' . FRAMEWORK_LIB_AS; ?>/video_player.swf" />
  <param name="allowfullscreen" value="true" />
  <param name="allowscriptaccess" value="always" />
  <param name="wmode" value="transparent" />
  <param name="flashvars" value="file=<?php echo $file;?><?php echo $file_hd_string; ?><?php echo $thumbnail_srting ?><?php echo $autostart_string ?>&dock=false&controlbar.position=over&skin=<?php echo '/' . FRAMEWORK . '/' . FRAMEWORK_LIB_AS; ?>/mogul.zip" />
  <embed
    type="application/x-shockwave-flash"
    width="<?php echo $width;?>"
    height="<?php echo $height;?>"
    src="<?php echo '/' . FRAMEWORK . '/' . FRAMEWORK_LIB_AS; ?>/video_player.swf"
    allowfullscreen="true"
    allowscriptaccess="always"
    wmode="transparent"
    flashvars="file=<?php echo $file;?><?php echo $file_hd_string; ?><?php echo $thumbnail_srting ?><?php echo $autostart_string ?>&dock=false&controlbar.position=over&skin=<?php echo '/' . FRAMEWORK . '/' . FRAMEWORK_LIB_AS; ?>/mogul.zip"
  />
</object>