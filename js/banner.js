function setBannerMargin() {
  let banners = document.getElementsByClassName("banner");
  let largeDS = 1025;
  let first = window.innerWidth < largeDS ? window.innerWidth * 0.1 : window.innerWidth * 0.2;
  for (let i = 0; i < banners.length; i++) {
    banners[i].style.marginLeft = `${-Math.max(first, (window.innerWidth - 1000) / 2)}px`;
  }
}

setBannerMargin();
window.addEventListener("resize", setBannerMargin);
