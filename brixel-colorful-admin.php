<?php
/**
 * Plugin Name:	Brixel Colorful Admin
 * Plugin URI:	https://github.com/canonex/brixel-colorful-admin
 * Description:	Changes the admin backend background color based on the siteurl, just for admin. A test using AI.
 * Version:		1.0
 * Author: 		Brixel
 * Author URI:	https://www.brixel.it
 * License:		GPL v2 or later
 * License URI:	https://www.gnu.org/licenses/gpl-2.0.html 
 */


// Define a function to generate a color based on the siteurl.
function generate_background_color() {
    $siteurl = get_option('siteurl');
    $hash = md5($siteurl);
    $color = '#' . substr($hash, 0, 6); // Use the first 6 characters of the MD5 hash as the color.
    return $color;
}

// Define a function to add custom CSS to change the admin background color.
function change_admin_background_color() {
	if (current_user_can('administrator')) {

		$color = generate_background_color();
		echo '<style>
		    body.wp-admin {
		        background-color: ' . $color . ';
		    }
		</style>';
    }
}

// Hook the custom CSS function to the admin_head action.
add_action('admin_head', 'change_admin_background_color');
