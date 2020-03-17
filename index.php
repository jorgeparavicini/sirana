<?php

require_once "{$_SERVER['DOCUMENT_ROOT']}/php/builder.php";

$path = parse_url(trim($_SERVER['REQUEST_URI']), PHP_URL_PATH);
$path = pathinfo($path, PATHINFO_FILENAME);
$path = strtolower($path);

if (!empty($path) && $path !== "/") {
  switch ($path) {
    case 'home':
      build("home.php");
      break;

    default:
      build("404.php");
      break;
  }
} else {
  build("home.php");
}
