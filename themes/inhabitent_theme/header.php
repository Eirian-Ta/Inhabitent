<?php
/**
 * The header for our theme.
 *
 * @package RED_Starter_Theme
 */
/*include('trial.php');*/

?><!DOCTYPE html>

<html <?php language_attributes(); ?>>
	
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">



<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="hfeed site">
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html( 'Skip to content' ); ?></a>

		<header id="masthead" class="site-header <?php if ( is_home() || is_page(about) || is_singular(adventure)) echo "reverse-header" ?> " role="banner">
			<div class="container">
				<div class="site-branding">
					<div class="logo">
						<a href= <?php echo '"'. get_home_url() .'"';?> rel="home">
							<h1 class="site-title"> Inhabitent</h1> 
						</a>
					</div>
				</div><!-- .site-branding -->

				<nav id="site-navigation" class="main-navigation clearfix" role="navigation">
					<div class="menu-main-navigation-container">
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
					</div>
					<?php get_search_form(); ?>
				</nav><!-- #site-navigation -->
			</div>
		</header><!-- #masthead -->
			
		<?php if ( is_home() || is_page(about) || is_singular(adventure)) echo "<script type='text/javascript' src=" .get_template_directory_uri()."/build/js/change-header.min.js> </script>" ?>


		<div id="content" class="site-content">




			