<?php
require_once "{$_SERVER['DOCUMENT_ROOT']}/php/models/Resources.php";
?>
  <div id="body">
    <div id="content">
      <div class="page">
        <div class="pageContent">
          <img class="mainImage" src="/img/main.JPG" alt="Koch">
          <h2 class="title main top-space">Gastgeber aus Leidenschaft</h2>
          <h3 class="subtitle bot-space">freude & genuss wo immer sie sind</h3>

          <div class="split">
            <div class="right">
              <h2 class="title">Wieso Sirana</h2>
              <p>Sirana ist ein innovatives Catering Unternehmen mit Sitz in Glarus. Unsere Stärke ist nicht nur die
                kulinarische Vielfalt, sondern insbesondere auch die Individualität unsere Kundenschaft. Um Ihre
                Zufriedenheit sicherzustellen, betrachten wir jeden Anlass als neues Projekt und passen dieses Ihren
                individuellen Wünschen an.</p>
            </div>
            <img src="/img/barkeeper.jpg" alt="Barkeeper" class="left">
          </div>
          <p class="quote">"Wir machen alles, um Ihnen eine Freude zu bereiten und teilen mit Ihnen die Leidenschaft
            fürs Essen."</p>
          <img class="fruit" src="<?php echo Resources::getRandomStaticFruit() ?>" alt="Fruit">
          <div class="red">
            <h2 class="title">Unsere Philosophie</h2>
            <p>Familie, Freunde und die Leidenschaft für gutes Essen sind ein grosser Teil unserer Philosophy und bilden
              den Ursprung unserer Unternehmung. Kleine Familienfesten und Anlässe mit Freunden bringen den Ball ins
              Rollen... Aus Hobby wird Leidenschaft, asu Leidenschaft wird Beruf...</p>
          </div>
          <h2 class="title kochstil">Unser Kochstil</h2>
          <p>Mit frischen Zutaten von wo möglich lokalen Partnern kreiren wir saisonale Gerichte mit internationalem
            Touch, die Sie auf eine kulinarische Weltreise mitnehmen. Wir servieren Speiseen, die Freude bereiten. Sie
            sollen geschmacklich überzeugen und Ihren Wünschen gerecht werden.</p>
          <p class="quote">Lassen Sie uns also wissen, mit welchen Gerichten wir Ihnen eine besondere Freude bereiten
            können.</p>
        </div>
      </div>
    </div>
  </div>
<?php
