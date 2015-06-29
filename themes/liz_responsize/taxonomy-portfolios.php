<?php
/**
 * The template for displaying Archive page for Exhibits.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Daniel Wiener
 * @since Daniel Wiener 1.0
 */

get_header(); ?>

<div id="primary" class="container content-area">
	<main id="main" class="site-main" role="main">

			<?php if ( have_posts() ) : ?>

				<header>
					<?php
					$term_id = $wp_query->queried_object->term_id;
					
					$this_portfolio = get_term( $term_id, 'portfolios' );
					?>
					<h1 class="page-title"><?php echo $this_portfolio->name; ?></h1>
				</header>

				
				<?php 
					$portfolio_args = array(
					    'posts_per_page'  => -1,
						'orderby'         => 'menu_order',  //change this once you add years
						 'order'           => 'DESC',
					    'post_type'       => 'artworks',
						'post_status'	=> 'publish',
						'portfolios'			=> $this_portfolio->slug
					);
					$portfolio_query = new WP_Query( $portfolio_args ); 
				/* Start the Loop */ ?>
				<div  class="row">
				<?php while ( $portfolio_query->have_posts() ) : $portfolio_query->the_post(); ?>

				


							
							<div class="col-lg-3 col-sm-4 col-xs-6">
							<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="thumbnail">
								<?php if(has_post_thumbnail()): ?>
							<?php the_post_thumbnail('Thumbnail 300', array('class' => 'alignleft', 'title' => get_the_title() )); ?>
							<?php endif; ?>
								</a></div>
							
					
					
				<?php endwhile; ?>
</div>
			

			<?php else : ?>

				<article id="post-0" class="post no-results not-found">
					<header class="entry-header">
						<h1 class="entry-title"><?php _e( 'Nothing Found', '_s' ); ?></h1>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', '_s' ); ?></p>
						<?php get_search_form(); ?>
					</div><!-- .entry-content -->
				</article><!-- #post-0 -->

			<?php endif; ?>

			</div><!-- #content -->
		</section><!-- #primary .site-content -->

<?php // get_sidebar(); ?>
<?php get_footer(); ?>