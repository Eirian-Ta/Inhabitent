<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>


<div id="primary" class="content-area find-us">
		<main id="main" class="site-main" role="main">
			<div class="entry-header">
				<?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
			</div>

			<div class="entry-content"> 
				<iframe
					width="760"
					height="300"
					frameborder="0" style="border:0"
					src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDWP_pLEwWYQpc00qEHRkjzMZ8WyhiUNRU
						&q=1490+W+Broadway,+Vancouver,+BC+V6H" allowfullscreen>
				</iframe>
				<?php echo '<h2>'.CFS()->get('find_us_title').'</h2>';?>
				<?php echo '<p>'.CFS()->get('find_us_content').'</p>';?>
			</div>
			
			<h2 class="entry-title">send us email!</h2>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
			<?php the_content(); ?>
		<?php endwhile; endif?>
		</main><!-- #main -->
	

		<div id="secondary" class="widget-area" role="complementary">
			<?php dynamic_sidebar( 'footer-sidebar-1' ); ?>
		</div>

		</div><!-- #primary -->
	<?php get_footer(); ?>

