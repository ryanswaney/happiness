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
  <div class="centered-navigation-wrapper">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="mobile-logo">
      <img src="http://happiness.local/wp-content/uploads/2015/04/whr-logo-small.png">
    </a>
    <a href="javascript:void(0)" id="js-centered-navigation-mobile-menu" class="centered-navigation-mobile-menu">MENU</a>
    <nav role="navigation">
      <ul id="js-centered-navigation-menu" class="centered-navigation-menu show">
      <li class="nav-link logo">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="logo">
          <img src="http://happiness.local/wp-content/uploads/2015/04/whr-logo.png">
        </a>
      </li>

      <?php

        $defaults = array(
          'theme_location'  => '',
          'menu'            => 'primary',
          'container'       => '',
          'container_class' => '',
          'container_id'    => '',
          'menu_class'      => 'nav-link',
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
