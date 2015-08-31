<?php
/**
 * Times Square
 *
 */

global $times_square_settings;

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php if(isset($times_square_settings['favicon'])) { ?>
    <link rel="icon" href="<?php echo esc_url($times_square_settings['favicon']); ?>">
    <?php } ?>
  <?php if ( ! function_exists( '_wp_render_title_tag' ) ) { function theme_slug_render_title() { ?>
    <title><?php wp_title( '|', true, 'right' ); ?></title>
  <?php } add_action( 'wp_head', 'theme_slug_render_title' ); } ?>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_directory' ); ?>/css/header.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_directory' ); ?>/css/GalleryOverried.css">
    <link href='https://fonts.googleapis.com/css?family=Oxygen:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Alegreya:400,900' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Russo+One' rel='stylesheet' type='text/css'>
    <?php wp_head(); ?>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_directory' ); ?>/overrideStyle.css">
  </head>
  <body <?php body_class(); ?>>
    <!-- top navbar -->
  <?php 
    if(isset($times_square_settings['menu-primary-status'])) {

      $navbar_class = '';
      if(!isset($times_square_settings['menu-primary-color'])) {
        $navbar_class .= ' navbar-inverse'; 
      }else if($times_square_settings['menu-primary-color'] == 'default') {
        $navbar_class .= ' navbar-default'; 
      } else {
        $navbar_class .= ' navbar-inverse'; 
      }
      
      if(!isset($times_square_settings['menu-primary-position'])) {
        $navbar_class .= ' navbar-fixed-top'; 
      } else if($times_square_settings['menu-primary-position'] == 'default') { 
        $navbar_class .= ' navbar-default';
      } else if($times_square_settings['menu-primary-position'] == 'static') {
        $navbar_class .= ' navbar-static-top';
      } else { 
        $navbar_class .= ' navbar-fixed-top'; 
      } 
      $name = 'primary';
      $menu = wp_nav_menu( array(
        'menu'              => $name,
        'depth'             => 3,
        'container'         => 'div',
        'container_class'   => 'navbar-collapse collapse',
        'container_id'      => 'primary-navbar',
        'theme_location'  => 'primary',
        'echo'        => false,
        'menu_class'        => 'nav navbar-nav navbar-right',
        'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
        'walker'            => new wp_bootstrap_navwalker())
      );
  ?>
    <div class="head" role="navigation">

      <div class="logo-wrapper">
        <div class="left logo"><a href="http://pasa.ucmerced.edu" style="color:#fff;">PASA</a></div>
        <div class="right intro">
          <p>
            Parallel Architecture, System, and Algorithm lab<br>
            University of Carlifornia, Merced
          </p>
        </div>
      </div>

      <div class="container">
<!--         <div class="nav-header">
          <h1 class="h1"><a class="navbar-brand logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">PASA</a></h1>
        </div>
 -->    <ul class="nav-menu">
          <!-- deleted on 8.30 -->
          <!--<li class="nav-item"><a class="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">PASA</a></li>-->
          <!--<li class="nav-item"><a id="" href="<?php echo esc_url( home_url( '/' ) ); ?>/?page_id=5">About</a></li>-->
          <li class="nav-item active" data-pageid="0" ><a id=""href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
          <li class="nav-item" data-pageid="171"><a id="" href="<?php echo esc_url( home_url( '/' ) ); ?>/?page_id=171">News</a></li>
          <li class="nav-item" data-pageid="174"><a id="" href="<?php echo esc_url( home_url( '/' ) ); ?>/?page_id=174">Software</a></li>
          <li class="nav-item" data-pageid="12"><a id="" href="<?php echo esc_url( home_url( '/' ) ); ?>/?page_id=12">People</a></li>
          <li class="nav-item" data-pageid="17"><a id="" href="<?php echo esc_url( home_url( '/' ) ); ?>/?page_id=17">Research</a></li>
          <li class="nav-item" data-pageid="15"><a id="" href="<?php echo esc_url( home_url( '/' ) ); ?>/?page_id=15">Publications</a></li>
          <li class="nav-item" data-pageid="59"><a id="" href="<?php echo esc_url( home_url( '/' ) ); ?>/?page_id=59">Students</a></li>
          <!--<li class="nav-item"><a id="" href="<?php echo esc_url( home_url( '/' ) ); ?>/?page_id=20">Teaching</a></li>-->
          <li class="nav-item" data-pageid="8"><a id="" href="<?php echo esc_url( home_url( '/' ) ); ?>/?page_id=8">Contact Us</a></li>
        </ul>
      </div>

      <!-- menu controller -->
      <script type="text/javascript">
        $( document ).ready(function() {
            var pid = $.urlParam('page_id');
            var menu = $('.nav-menu').children();
            console.log(menu);
            $.each(menu, function(index, value){
              console.log($(value).data('pageid'));
              if($(value).data('pageid') == pid){
                $(value).siblings().removeClass('active');
                $(value).addClass('active');
              }
            });
        });

        $.urlParam = function(name){
          var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
          if (results==null){
            return null;
          }
          else{
            return results[1] || 0;
          }
        }
      </script>

    </div>
  <?php
    }
  ?>
  <?php if(($times_square_settings['header-display'] == 'home-page' && is_front_page ()) || $times_square_settings['header-display'] == 'all-pages') { ?>
  
    <?php } ?>
  <?php
    if(isset($times_square_settings['menu-secondary-status'])) {

      $navbar_class = '';
      if($times_square_settings['menu-primary-color'] == 'default') {
        $navbar_class .= ' navbar-default'; 
      } else {
        $navbar_class .= ' navbar-inverse'; 
      }
      $name = 'secondary';
      $menu = wp_nav_menu( array(
        'menu'              => $name,
        'depth'             => 3,
        'container'         => 'div',
        'container_class'   => 'navbar-collapse navbar-collapse-secondary collapse',
        'container_id'      => 'secondary-navbar',
        'theme_location'  => 'secondary',
        'echo'        => false,
        'menu_class'        => 'nav navbar-nav',
        'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
        'walker'            => new wp_bootstrap_navwalker())
      );
  ?>

  <?php
    }
  ?>

  <div id="container" class="container">
        <?php
      if ( is_front_page() ) {
        get_sidebar( 'header-home' );
      } else {
        get_sidebar( 'header' );
      }
        ?>