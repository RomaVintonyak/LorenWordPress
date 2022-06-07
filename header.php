<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
   <meta charset="<?php bloginfo('charset'); ?>" />
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
   <meta http-equiv="x-ua-compatible" content="ie=edge" />
   <!-- Font Awesome -->
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css"/>
   <meta name="description" content="<?php bloginfo('description'); ?>" />
   <meta name="keywords" content="Флористика, декор, банкетний зал, оформлення Івано - Франківськ, весільні декорації, оформлення весіль" />
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
      <p><?php the_field('preloader_tekst', 'option') ?></p>
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
                  <img class="img" src="<?php the_field('logo_kompaniyi', 'option') ?>" alt="logo">
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
         
         <!--<ul class="main__menu">
            <li class="main__menu--item">
              <a class="main__menu--link active" href="./index.html">Головна</a>
            </li>
            <li class="main__menu--item">
              <a class="main__menu--link" href="pages/about.html">Про нас</a>
            </li>
            <li class="main__menu--item">
              <a class="main__menu--link" href="pages/services.html">Наші послуги</a>
            </li>
            <li class="main__menu--item">
              <a class="main__menu--link" href="pages/galery.html">Галерея</a>
            </li>
            <li class="main__menu--item">
              <a class="main__menu--link" href="pages/contact.html">Контакти</a>
            </li>
          </ul>--><!--/.main__menu-->
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


  <!--libs js conected-->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.4.1.min.js"><\/script>');</script>
  <!--lightbox gallery plugin https://lokeshdhakar.com/projects/lightbox2/#examples -->
  <script src="js/vendor/lightbox.min.js"></script>
  <!--slick slider https://kenwheeler.github.io/slick/ -->
  <script src="js/vendor/slick.min.js"></script>
  <!--waves effect https://materializecss.com/waves.html -->
  <script src="js/vendor/waves.min.js"></script>
  <!--wow js animation https://wowjs.uk/docs.html -->
  <script src="js/vendor/wow.min.js"></script>
  <!--type js https://github.com/mattboldt/typed.js -->
  <script src="js/vendor/typed.min.js"></script>
  <!--simple lightbox gallery https://www.jqueryscript.net/demo/Responsive-Touch-enabled-jQuery-Image-Lightbox-Plugin/#pid=1 -->
  <script src="js/vendor/simple-lightbox.jquery.min.js"></script>
  <!-- main script -->
  <script src="js/main.min.js"></script>
</body>
</html>