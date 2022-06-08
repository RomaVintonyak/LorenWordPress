<?php
/**
 * Template Name: Intro
 */
?>
   <!--intro section-->
   <section id="intro" class="intro">
      <div class="container">
         <div class="intro__row">
            <div class="intro__content">
               <h1 class="main__title wow fadeInDown" data-wow-duration="1.5s" data-wow-delay="3s">
                  <?php the_field( 'osnovnyj_zagolovok' ); ?>
               </h1>
               <!--type text arr-->
               <div style="display: none;">
                  <script>
                     var typingArr = ["<?php the_field('drukuyuchyj_tekst'); ?>"];
                  </script>
               </div>
               <h2 class="typed main__suptitle wow fadeInDown" data-wow-duration="1.5s" data-wow-delay="4s"></h2>
               <p class="main__text wow fadeInDown" data-wow-duration="1.5s" data-wow-delay="5s">
                  <?php the_field('pidzagolovok'); ?>
               </p>
            </div><!--/.intro__content-->
            <div class="intro__scroll" id="btnIntroScroll">
               <span></span>
               <span></span>
               <span></span>
               <span></span>
            </div><!--/.intro__scroll-->
            <div class="intro__slider">
               <div class="intro__slider--wraper" id="introSlider">
                  <?php if( have_rows('golovnyj_slajder') ): ?>
                     <?php while( have_rows('golovnyj_slajder') ): the_row(); ?>
                        <img src="<?php the_sub_field('zobrazhennya_golovnogo_slajdera'); ?>" alt="wedding" class="img">
                     <?php endwhile; ?>
                  <?php endif; ?>
               </div><!--/.wraper-->
            </div><!--/.intro__slider-->
         </div><!--/.intro__row-->
      </div><!--/.container-->
      <div class="intro__asside">
         <ul class="social__menu">
            <li>
               <a target="_blank" href="<?php the_field('fejsbuk_posylannya', 'option'); ?>">Facebook</a>
            </li>
            <li>
               <a target="_blank" href="<?php the_field('instagram_posylannya', 'option'); ?>">Instagram</a>
            </li>
         </ul><!--/.social__menu-->
      </div><!--/.intro__asside-->
   </section><!--/.intro-->
   <!--asside-->
   <aside class="aside__buttons">
      <?php
      $phone_asside  = get_field('osnovnyj_telefon', 'option');
      $phoneNoGap  = str_replace(" ", '', $phone_asside);
      ?>
      <a class="waves waves-light" href="tel:<?php echo $phoneNoGap; ?>"><i class="fas fa-phone-alt"></i></a>
      <a class="waves waves-light" href="mailto:<?php the_field('elektronna_adresa', 'option'); ?>"><i class="fas fa-envelope"></i></a>
      <a class="waves waves-light" href="#" data-info="modal-info"><i class="fas fa-info-circle"></i></a>
   </aside><!--/.aside__buttons-->