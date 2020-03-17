<div id="starterPage">
  <img id="starterLogo" src="/img/logos/sirana_catering/Sirana_Catering_Logo_schwarz.png" alt="Sirana Logo">
  <img id="animationFruit" src="/img/fruit_animations/9.1.gif" alt="Animation Fruit">
</div>
<div id="content">
</div>

<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>

<script>
  // Header Scrolling
  let duration = 700;
  let isAnimating = false;
  let body = $("html, body");

  function scrollToTop() {
    body.animate({scrollTop: $("#starterPage").offset().top + 'px'}, 500);
    randomizeFruit();
    isAnimating = true;
    disableScroll();
    setTimeout(function () {
      lastPos = $(window).scrollTop();
      isAnimating = false;
      enableScroll();
    }, duration);
  }

  function scrollToContent() {
    body.animate({scrollTop: $("#content").offset().top + 'px'}, 500);
    isAnimating = true;
    disableScroll();
    setTimeout(function () {
      lastPos = $(window).scrollTop();
      isAnimating = false;
      enableScroll();
    }, duration);
  }

  let lastPos = $(window).scrollTop();

  $(window).scroll(function () {
    if (isAnimating) return;
    let newPos = $(window).scrollTop();
    if (newPos > $("#content").offset().top) return;

    if (newPos > lastPos) scrollToContent();
    else scrollToTop();

    lastPos = newPos;
  });

  randomizeFruit();

  function randomizeFruit() {
    let images = [<?php echo implode(", ", array_map(function ($a) {
      return str_replace($_SERVER['DOCUMENT_ROOT'], "", "\"{$a}\"");
    }, glob("{$_SERVER['DOCUMENT_ROOT']}/img/fruit_animations/*.gif")))?>];

    let image = images[Math.floor(Math.random() * images.length)];
    $("#animationFruit").attr("src", image);
  }

  // left: 37, up: 38, right: 39, down: 40,
  // spacebar: 32, pageup: 33, pagedown: 34, end: 35, home: 36
  var keys = {37: 1, 38: 1, 39: 1, 40: 1};

  function preventDefault(e) {
    e = e || window.event;
    if (e.preventDefault)
      e.preventDefault();
    e.returnValue = false;
  }

  function preventDefaultForScrollKeys(e) {
    if (keys[e.keyCode]) {
      preventDefault(e);
      return false;
    }
  }

  function disableScroll() {
    if (window.addEventListener) // older FF
      window.addEventListener('DOMMouseScroll', preventDefault, false);
    document.addEventListener('wheel', preventDefault, {passive: false}); // Disable scrolling in Chrome
    window.onwheel = preventDefault; // modern standard
    window.onmousewheel = document.onmousewheel = preventDefault; // older browsers, IE
    window.ontouchmove  = preventDefault; // mobile
    document.onkeydown  = preventDefaultForScrollKeys;
  }

  function enableScroll() {
    if (window.removeEventListener)
      window.removeEventListener('DOMMouseScroll', preventDefault, false);
    document.removeEventListener('wheel', preventDefault, {passive: false}); // Enable scrolling in Chrome
    window.onmousewheel = document.onmousewheel = null;
    window.onwheel = null;
    window.ontouchmove = null;
    document.onkeydown = null;
  }
</script>
<?php
