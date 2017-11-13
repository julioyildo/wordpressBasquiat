<?php
/**
 * Created by PhpStorm.
 * User: YILDIRIMSerhat
 * Date: 13/11/2017
 * Time: 17:15
 */

add_action( 'after_setup_theme', 'thumbnails_theme_support' );
function thumbnails_theme_support(){
    add_theme_support( 'post-thumbnails' );
}