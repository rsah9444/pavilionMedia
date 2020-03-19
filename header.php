<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset');?>">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title><?php echo wp_title(); ?></title>
  <!-- <meta content="" name="descriptison">
  <meta content="" name="keywords">

  Facebook Opengraph integration: https://developers.facebook.com/docs/sharing/opengraph
  <meta property="og:title" content="">
  <meta property="og:image" content="">
  <meta property="og:url" content="">
  <meta property="og:site_name" content="">
  <meta property="og:description" content="">

  Twitter Cards integration: https://dev.twitter.com/cards/ 
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="">
  <meta name="twitter:title" content="">
  <meta name="twitter:description" content="">
  <meta name="twitter:image" content=""> -->

 
  <?php wp_head(); ?>

</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50">


  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <a href="index.html">
      <?php
        if ( function_exists( 'the_custom_logo' ) ) {
          the_custom_logo();
         }


        $custom_logo_id = get_theme_mod( 'custom_logo' );
        $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
      if ( has_custom_logo() ) {
        echo '<img src="' . esc_url( $logo ) . '" alt="' . get_bloginfo( 'name' ) . '">';
      } else {
        echo '<h1>'. get_bloginfo( 'name' ) .'</h1>';
        }
       ?> 
          <!-- <h1 style="font-family:Brush Script MT, Brush Script Std, cursive; color:#fff;">Pavilion Media</h1></a> -->
        <!-- <img src="" alt="pavilion-media"></a> -->
        <!-- Uncomment below if you prefer to use a text image -->
        <!--<h1><a href="#hero">Bell</a></h1>-->
      </div>

      <nav id="nav-menu-container nav-menu pull-right">
        <!-- <ul class="nav-menu pull-right"> -->
          <?php
            wp_nav_menu(array(
                'theme_location'=>'primary',
                'container'=>false,
                'menu_class'=>'nav-menu-container nav-menu pull-right'
            ));
            $items =   get_search_form( false ) 
          ?>
          <!-- <li><a href="#brand">About Us</a></li>
          <li><a href="#features">Features</a></li>
          <li><a href="#portfolio">Portfolio</a></li>
          <li><a href="#team">Team</a></li>
           -->
        <!-- </ul> -->
      </nav>
      <!-- #nav-menu-container -->

     
    </div>
  </header><!-- End Header -->



