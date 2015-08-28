<?php

require_once( get_template_directory() . '/lib/clean.php'); // do all the cleaning and enqueue here
require_once( get_template_directory() . '/lib/foundation.php'); // load Foundation specific functions like top-bar
require_once( get_template_directory() . '/lib/theme-functions.php'); // load Foundation specific functions like top-bar
//require_once( get_template_directory() . '/lib/class-tgm-plugin-activation.php' );
//require_once( get_template_directory() . '/lib/theme-require-plugins.php' );

add_action( 'tgmpa_register', 'mb_register_required_plugins' );

/**********************
Add theme supports
**********************/
function starter_theme_support() {

	// Add post thumbnail supports. http://codex.wordpress.org/Post_Thumbnails
	add_theme_support('post-thumbnails');
	add_image_size( 'small-feature', 400, 247, true ); // Ratio 10:6.18
	add_image_size( 'medium-feature', 600, 371, true ); // Ratio 10:6.18
	add_image_size( 'page-feature', 1000, 337, true ); // Ratio 1:1
	// rss thingy
	add_theme_support('automatic-feed-links');
	
	// Add post formarts supports. http://codex.wordpress.org/Post_Formats
	add_theme_support('post-formats', array('video'));
	
	// Add menu supports. http://codex.wordpress.org/Function_Reference/register_nav_menus
	add_theme_support('menus');
	register_nav_menus(array(
		'primary' => __('Primary Navigation', 'reverie')
	));

}
	
	
add_action('after_setup_theme', 'starter_theme_support'); 



// return entry meta information for posts, used by multiple loops.
function entry_meta() {
		echo '<p class="byline"><time class="updated" datetime="'. get_the_time('c') .'" pubdate>'. sprintf(__('%s.', 'starter'), get_the_time('l, F jS, Y')) .'</time></p>';
}

function custom_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function new_excerpt_more( $more ) {
	return '... <a class="read-more" href="'. get_permalink( get_the_ID() ) . '">' . __('Read More', 'your-text-domain') . '</a>';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );