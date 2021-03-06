<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/themes/smoothness/jquery-ui.css" />

  <?php // Load our CSS ?>
  <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

<header>
  <div class="container clearfix">
    <div class="bookingSpace">
      <div class="bookingInfo">
        <h2><?php the_field('booking_page_title'); ?></h2>
        <p><?php the_field('booking_text'); ?></p>
        <p class="email"><?php the_field('booking_email'); ?></p>
        <p><?php the_field('booking_phone_number'); ?></p>
      </div>
      <div class="bookingMap">
        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('header_sidebar') ) : 
endif; ?>
    </div>
    </div> <!-- end .bookingSpace -->
      <ul class="Main">
        <li class="booking">Book a Table</li>
        <li class="navicon">
          <span class = "naviconIcon"></span>
        </li>
      </ul> <!-- end ul.Main -->

   <!--  <?php wp_nav_menu( array(
      'container' => false,
      'theme_locations' => 'primary'
    )); ?> -->
  </div> <!-- /.container -->
</header><!--/.header-->


