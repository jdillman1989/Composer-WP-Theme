<?php

function theme_setup() {

	// Let WordPress manage the document title.
	add_theme_support( 'title-tag' );

	// Enable support for Post Thumbnails on posts and pages.
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 150, 195, true );

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'Composer' ),
	) );

	// Switch default core markup for search form, comment form, and comments to output valid HTML5.
	add_theme_support( 'html5', array( 'search-form' ) );
}
add_action( 'after_setup_theme', 'theme_setup' );

/**
 * Enqueue scripts and styles.
 * @since Twenty Fifteen 1.0
 */

function theme_scripts() {

	// Load our main stylesheet.
	wp_enqueue_style( 'Composer-style', get_stylesheet_uri() );

	// Load theme js
	wp_enqueue_script( 'Composer-script', get_template_directory_uri() . '/js/composer.js', array( 'jquery' ), false, true );
}
add_action( 'wp_enqueue_scripts', 'theme_scripts' );

// Add header styles
function header_style() {

	$nav_items = wp_nav_menu(array(
		'echo' => false,
		'theme_location' => 'primary',
		'depth' => 1
	));

	$nav_items_count = substr_count($nav_items,'class="menu-item ');

	$nav_item_width = (100 / $nav_items_count) - .3;

	return "<style type='text/css'>
				@media (min-width: 676px) {

					.nav ul li {
						width: ".$nav_item_width."%;
					}
				}
			</style>";
}