<section>
   <style>
      .view_404{
         width: 100%;
         height: 100vh;
         display: flex;
         justify-content: center;
         align-items: center;
      }
      .container__404{
         text-align: center;
         margin: 0 auto;
      }
      .container__404 h1{
         font-size: 40px;
         font-weight: 700;
         color: tomato;
      }
      .container__404 hr{
         border-width: 0px;
         height: 2px;
         background-color: tomato;
      }
      .container__404 a{
         font-size: 30px;
         font-weight: 700;
         color: tomato;
         text-decoration: none;
      }
   </style>
   <div class="view_404" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/404/404.jpg) no-repeat center center fixed; background-size: cover;">
      <div class="container__404">
         <h1>
            OPS!!! This page not found.
         </h1>
         <hr>
         <a href="<?php echo home_url();?>">Back to home</a>
      </div>
   </div>
   </section>