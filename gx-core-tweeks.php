<?php
/*
Plugin Name: GX IT Core Tweeks 
Plugin URI: http://getgx.com/wordpress-plugins/core_tweeks
Description: This plugin is a plugin that will tweek your wordpress
Version: 2.0
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




function gx_it_core_tweeks_activate(){
//db create, create options
	
}
register_activation_hook( __FILE__, 'gx_it_core_tweeks_activate');

function gx_it_core_tweeks_uninstall() {
//do something
}
register_deactivation_hook( __FILE__, 'gx_it_core_tweeks_uninstall' );


/*
 * create menu and submenu
 */
function gx_it_core_tweeks_create_menu() {

	//create custom top-level menu
	add_menu_page( 'GXIT CORE', 'GXIT CORE', 'manage_options', __FILE__, 'gx_it_core_tweeks_general_page', plugins_url( '/images/gxit.png', __FILE__ ) );
	
	//create submenu items
	add_submenu_page( __FILE__, 'General Plugin', 'General Settings', 'manage_options', 'gx-it-core-tweeks-general-menu', gx_it_core_tweeks_general_page);
	add_submenu_page( __FILE__, 'Log me in', 'Log In', 'manage_options', 'gx-it-core-tweeks-login-page',gx_it_core_tweeks_login_page);
	add_submenu_page( __FILE__, 'Uinstall My Plugin', 'Uninstall', 'manage_options', 'gx-it-core-tweeks-unninstall-menu', gx_it_core_tweeks_uninstall_page ); 

}
add_action( 'admin_menu', 'gx_it_core_tweeks_create_menu' );

function gx_it_core_tweeks_general_page()
{
	
require_once(dirname(__FILE__).'/inc/general.php');
	
}

function gx_it_core_tweeks_login_page()
{
	require_once(dirname(__FILE__).'/inc/login.php');
}
function gx_it_core_tweeks_unninstall()
{
	?>
	<div class="wrap">
	<?php screen_icon(); ?>
	<h2>CC Comments Option Page</h2>
	<p>Welcome to the CC Comments Plugin. Here you can edit the email(s) you wish to have your comments CC'd to.</p>
	
	</div>
	<?php
}

/*
 * Send message when post is created
 */
function gx_it_core_tweeks_notify_admin_when_p_created($post_id){
	
// If this is just a revision, don't send the email.
	if ( wp_is_post_revision( $post_id ) )
		return;

	$post_title = get_the_title( $post_id );
	$post_url = get_permalink( $post_id );
	$subject = 'A post has been updated';

	$message = "A post has been updated on your website:\n\n";
	$message .= $post_title . ": " . $post_url;

	// Send email to admin.
	wp_mail( 'cimar007@hotmail.com', $subject, $message );
	
	  
}

add_action('save_post', 'gx_it_core_tweeks_notify_admin_when_p_created');



?>