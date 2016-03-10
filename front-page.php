<?php
/**
 * The template for displaying the static front page.
 *
 * @package happiness
 */

get_header(); ?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

      <article class="post">
        <img src="<?php the_field('logo', 'option'); ?>" style="max-width: 100%;">
      </article>

      <?php while ( have_posts() ) : the_post(); ?>

        <?php get_template_part( 'content', 'frontpage' ); ?>

      <?php endwhile; // end of the loop. ?>

    </main><!-- #main -->
  </div><!-- #primary -->

<?php get_footer(); ?>
