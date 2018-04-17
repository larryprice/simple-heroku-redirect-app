<!DOCTYPE html>
<html>
  <head>
    <title><?php echo getenv('SITENAME') ?> - You will be redirected shortly...</title>
    <meta http-equiv="refresh" content="0;URL='<?php echo getenv('SITEURL') ?>'" />
  </head>
  <body>
    <p>Please visit the official <?php echo getenv('SITENAME') ?> site at <a href="<?php echo getenv('SITEURL') ?>"><?php echo getenv('SITEURL') ?></a>.</p>
  </body>
</html>
