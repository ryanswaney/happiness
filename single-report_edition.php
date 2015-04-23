<?php
/**
 * The template for displaying all single posts.
 *
 * @package happiness
 */
get_header(); ?>

  <!-- Report -->
  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

    <?php while ( have_posts() ) : the_post(); ?>

      <?php get_template_part( 'content', 'report' ); ?>

      <?php //the_post_navigation(); ?>

    <?php endwhile; // end of the loop. ?>

    <?php if ( $post->post_name == '2015' ) : ?>

      <?php $subscription_page_query = new WP_Query( 'pagename=learn-more' ); ?>

      <?php while ( $subscription_page_query ->have_posts() ) : $subscription_page_query ->the_post(); ?>
        <?php get_template_part ('content', 'page'); ?>
      <?php endwhile; ?>

      <?php wp_reset_postdata(); ?>

    <?php endif; ?>

    </main><!-- #main -->
  </div><!-- #primary -->

<?php get_footer(); ?>