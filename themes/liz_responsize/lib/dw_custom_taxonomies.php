<?php
/**
 * Custom Taxonomy Code
 *
 *
 * @package Daniel Wiener
 * @since Daniel Wiener 1.0
 */ 
add_action( 'init', 'build_taxonomies', 0 );  
if ( ! function_exists( 'build_taxonomies' ) ):


	function build_taxonomies() {  							
// ====================================================================================
// = Make, equivalent of genre but I like it better /make/faces, make/sculpture, etc. =
// ====================================================================================
		 $labels = array(
	    'name' => _x( 'Portfolios', 'taxonomy general name' ),
	    'singular_name' => _x( 'Portfolio', 'taxonomy singular name' ),
	    'search_items' =>  __( 'Search Portfolios' ),
	    'popular_items' => __( 'Popular Portfolios' ),
	    'all_items' => __( 'All Portfolios' ),
	    'parent_item' => null,
	    'parent_item_colon' => null,
	    'edit_item' => __( 'Edit Portfolio' ), 
	    'update_item' => __( 'Update Portfolio' ),
	    'add_new_item' => __( 'Add Portfolio' ),
	    'new_item_name' => __( 'New Name of a Portfolio' ),
	  ); 

		register_taxonomy(
		'portfolios',
		'artworks',
			array( 'hierarchical' => true,
			'labels' => $labels,
			'query_var' => true,
			'show_ui' => true,
			'public' => true,
			'show_in_nav_menus' => true,
			'rewrite' => array( 'slug' => 'portfolio',
								'with_front' => false,
								'hierarchical' => 'true',
								) ) );
	}											
						
		endif;