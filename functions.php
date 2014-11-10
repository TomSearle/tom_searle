<?php

//register a menu, so you can add stuff from the admin
register_nav_menu('Main', 'The main menu');

//Add data etc to the context, grabbed when Timber::get_context is run
add_filter('timber_context', 'add_to_context');

function add_to_context($data){ 
	$data['menu'] = new TimberMenu();

	return $data;
} 

// Add theme support for thumbnails, such as posts and pages etc
add_theme_support('post-thumbnails');

//registers a new size you can use, isn't shown in the admin unless added
add_image_size('HD',1920,1080,false);

add_action('wp_enqueue_scripts', 'add_scripts');

function add_scripts() {
	//Add apollo as a dependancy for the main since we want to use it for class selection, don't need to actuall enque the script since it will be added when main is as it is a dependancy
	wp_register_script('apollo', get_stylesheet_directory_uri() . '/js/bower_components/apollo.js/dist/apollo.js', null, null, true);
	wp_register_script('main', get_stylesheet_directory_uri() . '/js/main.js', array('apollo'), null, true);
	wp_enqueue_script('main');
}

 ?>