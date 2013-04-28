<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title><?php wp_title("|", "true", "right"); bloginfo("name"); ?></title>
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width" />

  <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

  <link rel="stylesheet" href="<?php bloginfo("template_url"); ?>/style.css" />
  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,700" />
  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Coming+Soon" />
  <script src="<?php bloginfo("template_url"); ?>/js/vendor/modernizr-2.6.2.min.js"></script>

  <?php wp_head(); ?>
</head>

<body>
  <!--[if lt IE 7]>
    <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
  <![endif]-->
  <div class="container">
    <header class="site-header">
      <div class="masthead">
        <a class="logo" href="<?php echo get_option("home"); ?>">
          <h1 class="title"><?php bloginfo("title"); ?></h1>
          <p class="description"><?php bloginfo("description") ?></p>
          <p class="secondary"><?php echo get_option('gcf-tertiary-title'); ?></p>
        </a>
      </div>
      <div class="actions">
        <!-- <a href="/cart" class="view-cart">View cart</a> -->
        <!-- <a href="/blog" class="blog">Read our blog</a> -->
      </div>
    </header>

    <?php
      wp_nav_menu(array(
        "container_class" => "navigation-bar",
        "container" => "nav",
        "theme_location" => "primary-menu"
      ));
    ?>