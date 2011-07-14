<?php 

add_action('wp_before_admin_bar_render', 'report_environment_status');

function report_environment_status() {
    $server = php_uname('n');
 	if (WP_ENV == 'development') {
		$dw_msg =  'DEVELOPMENT' ;
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
