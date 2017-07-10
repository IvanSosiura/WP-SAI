<?php
add_action( 'wp_enqueue_scripts', 'my_scripts_method' );
function my_scripts_method(){
	wp_enqueue_script( 'jquery' );

	wp_enqueue_script( 'swiper', get_template_directory_uri() . '/js/swiper.js');

	wp_enqueue_script( 'index', get_template_directory_uri() . '/js/index.js');
}
