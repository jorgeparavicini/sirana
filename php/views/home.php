<?php
require_once "{$_SERVER['DOCUMENT_ROOT']}/php/models/Resources.php";
?>
  <div id="home">
    <div class="img--parent">
      <img class="mainImage" src="/img/titelbild_1.jpg" alt="Koch">
      <img class="logo" src="/img/logos/Sirana_Catering_Logo_weiss.png" alt="logo">
    </div>
    <?php
    require_once "{$_SERVER['DOCUMENT_ROOT']}/php/static/header.php";
    build_header(true);
    ?>
    <div class="pageContent" id="pageContent">
      <h1 class="title main top-space">Gastgeber aus Leidenschaft</h1>
      <h2>"Freude & Genuss wo immer Sie sind"</h2>

      <div class="split">
        <div class="left">
          <h3>Wieso Sirana</h3>
          <p>Jung, dynamisch und kreativ - das ist Sirana Catering. Unsere Stärke ist neben der kulinarischen Vielfalt
            insbesondere auch die Individualität unserer Kundschaft.
            Aus diesem Grund betrachten wir jeden Anlass als neues Projekt und passen diesen Ihren Wünschen an.
            Suchen Sie einen verlässlichen Partner für die Umsetzung Ihrer Ideen, dann sind Sie bei uns genau richtig.
          </p>
        </div>
        <img class="right" src="/img/barkeeper.jpg" alt="Barkeeper">
      </div>
      <p class="quote">"Wir teilen mit Ihnen die Leidenschaft für Ihren Anlass"</p>
      <div id="philosophie" class="banner mainBackground">
        <h3 class="pinkHeader">Unsere Philosophie</h3>
        <p>Familie, Freunde und die Leidenschaft für gutes Essen sind ein grosser Teil unserer Philosophie und bilden
          den
          Ursprung unserer Unternehmung.
          Kleine Familienfeste und Anlässe mit Freunden bringen den Ball ins Rollen. Aus Hobby wird Leidenschaft, aus
          Leidenschaft wird Beruf -
          und somit wird jeder Kunde und jeder Gast Teil unserer Sirana-Familie.</p>
      </div>

      <div class="split">
        <div class="left">
          <h3>Unser <br/> Kochstil</h3>
          <p>Mit frischen Zutaten kreieren wir saisonale Gerichte mit internationalem Touch,
            die Sie auf eine kulinarische Reise mitnehmen. Wir servieren Speisen, die Freude bereiten und geschmacklich
            sowie visuell überzeugen.
            Bei der Menübesprechung Ihres Events gehen wir voll und ganz auf Ihre Wünsche ein.</p>

        </div>
        <img src="/img/unser_kochstil.jpg" alt="Unser Kochstil" class="right square">
      </div>

      <p class="quote">"Lassen Sie uns also wissen, mit welchen Gerichten wir Ihnen eine besondere Freude
        bereiten
        können."</p>

      <div class="references">
        <h3 class="pinkHeader referenceHeader">Referenzen</h3>
        <section class="slideshow">
          <div class="slider">
            <div class="slide_viewer">
              <div class="slide_group">
                <p class="slide">
                  Es war eine Supersache vom Erstkontakt bis zur Verabschiedung. Sehr professionelle Organisation,
                  reibungsloser Ablauf und natürlich das Beste: Das phantastische Essen! <br>
                  Wunderbare Zusammenstellung, kreativ und hervorragend gekocht. Ich kann das aufgestellte
                  und sympathische Team wärmstens weiterempfehlen! - <span class="bold">Markus Atzenweiler,
                  Präsident Sicherheits Arena Schweiz</span>
                </p>
                <p class="slide">
                  <span class="title">Nebst eurer sehr liebevollen ehrlichen Art, merkt man das absolute Fachwissen ist vorhanden durch eure Kochausbildung.
                    Von der Vorspeise bis hin zum Dessert alles schmeckte einfach super lecker. Alle, nicht nur wir, waren begeistert, es schmeckte nicht nur wie in einem sehr
                    noblen Restaurant, sondern auch die Dekoration der einzelnen Gänge war sehr gekonnt und auf hohem Niveau.
                    Adriana hat uns sehr durch ihre liebevolle Art bedient und verwöhnt.       
                    Jederzeit  buchen wir euch zu 100% bei einem nächsten Anlass. - <span class="bold"> S.Noll, zufriedene Privatkundin</span>

                </p>
                <p class="slide">
                  <span class="title">Referenz 3
                </p>
                <p class="slide">
                  <span class="title">Referenz 4
                </p>
              </div>
            </div>
          </div>
          <div class="directional_nav">
            <div class="previous_btn" title="Previous">
              <svg xmlns="http://www.w3.org/2000/svg" id="Capa_1" x="0px" y="0px"
                   viewBox="0 0 477.175 477.175" xml:space="preserve"
                   width="512px" height="512px">
                <g>
                  <g>
                    <path
                      d="M145.188,238.575l215.5-215.5c5.3-5.3,5.3-13.8,0-19.1s-13.8-5.3-19.1,0l-225.1,225.1c-5.3,5.3-5.3,13.8,0,19.1l225.1,225   c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4c5.3-5.3,5.3-13.8,0-19.1L145.188,238.575z"
                      class="active-path" fill="#ef9476"/>
                  </g>
                </g>
              </svg>
            </div>
            <div class="slide_buttons"></div>
            <div class="next_btn" title="Next">
              <svg xmlns="http://www.w3.org/2000/svg" id="Capa_1" x="0px" y="0px"
                   viewBox="0 0 477.175 477.175" xml:space="preserve"
                   width="512px" height="512px">
                <g>
                  <g>
                    <path
                      d="M360.731,229.075l-225.1-225.1c-5.3-5.3-13.8-5.3-19.1,0s-5.3,13.8,0,19.1l215.5,215.5l-215.5,215.5   c-5.3,5.3-5.3,13.8,0,19.1c2.6,2.6,6.1,4,9.5,4c3.4,0,6.9-1.3,9.5-4l225.1-225.1C365.931,242.875,365.931,234.275,360.731,229.075z   "
                      class="active-path" fill="#ef9476"/>
                  </g>
                </g>
              </svg>
            </div>
          </div>
      </div>
    </div>
  </div>
  <script src="/js/gallery.js"></script>
  <script>
    const header = document.getElementById("header")
    const pageContent = document.getElementById("pageContent")
    let sticky = header.offsetTop;
    window.onscroll = () => {
      if (window.pageYOffset > sticky) {
        header.classList.add("sticky");
        pageContent.classList.add("indent");
      } else {
        header.classList.remove("sticky");
        pageContent.classList.remove("indent");
      }
    }


  </script>
<?php
