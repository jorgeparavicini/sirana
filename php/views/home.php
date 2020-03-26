<?php
require_once "{$_SERVER['DOCUMENT_ROOT']}/php/models/Resources.php";
?>

  <section class="scroll-panel" data-section-name="start" id="starterPage">
    <div class="header" id="starterLogo">
      <div class="content">
        <div id="imageWrapper">
          <img src="/img/logos/sirana_catering/Sirana_Catering_Logo_schwarz.png" alt="Sirana Logo">
        </div>
      </div>
    </div>
    <img id="animationFruit" src="<?php echo Resources::getRandomFruitAnimation() ?>" alt="Animation Fruit">
  </section>
  <section class="scroll-panel" data-section-name="home">

    <header id="header" class="header">
      <div class="content">
        <div id="hamburgerButton">
          <span></span>
          <span></span>
          <span></span>
        </div>
        <div id="imageWrapper">
          <img id="starterLogo" src="/img/logos/sirana_catering/Sirana_Catering_Logo_schwarz.png" alt="Sirana Logo">
        </div>
        <nav>
          <div>
            <a>Home</a>
            <a>Angebot</a>
            <a>Team</a>
            <a>Kontakt</a>
          </div>
        </nav>
      </div>
    </header>

    <div id="hiddenHeader" class="header hidden removed">
      <div class="content">
        <div id="imageWrapper">
          <img id="starterLogo" src="/img/logos/sirana_catering/Sirana_Catering_Logo_schwarz.png" alt="Sirana Logo">
        </div>
      </div>
    </div>
    <div id="body">
      <div id="content">
        <div class="page">
          <div class="pageContent">
            <div class="gallery">
              <img src="/img/food.jpg" alt="Food">
              <img src="/img/food6.jpg" alt="Food">
              <img src="/img/food7.jpg" alt="Food">
            </div>
            <h2 class="title">Gastgeber aus Leidenschaft</h2>
            <h3 class="subtitle">freude & genuss wo immer sie sind</h3>
            <p class="intro">Die Gastronomie wird stets dynamischer -</p>
            <p class="intro">Sirana Catering bringt Ihre Wünsche zu Ihnen nachhause oder wo immer Sie sind...</p>
            <p class="intro">Lassen Sie uns Ihre Vorstellungen wissen und wir zaubern Ihren Wunschanlass</p>

            <a href="#" class="button">Zum Angebot</a>
          </div>
        </div>
        <div class="page">
          <div class="pageContent">
            <h2>Angebot</h2>
          </div>
        </div>
      </div>
    </div>

  </section>

  <script
    src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous"></script>

  <script src="/js/jquery.js"></script>
  <script src="/js/jquery.scrollify.js"></script>
  <script src="/js/scrolling.js"></script>
  <script>
    let burger = $("#hamburgerButton");
    let header = $("#header");
    burger.click(function () {
      header.toggleClass("open");
    })
  </script>
<?php
