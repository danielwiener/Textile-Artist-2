<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>
  <?php get_sidebar(); ?> 
		<div id="container">
			<div id="content" role="main">
<?php if ( have_posts() ) : ?> 
		<div id="post-<?php the_ID(); ?>" <?php post_class('hentry'); ?>> 
				<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'twentyten' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			   <?php while ( have_posts() ) : the_post(); ?> 
				<h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyten' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
			  	<div class="entry-summary">
					<?php the_excerpt(); ?>
				</div><!-- .entry-summary -->
			   <?php endwhile; ?>
			 
<?php else : ?>
				<div id="post-0" class="post no-results not-found hentry">
					<h2 class="entry-title"><?php _e( 'Nothing Found', 'twentyten' ); ?></h2>
					<div class="entry-content">
						<p><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'twentyten' ); ?></p>
						<?php get_search_form(); ?>
					</div><!-- .entry-content -->
				</div><!-- #post-0 -->
<?php endif; ?>
			</div><!-- #content -->
		</div><!-- #container -->
<?php get_footer(); ?>
