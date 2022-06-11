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
               <h4>Чому саме Ми?...</h4>
               <ul class="stage__check--list">
                  <li class="wow bounceInRight" data-wow-duration="2s" data-wow-offset="100">
                     <p>
                        Ми працюємо в сфері декору вже 6 років, 
                        а отже маємо найважливіше &ndash; досвід.
                     </p>
                  </li>
                  <li class="wow bounceInRight" data-wow-duration="2s" data-wow-offset="80" data-wow-delay="1s">
                     <p>
                        Ми ростемо, розвиваємось, вчимось новому, щоб  йти в ногу з трендами.
                     </p>
                  </li>
                  <li class="wow bounceInRight" data-wow-duration="2s" data-wow-offset="60" data-wow-delay="2s">
                     <p>
                        Ми в силі зробити для Вас весілля мрії, 
                        враховуємо всі побажання і втілюємо їх в життя.
                     </p>
                  </li>
                  <li class="wow bounceInRight" data-wow-duration="2s" data-wow-offset="40" data-wow-delay="3s">
                     <p>
                        Ми самостійні, тому тобі не потрібно хвилюватись ні про що. 
                        В наші обов’язки входить спілкування з адміністрацією ресторану, 
                        замовлення всіх необхідних матеріалів, втілення в життя всіх ідей, 
                        транспорт, монтаж та демонтаж. Все що потрібно від Вас &ndash; це вибір 
                        декору мрії, далі робота за нами.
                     </p>
                  </li>
                  <li class="wow bounceInRight" data-wow-duration="2s" data-wow-offset="20" data-wow-delay="4s">
                     <p>
                        Про нашу роботу говорять багато хорошого, 
                        основна наша мета це задоволений клієнт, без жодних непорозумінь.
                     </p>
                  </li>
                  <li class="wow bounceInRight" data-wow-duration="2s" data-wow-offset="10" data-wow-delay="5s">
                     <p>
                        В нас немає мінімального бюджету, ми готові працювати з будь 
                        яким і довести що навіть не дорогий декор може вразити всіх.
                     </p>
                  </li>
                  <li class="wow bounceInRight" data-wow-duration="2s" data-wow-offset="0" data-wow-delay="6s">
                     <p>
                        Ми на одній хвилі з нашими нареченими, ми відчуваємо Вас 
                        і розуміємо з пів слова.
                     </p>
                  </li>
               </ul><!--/.list-->
            </div><!--/.stage__check-->
         </div><!--/.row-->
         <div class="stage__slider--content">
            <hr>
            <p>
               Ви знаходитесь в пошуках декораторів на своє весілля? 
               Шукаєте людей які Вас зрозуміють і зроблять все так як Ви уявляєте. 
               Або шукаєте декораторів які допоможуть підібрати декор який буде в 
               тренді, стильний і сучасний.  Тоді Ви на правильному напрямку! 
               Телефонуйте нам і записуйтесь на безкоштовну консультацію.
            </p>
         </div><!--/.content-->
      </div><!--/.container-->
   </section><!--/.stage__slider-->

<?php get_footer(); ?>