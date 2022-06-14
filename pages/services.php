<?php
/**
 * Template Name: Services
 */
?>
<?php get_header(); ?>
<?php get_template_part( 'templates/intro'); ?>

   <!--servicess block card-->
   <section id="servicesCard" class="services__card mt-6">
      <div class="container">
         <div class="services__card--title">
            <h3><?php the_field('osnovnyj_zagolovok_storinky_poslug'); ?></h3>
         </div><!--/.title-->
         <div class="services__card--row">
            <?php
                  $argsServ = array(
                     'post_type'      => 'services',
                     'post_status'    => 'publish',
                     'posts_per_page' => 6,
                  );
                  $servicesPost = new WP_Query( $argsServ, 'cat=8' );
               ?>
               <?php if ($servicesPost->have_posts()) : while ($servicesPost->have_posts()) : $servicesPost->the_post(); ?>	
                  <div class="card__coll _jump">
                     <div class="services__card">
                        <div class="services__card--overlay">
                           <img src="<?php the_post_thumbnail_url(); ?>" alt="wedding" class="img">
                        </div>
                        <div class="services__card--body">
                           <h4><?php the_title(); ?></h4>
                           <p><?php the_content(); ?></p>
                        </div>
                     </div>
                  </div><!--/.card__coll-->
                  <?php endwhile; ?>
                  <?php wp_reset_postdata(); ?>
               <?php endif; ?>
            </div><!--/.row-->
         <div class="services__card--line">
            <hr>
         </div><!--/.line-->
      </div><!--/.container-->
   </section><!--/.services__card-->

<?php get_footer(); ?>