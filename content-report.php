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
  </div><!-- .entry-content -->

  <?php

  // check if the repeater field has rows of data
  if( have_rows('report_files') ):

  ?>
  <table class="table-downloads">
  <thead>
    <tr>
      <th>Title</th>
      <th>File Size</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
  <?php

    // loop through the rows of data
      while ( have_rows('report_files') ) : the_row();

      $attachment_id = get_sub_field('file');
      $url = wp_get_attachment_url( $attachment_id );
      $title = get_the_title( $attachment_id );
      $filesize = size_format( filesize( get_attached_file( $attachment_id ) ), 2 );
  ?>
    <tr>
    <td><?php echo $title; ?></td>
    <td><?php echo $filesize; ?></td>
    <td>
      <a href="<?php echo $url; ?>">Download</a>
    </td>
    </tr>
  <?php

      endwhile;

  ?>
  </tbody>
  </table>
  <?php
  else :

      // no rows found
    echo 'No files found.';

  endif;

  ?>


  <footer class="entry-footer">
    <?php //edit_post_link( __( 'Edit', 'happiness' ), '<span class="edit-link">', '</span>' ); ?>
  </footer><!-- .entry-footer -->
</article><!-- #post-## -->