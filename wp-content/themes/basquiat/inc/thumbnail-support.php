<?php

add_action( 'after_setup_theme', 'thumbnails_theme_support' );
function thumbnails_theme_support(){
    add_theme_support( 'post-thumbnails' );
}

add_action( 'after_setup_theme', 'create_image_format' );
function create_image_format() {
    add_image_size( "gallery_list_thumbnail", 400, 400, true );
    add_image_size( "gallery_header_thumbnail", 1200, 400, true );
    add_image_size( "blog_list_thumbnail", 600, 300, true );
}
