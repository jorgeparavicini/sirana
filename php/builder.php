<?php

function build(string $fileName, string $title, bool $buildFront = false, bool $isTitlePage = false)
{

?>
<!DOCTYPE html>
<html lang="de">
<?php

// HEAD
require_once "{$_SERVER['DOCUMENT_ROOT']}/php/static/head.php";
build_head($fileName, $title);
?>
<?php
// BODY
echo "<body>";
?>

<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>
  window.fbAsyncInit = function () {
    FB.init({
      xfbml: false,
      version: 'v7.0'
    });
  };

  (function (d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s);
    js.id = id;
    js.src = 'https://connect.facebook.net/de_DE/sdk/xfbml.customerchat.js';
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>

<!-- Your customer chat code -->
<div class="fb-customerchat"
     attribution=setup_tool
     page_id="102937787893685"
     theme_color="#f3b09a"
     greeting_dialog_display="hide"
     logged_in_greeting="Hallo? Wie kann ich Ihnen helfen?"
     logged_out_greeting="Hallo? Wie kann ich Ihnen helfen?">
</div>

<?php

if ($buildFront) {
  require_once "{$_SERVER['DOCUMENT_ROOT']}/php/static/firstPage.php";
}

if (!$isTitlePage) {
  require_once "{$_SERVER['DOCUMENT_ROOT']}/php/static/header.php";
  build_header();
}

if (file_exists("{$_SERVER['DOCUMENT_ROOT']}/php/views/{$fileName}")) {
  include_once "{$_SERVER['DOCUMENT_ROOT']}/php/views/{$fileName}";
} else {
  include_once "{$_SERVER['DOCUMENT_ROOT']}/php/views/404.php";
}

require_once "{$_SERVER['DOCUMENT_ROOT']}/php/static/footer.php";

?>
<script src="/js/banner.js"></script>
<?php

echo "</body>";
echo "</html>";
}

?>
