<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

if ( is_home() ) :
	get_header( 'white' );
elseif ( is_404() ) :
	get_header( 'green' );
else :
	get_header( 'green');
endif;
?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

		<header class="page-header">
			
			<?php
			$term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) ); ?>
			<h2 class="page-title"> 
			<?php echo $term->name;
            $terms = get_terms( array(
            'taxonomy' => 'productcat',
            'hide_empty' => 0,
            ) );
            if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) :
            ?>            	
            </h2>
            
            <div class="taxonomy-description">
				<p><?php echo category_description(); ?> </p>
            </div>
               
            <?php endif; ?>

		</header>

			<?php /* Start the Loop */ ?>
			<div class='product-grid'>
				<?php while ( have_posts() ) : the_post(); ?>

				<div class='product-grid-item'>
					<div class='thumbnail-wrapper'><a href="<?php the_permalink(); ?>"><img width="640" height="480" src="<?php echo CFS()->get( 'image' ); ?>" class="attachment-large size-large wp-post-image" alt=""></a></div>
					<div class="product-info">
						<h2 class="entry-title">
							<?php echo CFS()->get( 'name' ); ?>
						</h2>
						<span class="price"><?php echo '$'.CFS()->get( 'price' ); ?></span>
					</div>
				</div>
						

			<?php endwhile; ?>
					
					</div>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>