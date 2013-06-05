<!doctype html>
<!--[if lt IE 7]> <html class="ie6 oldie"> <![endif]-->
<!--[if IE 7]>    <html class="ie7 oldie"> <![endif]-->
<!--[if IE 8]>    <html class="ie8 oldie"> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang="es" class="" manifest="cache.manifest">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<title>Web App Template</title>
<link href="webapp.css" rel="stylesheet" type="text/css">
<link href="boilerplate.css" rel="stylesheet" type="text/css">

<!-- Animate-->
<link href="animate.min.css" rel="stylesheet" type="text/css">

<?php require_once('web-app-on.php'); ?>
<?php require_once('opera-speed-dial-favicon.php'); ?>

<?php require_once('standard-favicon.php'); ?>

<?php require_once('web-app-icon.php'); ?>
<?php require_once('web-app-splash-screen.php'); ?>

<!-- 
Para obtener más información sobre los comentarios condicionales situados alrededor de las etiquetas html en la parte superior del archivo:
paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/
  
Haga lo siguiente si usa su compilación personalizada de modernizr (http://www.modernizr.com/):
* inserte el vínculo del código js aquí
* elimine el vínculo situado debajo para html5shiv
* añada la clase "no-js" a las etiquetas html en la parte superior
* también puede eliminar el vínculo con respond.min.js si ha incluido MQ Polyfill en su compilación de modernizr 
-->

<!-- Add 2 Home-->
<link rel="stylesheet" href="add2home.css">
<script type="application/javascript" src="add2home.js"></script>

<!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<script src="respond.min.js"></script>

<!-- cache update-->
<script type="text/javascript" src="cacheupdate.js"></script>
<link type="text/plain" rel="author" href="humans.txt" />
</head>