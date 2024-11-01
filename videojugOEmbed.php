<?php
/*
Plugin Name: Videojug Oembed
Description: Adds oembed support for Videojug content
Version: 1.0
Author: Videojug
Author URI: http://www.videojug.com
*/
	function new_oembed()
	{
		wp_oembed_add_provider( '#http://(www\.)?videojug.com/(film|interview)/.*#i', 'http://www.videojug.com/oembed.{format}', true );
	}

	add_action('init', 'new_oembed');
?>