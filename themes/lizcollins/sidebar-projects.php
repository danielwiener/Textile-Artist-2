<?php
/**
 * The Sidebar containing the primary and secondary widget areas.
 *
 * @package WordPress
 * @subpackage Liz Collins
 * @since Liz Collins 1.0
 */
?>

		<div id="primary" class="widget-area" role="complementary">
		   

<?php
	/* When we call the dynamic_sidebar() function, it'll spit out
	 * the widgets for that widget area. If it instead returns false,
	 * then the sidebar simply doesn't exist, so we'll hard-code in
	 * some default sidebar stuff just in case.
	 */
?>          

		<h2 class="widget-title">Projects</h2> 
		<h3><a href="/lc/knitting-nation/">Knitting Nation</a></h3>
		  <ul class="secondary_widget_title"> 
			<?php
			$args = array(
					'post_type'		=> 'page', 
					'post_status'	=> 'publish',
					'post_parent'	=> 40,  //this will change in the remote version
					'orderby'		=> 'menu_order',
					'order'			=> 'ASC'
					);
				global $post;
				$program_pages = get_posts($args);
				foreach($program_pages as $post) :
				   setup_postdata($post);
				 ?>
				    <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
				 <?php endforeach; ?>
			     </ul>     
			     <ul class="xoxo"> 
					<?php
					$args = array(
							'post_type' => 'page', 
							'post_status' => 'publish',
							'post_parent' => 24,  //this will change in the remote version
							);
						global $post;
						$program_pages = get_posts($args);
						foreach($program_pages as $post) :
						   setup_postdata($post);
						 ?>
						    <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
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
