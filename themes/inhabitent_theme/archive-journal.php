<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

		<div id="primary" class="content-area archive-journal">
			<main id="main" class="site-main" role="main">

			<?php if ( have_posts() ) : ?>

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php
						get_template_part( 'template-parts/content','archive-journal' );
					?>

				<?php endwhile; ?>


			<?php else : ?>

				<?php get_template_part( 'template-parts/content', 'none' ); ?>

			<?php endif; ?>

			</main><!-- #main -->

			<div id="secondary" class="widget-area" role="complementary">
				<?php dynamic_sidebar( 'footer-sidebar-1' ); ?>
			</div>

		</div><!-- #primary -->


<?php get_footer(); ?>
