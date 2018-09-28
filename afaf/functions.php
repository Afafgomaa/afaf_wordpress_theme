<?php

/*
** function wp_enqueue_style to add style
** take name and src
*/

add_theme_support('post-thumbnails');
function afaf_style(){
	wp_enqueue_style('bootstrap-css',get_template_directory_uri(). '/css/bootstrap.min.css');
	wp_enqueue_style('fontawsome-css', get_template_directory_uri(). '/css/font-awesome.min.css');
	wp_enqueue_style('style-css', get_template_directory_uri(). '/destination/style.css');
}

/*
** function wp_enqueue_script to add script
** take name and src
** number three argument take array depndence
** you may sey array(jquery) becuse bootstrap js
** dependes on jquery
*/

function afaf_script(){
    wp_deregister_script('jquery');// to remove register jquery
    // to register jquery
    wp_register_script('jquery', includes_url('/js/jquery/jquery.js'), array(), false, true);
    wp_enqueue_script('jquery');
	wp_enqueue_script('bootstrap-js', get_template_directory_uri(). '/js/bootstrap.min.js',array('jquery'), false, true);
	wp_enqueue_script('main-js', get_template_directory_uri(). '/js/main.js', array(), false, true);
	wp_enqueue_script('html5shiv','https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js');
	wp_script_add_data('html5shiv','conditional','lt IE 9');
	wp_enqueue_script('response','https://oss.maxcdn.com/respond/1.4.2/respond.min.js');
	wp_script_add_data('response','conditional','lt IE 9');
}
function afaf_edit_length( $length){
	if(is_author()){
		return 5;
	}else{
		return 7;
	}
}
function afaf_edit_more($length){
	return '  ....';
}


add_filter('excerpt_length', 'afaf_edit_length');
add_filter('excerpt_more', 'afaf_edit_more');




/*
** function register_nav_menu to add menu
** take name and description
*/

function add_menu(){
	register_nav_menus(array(
     'main_menu' => 'Navigation Bar' ,




	));
}
/*
** display menu menu
*/


add_action('wp_enqueue_scripts','afaf_style' );
add_action('wp_enqueue_scripts','afaf_script' );

add_action('init', 'add_menu');
