<?php

require_once "{$_SERVER['DOCUMENT_ROOT']}/php/builder.php";

$uri = parse_url(trim($_SERVER['REQUEST_URI']), PHP_URL_PATH);
$uri = strtolower($uri);
$path = pathinfo($uri, PATHINFO_FILENAME);
$extension = pathinfo($uri, PATHINFO_EXTENSION);

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
