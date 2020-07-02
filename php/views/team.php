<div class="pageContent" id="team">
  <div class="center">
    <div id="teamWrapper">
      <div class="teamSirana" id="teamImg">
        <img src="/img/Fotoshoot/IMG_7353-2-min.jpg" alt="Staff" class="staff">
        <img src="/img/logos/Sirana_Logo_aufgeteilt/Sirana_Logo_SI_rot.png" alt="SI" class="si">
        <img src="/img/logos/Sirana_Logo_aufgeteilt/Sirana_Logo_RA_rot.png" alt="RA" class="ra">
        <img src="/img/logos/Sirana_Logo_aufgeteilt/Sirana_Logo_NA_rot.png" alt="NA" class="na">
      </div>
    </div>
  </div>
  <div class="aboutUs">
    <h3 class="title">DAS TEAM</h3>
    <section class="slideshow">
      <div class="slider">
        <div class="slide_viewer">
          <div class="slide_group">
            <p class="slide">Zu einer solch dynamischen Branche gehört auch ein genauso dynamisches Team. Simon,
              Raffael und Adriana sind leidenschaftliche Gastgeber und Gastronomen. Sie überzeugen nicht nur durch ihre lebendige und frische Art, sondern
              auch durch die Kompetenz und das Fachwissen, welches sie mitbringen.</p>
            <p class="slide">
              <span class="title">Simon - </span> Das Arbeitstier, der Harmoniemensch und leidenschaftlicher
              Gastgeber. Seine Lust und Neugier, Neues auszuprobieren und Gäste zu überraschen, macht ihn
              aus. Für die Einzigartigkeit und Perfektion eines Anlasses ist ihm keine Mühe zu gross.
            </p>
            <p class="slide">
              <span class="title">Raffael - </span>Der Geniesser, der kreative Kopf und stetig auf der Suche nach
              neuen Herausforderungen. Er bringt bereits einen vollen Topf an gastronomischen Erfahrungen mit und sorgt durch sein breites Fachwissen für das leibliche Wohl
              unserer Gäste.
            </p>
            <p class="slide">
              <span class="title">Adriana - </span>Die ruhige Hand, der koordinierende Kopf und das Auge fürs
              Detail. Damit Gäste nicht nur kulinarisch verwöhnt werden, sondern auch von der räumlichen Gestaltung
              überzeugt sind, kümmert sich Adriana liebevoll um alle dekorativen Details. Auch sie ist
              leidenschaftliche Gastgeberin und hat zudem ein organisatorisches Talent, sodass auch alle
              administrativen Tätigkeiten einwandfrei funktionieren.
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
    </section>
  </div>
</div>

<script>
  let $element = $("#teamImg");
  let elementHeight = $element.outerHeight();
  let elementWidth = $element.outerWidth();
  let wrapper = $("#teamWrapper");

  function doResize(event, ui) {
    let scale;

    scale = Math.min(
      ui.size.width / elementWidth,
      ui.size.height / elementHeight
    );

    $element.css("transform", "scale(" + scale + ")");
  }

  doResize(null, wrapperSize());
  $(window).resize(function () {
    doResize(null, wrapperSize())
  });

  function wrapperSize() {
    return {
      size: {
        width: wrapper.width(),
        height: wrapper.width() / 3 * 2
      }
    };
  }
</script>
<script src="/js/gallery.js"></script>
