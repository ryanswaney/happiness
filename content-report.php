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
    <?php
    if ( has_post_thumbnail() ) :
      the_post_thumbnail('medium', array('class' => 'alignright'));
    endif;

    if ( is_page( 'home' ) || is_page( 'download' ) ) :
      the_excerpt();
    else :
      the_content();
    endif; ?>
  </div><!-- .entry-content -->

  <?php // check if the repeater field has rows of data
  if( have_rows('report_files') ):
  ?>
  <table class="table-downloads">
  <thead>
    <tr>
      <th colspan="3" class="entry-download-header">Download</th>
    </tr>
    <tr>
      <th>Title</th>
      <th>File Size</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
  <?php // loop through the rows of data
      while ( have_rows('report_files') ) : the_row();

      $attachment_id = get_sub_field('file');
      $attachment_meta =  wp_prepare_attachment_for_js($attachment_id);
      $title = $attachment_meta ['title'];
      $description = $attachment_meta['description'];
      $url = $attachment_meta['url'];
      $filesize = $attachment_meta['filesizeHumanReadable'];
  ?>
  <tr <?php if( get_sub_field('file_highlight') ) { echo 'class="highlighted"'; } ?>>
    <td>
      <h4><?php echo $title; ?></h4>
      <?php if($description != ''): ?>
      <p><?php echo $description; ?></p>
      <?php endif; // description ?>
    </td>
    <td><?php echo $filesize; ?></td>
    <td>
      <a href="<?php echo $url; ?>" title="Download: <?php echo $title.' ('.$filesize.')' ?>">Download</a>
    </td>
    </tr>
  <?php endwhile; ?>
  </tbody>
  </table>
  <?php else :
    // no rows found
    echo 'No files found.';
  endif; ?>

  <?php if( get_field('report_colophon') ) : ?>
  <div class="colophon">
    <h2>Colophon</h2>
    <?php the_field('report_colophon'); ?>
  </div>
  <?php endif; // colophon ?>

</article><!-- #post-## -->
