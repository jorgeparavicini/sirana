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
  <?php
// BODY
  echo "<body>";

  if (!isset($_SESSION['visited']) || $_SESSION['visited'] === false) {
    $_SESSION['visited'] = true;
    require_once "{$_SERVER['DOCUMENT_ROOT']}/php/static/firstPage.php";
  }

  require_once "{$_SERVER['DOCUMENT_ROOT']}/php/static/header.php";

  if (file_exists("{$_SERVER['DOCUMENT_ROOT']}/php/views/{$fileName}")) {
  include_once "{$_SERVER['DOCUMENT_ROOT']}/php/views/{$fileName}";
} else {
  include_once "{$_SERVER['DOCUMENT_ROOT']}/php/views/404.php";
}
  echo "</body>";
  echo "</html>";
}

?>
