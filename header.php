<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
   <meta charset="<?php bloginfo('charset'); ?>" />
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
   <meta http-equiv="x-ua-compatible" content="ie=edge" />
   <!-- Font Awesome -->
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css"/>
   <meta name="description" content="<?php bloginfo('description'); ?>" />
   <meta name="keywords" content="<?php the_field('klyuchovi_frazy_ceo', 'option'); ?>" />
   <meta name="google" content="notranslate" />
   <meta name="author" content="Roman Vintonyak" />
   <meta name="robots" content="index, follow" />
   <!--disable format detection (iPhone / IPod / IPad) -->
   <meta name="format-detection" content="telephone=no" />
   <!--BlackBerry-->
   <meta http-equiv="x-rim-auto-match" content="none" />
   <!--fav icon-->
   <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon/apple-touch-icon.png">
   <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon/favicon-32x32.png">
   <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon/favicon-16x16.png">
   <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon/site.webmanifest">
   <link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon/safari-pinned-tab.svg" color="#2f88a2">
   <meta name="msapplication-TileColor" content="#2b5797">
   <meta name="theme-color" content="#ffffff">
   <!--title-->
   <title>Loren&commat; &mdash; <?php bloginfo('name'); ?></title>
   <?php wp_head(); ?>
</head>
<body style="overflow-y: hidden;" <?php body_class(); ?>>
<!--progress bar block-->
<section id="progressBlock" class="progress__block">
   <div class="load__line"></div>
</section>
<!--preloader animation-->
<section id="loader" class="loader">
   <div class="loader__wraper">
      <img src="<?php the_field('preloader', 'option'); ?>" alt="heart">
      <p><?php the_field('preloader_tekst', 'option'); ?></p>
   </div><!--/.loader__wraper-->
</section><!--/.loader-->
<!--main page-->
<main id="main" class="main">
   <!--header-->
   <header id="header" class="header">
      <div class="container">
         <nav id="nav" class="nav__menu">
            <div class="navbar__brand">
               <a href="<?php echo home_url(); ?>" class="navbar__brand--logo waves waves-light">
                  <img class="img" src="<?php the_field('logo_kompaniyi', 'option'); ?>" alt="logo">
               </a>
            </div><!--/.navbar__brand-->
            <div class="navbar__menu">
               <?php 
                  wp_nav_menu(array(
                  'theme_location'  => 'primary',
                  'menu'            => 'MainMenu', 
                  'container'       => 'ul',
                  'menu_class'      => 'main__menu', 
                  'echo'            => true,
                  'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
                  'depth'           => 0,
                  ));
               ?>
            </div><!--/.navbar__menu-->
            <div class="burger__btn" id="burgerBtn">
               <span></span>
               <span></span>
               <span></span>
               <span></span>
            </div><!--/.burger__btn-->
         </nav><!--/.nav__menu-->
      </div><!--/.container-fluid-->
   </header><!--/.header-->