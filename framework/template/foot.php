<?php if(!defined("SERVER_ROOT")){header("/error_404");exit;}?>

  <?php MLoad::lib_framework("MMessages.php");?>

  <!--[if lt IE 8]>
    <?php MMessages::warning("Upgrade Internet Explorer", APPLICATION_NAME . " is not supported on Internet Explorer 7 or below. Please upgrade to Internet Explorer 8 or above."); ?>
  <![endif]-->

  <noscript>
    <?php MMessages::warning("JavaScript is Disabled", "Please enable JavaScript or upgrade to a JavaScript-capable browser."); ?>
  </noscript>

  </body>

</html>