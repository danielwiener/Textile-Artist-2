<?php
/**
 * The displays the content for a projects page or a collections page.
 *
 * @package WordPress
 * @subpackage Liz Collins
 * @since Liz Collins 1.0
 */
?>  


<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?> 

				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
 
						<h1 class="entry-title">
						<?php if ($post->post_parent == 40): ?>
						 Knitting Nation Phase    
						<?php endif ?>
						<?php the_title(); ?></h1>

					<div class="entry-content">
						<?php the_content(); ?>
						<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>
						<?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>
					</div><!-- .entry-content -->
				</div><!-- #post-## -->

<?php endwhile; // end of the loop. ?>