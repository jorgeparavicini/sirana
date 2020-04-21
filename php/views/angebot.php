<div class="angebot">
  <div class="page">
    <div class="pageContent">
      <div class="intro">
        <!--<p class="subtitle">Sie suchen einen vertrauenswürdigen und innovativen -</p>
        <h2 class="title">Caterer</h2>-->
        <h2 class="title">Was Wir anbieten</h2>
        <p>Sie suchen einen vertrauenswürdigen und innovativen Caterer.
          <br/>
          Wir bieten Ihnen ein vollumfängliches Angebot vom Störkoch bis hin zum detaillierten Event mit exklusivem
          Service und einem unvergesslichen Geschmackserlebnis.</p>
      </div>
      <div class="angebotBilder">
        <div class="content">
          <div class="angebotContent">
            <div class="angebotInfo">
              <div class="front">
                <img src="/img/angebot/angebot1.jpg" alt="Angebot Catering">
                <div class="forwarder">
                  <p>Catering</p>
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
                    Sirana Catering bringt die Kulinarik zu Ihnen. Firmenessen, Aperos von klein bis gross sowie
                    private Feiern. Gehören allesamt zu unserem Catering Angebot.
                    <br/><br/>
                    Die saisonale Auswahl der Speisen sowie die
                    moderne und erfrischende Küche der Sirana Köche, lässt keine Wünsche offen.
                    <br/><br/>
                    Jeder Anlass ist ein neues Projekt, welches den Wünschen unserer Kunden angepasst wird. So
                    garantieren
                    wir Ihre Zufriedenheit.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="angebotContent">
            <div class="angebotInfo">
              <div class="front">
                <img src="/img/angebot/angebot3.jpg" alt="Angebot Eventservice">
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
                    <br/><br/>
                    Lassen Sie uns wissen, was Ihre Vorstellungen sind und wir organisieren für Sie das Ambiente,
                    die gewünschte Unterhaltung sowohl als auch die profesionelle Bedienung, die Sie sich wünschen.
                    <br/><br/>
                    Unser Motto für die Organisation von Events: Fühlen Sie sich wie Zuhause und lassen Sie sich
                    verwöhnen.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="angebotContent">
            <div class="angebotInfo">
              <div class="front">
                <img src="/img/angebot/angebot2.jpg" alt="Angebot Störkoch">
                <div class="forwarder">
                  <p>Störkoch</p>
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
                    Möchten Sie bei sich Zuhause in gelassener Runde zu Tisch einladen, mögen aber nicht selber kochen,
                    da Sie doch selbst den Abend geniessen möchten?
                    <br/><br/>
                    So kontaktieren Sie uns und wir kochen für Sie nach Ihren Wünschen bei Ihnen Zuhause.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="events">
        <p>Sind Sie noch auf der Suche nach einer passenden Eventlokalität? Dann lassen Sie sich von unseren
          Räumlichkeiten und Partnern inspirieren.</p>
        <a class="button" href="#">Eventlokalitäten</a>
      </div>
    </div>
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