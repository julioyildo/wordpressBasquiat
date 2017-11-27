<?php
function home_custom_type_init() {
    $post_type = "home";
    $labels = array(
        'name'               => 'Accueil',
        'singular_name'      => 'Accueil',
        'all_items'          => 'Tous les home contents',
        'add_new'            => 'Ajouter un home content',
        'add_new_item'       => 'Ajouter un nouvel home content',
        'edit_item'          => "Editer le home content",
        'new_item'           => 'Nouveau home content',
        'view_item'          => "Voir le home content",
        'search_items'       => 'Chercher un home content',
        'not_found'          => 'Pas de résultat',
        'not_found_in_trash' => 'Pas de résultat',
        'parent_item_colon'  => 'Accueilparent :',
        'menu_name'          => 'Accueil',
    );
    $args = array(
        'labels'              => $labels,
        'hierarchical'        => false,
        'supports'            => array( 'title','nom','thumbnail','editor', 'excerpt', 'revisions'),
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       => 0,
        'menu_icon'           => 'dashicons-calendar-alt',
        'show_in_nav_menus'   => true,
        'publicly_queryable'  => true,
        'exclude_from_search' => false,
        'has_archive'         => true,
        'query_var'           => true,
        'can_export'          => true,
        'rewrite'             => array( 'slug' => $post_type )
    );
    register_post_type($post_type, $args );
    
    $taxonomy="home_content";
    $object_type = array("home");
    $args = array(
        'label' => __( "Contenu de l'accueil" ),
        'rewrite' => array( 'slug' => 'intro' ),
        'hierarchical' => true,
    );
    register_taxonomy( $taxonomy, $object_type, $args );

}
add_action( 'init', 'home_custom_type_init' );