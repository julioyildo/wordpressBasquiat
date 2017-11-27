<?php
add_action( 'after_setup_theme', 'menus_du_themes' );


function menus_du_themes() {
  register_nav_menu( 'header', 'Menu entête' );
<<<<<<< Updated upstream
  register_nav_menu( 'footer', 'Menu footer' );
=======
  register_nav_menu( 'footer', 'Menu bas de page' );
  register_nav_menu( 'galleries', 'Menu galeries' );
>>>>>>> Stashed changes
}