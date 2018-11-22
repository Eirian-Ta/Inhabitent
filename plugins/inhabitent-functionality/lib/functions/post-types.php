<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

// Add your custom post types here...

/*$taxonomiesArray = array ("Product" , "Journal", "Adventure");
for ($i = 0; $i <= (sizeof($taxonomiesArray) - 1); $i++) {
	$newPostType = $taxonomiesArray[i];*/

function create_labels_for_post_type($newPostType) {
    $labels = array(
        'name' => $newPostType.'s',
        'singular_name' => "$newPostType",
        'add_new' => "Add New $newPostType",
        'add_new_item' => "Add New $newPostType",
        'edit_item' => "Edit $newPostType",
        'new_item' => "New $newPostType",
    	'all_items' => 'All '.$newPostType.'s',
    	'view_item' => "View $newPostType",
    	'search_items' => 'Search '.$newPostType.'s',
    	'not_found' =>  'No '.$newPostType.'s Found',
    	'not_found_in_trash' => 'No '.$newPostType.'s found in Trash', 
    	'parent_item_colon' => '',
    	'menu_name' => $newPostType.'s',
    );
    return $labels;
}

function create_product_post_type() {
    register_post_type( 'product', array(
        'labels' => create_labels_for_post_type('Product'),
        'has_archive' => true,
        'public' => true,
        'supports' => array( 'title', 'editor', 'excerpt', 'custom-fields', 'thumbnail','page-attributes' ),
        'taxonomies' => array( 'post_tag', 'category' ),    
        'exclude_from_search' => false,
        'capability_type' => 'post',
        'rewrite' => array( 'slug' => 'products' ),
        )
    );
}

function create_journal_post_type() {
    register_post_type( 'journal', array(
        'labels' => create_labels_for_post_type('Journal'),
        'has_archive' => true,
        'public' => true,
        'supports' => array( 'title', 'editor', 'excerpt', 'custom-fields', 'thumbnail','page-attributes','comments','revisions' ),
        'taxonomies' => array( 'post_tag', 'category' ),    
        'exclude_from_search' => false,
        'capability_type' => 'post',
        'rewrite' => array( 'slug' => 'journals' ),
        )
    );
}

function create_adventure_post_type() {
    register_post_type( 'adventure', array(
        'labels' => create_labels_for_post_type('Adventure'),
        'has_archive' => true,
        'public' => true,
        'supports' => array( 'title', 'editor', 'excerpt', 'custom-fields', 'thumbnail','page-attributes' ),
        'taxonomies' => array( 'post_tag', 'category' ),    
        'exclude_from_search' => false,
        'capability_type' => 'post',
        'rewrite' => array( 'slug' => 'adventures' ),
        )
    );
}

add_action( 'init', 'create_product_post_type' );
add_action( 'init', 'create_journal_post_type' );
add_action( 'init', 'create_adventure_post_type' );





?>