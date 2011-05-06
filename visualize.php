<?php
/*
Plugin Name: jqVisualize
Description: Plugin to use jQuery Visualize in Wordpress
Version: 0.9
Author: Ruben Asensi
Author URI: http://www.persimon.biz
*/

if (!class_exists("jqVisualize")) {
	class jqVisualize {
		function jqVisualize() {

		}
	}
} 

if (class_exists("jqVisualize")) {
	$gad_plugin = new jqVisualize();
}

//Actions and Filters	
if (isset($gad_plugin)) {
	add_action('init','jqVisualize_enqueue_scripts');
	add_action('wp_head','jqVisualize_header_code');
}

function jqVisualize_enqueue_scripts() {
	if (function_exists('wp_enqueue_script')) {
		wp_enqueue_script('jqVisualize_javascript', get_bloginfo('wpurl') . '/wp-content/plugins/jqVisualize/js/enhance.js', array('jquery'));
		wp_enqueue_script('jqVisualize_javascript2', get_bloginfo('wpurl') . '/wp-content/plugins/jqVisualize/js/excanvas.js', array('jquery'));
		wp_enqueue_script('jqVisualize_javascript3', get_bloginfo('wpurl') . '/wp-content/plugins/jqVisualize/js/visualize.jQuery.js', array('jquery'));
		wp_enqueue_script('jqVisualize_javascript4', get_bloginfo('wpurl') . '/wp-content/plugins/jqVisualize/js/viswp.js', array('jquery'));
	}
}

function jqVisualize_header_code() {
	echo '<link type="text/css" rel="stylesheet" href="' . get_bloginfo('wpurl') . '/wp-content/plugins/jqVisualize/css/basic.css" />' . "\n";
	echo '<link type="text/css" rel="stylesheet" href="' . get_bloginfo('wpurl') . '/wp-content/plugins/jqVisualize/css/visualize.css" />' . "\n";
	echo '<link type="text/css" rel="stylesheet" href="' . get_bloginfo('wpurl') . '/wp-content/plugins/jqVisualize/css/visualize-light.css" />' . "\n";
	
}

?>