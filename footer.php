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

  <div class="footer-links">
    <ul>
      <li><h3>Header</h3></li>
      <li><a href="javascript:void(0)">Link</a></li>
      <li><a href="javascript:void(0)">Link</a></li>
      <li><a href="javascript:void(0)">Link</a></li>
    </ul>
    <ul>
      <li><h3>Header</h3></li>
      <li><a href="javascript:void(0)">Link</a></li>
      <li><a href="javascript:void(0)">Link</a></li>
      <li><a href="javascript:void(0)">Link</a></li>
    </ul>
    <ul>
      <li><h3>Header</h3></li>
      <li><a href="javascript:void(0)">Link</a></li>
      <li><a href="javascript:void(0)">Link</a></li>
    </ul>
  </div>

    <div class="footer-logo">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
      <img src="http://happiness.local/wp-content/uploads/2015/04/whr-logo-reversed.png">
    </a>
  </div>

  <hr>

  <div class="site-description">
    <?php the_field('site_description', 'option'); ?>
  </div>
</footer>

</div> <!-- page -->
    
<?php wp_footer(); ?>

<!--
<script src="//use.typekit.net/vaz6tdr.js"></script>
<script>try{Typekit.load();}catch(e){}</script>
-->
  
</body>
</html>