<?php
/**
 * The template for displaying Category Archive pages.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>
<?php get_sidebar(); ?> 
		<div id="container">
			<div id="content" role="main">

				<h1 class="page-title"><?php
					printf( __( '%s', 'twentyten' ), single_cat_title( '', false ) );
				?></h1>
				<?php

				/* Run the loop for the category page to output the posts.
				 * If you want to overload this in a child theme then include a file
				 * called loop-category.php and that will be used instead.
				 */
				get_template_part( 'content', 'category_press' );
				?>

			</div><!-- #content -->
		</div><!-- #container -->


<?php get_footer(); ?>
