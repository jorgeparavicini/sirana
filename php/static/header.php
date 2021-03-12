<?php
function build_header(bool $isTitlePage = false)
{
  ?>
  <header id="header" class="header <?php if (!$isTitlePage) echo "sticky"; else echo "title_page"?>">
    <div id="hamburgerButton">
      <span></span>
      <span></span>
      <span></span>
    </div>
    <?php
    if (!$isTitlePage) {
      ?>
      <img src="/img/logos/sirana_catering/Sirana_Catering_Logo_schwarz.png" alt="Sirana Logo">
      <?php
    }
    ?>
    <nav>
      <div>
        <a href="/home">Home</a>
        <a href="/catering">Catering</a>
        <a href="/team">Team</a>
        <a href="/Gallerie">Gallerie</a>
        <a href="/kontakt">Kontakt</a>
      </div>
    </nav>
  </header>
  <?php
}

?>

