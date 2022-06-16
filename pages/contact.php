<?php
/**
 * Template Name: Contact
 */
?>
<?php get_header(); ?>
<?php get_template_part( 'templates/intro'); ?>

<!--contact form nlock-->
<section id="pageContact" class="page__contact mt-6">
      <div class="container">
         <div class="page__contact--title">
            <h3><?php the_field('osnovnyj_zagolovok_storinky_kontaktiv'); ?></h3>
         </div><!--/.title-->
         <div class="page__contact--form">
            <form class="wow fadeInLeft contact__form" id="contactForm" data-action="<?php echo site_url(); ?>/wp-admin/admin-ajax.php" data-wow-duration="1.5s" data-wow-delay="0.5s">
               <div class="contact__form--block">
                  <i class="fas fa-user"></i>
                  <input type="text" id="name" name="name">
                  <label id="lebelName" for="name"><?php the_field('pole_vvodu_imeni'); ?></label>
                  <p class="error__name" id="errorName" style="display: none;"><?php the_field('pomylka_polya_vvodu_imeni'); ?></p>
               </div><!--/.block-->
               <div class="contact__form--block">
                  <i class="fas fa-envelope"></i>
                  <input type="email" id="email" name="email">
                  <label id="labelEmail" for="email"><?php the_field('pole_vvodu_elektronnoyi_adresy'); ?></label>
                  <p class="error__email" id="errorEmail" style="display: none;"><?php the_field('pomylka_polya_vvodu_elektoronnoyi_adresy'); ?></p>
               </div><!--/.block-->
               <div class="contact__form--block">
                  <i class="fas fa-phone-volume"></i>
                  <input type="tel" id="phone" name="phone">
                  <label id="labelPhone" for="phone"><?php the_field('pole_vvodu_nomera_telefonu'); ?></label>
                  <p class="error__phone" id="errorPhone" style="display: none;"><?php the_field('pomylka_polya_vvodu_nomera_telefonu'); ?></p>
               </div><!--/.block-->
               <div class="contact__form--block">
                  <i class="fas fa-pencil-alt"></i>
                  <textarea name="message" id="message" rows="1"></textarea>
                  <label id="labelMessage" for="message"><?php the_field('pole_vvodu_povidomlennya'); ?></label>
                  <p class="error__message" id="errorMessage" style="display: none;"><?php the_field('pomylka_polya_vvodu_povidomlennya'); ?></p>
               </div><!--/.block-->
               <div class="contact__form--button text__center">
                  <button class="waves waves-light waves-effect" id="sendMail" type="button">
                     <?php the_field('tekst_knopky_vidpravyty'); ?>
                     <i class="fas fa-paper-plane"></i>
                  </button>
               </div><!--/.button-->
               <div class="error__text" id="errorText"></div>
            </form><!--/.contact__form-->
            <div class="wow fadeInRight contact__block" data-wow-duration="1.5s" data-wow-delay="0.5s">
               <div class="contact__block--line">
                  <i class="fas fa-map"></i>
                  <span><?php the_field('mezhi_roboty_kompaniyi'); ?></span>
               </div><!--/.line-->
               <div class="contact__block--line">
                  <i class="fas fa-building"></i>
                  <span><?php the_field('grafik_roboty', 'option'); ?></span>
               </div><!--/.line-->
               <div class="contact__block--line">
                  <i class="fab fa-viber"></i>
                  <span><?php the_field('vajber', 'option'); ?></span>
               </div><!--/.line-->
               <div class="contact__block--line">
                  <i class="fas fa-phone"></i>
                  <span><?php the_field('osnovnyj_telefon', 'option'); ?></span>
               </div><!--/.line-->
            </div><!--/.contact__block-->
         </div><!--/.form-->
         <div class="page__contact--line">
            <hr>
         </div><!--/.line-->
      </div><!--/.container-->
   </section><!--/.page__contact-->

<?php get_footer(); ?>