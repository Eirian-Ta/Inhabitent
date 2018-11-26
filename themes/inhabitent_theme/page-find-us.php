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
							src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2603.6833050880177!2d-123.14035688431126!3d49.26344827932923!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x548673c79e1ac457%3A0x3aea6428fa30dc6a!2s1490+W+Broadway%2C+Vancouver%2C+BC+V6H+4E8!5e0!3m2!1svi!2sca!4v1543255923833H" allowfullscreen>
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

