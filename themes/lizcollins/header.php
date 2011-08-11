<?php
/**
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Liz Collins
 * @since Liz Collins 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;  
	
	// Add the blog name.
	bloginfo( 'name' ); ?>
	<?php if ($post->post_parent == 40): ?>
	 | Knitting Nation    
	<?php endif ?>
     <?php
	wp_title( '|', true, 'left' );
	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" /> 
<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_directory' ); ?>/css/jquery.qtip.min.css" type="text/css" media="screen" title="no title" charset="utf-8">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>  
 

<script type="text/javascript"> 
jQuery.noConflict();
jQuery(document).ready(function($) {
   // Match all <A/> links with a title tag and use it as the content (default).
   $('a#credits[title]').qtip( {
	       position: {
	      my: 'bottom center', 
	      at: 'top center'
	   },
	   style: {
	      tip: true,
	      classes: 'ui-tooltip-dark ui-tooltip-cluetip'
	   }
	});
});
</script>

</head>

<body <?php body_class(); ?>>
<div id="wrapper" class="hfeed">
	<div id="header">
		<div id="masthead">
			<div id="branding" role="banner">
				<?php $heading_tag = ( is_home() || is_front_page() ) ? 'h1' : 'div'; ?>
				<<?php echo $heading_tag; ?> id="site-title">
					<span>
						<a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
					</span>
				</<?php echo $heading_tag; ?>>
				 <div id="access" role="navigation">
					  <?php /*  Allow screen readers / text browsers to skip the navigation menu and get right to the good stuff */ ?>
						<div class="skip-link screen-reader-text"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentyten' ); ?>"><?php _e( 'Skip to content', 'twentyten' ); ?></a></div>
						<?php /* Our navigation menu.  If one isn't filled out, wp_nav_menu falls back to wp_page_menu.  The menu assiged to the primary position is the one used.  If none is assigned, the menu with the lowest ID is used.  */ ?>
						<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>
					</div><!-- #access -->
			</div><!-- #branding -->

		   
		</div><!-- #masthead -->
	</div><!-- #header -->

	<div id="main">