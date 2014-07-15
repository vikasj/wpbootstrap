<?php 
// Register Custom Navigation Walker
require_once('wp_bootstrap_navwalker.php');

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

add_action('add_meta_boxes','crosspost_init');
function crosspost_init()
{
   
    foreach (array('article','post','page') as $type) 
    {
        add_meta_box('crossposting', 'Cross-Posting', 'crosspost_setup', $type, 'normal', 'high');
    }
}
 
function crosspost_setup()
{
    global $post;
  
    $meta = get_post_meta($post->ID,'_my_meta',TRUE);

    include('crossposting.php');
}

?>
