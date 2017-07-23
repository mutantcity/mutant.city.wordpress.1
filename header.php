<!DOCTYPE html>
<html <?php language_attributes();// required for wordpress plumbing ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv='X-UA-Compatible' content='IE=edge;chrome=1' />
  <link rel="profile" href="http://gmpg.org/xfn/11">

  <?php wp_head(); //wordpress include for plug-ins?>
</head>


<body <?php body_class(); //required for wordpress plumbing?>>
  <noscript>
    <style type="text/css">
      #main {display:none;}
    </style>
    <div class="noscriptmsg">
      You don't have javascript enabled. You should probably enable it
    </div>
    <img src="assets/img/samuel_catson.jpg"/>
  </noscript>
  <header id="masthead" class="site-header" role="banner">
    <?php get_template_part( 'partials/navbar', 'none' ); ?>
  </header><!-- #masthead -->
  <div id="primary" class="content-area">

    <main id="main" class="site-main" role="main">
