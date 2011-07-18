<?php
/**
 * The template for displaying all pages.
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
				<div id="front-page">
				     <div class="dw_wrapper"><a href="/lc/collections/some_collection" title="sometitle"><img src="<?php bloginfo('stylesheet_directory') ?>/images/collections.jpg" /></a><div class="dw_description"><div class="dw_description_content">Collections</div></div></div> 
					 <div class="dw_wrapper"><a href="/lc/projects/knitting-nation/one" title="Knitting Nation One"><img src="<?php bloginfo('stylesheet_directory') ?>/images/projects.jpg" /></a><div class="dw_description"><div class="dw_description_content">Projects</div></div></div> 
				</div>
			</div><!-- #content -->
		</div><!-- #container -->


<?php get_footer(); ?>  