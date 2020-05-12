<?php

function build(string $fileName, bool $buildFront = false)
{
  ?>
  <!DOCTYPE html>
  <html lang="de">
  <?php

  // HEAD
  require_once "{$_SERVER['DOCUMENT_ROOT']}/php/static/head.php";
  build_head($fileName);
  ?>
  <?php
// BODY
  echo "<body>";

  if ($buildFront) {
    require_once "{$_SERVER['DOCUMENT_ROOT']}/php/static/firstPage.php";
  }

  require_once "{$_SERVER['DOCUMENT_ROOT']}/php/static/header.php";

  if (file_exists("{$_SERVER['DOCUMENT_ROOT']}/php/views/{$fileName}")) {
  include_once "{$_SERVER['DOCUMENT_ROOT']}/php/views/{$fileName}";
} else {
  include_once "{$_SERVER['DOCUMENT_ROOT']}/php/views/404.php";
}

  require_once "{$_SERVER['DOCUMENT_ROOT']}/php/static/footer.php";
  echo "</body>";
  echo "</html>";
}

?>
