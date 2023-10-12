<?php

/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

 //1st para is name, 2nd is function name and NEEDS to match function created (in this case we used textdomain found in style.css)
add_action( 'wp_enqueue_scripts', 'twentytwentyonechild_wp_enqueue_scripts' ); //could be below the function, it doesn't matter, as long as second parameter is the same as parent
function twentytwentyonechild_wp_enqueue_scripts() {
	wp_enqueue_style( 'twentytwentyonechild-style', //our handle
		get_stylesheet_uri(), //targets OUR theme direc (stylesheet) rather than parent
		array( 'twenty-twenty-one-style' ), //REQUIRING this style from parent (dependency)
		wp_get_theme()->get( 'Version' )
	); //can make this one line if you want with a comma between except for last
}