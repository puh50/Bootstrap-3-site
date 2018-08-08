<!DOCTYPE html>
<html lang="ru">

<head>
  <title>Hosting</title>
  <meta charset="utf-8">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE">
  <meta name="format-detection" content="telephone=no">
  <meta name="format-detection" content="address=no">
  <meta http-equiv="x-rim-auto-match" content="none">
  <!--styles-->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800" rel="stylesheet">
  <link rel="stylesheet" href="css/font-awesome.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="css/responsive.css">
  <!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>

<body>
<header>
  <div class="container container-header">
    <ul class="authorization-menu">
      <li class="authorization-menu-item">
        <span>Support:</span>
        <a href="mailto:info@webhosting.com">webhosting.com</a>
      </li>
      <li class="authorization-menu-item">
        <a href="#">Register</a>
      </li>
      <li class="authorization-menu-item">
        <a href="#">Login</a>
      </li>
    </ul>
    <a href="/" class="logo header-logo">
      <img src="img/logo.png" alt="Hosting Logo" class="header-logo-img">
    </a>
  </div>
</header>
<nav class="header-menu-wrapper">
  <div class="container">
    <button id="js-menu-btn" class="header-menu-btn-wrapepr" type="button">
      <p id="js-menu-btn-burger" class="header-menu-btn">
        <span class="header-menu-btn-item header-menu-btn-item-1"></span>
        <span class="header-menu-btn-item header-menu-btn-item-2"></span>
        <span class="header-menu-btn-item header-menu-btn-item-3"></span>
      </p>
      <p>Menu</p>
    </button>
    <ul id="js-menu" class="header-menu">
      <li class="header-menu-item">
        <a class="header-menu-link<?php if ($GLOBALS["page"] == "home") { ?> active<?php } ?>" href="/">Home</a>
      </li>
      <li class="header-menu-item">
        <a class="header-menu-link<?php if ($GLOBALS["page"] == "about") { ?> active<?php } ?>" href="about_us.php">About Us</a>
      </li>
      <li class="header-menu-item">
        <a class="header-menu-link<?php if ($GLOBALS["page"] == "service") { ?> active<?php } ?>" href="service.php">Service</a>
      </li>
      <li class="header-menu-item">
        <a class="header-menu-link<?php if ($GLOBALS["page"] == "plans") { ?> active<?php } ?>" href="hosting_plans.php">Hosting Plans</a>
      </li>
      <li class="header-menu-item">
        <a class="header-menu-link<?php if ($GLOBALS["page"] == "domain") { ?> active<?php } ?>" href="domain.php">Domain</a>
      </li>
      <li class="header-menu-item">
        <a class="header-menu-link<?php if ($GLOBALS["page"] == "faq") { ?> active<?php } ?>" href="faq.php">FAQ</a>
      </li>
      <li class="header-menu-item">
        <a class="header-menu-link<?php if ($GLOBALS["page"] == "testimonials") { ?> active<?php } ?>" href="testimonials.php">Testimonials</a>
      </li>
      <li class="header-menu-item">
        <a class="header-menu-link<?php if ($GLOBALS["page"] == "blog") { ?> active<?php } ?>" href="blog.php">Blog</a>
      </li>
      <li class="header-menu-item">
        <a class="header-menu-link<?php if ($GLOBALS["page"] == "support") { ?> active<?php } ?>" href="support.php">Support</a>
      </li>
      <li class="header-menu-item">
        <a class="header-menu-link<?php if ($GLOBALS["page"] == "contact") { ?> active<?php } ?>" href="contact_us.php">Contact Us</a>
      </li>
    </ul>
  </div>
</nav>