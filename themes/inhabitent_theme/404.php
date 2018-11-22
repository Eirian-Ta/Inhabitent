<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

		<div id="primary" class="content-area not-found">
			<main id="main" class="site-main" role="main">

				<section class="error-404 not-found">
					<header class="page-header">
						<h2 class="page-title"><?php echo esc_html( 'Oops! That page can&rsquo;t be found.' ); ?></h2>
					</header><!-- .page-header -->

					<div class="page-content">
						<p><?php echo esc_html( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?' ); ?></p>

						<?php get_search_form(); ?>

						<?php the_widget( 'WP_Widget_Recent_Posts' ); ?>

						<?php if ( red_starter_categorized_blog() ) : // Only show the widget if site has multiple categories. ?>
						<div class="widget widget_categories">
							<h3 class="widget-title"><?php echo esc_html( 'Most Used Categories' ); ?></h3>
							<ul>
							<?php
								wp_list_categories( array(
									'orderby'    => 'count',
									'order'      => 'DESC',
									'show_count' => 1,
									'title_li'   => '',
									'number'     => 10,
								) );
							?>
							</ul>
						</div><!-- .widget -->
						<?php endif; ?>

						<?php
							$archive_content = '<p>' . sprintf( esc_html( 'Try looking in the monthly archives. %1$s' ), convert_smilies( ':)' ) ) . '</p>';
							the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$archive_content" );
						?>

					</div><!-- .page-content -->
				</section><!-- .error-404 -->

			</main><!-- #main -->

							<div id="secondary" class="widget-area" role="complementary">
				<?php dynamic_sidebar( 'footer-sidebar-1' ); ?>
			</div>
		</div><!-- #primary -->

	<?php get_footer(); ?>