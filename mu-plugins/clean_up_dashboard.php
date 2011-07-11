<?php 
/*
Plugin Name: Clean Up Dashboard
Plugin URI: http://danielwiener.com/
Description: Description
Version: 0.1
Author: Your Name
Author URI: http://danielwiener.com/ 
*/

/**
 * Copyright (c) 2011 Your Name. All rights reserved.
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



function remove_dashboard_widgets() {
	// Globalize the metaboxes array, this holds all the widgets for wp-admin
 	global $wp_meta_boxes;

	// Remove the incomming links widget
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);	
    	//Recent Comments
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']);
	// Remove 
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);
	//Recent Drafts List
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_recent_drafts']);
}

// Hook into the 'wp_dashboard_setup' action to register our function
add_action('wp_dashboard_setup', 'remove_dashboard_widgets' );

?>