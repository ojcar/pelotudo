<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package pelotudo
 */

get_header(); ?>

<div class="row main">
    <div class="small-12 medium-8 columns">

		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">
<?php 

				$args = array(
			      'tax_query' => array(
			        array(
			          'taxonomy' => 'post_format',
			          'field'    => 'slug',
			          'terms'    => 'post-format-aside',
			          'operator' => 'NOT IN'
			        )
			      )
			    );
				
				query_posts( $args );
			?>
			<?php if ( have_posts() ) : ?>

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php
						/* Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'content', get_post_format() );
					?>

				<?php endwhile; ?>

				<?php pelotudo_paging_nav(); ?>

			<?php else : ?>

				<?php get_template_part( 'content', 'none' ); ?>

			<?php endif; ?>

			</main><!-- #main -->
		</div><!-- #primary -->
	</div>

	<div class="medium-4 columns show-for-medium-up sidebar">
		<?php get_sidebar(); ?>
	</div>

</div>

<?php get_footer(); ?>