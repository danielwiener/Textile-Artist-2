<?php
/*
Plugin Name: General Instructions
Plugin URI: http://danielwiener.com/
Description: A list of instructions from documentation.diyartportfolios.com
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

 function dw_instructions_dashboard_widget_function() {
 ?>

	 <h4><a href="http://documentation.diyartportfolios.com/" target="_blank">Basic Wordpress Instructions and How to Create Online Content</a></h4>
	 <p>Here is a list of recent instructions. I will be adding to it, as needed. Click the link above to see all the instructions. If you want something explained to you I will add it. Also please check the <a href="/wp-admin/admin.php?page=video-user-manuals/plugin.php">video manual</a></p>
	<?php //comments - do this for grants category only. And maybe separate it into another function.  
	//http://wpsnipp.com/index.php/functions-php/replace-dashboard-news-feed-with-another-rss-feed/
	echo '<div class="rss-widget">';
	     wp_widget_rss_output(array(
	          'url' => 'http://documentation.diyartportfolios.com/feed',
	          'title' => 'Helpful Documentation',
	          'items' => 10,
	          'show_summary' => 0,
	          'show_author' => 0,
	          'show_date' => 0
	     ));
	     echo '</div>';?> 
<?php

}     



// Create the function use in the action hook

function dw_add_dashboard_widgets() { 

wp_add_dashboard_widget('dw_instructions_dashboard_widget', 'General Instructions', 'dw_instructions_dashboard_widget_function');

} 

// Hook into the 'wp_dashboard_setup' action to register our other functions

add_action('wp_dashboard_setup', 'dw_add_dashboard_widgets' );

?>