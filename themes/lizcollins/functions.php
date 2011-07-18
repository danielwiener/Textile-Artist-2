<?php 
/**
 * Liz Collins functions and definitions
 *
 * Sets up the theme and provides some helper functions. Some helper functions
 * are used in the theme as custom template tags. Others are attached to action and
 * filter hooks in WordPress to change core functionality.
 *
 * The first function, twentyten_setup(), sets up the theme by registering support
 * for various features in WordPress, such as post thumbnails, navigation menus, and the like.
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are instead attached
 * to a filter or action hook. The hook can be removed by using remove_action() or
 * remove_filter() and you can attach your own function to the hook.
 *
 * We can remove the parent theme's hook only after it is attached, which means we need to
 * wait until setting up the child theme:
 *
 * <code>
 * add_action( 'after_setup_theme', 'my_child_theme_setup' );
 * function my_child_theme_setup() {
 *     // We are providing our own filter for excerpt_length (or using the unfiltered value)
 *     remove_filter( 'excerpt_length', 'twentyten_excerpt_length' );
 *     ...
 * }
 * </code>
 *
 *
 * @package WordPress
 * @subpackage Liz Collins
 * @since Liz Collins 1.0
 */

add_action( 'after_setup_theme', 'twentyten_setup' );

if ( ! function_exists( 'twentyten_setup' ) ):
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 *
 * I am overriding twentyten_setup() in this child theme.
 *
 * @uses add_theme_support() To add support for post thumbnails and automatic feed links.
 * @uses register_nav_menus() To add support for navigation menus.
 * @uses add_editor_style() To style the visual editor.
 * @uses load_theme_textdomain() For translation/localization support.
 * @uses set_post_thumbnail_size() To set a custom post thumbnail size.  
 * @uses add_image_size() To set more sizes.  
 *
 * @since Liz Collins 1.0
 */
function twentyten_setup() {

	// This theme styles the visual editor with editor-style.css to match the theme style.
	add_editor_style();

	// Post Format support. You can also use the legacy "gallery" or "asides" (note the plural) categories.
	add_theme_support( 'post-formats', array( 'aside', 'link', 'gallery', 'status', 'quote', 'image', 'video' ) );

	// This theme uses post thumbnails
	add_theme_support( 'post-thumbnails' );

	// Add default posts and comments RSS feed links to head
	add_theme_support( 'automatic-feed-links' );

	// Make theme available for translation
	// Translations can be filed in the /languages/ directory
	load_theme_textdomain( 'twentyten', TEMPLATEPATH . '/languages' );

	$locale = get_locale();
	$locale_file = TEMPLATEPATH . "/languages/$locale.php";
	if ( is_readable( $locale_file ) )
		require_once( $locale_file );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Navigation', 'twentyten' ),
	) );

	//I will change this as needed and add more sizes
	set_post_thumbnail_size( 190, 190, true ); 
	add_image_size('pinky', 40, 40, true); // for pinky previews
	add_image_size('tn-250', 250, 250, true); // just in case

	
}
endif;

if ( ! function_exists( 'twentyten_admin_header_style' ) ) :
function twentyten_admin_header_style() {
// do nothing
}
endif;

// smart jquery inclusion 
//http://digwp.com/2010/03/wordpress-functions-php-template-custom-functions/ 
function dw_add_js_scripts() {
	if (!is_admin()) {
		wp_deregister_script('jquery');
		wp_register_script('jquery', ("http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"), false);
		wp_enqueue_script('jquery'); 
	
		   // wp_register_script('dw_slideshow',
		   // 		       get_bloginfo('stylesheet_directory') . '/js/dw_slideshow.js',
		   // 		       array('jquery'),
		   // 		       '1.0' ); 
		   // enqueue the script
		   // wp_enqueue_script('dw_slideshow');
		   // register your script location, dependencies and version
		   //then if press page add the text overlay js
		   // can't get the is_page('press') to work. don't know why. try again later
		   wp_register_script('dw_text_overlay',
		       get_bloginfo('stylesheet_directory') . '/js/dw_text_overlay.js',
		       array('jquery'),
		       '1.0' ); 
		wp_enqueue_script('dw_text_overlay');
	  }       
} 
//also need to figure out how do this with less repitition, more elegantly
add_action('init', 'dw_add_js_scripts');
?> 
