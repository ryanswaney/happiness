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

<script type="text/javascript">
  var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-34440011-4']);
      _gaq.push(['_trackPageview']);
                    
      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
</script>
  
</body>
</html>