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

		<div id="primary" class="widget-area <?php echo $post->post_name; ?>" role="complementary">
		   

<?php
	/* When we call the dynamic_sidebar() function, it'll spit out
	 * the widgets for that widget area. If it instead returns false,
	 * then the sidebar simply doesn't exist, so we'll hard-code in
	 * some default sidebar stuff just in case.
	 */
		global $post;
	   	$this_post_title = $post->post_title;
        //$knitting_nation_class = ($post->post_parent == 40 ) ? 'class="current_page"' : '' ;
?>          

		<h2 class="widget-title">Collections</h2> 
   
			     <ul class="xoxo"> 
					<?php
					$args = array(
							'post_type' 	=> 'page', 
							'post_status' 	=> 'publish',
							'post_parent' 	=> 93,  //this will change in the remote version
							'numberposts'	=> -1,
							'orderby'		=> 'post_date',
							'order'			=> 'DESC'
							);
						global $post;
						$program_pages = get_posts($args);
						foreach($program_pages as $post) :
						   setup_postdata($post);
						$current_page_class = ($post->post_title == $this_post_title) ? 'class="current_page"' : '' ;
						 ?>
						    <li <?php echo $current_page_class ?>><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
						 <?php endforeach; ?>
					     
			</ul>
		</div><!-- #primary .widget-area -->

<?php
	// A second sidebar for widgets, just because.
	if ( is_active_sidebar( 'secondary-widget-area' ) ) : ?>

		<div id="secondary" class="widget-area" role="complementary">
			<ul class="xoxo">
				<?php dynamic_sidebar( 'secondary-widget-area' ); ?>
			</ul>
		</div><!-- #secondary .widget-area -->

<?php endif; ?>
