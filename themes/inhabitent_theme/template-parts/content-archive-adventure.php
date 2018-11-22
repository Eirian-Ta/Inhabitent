<?php
/**
 * Template part for displaying posts.
 *
 * @package RED_Starter_Theme
 */

?>

<div class="adventure-grid-item">
	<div class="story-wrapper">
		<?php if ( has_post_thumbnail() ) the_post_thumbnail( 'full' ); ?>		
	
		<div class="story-info">
			<?php the_title( sprintf( '<h3 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>

			<?php echo '<a class="white-btn" href="'. get_post_permalink() .'">Read More</a>' ?>

		</div>
	</div>
</div>


 