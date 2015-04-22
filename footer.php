<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package happiness
 */
?>

</div><!-- #content -->

<footer id="colophon" class="footer" role="contentinfo">

    <div class="footer-logo">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
      <img src="<?php the_field('logo_reversed', 'option'); ?>">
    </a>
  </div>

  <hr>

  <div class="site-description">
    <?php the_field('site_description', 'option'); ?>
  </div>
</footer>

</div> <!-- page -->
    
<?php wp_footer(); ?>
  
</body>
</html>