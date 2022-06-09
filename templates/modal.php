<?php
/**
 * Template Name: Modal
 */
?>
   <!--modal info-->
   <div id="modal" class="modal">
      <div class="modal__mask">
         <div class="modal__content">
            <button type="button" class="modal__close">&#9747;</button>
            <div class="modal__content--img">
               <?php if( have_rows('osnovni_zobrazhennya_modalky', 'option') ): ?>
                  <?php while( have_rows('osnovni_zobrazhennya_modalky', 'option') ): the_row(); ?>
                     <img src="<?php the_sub_field('zobrazhennya_modalky', 'option'); ?>" alt="wedding" class="img">
                  <?php endwhile; ?>
               <?php endif; ?>
            </div><!--/.img-->
            <div class="modal__content--text">
               <div class="text__title">
                  <div class="title__icon">
                     <img src="<?php the_field('ikonka_modalky', 'option'); ?>" alt="icon">
                  </div>
                  <h3><?php the_field('zagolovok_modalky', 'option'); ?></h3>
               </div><!--/.title__icon-->
               <div class="text__info">
                  <p><?php the_field('grafik_roboty', 'option'); ?></p>
               </div><!--/.text__info-->
               <div class="text__social">
                  <a class="waves waves-light" href="<?php the_field('fejsbuk_posylannya', 'option'); ?>" target="_blank">
                     <i class="fab fa-facebook-square"></i>
                  </a>
                  <a class="waves waves-light" href="<?php the_field('instagram_posylannya', 'option'); ?>" target="_blank">
                     <i class="fab fa-instagram"></i>
                  </a>
               </div><!--/.text__social-->
            </div><!--/.text-->
         </div><!--/.modal__content-->
      </div><!--/.modal__mask-->
   </div><!--/.modal-->