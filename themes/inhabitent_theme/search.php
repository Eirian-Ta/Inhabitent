<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<section id="primary" class="content-area search-results">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h2 class="page-title"><?php printf( esc_html( 'Search Results for: %s' ), '<span>' . get_search_query() . '</span>' ); ?></h2>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'search' ); ?>

				<?php echo '<a class="read-more black-btn" href="'. get_post_permalink() .'">Read More &rarr;</a>' ?>

			<?php endwhile; ?>

			<?php red_starter_numbered_pagination(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->

				<div id="secondary" class="widget-area" role="complementary">
			<?php dynamic_sidebar( 'footer-sidebar-1' ); ?>
		</div>
	</section><!-- #primary -->


<?php get_footer(); ?>
