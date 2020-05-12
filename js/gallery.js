function initializeGallery(i, gallery) {
  let $group = $(gallery).find('.slide_group');
  let $slides = $(gallery).find('.slide');
  let time = 30000;
  let bulletArray = [];
  let currentIndex = 0;
  let timeout;

  function move(newIndex) {
    let animateLeft, slideLeft;

    advance();

    if ($group.is(':animated') || currentIndex[i] === newIndex || $slides.length === 1) {
      return;
    }

    bulletArray[currentIndex].removeClass(('active'));
    bulletArray[newIndex].addClass('active');

    if (newIndex > currentIndex) {
      slideLeft = '100%';
      animateLeft = '-100%';
    } else {
      slideLeft = '-100%';
      animateLeft = '100%';
    }

    $slides.eq(newIndex).css({
      display: 'block',
      left: slideLeft
    });
    $group.animate({
      left: animateLeft
    }, function () {
      $slides.eq(currentIndex).css({
        display: 'none'
      });
      $slides.eq(newIndex).css({
        left: 0
      });
      $group.css({
        left: 0
      });
      currentIndex = newIndex;
    });
  }

  function advance() {
    clearTimeout(timeout);
    timeout = (setTimeout(function () {
      if (currentIndex < ($slides.length - 1)) {
        move(currentIndex + 1);
      } else {
        move(0);
      }
    }, time));
  }

  $(gallery).find('.next_btn').on('click', function () {
    if (currentIndex < ($slides.length - 1)) {
      move(currentIndex + 1);
    } else {
      move(0);
    }
  });

  $(gallery).find('.previous_btn').on('click', function () {
    if (currentIndex !== 0) {
      move(currentIndex - 1);
    } else {
      move($slides.length - 1);
    }
  });

  $slides.each(function (index) {
    let $button = $('<a class="slide_btn">&bull;</a>');

    if (index === currentIndex) {
      $button.addClass('active');
    }
    $button.on('click', function () {
      move(index);
    });

    $(gallery).find('.slide_buttons').append($button);
    bulletArray.push($button);
  });

  advance();
}

$('.slideshow').each(initializeGallery);
