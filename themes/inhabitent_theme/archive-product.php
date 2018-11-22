<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">

				<?php if ( have_posts() ) : ?>

				<header class="page-header">

					<h2 class='page-title'>Shop Stuff</h2>
					<?php
					$terms = get_terms( array( 'taxonomy' => 'productcat', 'hide_empty' => false) ); /*whether to not return empty $terms.*/
					
					if (! empty( $terms ) && ! is_wp_error( $terms )) :
						echo "<ul class='product-type-list'>";						
						foreach ( $terms as $term ) :
							echo "<li class='shop-category'>";
							echo "<p><a href=" . get_term_link( $term ) .">" . $term->name . "</a></p>
							</li>";

						endforeach;						
						echo "</ul>";
					endif; 
					?>

				</header><!-- .page-header -->

				<div class="product-grid"> 
	                <?php 
	                $product_posts = get_posts( array('numberposts' => 16,'post_type' => 'product', 'order' => 'ASC') );
	                    
	                foreach( $product_posts as $post ) : setup_postdata( $post ) ?>
					<div class='product-grid-item'>
						<div class='thumbnail-wrapper'><a href="<?php the_permalink(); ?>"><img width="640" height="480" src="<?php echo CFS()->get('image'); ?>" class="attachment-large size-large wp-post-image" alt=""></a></div>
						<div class="product-info">
							<h3 class="entry-title">
								<?php echo CFS()->get('name'); ?>
							</h3>
							<span class="price"><?php echo '$'. CFS()->get( 'price' ); ?></span>
						</div> <!-- .product-info -->
					</div><!-- .product-grid-item -->
	                   <?php endforeach?>
	                
	            </div> <!-- .product-grid -->
			
				<?php else : ?>
				<?php get_template_part( 'template-parts/content', 'none' ); ?>
				<?php endif; ?>


			</main><!-- #main -->
		</div><!-- #primary -->

	<?php get_footer(); ?>