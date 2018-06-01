<?php


// ajouter le support des images à la une
function troiswa_theme_setup() {
    add_theme_support( 'post-thumbnails');
}
add_action( 'after_setup_theme', 'troiswa_theme_setup' );

//ajouter 2 nouvelles zones de menu au thème
function register_menus() {
	register_nav_menus( array ( 
		'header-menu' => 'Menu header',
		'footer-menu' => 'Menu footer' 
	) );
}
add_action( 'init', 'register_menus' );

