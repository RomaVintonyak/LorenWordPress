<?php
//main setings
   function wps_deregister_styles() {
      wp_dequeue_style( 'global-styles' );
      wp_dequeue_style( 'wp-block-library' );
   }
add_action( 'wp_enqueue_scripts', 'wps_deregister_styles', 100 );
//script & styles conect
   function scriptStyle(){
      wp_enqueue_style( 'main_style', get_template_directory_uri() . '/assets/css/style.min.css');
      wp_deregister_script( 'jquery' );
      wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/vendor/jquery-3.4.1.min.js', null, 3, true);
      wp_enqueue_script('lightbox', get_template_directory_uri() . '/assets/js/vendor/lightbox.min.js', null, 2, true);
      wp_enqueue_script('simple-lightbox.jquery', get_template_directory_uri() . '/assets/js/vendor/simple-lightbox.jquery.min.js', null, 1, true);
      wp_enqueue_script('slick', get_template_directory_uri() . '/assets/js/vendor/slick.min.js', null, 1, true);
      wp_enqueue_script('typed', get_template_directory_uri() . '/assets/js/vendor/typed.min.js', null, 2, true);
      wp_enqueue_script('waves', get_template_directory_uri() . '/assets/js/vendor/waves.min.js', null, 1, true);
      wp_enqueue_script('wow', get_template_directory_uri() . '/assets/js/vendor/wow.min.js', null, 1, true);
      wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.min.js', null, 1, true);
   
   }
add_action('wp_enqueue_scripts', 'scriptStyle');
?>