<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

        <div id="primary" class="content-area">
    		<main id="main" class="site-main" role="main">
                <div class="container archive-adventure"> 
                    <?php if ( have_posts() ) : ?>

                        <header class="page-header">
                            <h2 class="page-title">Latest Adventures</h2> 
                        </header><!-- .page-header -->

                        <div class="adventure-grid">
                            <?php 
                            while ( have_posts() ) : the_post();
                            get_template_part( 'template-parts/content','archive-adventure' );
                            endwhile;
                            ?>
                        </div>
                        <?php 
                        else : 
                        get_template_part( 'template-parts/content', 'none' ); 
                        ?>

                    <?php endif; ?>
                </div>
    		</main><!-- #main -->
    	</div><!-- #primary -->


<?php get_footer(); ?>