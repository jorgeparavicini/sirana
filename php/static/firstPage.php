<?php

require_once "{$_SERVER['DOCUMENT_ROOT']}/php/models/Resources.php";

?>

<div id="overlay">
  <img class="headerImage" id="starterLogo" src="/img/logos/sirana_catering/Sirana_Catering_Logo_schwarz.png"
       alt="Sirana Logo">
  <img class="animation" src="<?php echo Resources::getRandomFruitAnimation() ?>" alt="Fruit Animation">
</div>

<script>

  $(function () {
    let page = $(".page");
    page.hide();
    let overlay = $("#overlay");
    let duration = 3000;

    setTimeout(function () {
      overlay.addClass("closed");
      page.show();
    }, duration);
  })
</script>
