$(function () {
  let inter = setInterval(function () {
    let cookies = getCookies();
    if (cookies['wpcc'] === "dismiss") {
      window.setTimeout(function () {
        FB.XFBML.parse();
      }, 5000);
      clearInterval(inter);
    }
  }, 1000);
});

function getCookies() {
  return document.cookie.split(';').map(function (x) {
    return x.trim().split(/(=)/);
  }).reduce(function (a, b) {
    a[b[0]] = a[b[0]] ? a[b[0]] + ', ' + b.slice(2).join('') :
      b.slice(2).join('');
    return a;
  }, {});
}
