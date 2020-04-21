<?php

function build_head(string $file)
{
  $filename = pathinfo($file, PATHINFO_FILENAME);
  ?>
  <head>
    <title><?php echo ucfirst($filename) ?> | Sirana </title>

    <meta charset="UTF-8">
    <?php // TODO: Implement ?>
    <meta name="*DESCRIPTION*" content="*CONTENT*">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#fafafa">

    <link rel="stylesheet" type="text/css" href="/css/main.css">
    <link rel="stylesheet" type="text/css" href="/css/normalize.css">
    <link rel="stylesheet" href="https://use.typekit.net/xhq6pkb.css">

    <script src="/js/jquery.js"></script>
    <script src="/js/header.js"></script>
  </head>

  <?php
}
