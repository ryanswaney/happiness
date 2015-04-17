<?php
/**
 * happiness theme functions and definitions
 *
 * @package happiness
 */
/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
  $content_width = 640; /* pixels */
}
if ( ! function_exists( 'happiness_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function happiness_setup() {
  
  // Add default posts and comments RSS feed links to head.
  add_theme_support( 'automatic-feed-links' );
  /*
   * Let WordPress manage the document title.
   * By adding theme support, we declare that this theme does not use a
   * hard-coded <title> tag in the document head, and expect WordPress to
   * provide it for us.
   */
  add_theme_support( 'title-tag' );
  /*
   * Enable support for Post Thumbnails on posts and pages.
   *
   * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
   */
  add_theme_support( 'post-thumbnails' );
  // This theme uses wp_nav_menu() in one location.
  register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'happiness' ),
  ) );
  /*
   * Switch default core markup for search form, comment form, and comments
   * to output valid HTML5.
   */
  add_theme_support( 'html5', array(
    'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
  ) );
  /*
   * Enable support for Post Formats.
   * See http://codex.wordpress.org/Post_Formats
   */
  add_theme_support( 'post-formats', array(
    'aside', 'image', 'video', 'quote', 'link',
  ) );
  // Set up the WordPress core custom background feature.
  add_theme_support( 'custom-background', apply_filters( '_s_custom_background_args', array(
    'default-color' => 'ffffff',
    'default-image' => '',
  ) ) );
}
endif; // happiness_setup
add_action( 'after_setup_theme', 'happiness_setup' );


/* register sidebars etc. */

/**
 * Enqueue scripts and styles.
 */
function happiness_scripts() {
  wp_enqueue_style( 'happiness-style', get_stylesheet_uri() );

  //wp_enqueue_script('jquery');

  wp_enqueue_script( 'happiness-js', get_template_directory_uri() . '/js/happiness.js', array('jquery'), '20120206', true );
}
add_action( 'wp_enqueue_scripts', 'happiness_scripts' );

/* Set up options page via Advanced Custom Fields Pro */
require get_template_directory() . '/inc/acf-options.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php'


?>