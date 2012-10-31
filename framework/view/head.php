<?php
if (!defined('SERVER_ROOT')) {header('/error_404');
	exit ;
}
?>
<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	
	<?php if(!empty($page_title)): ?>
		<title><?php echo $page_title . " - " . APPLICATION_NAME; ?></title>
		<meta name="title" content="<?php echo $page_title . " - " . APPLICATION_NAME; ?>" />
	<?php else: ?>
		<title><?php echo APPLICATION_NAME; ?></title>
		<meta name="title" content="<?php echo APPLICATION_NAME; ?>" />
	<?php endif; ?>
	
	<?php if(!empty($page_description)): ?>
		<meta name="description" content="<?php echo $page_description; ?>" />
	<?php endif; ?>
	
	<?php if(!empty($page_keywords)): ?>
		<meta name="keywords" content="<?php echo $page_keywords; ?>" />
	<?php endif; ?>
	
	<?php if(defined('APPLICATION_FAVICON') && constant('APPLICATION_FAVICON') !== ''): ?>
		<link rel="shortcut icon" href="<?php echo '/' . APPLICATION . '/' . APPLICATION_IMG . '/' . APPLICATION_FAVICON . '?' . APPLICATION_VERSION; ?>" />
	<?php endif; ?>

	<?php
	require ('head_css.php');
	require ('head_js.php');
	?>

</head>

<body>