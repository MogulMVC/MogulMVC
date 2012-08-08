<?php if(!defined('SERVER_ROOT')){header('/error_404');exit;}?>

<div class="MHoverMessage">  
  <div class="MIconWarning left"/></div>
  <h3 id="warning_title" class="bold red"><?php echo $title; ?></h3>
  <p id="warning_description"><?php echo $description; ?></p>
</div>

<?php if($bg == "white"):?>
  <div class="modal_bg_white"></div>
<?php endif;?>

<?php if($bg == "black"):?>
  <div class="modal_bg_black"></div>
<?php endif;?>