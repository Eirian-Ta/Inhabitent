<?php
/**
 * Template part for displaying single posts.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <?php 
        if ( has_post_thumbnail() ) :
            echo "<div class='product-image-wrapper'>";
            the_post_thumbnail( 'large' );
            echo "</div>";
		endif; 
        ?>

	<div class="product-content-wrapper">
        <div class="entry-header">
            <?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
        </div>
        <div class="entry-content">
            <?php echo '<p class="price">$'.CFS()->get('price').'</p>';?>
            <?php the_content(); ?>
            <div class="social-buttons">
                <a type="button" class="black-btn" href="http://facebook.com" target="_blank"><i class="fab fa-facebook-f"></i> Like</a>
                <a type="button" class="black-btn" href="http://instagram.com" target="_blank"><i class="fab fa-twitter"></i> Tweet</a>
                <a type="button" class="black-btn" href="http://pinterest.com" target="_blank"><i class="fab fa-pinterest"></i> Pin</a>
            </div>
        </div> 
    </div>

</article><!-- #post-## -->
