<?php
header("Expires: Tue, 03 Jul 2001 06:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
header("Connection: close");
?>                 

<!DOCTYPE html>
<html lang="es">
<head>
    <meta http-equiv="content-type" content="text.html" charset="utf-8">
    <meta name="viewport" content="width=device-width initial-scale=1">
    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Last-Modified" content="0">
    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta name="author" content="Sergio Cristobal Colino">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="robots" content="index"/>
    <title>Fusterba-Compara todos los dispositivos electronicos.</title>
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
   <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
   <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
   <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
   <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
   <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
   <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
   <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
   <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
   <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
   <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
   <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
   <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
   <link rel="manifest" href="/manifest.json">
   <meta name="msapplication-TileColor" content="#ffffff">
   <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
   <meta name="theme-color" content="#ffffff">
  <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
</head>
<body>
  <noscript>You need to enable JavaScript to run this app.</noscript>
  <script type="text/javascript">
       if(window.navigator.userAgent.toString().toLocaleLowerCase().indexOf('msie') > -1 || window.navigator.userAgent.toString().toLocaleLowerCase().indexOf('trident') > -1){
           document.write('<p>This navigator dont support this app.<p>')
       }
  </script>
  <script type="module" src="./src/index.js" defer async></script>
  <div id="root"></div>
</body>
</html>