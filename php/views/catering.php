<div class="pageContent" id="angebot">
  <h3>Was Wir anbieten</h3>
  <p>
    Sie suchen einen vertrauenswürdigen und innovativen Caterer.
    <br/>
    Wir bieten Ihnen ein vollumfängliches Angebot vom Störkoch bis hin zum detaillierten Event mit exklusivem
    Service und einem unvergesslichen Geschmackserlebnis.
  </p>
  <div class="angebotBilder banner">
    <div class="content">
      <div class="angebotContent">
        <div class="angebotInfo">
          <div class="front">
            <img src="/img/Fotoshoot/IMG_7021.jpg" alt="Angebot Störkoch">
            <div class="forwarder">
              <p>Privatanlässe</p>
              <span class="arrow active large">
                    <span></span>
                    <span></span>
                  </span>
              <span class="arrow active small">
                    <span></span>
                    <span></span>
                  </span>
            </div>
            <div class="infoValue">
              <p>
                Möchten Sie bei sich Zuhause in gelassener Runde zu Tisch einladen, mögen aber nicht selbst kochen,
                da Sie doch den Abend geniessen möchten?
                <br/><br/>
                So kontaktieren Sie uns und wir kochen für Sie, nach Ihren Wünschen bei Ihnen Zuhause.
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="angebotContent">
        <div class="angebotInfo">
          <div class="front">
            <img src="/img/Fotoshoot/IMG_6981-3.jpg" alt="Angebot Catering">
            <div class="forwarder">
              <p>Firmenanlässe</p>
              <span class="arrow active large">
                    <span></span>
                    <span></span>
                  </span>
              <span class="arrow active small">
                    <span></span>
                    <span></span>
                  </span>
            </div>
            <div class="infoValue">
              <p>
                Sirana Catering bringt die Kulinarik zu Ihnen. Firmenessen, Aperos sowie
                private Feiern gehören allesamt zu unserem Angebot.
                <br/><br/>
                Jeder Anlass ist ein neues Projekt mit unterschiedlichen Gegebenheiten und Anforderungen.
                Damit wir auf Ihre individuellen Wünsche eingehen können, kontaktieren Sie uns und erhalten Sie ein auf
                Ihre Bedürfnisse angepasstes Angebot.
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="angebotContent">
        <div class="angebotInfo">
          <div class="front">
            <img src="/img/Fotoshoot/IMG_7146.jpg" alt="Angebot Eventservice">
            <div class="forwarder">
              <p>Eventservice</p>
              <span class="arrow active large">
                    <span></span>
                    <span></span>
                  </span>
              <span class="arrow active small">
                    <span></span>
                    <span></span>
                  </span>
            </div>
            <div class="infoValue">
              <p>
                Sirana Catering bietet nicht nur eine kulinarische Verpflegung, sondern packt für Sie an.
                Ob Hochzeit, Geburtstagsfeier
                oder Weihnachtsessen für Ihre Firma, wir sind dabei.
                <br/><br/>
                Lassen Sie uns wissen, was Ihre Vorstellungen sind und wir planen für Sie das Ambiente,
                die gewünschte Unterhaltung sowohl als auch die professionelle Bedienung, die Sie sich wünschen.
               </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="offerten">
    <p>Sind Sie noch auf der Suche nach einer passenden Eventlokalität? Dann lassen Sie sich von unseren
      Räumlichkeiten und Partnern inspirieren.</p>
    <a class="button" href="#">Beispielofferten</a>
  </div>
</div>

<script>
  $(function () {
    let angebotContent = $(".angebotContent");

    angebotContent.click(function () {
      $(this).toggleClass("open");
      $(this).find(".arrow.small").toggleClass("active");
    });


    angebotContent.click(function () {
      let clicked = $(this);
      if (clicked.hasClass("show")) return;
      $(".angebotContent").each(function () {
        if (clicked.is($(this))) {
          $(this).addClass("expand");
          $(this).removeClass("shrink");
        } else {
          $(this).addClass("shrink");
          $(this).removeClass("expand");
        }
      });

      window.setTimeout(function () {
        clicked.addClass("show");
        let arrow = clicked.find(".arrow.large");
        arrow.addClass("display");
        arrow.removeClass("active");

        window.setTimeout(function () {
          clicked.on("click", hide);
        }, 1000);
      }, 1000)
      //$(this).toggleClass("isFlipped");
    });

    function hide() {
      let arrow = $(this).find(".arrow.large");
      arrow.addClass("active");
      let angebot = $(this);
      angebot.removeClass("show");

      window.setTimeout(function () {
        arrow.removeClass("display");
        angebot.addClass("removing");
        let angebotContents = $(".angebotContent");
        angebotContents.removeClass("expand");
        angebotContents.removeClass("shrink");

        window.setTimeout(function () {
          angebot.removeClass("removing");
        }, 1000);
      }, 1000);

      $(this).off("click", hide);
    }
  })
</script>
