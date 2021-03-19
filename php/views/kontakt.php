<div class="pageContent" id="kontakt">
  <h3>Kontakt</h3>
  <p>Sind Sie neugierig? Kontaktieren Sie uns ganz einfach über das Kontaktformular oder rufen Sie uns an unter der Nummer +41 79 477 40 40 und lassen Sie uns Ihre Wünsche
    wissen.</p>
  <form action="kontakt_form" method="POST" id="contactForm">
    <div class="row">
      <div class="column half">
        <label for="vorname"></label>
        <input type="text" placeholder="Vorname" id="vorname" name="vorname">
      </div>
      <div class="column half">
        <label for="nachname"></label>
        <input type="text" placeholder="Nachname" id="nachname" name="nachname">
      </div>
    </div>
    <div class="row">
      <div class="column">
        <label for="email"></label>
        <input type="text" placeholder="Email" id="email" name="email">
      </div>
    </div>
    <div class="row">
      <div class="column">
        <label for="betreff"></label>
        <input type="text" placeholder="Betreff" id="betreff" name="betreff">
      </div>
    </div>
    <div class="row expand">
      <div class="column">
        <label for="nachricht"></label>
        <textarea id="nachricht" placeholder="Nachricht" name="nachricht"></textarea>
      </div>
    </div>
    <div class="row">
      <input type="submit" value="Senden">
    </div>
  </form>
  <img src="/img/staticFruits/1-32.png" alt="Kirsche" class="krisi">
</div>

<script src="/js/jquery.validate.min.js"></script>
<script>
  $("#contactForm").validate({
    rules: {
      vorname: {
        required: true
      },
      nachname: {
        required: true
      },
      email: {
        required: true,
        email: true
      },
      betreff: {
        required: true,
        minlength: 5,
        maxlength: 150
      },
      nachricht: {
        required: true,
        minlength: 15,
        maxlength: 2500
      }
    },
    messages: {
      vorname: {
        required: "Bitte geben Sie Ihren Vorname an"
      },
      nachname: {
        required: "Bitte geben Sie Ihren Nachname an"
      },
      email: {
        required: "Bitte geben Sie Ihre Email Adresse an",
        email: "Bitte geben Sie eine korrekte Email Adresse an"
      },
      betreff: {
        required: "Bitte geben Sie einen Betreff an",
        minlength: "Der Betreff soll mindestens 5 Charakteren lang sein",
        maxlength: "Der Betreff soll nicht länger als 150 Charakteren lang sein"
      },
      nachricht: {
        required: "Bitte geben Sie eine Nachricht an",
        minlength: "Die Nachricht soll mindestens 15 Charakteren lang sein",
        maxlength: "Die Nachricht soll nicht länger als 2500 Charakteren lang sein"
      }
    }
  });
</script>
