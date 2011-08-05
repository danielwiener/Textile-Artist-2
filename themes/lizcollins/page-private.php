<?php
/**
 * The template for displaying private pages.
 * 
 * Template Name: Private
 *
 * @package WordPress
 * @subpackage Liz Collins
 * @since Liz Collins
 */

get_header(); ?>

		<div id="container">
			<div id="content" role="main">

			<?php
			/* Run the loop to output the page.
			 * If you want to overload this in a child theme then include a file
			 * called loop-page.php and that will be used instead.
			 */
			get_template_part( 'content', 'private' );
			?>

			</div><!-- #content -->
		</div><!-- #container -->

<?php get_sidebar('private'); ?>
<?php get_footer(); ?>
