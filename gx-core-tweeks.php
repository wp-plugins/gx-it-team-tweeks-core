<?php
/*
Plugin Name: GX IT Core Tweeks 
Plugin URI: http://getgx.com/wordpress-plugins/core_tweeks
Description: This plugin is a plugin that will tweek your wordpress
Version: 3.0
Author: Eucimar Raposo
Author URI: http://eucimarraposo.com	
License: GPLv2


Copyright 2013 Eucimar Raposo (email : eraposo@getgx.com)
This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.
This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.
You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA 02110-1301 USA
*/



/**
* 
* This function removes the wordpress version metatag
*
* Longer more detailed description
*
* @param type $varname1 Description
* @param type $varname2 Description
* @return type Description
*/
function gx_it_core_tweeks_install(){

}
register_activation_hook( __FILE__, 'gx_it_core_tweeks_install');



/**
* 
* This function removes the wordpress version metatag
*
* Longer more detailed description
*
* @param type $varname1 Description
* @param type $varname2 Description
* @return type Description
*/
function gx_it_core_tweeks_uninstall() {
//do something
}
register_deactivation_hook( __FILE__, 'gx_it_core_tweeks_uninstall' );

/**
* 
* This function removes the wordpress version metatag
*
* Longer more detailed description
*
* @param type $varname1 Description
* @param type $varname2 Description
* @return type Description
*/
function gx_it_core_tweeks_disable_version() { return ''; }
add_filter('the_generator','gx_it_core_tweeks_disable_version');
remove_action('wp_head', 'wp_generator');


function gx_it_core_tweeks_change_login_logo() { ?>    
<?php }
add_action( 'login_enqueue_scripts', 'gx_it_core_tweeks_change_login_logo' );
function my_login_logo_url() {
    return 'http://getgx.com' ;
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

function my_login_logo_url_title() {
    return 'GX IT';
}
add_filter( 'login_headerftitle', 'my_login_logo_url_title' );


function gx_it_core_tweeks_change_login_stylesheet() { ?>
    <link rel="stylesheet" id="custom_wp_admin_css"  href="<?php echo plugins_url('css/style-login.css',__FILE__); ?>" type="text/css" media="all" />
<?php }
add_action( 'login_enqueue_scripts', 'gx_it_core_tweeks_change_login_stylesheet' );

// Simple Query String Login page protection
/*function gx_it_core_tweeks_change_login_protection_for_login_page() {
$qs = 'gxit';
	if ( !isset($_GET['gxit-admin']) || strcmp($qs,$_GET['gxit-admin'])!=0 ) {			
		header( 'Location: ' . home_url() . '/404.php' );
	}
}
add_action('login_head', 'gx_it_core_tweeks_change_login_protection_for_login_page',1);
*/

function gx_it_core_tweeks_change_redirect_logout(){
 wp_redirect( home_url() );  
}
add_action('wp_logout', 'gx_it_core_tweeks_change_redirect_logout',1); 


?>