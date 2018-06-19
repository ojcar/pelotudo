<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package pelotudo
 */
?>
<hr>
<footer id="colophon" class="row site-footer" role="contentinfo">
    	<div class="large-12 columns site-info text-center">
		<p>
    		<a href="/">La pelota no se mancha</a> &middot; <a href="http://twitter.com/mundopelota">Sigue a @mundopelota en twitter</a>
    	</p>
            <?php wp_footer(); ?>
            
        </div><!-- .site-info -->
</footer><!-- #colophon -->



<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/jquery.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/foundation.min.js"></script>
<script>
  $(document).foundation();
</script>

</body>
</html>
