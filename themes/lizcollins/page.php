<?php
/**
 * The template for displaying all pages.
 *
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
<?php get_sidebar('projects'); ?> 
		<div id="container">
			<div id="content" role="main">

			<?php
			/* Run the loop to output the page.
			 * If you want to overload this in a child theme then include a file
			 * called loop-page.php and that will be used instead.
			 */
			get_template_part( 'loop', 'page' );
			?>

			</div><!-- #content -->
		</div><!-- #container -->


<?php get_footer(); ?>  