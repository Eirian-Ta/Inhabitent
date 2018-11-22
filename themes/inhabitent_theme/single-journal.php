<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>



	<div id="primary" class="content-area single-journal">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'single-journal' ); ?>

			<div class="comments">
            <?php
                // If comments are open or we have at least one comment, load up the comment template.
                if (comments_open() || get_comments_number() ) :
                    /*comments_template();*/
                    comments_template();
                endif;
            ?>
        </div>

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->


		<div id="secondary" class="widget-area" role="complementary">
			<?php dynamic_sidebar( 'footer-sidebar-1' ); ?>
		</div>

	</div><!-- #primary -->
<?php get_footer(); ?>
