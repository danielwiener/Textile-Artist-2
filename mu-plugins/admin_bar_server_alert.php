<?php
/*
Plugin Name: Report Environment Status
Plugin URI: http://danielwiener.com/
Description: Tells which server you are on, so you don't get confused if you are on Dev or Production server
Version: 0.1
Author: Daniel Wiener
Author URI: http://danielwiener.com/
*/

add_action('wp_before_admin_bar_render', 'report_environment_status');

function report_environment_status() {
    $server = php_uname('n');
 	if (WP_ENV == 'development') {
		$dw_msg =  $server . ': DEVELOPMENT' ;
	}
	global $wp_admin_bar;
	if ( !is_super_admin() || !is_admin_bar_showing() )
		return; 
	$wp_admin_bar->add_menu( array(
	'id' => 'is_development',
	'title' => $dw_msg,
	'href' => FALSE ) );  
}
?>