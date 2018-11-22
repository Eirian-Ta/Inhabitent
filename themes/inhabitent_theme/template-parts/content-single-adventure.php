<?php
/**
 * Template part for displaying posts.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php 
            if ( has_post_thumbnail() ) the_post_thumbnail( 'full' ); 
            the_title( "<h2 class='entry-title container'>", "</h2>" ); 
        ?>

        <div class="entry-meta container">
			<?php  red_starter_posted_by(); ?>
		</div><!-- .entry-meta -->

        <div class="entry-content container">
            <?php the_content(); ?>
        </div><!-- .entry-content -->

        <footer class="entry-footer container">
            <div class="social-buttons">
                <a type="button" class="black-btn" href="http://facebook.com" target="_blank"><i class="fab fa-facebook-f"></i> Like</a>
                <a type="button" class="black-btn" href="http://instagram.com" target="_blank"><i class="fab fa-twitter"></i> Tweet</a>
                <a type="button" class="black-btn" href="http://pinterest.com" target="_blank"><i class="fab fa-pinterest"></i> Pin</a>
            </div>
        </footer>

    </header><!-- .entry-header -->
</article><!-- #post-## -->
