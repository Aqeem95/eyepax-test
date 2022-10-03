<!doctype html>
<html lang="en">
<head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="initial-scale=1,user-scalable=no,maximum-scale=1,width=device-width">
   <link rel="icon" href="assets/img/favicon.ico" type="image/x-icon">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300;400;500&display=swap" rel="stylesheet">

    <?php wp_head(); ?>
    <title><?php the_title(); ?></title>
</head>
<body>

<header class="header-wrap">
   <div class="header-innwrap">
   <div class="container">
      <div class="row">
         <div class="col-lg-12">
            <div class="menuwrap">
               <a href="<?php echo get_home_url(); ?>" class="logo">BackPackers</a>
                  <div class="menu">
                     <button class="navbar-toggler first-button" type="button" data-toggle="collapse" data-target="#navbarSupportedContent20"aria-controls="navbarSupportedContent20" aria-expanded="false" aria-label="Toggle navigation">
                        <div class="animated-icon1">
                           <span></span>
                           <span></span>
                           <span></span>
                        </div>
                     </button>

                      <?php
                      wp_nav_menu( array(
                          'theme_location' => 'menu-header',
                          'menu_id'        => '',
                          'menu_class' => '',
                          'container' => 'ul'
                      ) );
                      ?>
               </div>

            </div>
         </div>
      </div>
   </div>
   </div>

</header>

