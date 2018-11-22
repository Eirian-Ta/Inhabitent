<?php
/**
 * Template part for displaying single posts.
 *
 * @package RED_Starter_Theme
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php 
        if ( has_post_thumbnail() )  the_post_thumbnail( 'full' ); 
        the_title( "<h2 class='entry-title'>", "</h2>" ); 
        ?>

		<div class="entry-meta">
			<?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / <?php red_starter_posted_by(); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
        <?php the_content(); ?>

	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<span class="cat-links"> Posted in &rarr;
        <?php 
            $categories = get_the_category();
            foreach($categories as $category){ 
                echo "<a href='" . get_category_link( $category->term_id ) . "'>" . $category->name . ", </a>";
                }
        ?>
        </span>
        <span class="tags-links"> Tagged &rarr;
            <?php 
                $tags = get_the_tags();
                foreach($tags as $tag){
                    echo "<a href='" . get_term_link( $tag->term_id ) . "'>" . $tag->name .", </a>";
                }
            ?>
        </span>
            
        <div class="social-buttons">
            <a type="button" class="black-btn" href="http://facebook.com" target="_blank"><i class="fab fa-facebook-f"></i> Like</a>
            <a type="button" class="black-btn" href="http://instagram.com" target="_blank"><i class="fab fa-twitter"></i> Tweet</a>
            <a type="button" class="black-btn" href="http://pinterest.com" target="_blank"><i class="fab fa-pinterest"></i> Pin</a>
        </div>
	</footer><!-- .entry-footer -->

    
</article><!-- #post-## -->
