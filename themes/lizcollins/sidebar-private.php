<?php
/**
 * The Sidebar containing the primary and secondary widget areas.
 *
 * @package WordPress
 * @subpackage Liz Collins
 * @since Liz Collins 1.0
 */
?>       
<?php global $post; ?>

		<div id="private-widget" class="private" role="complementary">
		   

<?php
	/* When we call the dynamic_sidebar() function, it'll spit out
	 * the widgets for that widget area. If it instead returns false,
	 * then the sidebar simply doesn't exist, so we'll hard-code in
	 * some default sidebar stuff just in case.
	 */
    global $post;
	$this_post_title = $post->post_title;
?>          

		    
			     <ul class="xoxo"> 
					<?php
					$args = array(
							'post_type' 	=> 'page', 
							'post_status' 	=> 'private',
							'orderby'		=> 'title',
							'order'			=> 'ASC'
							);
						//global $post;
						$private_pages = get_posts($args);
						foreach($private_pages as $post) :
						   setup_postdata($post);
						$current_private_class = ($post->post_title == $this_post_title) ? 'class="current_private_page"' : '' ;
						 ?>
						 <li <?php echo $current_page_class ?>><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
						 <?php endforeach; ?>
					     
			</ul>
		</div><!-- #primary .widget-area -->