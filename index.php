<?php

require_once "{$_SERVER['DOCUMENT_ROOT']}/php/builder.php";

$uri = parse_url(trim($_SERVER['REQUEST_URI']), PHP_URL_PATH);
$uri = strtolower($uri);
$path = pathinfo($uri, PATHINFO_FILENAME);
$extension = pathinfo($uri, PATHINFO_EXTENSION);

if (!empty($path) && $path !== "/") {
  switch ($path) {
    case 'home':
      build("home.php", true);
      break;

    case 'angebot':
      build("angebot.php");
      break;

    case 'team':
      build('team.php');
      break;

    case 'kontakt':
      build('kontakt.php');
      break;

    case 'kontakt_form':
      build('kontaktForm.php');
      break;

    case 'datenschutz':
      build('datenschutz.php');
      break;

    case 'impressum':
      build('impressum.php');
      break;

    default:
      build("404.php");
      break;
  }
} else {
  build("home.php", true);
}
