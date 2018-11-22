<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function red_starter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'red_starter_body_classes' );




function habitent_login_logo() { 
?> 
<style type="text/css"> 
body.login div#login h1 a {
	background-image: url(http://localhost/Project4/wp-content/themes/inhabitent_theme/assets/images/logos/inhabitent-logo-tent.svg); 
	padding-bottom: 10px; 
}
body.login div#login form#loginform p.submit input#wp-submit {
	background-color: #238982;
} 
</style>
<?php 
} add_action( 'login_enqueue_scripts', 'habitent_login_logo' );

function the_url( $url ) {
    return home_url();
}
add_filter( 'login_headerurl', 'the_url' );


//For the archive to display journal post type

/*add_action( 'pre_get_posts', function ( $query ) 
{
  if (    !is_admin() 
       && $query->is_main_query() 
       && $query->is_archive()
   )
     $query->set( 'post_type', array( 'post', 'podcasts' ) );
});*/


// Let Custom post type posts show in archive widget
add_filter( 'getarchives_where', function ( $where )
{
    $where = str_replace( "post_type = 'post'", "post_type IN ( 'journal' )", $where );
    return $where;
});