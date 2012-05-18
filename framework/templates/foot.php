<?php if(!defined("SERVER_ROOT")){header("/error_404");exit;}?>

  <?php library_framework_load("messages.php");?>

  <!--[if lt IE 8]>
    <?php message_warning("Upgrade Internet Explorer", APPLICATION_NAME . " is not supported on Internet Explorer 7 or below. Please upgrade to Internet Explorer 8 or above."); ?>
  <![endif]-->

  <noscript>
    <?php message_warning("JavaScript is Disabled", "Please enable JavaScript or upgrade to a JavaScript-capable browser."); ?>
  </noscript>

  </body>

</html>