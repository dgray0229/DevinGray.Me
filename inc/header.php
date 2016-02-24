<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php echo $pageTitle; ?></title>
    <link rel="stylesheet" href="/css/normalize.css">
    <link href='http://fonts.googleapis.com/css?family=Rambla:400,700,400italic,700italic|Libre+Baskerville:400,400italic|Droid+Serif:400,700italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>css/style.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>css/responsive.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="<?php echo BASE_URL; ?>css/engine1/style.css">
      <!--[if IE]><link rel="stylesheet" href="<?php echo BASE_URL; ?>css/engine1/ie.css"><![endif]-->
      <!--[if lte IE 9]><script type="text/javascript" src="<?php echo BASE_URL; ?>css/engine1/ie.js"></script><![endif]-->
  </head>
  <body>
    <header>
      <a href="<?php echo BASE_URL; ?>" id="logo">
        <h1>Devin Michael Gray</h1>
        <h2>Designer and Developer</h2>
      </a>
      <nav id="menu">
        <ul>
          <li class="home"><a href="<?php echo BASE_URL; ?>" class="<?php if ($section == "home") { echo "selected";} ?>">Home</a></li>
          <li class="portfolio"><a href="<?php echo BASE_URL; ?>portfolio/" class="<?php if ($section == "portfolio") { echo "selected";} ?>">Portfolio</a></li>
          <li class="about"><a href="<?php echo BASE_URL; ?>about/" class="<?php if ($section == "about") { echo "selected";} ?>">About</a></li>
          <li class="contact"><a href="<?php echo BASE_URL; ?>contact/" class="<?php if ($section == "contact") { echo "selected";} ?>">Contact</a></li>
        </ul>
      </nav>
    </header>
    <div id="wrapper">