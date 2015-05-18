<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package happiness
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    
<div id="page" class="hfeed site">

<div id="content" class="site-content">

<header class="centered-navigation" role="banner">

  <div class="social-share">
    <ul>
      <li>
        <span class="share-button-label">Share on:</span>
      </li>
      <li>
        <a class="js-social-share" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode( home_url( '/' ) ); ?>" target="_blank">
        <span class="share-button-icon">
          <svg viewBox="0 0 33 33" preserveAspectRatio="xMidYMid meet" class="svg-icon svg-icon-facebook"><path d="M 17.996,32L 12,32 L 12,16 l-4,0 l0-5.514 l 4-0.002l-0.006-3.248C 11.993,2.737, 13.213,0, 18.512,0l 4.412,0 l0,5.515 l-2.757,0 c-2.063,0-2.163,0.77-2.163,2.209l-0.008,2.76l 4.959,0 l-0.585,5.514L 18,16L 17.996,32z"></path></svg>
        </span>
        <span class="share-button-label">Facebook</span>
      </a>
      </li>
      <li>
        <a class="js-social-share" href="https://twitter.com/intent/tweet/?text=Check%20out%20the%20World%20Happiness%20Report%202015!&url=<?php echo urlencode( home_url( '/' ) ); ?>&via=UNSDSN" target="_blank">
          <span class="share-button-icon">
            <svg viewBox="0 0 12 12" preserveAspectRatio="xMidYMid meet" class="svg-icon svg-icon-twitter"><path class="svg-icon-path" d="M10.8,3.5c0,0.1,0,0.2,0,0.3c0,3.3-2.5,7-7,7c-1.4,0-2.7-0.3-3.8-1c0.2,0,0.4,0,0.6,0c1.1,0,2.2-0.5,3.1-1.2 c-1.1,0-2-0.7-2.3-1.7c0.2,0,0.3,0,0.5,0s0.4,0,0.7-0.1c-1.1-0.2-2-1.2-2-2.4l0,0c0.3,0.2,0.7,0.3,1.1,0.3C1,4.3,0.6,3.5,0.6,2.7 c0-0.5,0.1-0.8,0.3-1.2c1.2,1.6,3,2.5,5,2.6c0-0.2-0.1-0.4-0.1-0.6c0-1.3,1.1-2.4,2.5-2.4c0.7,0,1.4,0.3,1.8,0.8 c0.6-0.1,1.1-0.3,1.6-0.6c-0.2,0.6-0.6,1.1-1.1,1.4c0.5-0.1,1-0.2,1.4-0.4C11.7,2.8,11.2,3.2,10.8,3.5z"/></svg>
          </span>
          <span class="share-button-label">Twitter</span>
        </a>
      </li>
    </ul>
  </div>

  <div class="centered-navigation-wrapper">

    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="mobile-logo">
      <img src="<?php the_field('logo_mobile', 'option'); ?>">
    </a>
    <a href="javascript:void(0)" id="js-centered-navigation-mobile-menu" class="centered-navigation-mobile-menu">MENU</a>
    <nav role="navigation">
      <ul id="js-centered-navigation-menu" class="centered-navigation-menu show">
      <li class="menu-item logo">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="logo">
          <img src="<?php the_field('logo', 'option'); ?>">
        </a>
      </li>

      <?php

        $defaults = array(
          'theme_location'  => '',
          'menu'            => 'primary',
          'container'       => '',
          'container_class' => '',
          'container_id'    => '',
          'menu_class'      => '',
          'menu_id'         => '',
          'echo'            => true,
          'fallback_cb'     => 'wp_page_menu',
          'before'          => '',
          'after'           => '',
          'link_before'     => '',
          'link_after'      => '',
          'items_wrap'      => '%3$s',
          'depth'           => 0,
          'walker'          => ''
        );

        wp_nav_menu( $defaults );

        ?>
        
      </ul>
    </nav>
  </div>
</header>
