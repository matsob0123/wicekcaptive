<!--
    wicek.local
    Powered by dupa
-->
<!doctype html>
<html>
<head>
  <title>Wicek</title>
  <meta charset='UTF-8'>
    <style>
    html, body {
      width: 100%;
      height: 100%;
      margin: 0;
      font-family: -apple-system, BlinkMacSystemFont, 'avenir next', avenir,
        'helvetica neue', helvetica, ubuntu, roboto, noto, 'segoe ui', arial,
        sans-serif;
      overflow: hidden;
    }
    .hello-message {
      margin: 40px;
      text-align: center;
    }
    .logout-messages {
      pointer-events: none;
      color: red;
      margin: 40px;
      position: fixed;
      top: 0;
      left: 0;
      text-shadow: 2px 2px #FFF, 4px 4px 10px #000;
    }
    img {
      width: 300px;
    }
    @keyframes blurslowly {
      0% {
        filter: none;
      }
      92% {
        filter: blur(0);
      }
      96% {
        filter: blur(1px);
      }
      100% {
        filter: blur(0);
      }
    }
    body {
      animation-name: blurslowly;
      animation-iteration-count: infinite;
      animation-duration: 15s;
      animation-play-state: running;
    }
  </style>
  <link rel="icon" type="image/x-icon" href="media/images/ptok.jpg">

  <meta property="og:title" content="Wicek" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="http://wicek.local" />
  <meta property="og:image" content="http://wicek.local/media/images/wicek.jpg" />
  <meta property="og:description" content="Obejrzyj zdjęcia kotów za frytę!" />
  <meta name="keywords" content="wicek, kot, wicek.local, kot.local">
  <meta name="description" content="Obejrzyj zdjęcia kotów za frytę!">
  <meta name="theme-color" content="#34eb7d">
</head>
<body>

<noscript>Po coś tego JavaScript wyłączył bamboszu!</noscript>
<template>
  <div class='hello-message'>
    <h1>Siemano kolano!</h1>
    <h2>We no walnij 3 razy w spacje.</h2>
    <h3>(albo kliknij w wicka)</h3>

    <img src='media/images/intro.gif' alt='Cute ptok' />
  </div>
  <div class='logout-messages'></div>
</template>

<script src='index.js'></script>
</body>
</html>
