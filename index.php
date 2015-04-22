<?php
/**
 * Primary WordPress template file.
 *
 *
 * @package happiness
**/
?>

<?php get_header(); ?>

<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">

<?php if ( have_posts() ) : ?>

  <?php /* Start the Loop */ ?>
  <?php while ( have_posts() ) : the_post(); ?>

    <?php
      /* Include the Post-Format-specific template for the content.
       * If you want to override this in a child theme, then include a file
       * called content-___.php (where ___ is the Post Format name) and that will be used instead.
       */
      get_template_part( 'content', get_post_format() );
    ?>

  <?php endwhile; ?>

  <?php
  // Previous/next page navigation.
    the_posts_pagination( array(
      'prev_text'          => __( 'Previous', 'happiness' ),
      'next_text'          => __( 'Next', 'happiness' ),
      'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( '', 'happiness' ) . ' </span>',
      'screen_reader_text' => __( 'More News', 'happiness' )
    ) );
  ?>

<?php else : ?>

  <?php get_template_part( 'content', 'none' ); ?>

<?php endif; ?>

  </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>