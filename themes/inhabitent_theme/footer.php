<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */
?>

    </div><!-- #content -->

    <footer id="colophon" class="site-footer" role="contentinfo">

    	<div class="footer-blocks container">

        <div class="footer-block-item">
          <?php dynamic_sidebar( 'footer-sidebar-1' ); ?>
        </div>

    		<div class="footer-block-item">
          <div class="text-logo">
            <a href="<?php echo esc_url( home_url() ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logos/inhabitent-logo-text.svg"/></a> 
          </div>
        </div><!-- .footer-block-item -->

    	</div> 
    	
    	<div class="site-info">
      		<div class="container">copyright &copy; <?php echo date("Y") ?> inhabitent </div>
      </div>

    </footer><!-- .site-footer -->
  
<?php wp_footer();?>

</body>

</html>