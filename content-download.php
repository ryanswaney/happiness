<?php
/*
*  Loop through post objects (assuming this is a multi-select field) ( setup postdata )
*/
?>

<!-- PAGE -->
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header class="entry-header">
    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
  </header><!-- .entry-header -->

  <div class="entry-content">
    <?php the_content(); ?>
  </div><!-- .entry-content -->

    <footer class="entry-footer">
    <?php //edit_post_link( __( 'Edit', 'happiness' ), '<span class="edit-link">', '</span>' ); ?>
  </footer><!-- .entry-footer -->
</article><!-- #post-## -->

<?php

$post_objects = get_field('downloads');

if( $post_objects ): ?>

    <?php foreach( $post_objects as $post): // variable must be called $post (IMPORTANT) ?>

        <?php setup_postdata($post); ?>

        <?php get_template_part( 'content', 'report' ); ?>

    <?php endforeach; ?>


    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>

<?php endif; ?>