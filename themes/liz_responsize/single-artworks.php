<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

	<div id="primary" class="container content-area">
		<main id="main" class="site-main" role="main">

		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();
		

		?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<h1 class="page-title"><?php the_title( ); ?></h1>

					<div class="entry-content">
						<?php 
						$portfolio_terms = get_the_terms( $post->ID, 'portfolios' );
							foreach ($portfolio_terms as $portfolio_term) {
								$portfolio_name = $portfolio_term->name;
								$portfolio_slug = $portfolio_term->slug;
							}
							 ?>
						<div class="dw_image_nav">
						<?php previous_post_link( '%link', '<i class="fa fa-chevron-left icon-2x"></i>', TRUE, ' ', 'portfolios' ); ?> &nbsp;<a href="<?php echo home_url(); ?>/portfolio/<?php echo $portfolio_slug ?>"><i class="fa fa-th icon-2x"></i></a> &nbsp;<?php next_post_link( '%link', '<i class="fa fa-chevron-right icon-2x"></i>', TRUE, ' ', 'portfolios' ); ?>
						<?php
							/* translators: %s: Name of current post */
							the_content( sprintf(
								__( 'Continue reading %s', 'twentyfifteen' ),
								the_title( '<span class="screen-reader-text">', '</span>', false )
							) );

							wp_link_pages( array(
								'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentyfifteen' ) . '</span>',
								'after'       => '</div>',
								'link_before' => '<span>',
								'link_after'  => '</span>',
								'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>%',
								'separator'   => '<span class="screen-reader-text">, </span>',
							) );
						?>
					</div><!-- .entry-content -->

	

					<footer class="entry-footer">
						<?php // dw_bootstrap_entry_meta(); ?>

					</footer><!-- .entry-footer -->

				</article><!-- #post-## -->

	<?php
		// End the loop.
		endwhile;
		?>

		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>
