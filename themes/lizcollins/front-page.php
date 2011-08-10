<?php
/**
 * The template for displaying the front page, divided between Projects and Collections.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Liz Collins
 * @since Liz Collins 1.0
 */

get_header(); ?>
		<div id="container" class="full-page">
			<div id="content" role="main">
				<!-- <div id="front-page"> -->
				     <div class="dw_wrapper"><a href="<?php bloginfo('siteurl') ?>/collections/intro" title="Collections"><img src="<?php bloginfo('stylesheet_directory') ?>/images/collections.jpg" width="472" height="700" /></a><div class="dw_description"><div class="dw_description_content2"><a href="/lc/collections/intro" title="Collections">Collections</a></div></div></div> 
					 <div class="dw_wrapper"><a href="<?php bloginfo('siteurl') ?>/projects/knitting-nation" title="Knitting Nation"><img src="<?php bloginfo('stylesheet_directory') ?>/images/projects.jpg"  width="472" height="700"></a><div class="dw_description"><div class="dw_description_content"><a href="/lc/projects/knitting-nation" title="Knitting Nation">Projects</a></div></div></div> 
				<!-- </div> -->   <br clear="both">
			</div><!-- #content -->
		</div><!-- #container -->


<?php get_footer(); ?>  