<?php
if (!defined('BACKEND_ROOT')) {
	header('Location: /error_404');
	exit ;
}
?>

<?php
if (!isset($bg)) {
	$bg = '';
}
?>

<div class="MHoverMessage">  
  <div class="MIconComplete150x150 left"/></div>
  <h3 id="complete_title" class="bold"><?php echo $title; ?></h3>
  <p id="complete_description"><?php echo $description; ?></p>
</div>

<?php if($bg == 'white'):?>
  <div class="MModelBGWhite"></div>
<?php endif; ?>

<?php if($bg == 'black'):?>
  <div class="MModelBGBlack"></div>
<?php endif; ?>