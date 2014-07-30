<?php 
// Register Custom Navigation Walker
require_once('wp_bootstrap_navwalker.php');
add_theme_support( 'post-thumbnails' );
/*
* Enable support for Post Formats.
* See http://codex.wordpress.org/Post_Formats
*/
add_theme_support( 'post-formats', array(
		'image', 'video', 'audio', 'link', 'gallery',
) );

function wpbootstrap_scripts_with_jquery()
{
	// Register the script like this for a theme:
	wp_register_script( 'custom-script', get_template_directory_uri() . '/javascripts/sass-bootstrap.js', array( 'jquery' ) );
	// For either a plugin or a theme, you can then enqueue the script:
	wp_enqueue_script( 'custom-script' );
}

add_action( 'wp_enqueue_scripts', 'wpbootstrap_scripts_with_jquery' );

if ( function_exists('register_sidebar') )
	register_sidebar(array(
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));

register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'wpbootstrap' ),
) );

?>
