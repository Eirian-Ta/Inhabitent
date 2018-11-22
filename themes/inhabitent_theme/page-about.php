<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<div id="primary" class="content-area about">
	<main id="main" class="site-main" role="main">

            <div 
                class="entry-header custom-hero">
                <div class="container">    
                    <h2 class="entry-title">About</h2>
                </div>
            </div>

            <div class="container">    
               <div class="entry-content">
                    <h3> Our Story</h3>
                    <?php echo CFS()->get('our_story');?>

                    <h3> Our Team </h3>
                    <?php echo CFS()->get('our_team');?>
                </div>
            </div>

    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
