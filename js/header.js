$(function() {
  let burger = $("#hamburgerButton");
  let header = $("#header");
  burger.click(function () {
    header.toggleClass("open");
  })
});
