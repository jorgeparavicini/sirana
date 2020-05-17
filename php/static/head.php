<?php

function build_head(string $file)
{
  $filename = pathinfo($file, PATHINFO_FILENAME);
  ?>
  <head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-166849267-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];

      function gtag() {
        dataLayer.push(arguments);
      }

      gtag('js', new Date());

      gtag('config', 'UA-166849267-1');
    </script>

    <title><?php echo ucfirst($filename) ?> | Sirana </title>

    <meta charset="UTF-8">
    <?php // TODO: Implement
    ?>
    <meta name="description" content="*CONTENT*">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#fafafa">

    <link rel="stylesheet" type="text/css" href="/css/main.css">
    <link rel="stylesheet" type="text/css" href="/css/normalize.css">
    <link rel="stylesheet" href="https://use.typekit.net/xhq6pkb.css">

    <script src="/js/jquery.js"></script>
    <script src="/js/header.js"></script>

    <link rel="stylesheet" type="text/css" href="//wpcc.io/lib/1.0.2/cookieconsent.min.css"/>
    <script src="//wpcc.io/lib/1.0.2/cookieconsent.min.js"></script>
    <script>
      window.addEventListener("load", function () {
        window.setTimeout(function () {
          window.wpcc.init({
            "colors": {
              "popup": {"background": "#ffffff", "text": "#000000", "border": "#f3b09a"},
              "button": {"background": "#f3b09a", "text": "#ffffff"}
            },
            "border": "thin",
            "corners": "small",
            "content": {
              "href": "https://sirana.ch/datenschutz",
              "message": "Diese Website verwendet Cookies, um Ihnen die bestmögliche Nutzung unserer Website zu gewährleisten.",
              "link": "Mehr erfahren",
              "button": "Ich akzeptiere"
            }
          })
        }, 5000);
      })
    </script>
  </head>

  <?php
}
