<?php 
/*
Plugin Name: Clean Up Head
Plugin URI: http://example.com/
Description: Description
Version: 0.1
Author: Your Name
Author URI: http://example.com/ 
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


// remove junk from head  
//http://digwp.com/2010/03/wordpress-functions-php-template-custom-functions/
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'parent_post_rel_link', 10, 0);
//http://www.google-adsense-templates.co.uk/removing-wordpress-generator-version-and-other-code-from-the-head.html
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
//http://pixelpunk.co.uk/2010/01/disable-wordpress-built-in-canonical-url/
remove_action('wp_head', 'rel_canonical');

 ?>  