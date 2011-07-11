<?php
/*
Plugin Name: Add Private Pages to Dashboard
Plugin URI: http://danielwiener.com/
Description: Description
Version: 0.1
Author: Daniel Wiener
Author URI: http://danielwiener.com/ 
*/

/**
 * Copyright (c) 2011 Daniel Wiener. All rights reserved.
 *
 * Released under the GPL license
 * http://www.opensource.org/licenses/gpl-license.php
 *
 * This is an add-on for WordPress
 * http://wordpress.org/
 *
 * **********************************************************************
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * **********************************************************************
 */
 
// function to display widget 
// from http://erisds.co.uk/wordpress/snippet-wordpress-admin-tidy-dashboard-widgets-by-role

function display_dashboard_widget()
{
  //define arguments for WP_Query()
  $qargs = array(
    'post_type'=>'page',
    'post_status'=>'private'
  );
  // perform the query
  $q = new WP_Query();
  $q->query($qargs);
  // setup the content with a list
  $widget_content = '<ul>';
 
  // execute the WP loop
  while ($q->have_posts()) : $q->the_post();
    $widget_content .= '<li><a href="'.get_permalink() .'" rel="bookmark">'. get_the_title() .'</a></li>';
	// print_r(get_permalink());
  endwhile;
  
  $widget_content .= '</ul>';
 
  // return the content you want displayed
  // return $widget_content;  
	echo $widget_content;
}

//function to setup widget
function add_dashboard_widgets()
{
  // create a dashboard widget called "private_page_menu_dashboard_widget" with the title "Private Pages Menu" and call our display function to draw it
  wp_add_dashboard_widget('private_page_menu_dashboard_widget', 'Romanov Grave Instructions', 'display_dashboard_widget' );
}

// finally we have to hook our function into the dashboard setup using add_action
add_action('wp_dashboard_setup', 'add_dashboard_widgets');