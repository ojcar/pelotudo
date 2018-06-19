<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package pelotudo
 */
?>

<div id="secondary" class="widget-area" role="complementary">
	<div id="blog" class="medium-12 columns log">
		<div class="section-header">
            <h5 class="section-title"><span class="negative">BLOG</span></h5>
<p><a href="https://twitter.com/mundopelota" class="twitter-follow-button" data-show-count="false" data-lang="es">Sigue a @mundopelota</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script></p>

        </div><!-- section-header -->
	<?php 
		$args = array(
	      'tax_query' => array(
	        array(
	          'taxonomy' => 'post_format',
	          'field'    => 'slug',
	          'terms'    => 'post-format-aside',
	          'operator' => 'IN'
	        )
	      )
	    );
		
		query_posts( $args );
	?>
	<?php if ( have_posts() ) : ?>
		<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<div class="post">
				<p class="post-date">
					<?php echo 'Hace ' . human_time_diff( get_the_time('U'), current_time('timestamp') ); ?>
				</p>
			<?php the_title( sprintf( '<p class="post-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></p>' ); ?>
			<?php the_content(); ?>
			</div>
		<?php endwhile; ?>
	<?php endif; ?>
	</div><!-- log, #blog -->
</div><!-- #secondary -->