<?php
/**
 * TAXONOMIES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_taxonomy
 */


function create_labels_for_taxonomy($newTaxonomy) {
	$labels = array(
		'name'              => "$newTaxonomy Categories",
		'singular_name'     => "$newTaxonomy Category",
		'search_items'      => "Search $newTaxonomy Categories",
		'all_items'         => "All $newTaxonomy Categories",
		'edit_item'         => "Edit $newTaxonomy Category",
		'update_item'       => "Update $newTaxonomy Category",
		'add_new_item'      => "Add New $newTaxonomy Category",
		'new_item_name'     => "New $newTaxonomy Category",
		'menu_name'         => "$newTaxonomy Categories",
   );
    return $labels;
}

function create_product_taxonomy() {
	register_taxonomy( 'productcat', 'product', array(
		'hierarchical' => true,
		'labels' => create_labels_for_taxonomy('Product'),
		'query_var' => true,
		'show_admin_column' => true
	) );
}

add_action( 'init', 'create_product_taxonomy' );
?>