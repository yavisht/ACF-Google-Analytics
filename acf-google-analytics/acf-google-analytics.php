<?php
/*
Plugin Name: ACF Google Analytics 
Plugin URI: http://www.ykat.com.au
Description: Add Google Analytics to your website using ACF Options. Create an options field type text area field called analytics_code with no formatting output.
Version: 1
Author: Yavisht Katgara
Author URI: http://www.ykat.com.au
License:     GPL-2.0+
License URI: http://www.gnu.org/licenses/gpl-2.0.txt
*/

function add_google_analytics_ua_code() { ?>
<?php the_field('analytics_code', 'option'); ?>
<?php }
add_action( 'wp_head', 'add_google_analytics_ua_code', 10 );
?>