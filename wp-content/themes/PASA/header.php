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
    <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_directory' ); ?>/css/header.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Alegreya:400,900' rel='stylesheet' type='text/css'>
    <?php wp_head(); ?>
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
    <div class="navbar<?php echo $navbar_class; ?>" role="navigation">
      <div class="container">
<!--         <div class="nav-header">
          <h1 class="h1"><a class="navbar-brand logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">PASA</a></h1>
        </div>
 -->    <ul class="nav-menu">
          <li class="nav-item"><a class="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">PASA</a></li>
          <li class="nav-item"><a id="" href="<?php echo esc_url( home_url( '/' ) ); ?>/?page_id=5">About</a></li>
          <li class="nav-item"><a id="" href="<?php echo esc_url( home_url( '/' ) ); ?>/?page_id=12">People</a></li>
          <li class="nav-item"><a id="" href="<?php echo esc_url( home_url( '/' ) ); ?>/?page_id=17">Research</a></li>
          <li class="nav-item"><a id="" href="<?php echo esc_url( home_url( '/' ) ); ?>/?page_id=15">Publications</a></li>
          <li class="nav-item"><a id="" href="<?php echo esc_url( home_url( '/' ) ); ?>/?page_id=20">Teaching</a></li>
          <li class="nav-item"><a id="" href="<?php echo esc_url( home_url( '/' ) ); ?>/?page_id=8">Contact Us</a></li>
        </ul>
      </div>
    </div>
  <?php
    }
  ?>
  <?php if(($times_square_settings['header-display'] == 'home-page' && is_front_page ()) || $times_square_settings['header-display'] == 'all-pages') { ?>
  <?php if($times_square_settings['header'] == 'image') { ?>
      <div class="carousel-inner">
        <div class="item active">
          <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" alt="<?php bloginfo( 'name' ); ?>" />
        </div>
  <?php } else if($times_square_settings['header'] == 'metaslider') { ?>
    <?php echo do_shortcode("[metaslider id=".$times_square_settings['header-metaslider']."]"); ?>
  <?php } else if($times_square_settings['header'] == 'wysiwyg') { ?>
  <?php } else if($times_square_settings['header'] == 'video') { ?>
    <div class="video carousel slide carousel slide">
        <?php echo ent2ncr($times_square_settings['header-video']); ?>
  </div>
  <?php } else { ?>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
          <img src="<?php echo get_template_directory_uri(); ?>/images/slider.jpg" alt="<?php bloginfo( 'name' ); ?> Slider">
        </div>
        <div class="item">
          <img src="<?php echo get_template_directory_uri(); ?>/images/slider2.jpg" alt="<?php bloginfo( 'name' ); ?> Slider 2">
        </div>
        <div class="item">
          <img src="<?php echo get_template_directory_uri(); ?>/images/slider3.jpg" alt="<?php bloginfo( 'name' ); ?> Slider 3">
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span><span class="sr-only"><?php echo __('Previous', 'times-square'); ?></span></a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><span class="sr-only"><?php echo __('Next', 'times-square'); ?></span></a>
    </div><!-- /.carousel -->
  <?php } ?>
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
    <div class="navbar<?php echo $navbar_class; ?>" role="navigation">
      <div class="container">
            <div class="navbar-header">
      <?php if($menu) { ?>
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse-secondary">
                <span class="sr-only"><?php __('Toggle navigation', 'time_square'); ?></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            <?php } ?>
            </div>
            <?php
        echo times_square_main_menu($menu, $name);
        ?><!--/.nav-collapse -->
      </div>
    </div>
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