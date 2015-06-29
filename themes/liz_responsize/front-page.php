<?php
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

<?php  get_header(); ?>

	<div id="primary" class="container content-area">
		<main id="main" class="site-main" role="main">
			
			<?php
			// Start the loop.
			while ( have_posts() ) : the_post(); ?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">
		<?php the_content(); ?>
	</div><!-- .entry-content -->


</article><!-- #post-## -->

			<?php		
			endwhile;
			?>



		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>