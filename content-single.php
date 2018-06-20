<?php
/**
 * @package pelotudo
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="row">
		<div class="small-12 medium-12 columns entry-header">
			<header>
				<?php the_title( sprintf( '<h1><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
				<div class="entry-meta">
					<?php pelotudo_posted_on(); ?>
				</div><!-- .entry-meta -->
			</header><!-- .entry-header -->
		</div>
	</div>

	<div class="row">
		<div class="small-12 medium-8 columns entry-content text">
			<?php the_content(); ?>

			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . __( 'Pages:', 'pelotudo' ),
					'after'  => '</div>',
				) );
			?>
		</div><!-- .entry-content -->
	</div>
	
	<div class="row">
		<footer class="entry-footer">
			<div class="share-buttons medium-12 columns">
				share
			</div>
			
			<div class="small-12 medium-9 columns">
					<?php
						/* translators: used between list items, there is a space after the comma */
						$category_list = get_the_category_list( __( ', ', 'pelotudo' ) );

						/* translators: used between list items, there is a space after the comma */
						$tag_list = get_the_tag_list( '', __( ', ', 'pelotudo' ) );

						if ( ! pelotudo_categorized_blog() ) {
							// This blog only has 1 category so we just need to worry about tags in the meta text
							if ( '' != $tag_list ) {
								$meta_text = __( 'This entry was tagged %2$s. Bookmark the <a href="%3$s" rel="bookmark">permalink</a>.', 'pelotudo' );
							} else {
								$meta_text = __( 'Bookmark the <a href="%3$s" rel="bookmark">permalink</a>.', 'pelotudo' );
							}

						} else {
							// But this blog has loads of categories so we should probably display them here
							if ( '' != $tag_list ) {
								$meta_text = __( 'This entry was posted in %1$s and tagged %2$s. Bookmark the <a href="%3$s" rel="bookmark">permalink</a>.', 'pelotudo' );
							} else {
								$meta_text = __( 'Esta entrada hace parte de: %1$s. Siempre en este <a href="%3$s" rel="bookmark">Enlace Permanente</a>.', 'pelotudo' );
							}

						} // end check for categories on this blog

						printf(
							$meta_text,
							$category_list,
							$tag_list,
							get_permalink()
						);
					?>
			</div>
		</footer><!-- .entry-footer -->
	</div>
</article><!-- #post-## -->