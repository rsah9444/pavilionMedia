<?php 
if ( ! function_exists( 'myfirsttheme_setup' ) ) :
    /**
    * Sets up theme defaults and registers support for various WordPress features
    *
    *  It is important to set up these functions before the init hook so that none of these
    *  features are lost.
    *
    *  @since MyFirstTheme 1.0
    */

function add_enqueue_style(){
    

    wp_enqueue_style('google-fonts','https://fonts.googleapis.com/css?family=Raleway:400,500,700|Roboto:400,900');
    wp_enqueue_style('bootstrap-min',get_template_directory_uri().'/assets/vendor/bootstrap/css/bootstrap.min.css',array(),'4.0.0','all');
    wp_enqueue_style('venobox',get_template_directory_uri().'/assets/vendor/venobox/venobox.css',array(),'1.0.0','all');

    wp_enqueue_style('font-awesome',get_template_directory_uri().'/assets/vendor/font-awesome/css/font-awesome.min.css',array(),'4.7.0','all');
    wp_enqueue_style('font-awesome','https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('main-style',get_template_directory_uri().'/assets/css/style.css',array(),'1.0.1','all');

}
add_action('wp_enqueue_scripts','add_enqueue_style');
add_theme_support( 'automatic-feed-links' );

function add_enqueue_script(){
    wp_enqueue_script('jquery',get_template_directory_uri().'/assets/vendor/jquery/jquery.min.js',array('jquery'),'3.4.1',true);
    wp_enqueue_script('bootstrap-bundle',get_template_directory_uri().'/assets/vendor/bootstrap/js/bootstrap.bundle.min.js',array(),'4.0.0',true);
    wp_enqueue_script('jquery-easing',get_template_directory_uri().'/assets/vendor/jquery.easing/jquery.easing.min.js',array('jquery'),'3.4.1',true);
    wp_enqueue_script('email-form',get_template_directory_uri().'"/assets/vendor/php-email-form/validate.js',array(),'1.0.1',true);
    wp_enqueue_script('counter',get_template_directory_uri().'/assets/vendor/counterup/counterup.min.js',array(),'1.0.1',true);
    wp_enqueue_script('jquery-sticky',get_template_directory_uri().'/assets/vendor/jquery-sticky/jquery.sticky.js',array('jquery'),'3.4.1',true);
    wp_enqueue_script('venobox',get_template_directory_uri().'/assets/vendor/venobox/venobox.min.js',array(),'1.0.1',true);
    wp_enqueue_script('lockfixed',get_template_directory_uri().'/assets/vendor/lockfixed/jquery.lockfixed.min.js',array('jquery'),'3.4.1',true);
    wp_enqueue_script('waypoints',get_template_directory_uri().'/assets/vendor/waypoints/jquery.waypoints.min.js',array(),'1.0.1',true);
    wp_enqueue_script('superfish',get_template_directory_uri().'/assets/vendor/superfish/superfish.min.js',array(),'1.0.1',true);
    wp_enqueue_script('hoverintent',get_template_directory_uri().'/assets/vendor/hoverIntent/hoverIntent.js',array(''),'1.0.1',true);
    
    // <!-- Vendor JS Files -->
    // <script src="assets/vendor/jquery/jquery.min.js"></script>
    // <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    // <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    // <script src="assets/vendor/php-email-form/validate.js"></script>
    // <script src="assets/vendor/counterup/counterup.min.js"></script>
    // <script src="assets/vendor/tether/js/tether.min.js"></script>
    // <script src="assets/vendor/jquery-sticky/jquery.sticky.js"></script>
    // <script src="assets/vendor/venobox/venobox.min.js"></script>
    // <script src="assets/vendor/lockfixed/jquery.lockfixed.min.js"></script>
    // <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
    // <script src="assets/vendor/superfish/superfish.min.js"></script>
    // <script src="assets/vendor/hoverIntent/hoverIntent.js"></script>
  
    // <!-- Template Main JS File -->
    // <script src="assets/js/main.js"></script>
}
add_action('wp_enqueue_scripts','add_enqueue_script');


// <!-- Favicons -->
// <link href="assets/img/favicon.png" rel="icon">
//  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

//  <!-- Google Fonts -->
//  <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,700|Roboto:400,900" rel="stylesheet">

//  <!-- Vendor CSS Files -->
//  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
//  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
//  <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">

//  <link href="assets/css/style.css" rel="stylesheet">


endif;
