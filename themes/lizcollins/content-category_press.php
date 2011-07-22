<?php
/**
 * The displays the content for a press archive page as a grid of thumbnails.
 *
 * @package WordPress
 * @subpackage Liz Collins
 * @since Liz Collins 1.0
 */
?>  

    <div id="image_grid"><ul>
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?> 		
		<li><a href="<?php the_permalink(); ?>" class="iframe fancybox"><?php the_post_thumbnail('thumbnail', array( 'rel'=>'fancybox') ); ?></a></li> <!-- if I were to do this for real, I would need to make a blank page with the google view link only -->
<?php endwhile; // end of the loop. ?>   </ul></div><br clear="both"> 