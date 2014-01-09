<?php 
// 'xhtml11' 'xhtml1-strict' 'xhtml1-transitional' 'xhtml1-frame' 'html5' 'html4-strict' 'html4-transitional' 'html4-frame'
echo $GLOBALS['DOCTYPE']['html4-transitional'];
?>

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	
	<?php if(!empty($page_title)): ?>
	<title><?php echo $page_title . ' - ' . APPLICATION_NAME; ?></title>
	<meta name="title" content="<?php echo $page_title . ' - ' . APPLICATION_NAME; ?>" />
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
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

	<link rel="apple-touch-icon" href="<?php echo '/' . APPLICATION_IMG; ?>/apple-touch-icon.png" />
	<link rel="apple-touch-icon" sizes="57x57" href="<?php echo '/' . APPLICATION_IMG; ?>/apple-touch-icon-57x57-precomposed.png" />
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo '/' . APPLICATION_IMG; ?>/apple-touch-icon-72x72-precomposed.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo '/' . APPLICATION_IMG; ?>/apple-touch-icon-114x114-precomposed.png" />
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo '/' . APPLICATION_IMG; ?>/apple-touch-icon-144x144-precomposed.png" />

	<?php
	MLoad::template_framework('load_component');
	MLoad::template_framework('load_css');
	MLoad::template_framework('load_js');
	?>

</head>

<body>