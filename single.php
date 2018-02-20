<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package dugout
 */

get_header(); ?>

	<section id="news_story">

		<div class="container">
			<div class="row">

				<div id="primary" class="content-area columns twelve">
					<main id="main" class="site-main">

					<?php
					while ( have_posts() ) : the_post();

						get_template_part( 'template-parts/content', get_post_type() );

					endwhile; // End of the loop.
					?>

					</main><!-- #main -->
				</div><!-- #primary -->

				<?php //get_sidebar(); ?>

			</div>

			<div class="row">
				<?php the_post_navigation(); ?>
			</div>
		</div>

	</section>

<?php
get_footer();
