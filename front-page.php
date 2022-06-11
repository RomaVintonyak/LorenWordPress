<?php
/**
 * Template part for displaying page content
 *
 */
?>
<?php get_header(); ?>
<?php get_template_part( 'templates/intro'); ?>

  <!--about us-->
  <section class="about mt-6" id="about">
    <div class="container">
      <div class="about__row">
        <div class="about__row--text">
          <h2><?php the_field('zagolovok_bloku_nas_obyrayut'); ?></h2>
            <?php the_field('opys_bloku_nas_obyrayut'); ?>
        </div><!--/.text-->
        <div class="about__row--img">
          <div class="about__row--iWraper">
            <img src="<?php the_field('zobrazhennya_bloku_nas_obyrayut'); ?>" alt="weding" class="img">
          </div><!--/.iWraper-->
        </div><!--/.img-->
      </div><!--/.about__row-->
    </div><!--/.container-->
  </section><!--/.about-->
  <!--services-->
  <section class="services mt-6" id="services">
    <div class="container">
      <div class="services__row">
        <div class="services__col services__col--img">
          <div class="services__slider" id="servicesSlider">
            <?php if( have_rows('slajder_bloku_poslug') ): ?>
              <?php while( have_rows('slajder_bloku_poslug') ): the_row(); ?>
                <img src="<?php the_sub_field('zobrazhennya_bloku_poslug'); ?>" alt="wedding" class="img">
              <?php endwhile; ?>
            <?php endif; ?>
          </div>
        </div><!--/.img-->
        <div class="services__col services__col--text">
          <h2><?php the_field('poslugy_zagolovok'); ?></h2>
          <div class="services__text">
            <?php
              $args = array(
                'posts_per_page'  => 6,
                'post_type'       => 'post',
                'category_name'   => 'Пости пропозицій'
                );
              ?>
              <?php $mainPostServices = new WP_Query( $args, 'cat=6' ); ?>
                <?php if ( $mainPostServices->have_posts() ) : ?>
                    <?php while ( $mainPostServices->have_posts() ) : $mainPostServices->the_post(); ?>
                    <div class="services__text--col">
                      <div class="text__icon">
                        <img class="img" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="icon">
                      </div><!--/.text__icon-->
                      <div class="text__data wow fadeInUp" data-wow-duration="2s" data-wow-offset="100">
                        <h3><?php the_title(); ?></h3>
                        <p>
                          <?php the_field('osnovnyj_tekst_posta'); ?>
                        </p>
                      </div><!--/.text__data-->
                    </div><!--/.services__text__coll-->
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                <?php endif; ?>
          </div><!--/.services__text-->
        </div><!--/.text-->
      </div><!--/.services__row-->
    </div><!--/.container-->
  </section><!--/.services-->
  <!--gallery-->
  <section class="gallery mt-6" id="gallery">
    <div class="container">
      <div class="gallery__row text__center">
        <h2><?php the_field('zagolovok_slajdera_robit_galereyi'); ?></h2>
        <div class="gallery__slider" id="gallerySlider">
          <?php if( have_rows('zobrazhennya_slajdera_robit') ): ?>
            <?php while( have_rows('zobrazhennya_slajdera_robit') ): the_row(); ?>
              <?php if( have_rows('grupa_zobrazhen_slajdera') ): ?>
                <?php while( have_rows('grupa_zobrazhen_slajdera') ): the_row(); ?>
                  <a href="<?php the_sub_field('velyke_zobrazhennya_slajdera'); ?>"  data-lightbox="roadtrip">
                    <img src="<?php the_sub_field('minyatyura_slajdera_robit'); ?>" alt="wedding" class="img"> 
                  </a>
                <?php endwhile; ?>
              <?php endif; ?>
            <?php endwhile; ?>
          <?php endif; ?>
        </div><!--/.gallery__slider-->
      </div><!--/.gallery__row-->
    </div><!--/.container-->
  </section><!--/.gallery-->
<?php get_footer(); ?>