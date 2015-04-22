<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package happiness
 */
?>

<!-- PAGE -->
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header class="entry-header">
    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
  </header><!-- .entry-header -->

  <div class="entry-content">
    <?php the_content(); ?>


    <?php 
      // Load MailChimp form on Learn More page
      if ( $post->post_name == 'learn-more' ) :
        get_template_part( 'content', 'mailchimp' );
      endif;
    ?>

  </div><!-- .entry-content -->

  <footer class="entry-footer">
    <?php //edit_post_link( __( 'Edit', 'happiness' ), '<span class="edit-link">', '</span>' ); ?>
  </footer><!-- .entry-footer -->
</article><!-- #post-## -->

