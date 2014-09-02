<?php

// Import Utils
require_once( 'functions/utils.php' );

add_theme_support('post-formats');
add_theme_support('post-thumbnails');
add_theme_support('menus');

// Register Sidebar
function register_sidebar_init() {
	register_sidebar( array(
		'name' => 'Dynamic Sidebar',
		'id' => 'dynamic_sidebar',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h4>',
		'after_title' => '</h4>',
	) );
}
add_action( 'widgets_init', 'register_sidebar_init' );

// Add Twig and Timber
add_filter('get_twig', 'add_to_twig');
add_filter('timber_context', 'add_to_context');

add_action('wp_enqueue_scripts', 'load_scripts');

// Common Definitions
define('THEME_URL', get_template_directory_uri());


function add_to_context($data){
	/* this is where you can add your own data to Timber's context object */
	$data['qux'] = 'I am a value set in your functions.php file';
	$data['menu'] = new TimberMenu();
	return $data;
}

function add_to_twig($twig){
	/* this is where you can add your own fuctions to twig */
	$twig->addExtension(new Twig_Extension_StringLoader());
	$twig->addFilter('myfoo', new Twig_Filter_Function('myfoo'));
	return $twig;
}

function myfoo($text){
  	$text .= ' bar!';
  	return $text;
}

function load_scripts(){
	wp_enqueue_script('jquery');
}

// Hide Admin Bar
add_filter('show_admin_bar', '__return_false');