<?php

/*

  <?php

  // css-server.php
  // usage: <link rel="stylesheet" href="css-server.php" type="text/css">

  header ("Content-type: text/css");

  if ($_SERVER['SERVER_PROTOCOL'] == 'HTTP/1.0') {
     // this makes HTTP/1.0 shared caches ignore this object
     header ("Expires: Sun, 03 Oct 2004 12:00:00 GMT");
     header ("Cache-Control: no-cache");
     header ("Pragma: no-cache");
  } else {
     // this makes HTTP/1.1 private caches cache this object
     header ("Cache-Control: private, max-age=86400");
  }

  $skin = url_of_appropriate_css_file ();

  $contents = "@import url(\"$skin\");\n";
  header ("Content-Length: " . strlen ($contents));

  echo $contents;

  ?>

*/

$section = $_GET['section'];

include './layout.css';
include './nav.css';
if ( isset ( $section ) ) {
  @include './_' . $section . '.css';
}

?>
