<?php
/**
 * Custom Post Type Code.
 *
 * @package Daniel Wiener
 * @since Daniel Wiener 1.0
 */ 
add_action('init', 'dw_custom_init');
function dw_custom_init() 
{  
  

  /* BEGIN Artworks Post Type*/ 
  $labels = array(
    'name' => _x('Artworks', 'post type general name'),
    'singular_name' => _x('Artwork', 'post type singular name'),
    'add_new' => _x('Add New', 'artworks'),
    'add_new_item' => __('Add New Artwork'),
    'edit_item' => __('Edit Artwork'),
    'edit' => _x('Edit', 'artworks'),
    'new_item' => __('New Artwork'),
    'view_item' => __('View Artwork'),
    'search_items' => __('Search Artworks'),
    'not_found' =>  __('No Artworks found'),
    'not_found_in_trash' => __('No Artworks found in Trash'), 
    'view' =>  __('View Artworks'),
    'parent_item_colon' => ''
  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true, 
    'query_var' => true, 
    'capability_type' => 'page',
    'taxonomies' => array( 'portfolios'),
    'hierarchical' => false,
    'can_export' => true,
    'menu_position' => 5,
    'show_in_nav_menus' => true,
	'has_archive' => true,
    'rewrite' => true,
    'supports' => array('title','editor','thumbnail','excerpt','revisions','page-attributes')
  ); 
  register_post_type('artworks',$args);
}


/*--- Custom Messages - title_updated_messages ---*/
 add_filter('post_updated_messages', 'title_updated_messages');
 
 function title_updated_messages( $messages ) {
   global $post, $post_ID;

$messages['artworks'] = array(
0 => '', // Unused. Messages start at index 1.
1 => sprintf( __('Artwork updated. <a href="%s">View Artwork</a>'), esc_url( get_permalink($post_ID) ) ),
2 => __('Custom field updated.'),
3 => __('Custom field deleted.'),
4 => __('Artwork updated.'),
/* translators: %s: date and time of the revision */
5 => isset($_GET['revision']) ? sprintf( __('Artwork restored to revision from %s'), wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
6 => sprintf( __('Artwork published. <a href="%s">View Artwork</a>'), esc_url( get_permalink($post_ID) ) ),
7 => __('Artwork saved.'),
8 => sprintf( __('Artwork submitted. <a target="_blank" href="%s">Preview Artwork</a>'), esc_url( add_query_arg( 'preview', 'true', get_permalink($post_ID) ) ) ),
9 => sprintf( __('Artwork scheduled for: <strong>%1$s</strong>. <a target="_blank" href="%2$s">Preview Artwork</a>'),
  // translators: Publish box date format, see http://php.net/date
  date_i18n( __( 'M j, Y @ G:i' ), strtotime( $post->post_date ) ), esc_url( get_permalink($post_ID) ) ),
10 => sprintf( __('Artwork draft updated. <a target="_blank" href="%s">Preview Artwork</a>'), esc_url( add_query_arg( 'preview', 'true', get_permalink($post_ID) ) ) ),
);

   return $messages;
 }
?>