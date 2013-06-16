<?php

// Arktitektur
require('architecture.php');

register_nav_menu('primary','Primär meny');

add_theme_support('post-thumbnails');

if ( function_exists( 'add_image_size' ) ) { 
	add_image_size( 'project-thumb', 536, 302, true );
	add_image_size( 'single-image', 970, 9999);
}