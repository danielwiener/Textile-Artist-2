<?php
/**
 * The template for Project or Collection pages for text and images only. Not Image Grid.
 *
 *Template Name: Text and Image
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Liz Collins
 * @since Liz Collins 1.0
 */

get_header(); ?> 
<?php
	global $post;
	if ($post->post_parent == 24 || $post->post_parent == 40) {	//check to see if it is in Projects or Knitting Nation
		get_sidebar('projects');
	} elseif ($post->post_parent == 93) { 						//check to see if it is in Collections
		get_sidebar('collections');	
	}   else {
		get_sidebar(); 											//for all other pages, e.g. About
	}
?> 

		<div id="container">
			<div id="content" role="main">
              
			<?php
				get_template_part( 'content', 'page_text_image' );
			?>
			</div><!-- #content -->
		</div><!-- #container -->


<?php get_footer(); ?>  