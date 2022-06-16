<?php
/**
 * Template Name: Gallery
 */
?>
<?php get_header(); ?>
<?php get_template_part( 'templates/intro'); ?>
<!--servicess block card-->
<section id="pageGallery" class="page__gallery mt-6">
      <div class="container">
         <div class="page__gallery--title">
            <h3><?php the_field('zagolovok_bloku_galareya'); ?></h3>
         </div><!--/.title-->
         <div class="page__gallery--row">
            <div class="box__gallery" id="boxGallery">
               <?php if( have_rows('grupa_poliv_galereyi') ): ?>
                  <?php while( have_rows('grupa_poliv_galereyi') ): the_row(); ?>
                     <a class="_projectItem" href="<?php the_sub_field('povnorozmirni_zobrazhennya_galereyi'); ?>" rel="rel1">
                        <img src="<?php the_sub_field('galereya_minyatyur'); ?>" class="img" alt="wedding">
                     </a>
                  <?php endwhile; ?>
               <?php endif; ?>
            </div><!--/.box__gallery-->
         </div><!--/.row-->
         <div class="page__gallery--button">
            <button type="button" id="galleryButton"><?php the_field('tekst_knopky_zagruzyty_shhe'); ?><i class="fas fa-angle-down"></i></button>
         </div><!--/.button-->
         <div class="page__gallery--line">
            <hr>
         </div><!--/.line-->
      </div><!--/.container-->
   </section><!--/.services__card-->
<?php get_footer(); ?>