<?php
/**
 * @package pelotudo
 */
?>


<article id="post-<?php the_ID(); ?>" <?php post_class('row'); ?>>

	<div class="large-12 columns post">
		<header class="entry-header">
			<?php the_title( sprintf( '<h1><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>

			<?php if ( 'post' == get_post_type() ) : ?>
				<div class="entry-meta meta">
					<?php pelotudo_posted_on(); ?>


				</div><!-- .entry-meta -->
			<?php endif; ?>
		</header><!-- .entry-header -->

		<?php if ( is_search() ) : // Only display Excerpts for Search ?>
			<div class="small-12 columns entry-summary text">
				<?php the_excerpt(); ?>
			</div><!-- .entry-summary -->
		<?php else : ?>
			<div class="small-12 medium-9 entry-content text">
				<?php the_content( __( 'Sigue leyendo <span class="meta-nav">&rarr;</span>', 'pelotudo' ) ); ?>
				<?php
					wp_link_pages( array(
						'before' => '<div class="page-links">' . __( 'Pages:', 'pelotudo' ),
						'after'  => '</div>',
					) );
				?>
			</div><!-- .entry-content -->


		<?php endif; ?>

		<footer class="row entry-footer">
			<div class="share-buttons medium-12 columns">
				<?php wpsocialite_markup(); ?>
			</div><!-- share-buttons -->

			<div class="post-spacer-hr"></div>
			
		</footer><!-- .entry-footer -->

	</div>
</article><!-- #post-## -->