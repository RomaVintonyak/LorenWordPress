<?php
/**
 * Template Name: About Us
 */
?>
<?php get_header(); ?>
<?php get_template_part( 'templates/intro'); ?>

<!--about us-->
<section id="aboutUsP" class="aboutUsP__main mt-6">
      <div class="container">
         <div class="aboutUsP__main--row">
            <h3><?php the_field('pro_nas_osnovnyj_zagolovok'); ?></h3>
            <p><?php the_field('osnovnyj_opys_storinky_pro_nas'); ?></p>
         </div><!--/.row-->
      </div><!--/.container-->
   </section><!--/.aboutUsP__main-->
   <!--about us stage-->
   <section id="aboutStage" class="about__stage mt-6">
      <div class="container">
         <h3 class="stage__title"><?php the_field('zagolovok_etapiv_pidgotovky'); ?></h3>
         <div class="about__stage--row">
            <?php
               $args = array(
                  'post_type'      => 'stages',
                  'post_status'    => 'publish',
                  'posts_per_page' => 6,
               );
               $stagePost = new WP_Query( $args, 'cat=7' );
            ?>
            <?php if ($stagePost->have_posts()) : while ($stagePost->have_posts()) : $stagePost->the_post(); ?>	
               <div class="stage__collum wow flipInX" data-wow-duration="2s" data-wow-offset="100">
                  <i class="fas fas fa-check fa-4x"></i>
                  <h4><?php the_title(); ?></h4>
                  <p><?php the_content(); ?></p>
               </div><!--/.stage__collum-->
               <?php endwhile; ?>
               <?php wp_reset_postdata(); ?>
            <?php endif; ?>
            <hr>
         </div><!--/.row-->
      </div><!--/.container-->
   </section><!--/.about__stage-->
   <!--stage slider-->
   <section id="stageSlider" class="stage__slider">
      <div class="container">
         <div class="stage__slider--row">
            <div class="stageSliderBlock">
               <?php if( have_rows('chomu_my_slajder') ): ?>
                  <?php while( have_rows('chomu_my_slajder') ): the_row(); ?>
                     <img src="<?php the_sub_field('zbrazhennya_slajdera_chomu_my'); ?>" alt="wedding" class="img">
                  <?php endwhile; ?>
               <?php endif; ?>
            </div>
            <div class="stage__check">
               <h4><?php the_field('zagolovok_bloku_chomu_my'); ?></h4>
               <ul class="stage__check--list">
                  <?php if( have_rows('blok_abzacziv_chomu_my') ): ?>
                     <?php while( have_rows('blok_abzacziv_chomu_my') ): the_row(); ?>
                        <li class="wow bounceInRight" data-wow-duration="2s" data-wow-offset="<?php the_sub_field('vidstan_spryaczyuvannya_animacziyi'); ?>" data-wow-delay="<?php the_sub_field('zatrymka_animacziyi'); ?>s">
                           <p><?php the_sub_field('teksty_abzacziv_chomu_my'); ?></p>
                        </li>
                     <?php endwhile; ?>
                  <?php endif; ?>
               </ul><!--/.list-->
            </div><!--/.stage__check-->
         </div><!--/.row-->
         <div class="stage__slider--content">
            <hr>
            <p><?php the_field('abzacz_z_nyzu_storinky'); ?></p>
         </div><!--/.content-->
      </div><!--/.container-->
   </section><!--/.stage__slider-->

<?php get_footer(); ?>