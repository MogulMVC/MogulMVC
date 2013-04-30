<?php
if (!defined('SERVER_ROOT')) {
	header('/error_404');
	exit ;
}
?>
	<!--[if lt IE 8]>
		<?php MLoad::template_framework('message_warning', array('title' => 'Upgrade Internet Explorer', 'description' => APPLICATION_NAME . ' is not supported on Internet Explorer 7 or below. Please upgrade to Internet Explorer 8 or above.')); ?>
	<![endif]-->
	
	<noscript>
		<?php MLoad::template_framework('message_warning', array('title' => 'JavaScript is Disabled', 'description' => 'Please enable JavaScript or upgrade to a JavaScript-capable browser.')); ?>
	</noscript>

</body>

</html>
