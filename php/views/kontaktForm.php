<?php

if (!isset($_POST['vorname']) || empty($_POST['vorname'])) {
  displayError("Bitte geben Sie Ihren Vorname an");
  return;
}
$vorname = htmlspecialchars($_POST['vorname']);

if (!isset($_POST['nachname']) || empty($_POST['nachname'])) {
  displayError("Bitte geben Sie Ihren Nachname an");
  return;
}
$nachname = htmlspecialchars($_POST['nachname']);

if (!isset($_POST['email']) || empty($_POST['email'])) {
  displayError("Bitte geben Sie Ihre Email Adresse an");
  return;
}
if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
  displayError("Bitte geben Sie eine korrekte Email Adresse an");
  return;
}
$email = htmlspecialchars($_POST['email']);

if (!isset($_POST['betreff']) || empty($_POST['betreff'])) {
  displayError("Bitte geben Sie den Betreff an");
  return;
}
if (strlen($_POST['betreff']) < 5) {
  displayError("Der Betreff soll mindestens 5 Charakteren lang sein");
  return;
}
if (strlen($_POST['betreff']) > 150) {
  displayError("Der Betreff soll nicht länger als 150 Charakteren lang sein");
  return;
}
$betreff = htmlspecialchars($_POST['betreff']);

if (!isset($_POST['nachricht']) || empty($_POST['nachricht'])) {
  displayError("Bitte geben Sie eine Nachricht an");
  return;
}
if (strlen($_POST['nachricht']) < 15) {
  displayError("Die Nachricht soll mindestens 15 Charakteren lang sein");
  return;
}
if (strlen($_POST['nachricht']) > 2500) {
  displayError("Die Nachricht soll nicht länger als 2500 Charakteren lang sein");
  return;
}
$nachricht = htmlspecialchars($_POST['nachricht']);
$nachricht = wordwrap($nachricht, 70, "\r\n");

$headers = [
  "From" => $email,
  "X-Mailer" => "KontaktFormular"
];

if (!mail("info@sirana.ch", $betreff, $nachricht, $headers)) {
  displayError("Es konnte keine Verbindung zum Mailserver erstellt werden");
} else {
  displaySuccess();
}

function displayError($errorMsg)
{
  ?>
  <div class="kontaktForm">
    <div class="page">
      <div class="pageContent">
        <div class="center">
          <h2 class="title">Leider hat das nicht geklappt</h2>
          <p><?php echo $errorMsg ?></p>
          <a href="javascript:history.back()" class="button">Zurück</a>
        </div>
      </div>
    </div>
  </div>
  <?php
}

function displaySuccess()
{
  ?>
  <div class="kontaktForm">
    <div class="page">
      <div class="pageContent">
        <div class="center">
          <h2 class="title">Ihre Nachricht wurde gesendet</h2>
          <p>Wir werden uns so rasch wie möglich bei Ihnen melden.</p>
          <a href="home" class="button">Zurück</a>
        </div>
      </div>
    </div>
  </div>
  <?php
}
