<?php

require_once "{$_SERVER['DOCUMENT_ROOT']}/php/builder.php";

$uri = parse_url(trim($_SERVER['REQUEST_URI']), PHP_URL_PATH);
$uri = strtolower($uri);
$path = pathinfo($uri, PATHINFO_FILENAME);
$extension = pathinfo($uri, PATHINFO_EXTENSION);

if (!empty($path) && $path !== "/") {
  switch ($path) {
    case 'home':
      build("home.php", "Sirana | Ihr Anbieter für Catering, Eventservice und Störkoch aus Glarus", true);
      break;

    case 'angebot':
      build("angebot.php", "Sirana | Angebot");
      break;

    case 'team':
      build('team.php', "Sirana | Team");
      break;

    case 'kontakt':
      build('kontakt.php', "Sirana | Kontakt");
      break;

    case 'kontakt_form':
      build('kontaktForm.php', "Sirana | KontaktForm");
      break;

    case 'datenschutz':
      build('datenschutz.php', "Sirana | Datenschutz");
      break;

    case 'impressum':
      build('impressum.php', "Sirana | Impressum");
      break;

    default:
      build("404.php", "Sirana | 404");
      break;
  }
} else {
  build("home.php", "Sirana | Ihr Anbieter für Catering, Eventservice und Störkoch aus Glarus", true);
}
