<?php
/*
Plugin Name: WP Referrer Shortcode
Plugin URI: http://www.pixeldreher.net/wp-referrer-shortcode
Description: With the Plugin you can use the Shortcode to place different contents for specific Visitors
Version: 0.1
Author: Pixeldreher, André Goldmann
Author URI: http://www.pixeldreher.net
*/

function short_referrer($attr, $content) {
	if (strpos($_SERVER['HTTP_REFERER'], $attr['href'])) {
		return ''.$content.'';
	 }
}
add_shortcode('shortref', 'short_referrer', 'href');

?>