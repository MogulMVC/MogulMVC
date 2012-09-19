<?php
if (!defined('SERVER_ROOT')) {header('/error_404');
	exit ;
}
?>

<?php
// JavaScript

// Third Party JavaScript/jQuery Libraries
MLoad::js_framework_include('3rdparty/jquery.js');
MLoad::js_framework_include('3rdparty/jquery.ui.js');
MLoad::js_framework_include('3rdparty/jquery.ui.touch.js');
MLoad::js_framework_include('3rdparty/jquery.hashchange.js');
MLoad::js_framework_include('3rdparty/jquery.easytabs.js');
MLoad::js_framework_include('3rdparty/jquery.scrollTo.js');
MLoad::js_framework_include('3rdparty/jquery.smartslider.js');
MLoad::js_framework_include('3rdparty/html5shiv.js');

// Custom/Forked JavaScript/jQuery Libraries
MLoad::js_framework_include('core/jquery.MTip.js');

MLoad::js_framework_include('core/config.js');
MLoad::js_framework_include('core/functions.js');
MLoad::js_framework_include('core/setup.js');

// Autoload Framework JavaScript
foreach ($AUTOLOAD_JS_FRAMEWORK as $JS) {
	MLoad::js_framework_include($JS);
}

// Autoload Application JavaScript
foreach ($AUTOLOAD_JS_APPLICATION as $JS) {
	MLoad::js_application_include($JS);
}

// Include all JavaScript file that were loaded with the js_framework_load function
foreach ($GLOBALS['LOAD_JS_FRAMEWORK'] as $JS) {
	MLoad::js_framework_include($JS);
}

// Include all JavaScript file that were loaded with the js_application_load function
foreach ($GLOBALS['LOAD_JS_APPLICATION'] as $JS) {
	MLoad::js_application_include($JS);
}
?>

<?php MLoad::php_framework('ui/MMessages.php'); ?>

<!--[if lt IE 8]>
<?php MMessages::warning('Upgrade Internet Explorer', APPLICATION_NAME . ' is not supported on Internet Explorer 7 or below. Please upgrade to Internet Explorer 8 or above.'); ?>
<![endif]-->

<noscript>
	<?php MMessages::warning('JavaScript is Disabled', 'Please enable JavaScript or upgrade to a JavaScript-capable browser.'); ?>
</noscript>

</body>

</html>
