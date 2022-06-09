   <!--footer-->
   <footer class="footer mt-6" id="footer">
      <div class="footer__social">
         <div class="container">
            <div class="footer__social--content">
               <h4><?php the_field('zaogolovok_posylan'); ?></h4>
               <div class="social__link">
                  <a target="_blank" href="<?php the_field('fejsbuk_posylannya', 'option'); ?>">
                     <i class="fab fa-facebook-square"></i>
                  </a>
                  <a target="_blank" href="<?php the_field('instagram_posylannya', 'option'); ?>">
                     <i class="fab fa-instagram"></i>
                  </a>
               </div><!--/.social__link-->
            </div><!--/.content-->
         </div><!--/.container-->
      </div><!--/.footer__social-->
      <div class="footer__collum">
         <div class="container">
            <div class="footer__row">
               <div class="footer__col footer__col--brand">
                  <h3><?php the_field('osnovnyj_zagolovok'); ?></h3>
                  <hr>
                  <p>
                     <?php the_field('korotkyj_opys_kompaniyi'); ?>
                  </p>
                  <p>
                     <?php the_field('zahyst_avtorskyh_prav'); ?> <script>document.write(new Date().getFullYear());</script>
                  </p>
               </div><!--/.brand-->
               <div class="footer__col footer__col--works">
                  <h3><?php the_field('zagolovok_slajdera_robit'); ?></h3>
                  <hr>
                  <div class="footer__works">
                     <?php
                        $args = array(
                           'posts_per_page'  => 6,
                           'post_type'       => 'post',
                           'category_name'   => 'Слайдер підвалу'
                        );
                     ?>
                     <?php $sliderFooter = new WP_Query( $args, 'cat=5' ); ?>
                        <?php if ( $sliderFooter->have_posts() ) : ?>
                           <?php while ( $sliderFooter->have_posts() ) : $sliderFooter->the_post(); ?>
                              <a href="<?php the_field('velyke_zobrazhennya_slajdera'); ?>" data-lightbox="works">
                                 <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="img" alt="wedding">
                              </a>
                           <?php endwhile; ?>
                           <?php wp_reset_postdata(); ?>
                        <?php endif; ?>
                  </div>
               </div><!--/.footer__works-->
               <div class="footer__col footer__col--contact">
                  <h3><?php the_field('zaogolovok_bloku_kontaktiv'); ?></h3>
                  <hr>
                  <?php
                     $phoneNum = get_field('osnovnyj_telefon', 'option');
                     $phoneNumGap = str_replace(" ", '', $phoneNum);
                  ?>
                  <a href="tel:<?php echo $phoneNumGap; ?>"><i class="fas fa-phone-alt"></i><?php the_field('osnovnyj_telefon', 'option'); ?></a>
                  <?php
                     $viberNum = get_field('vajber', 'option');
                     $viberNumGap = str_replace(" ", '', $viberNum);
                  ?>
                  <a href="viber://add?number=<?php echo $viberNumGap; ?>"><i class="fab fa-viber"></i><?php the_field('vajber', 'option'); ?></a>
                  <a href="mailto:<?php the_field('elektronna_adresa', 'option'); ?>"><i class="fas fa-envelope"></i><?php the_field('elektronna_adresa', 'option'); ?></a>
               </div><!--/.contact-->
            </div><!--/.footer__row-->
         </div><!--/.container-->
      </div><!--/.footer__collum-->
   </footer><!--/.footer-->
   <?php get_template_part( 'templates/modal'); ?>                        
   <!--back top btn-->
   <div class="back__top hvr-icon-up" id="topBtn">
      <button class="hvr-icon" id="backTop" type="button">
         <i class="fas fa-arrow-up"></i>
      </button>
   </div><!--/.back__top-->
   <!--copy protect block-->
   <div class="copy_protect">
      <p>
         <?php the_field('zahyst_avtorskyh_prav'); ?> <script>document.write(new Date().getFullYear());</script>
      </p>
   </div><!--/.copy_protect-->
</main>
<?php wp_footer();?>
</body>
</html>