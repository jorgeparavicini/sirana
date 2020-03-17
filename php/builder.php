<?php

function build(string $fileName)
{
  ?>
  <!DOCTYPE html>
  <html lang="en">
  <?php

  // HEAD
  require_once "{$_SERVER['DOCUMENT_ROOT']}/php/static/head.php";
  build_head($fileName);
  ?>
  </html>
  <?php


// BODY
  echo "<body>";
  include_once "{$_SERVER['DOCUMENT_ROOT']}/php/views/{$fileName}";
  echo "</body>";
}

?>
