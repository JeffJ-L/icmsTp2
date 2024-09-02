<?php



function ttoc_styles() {
    wp_enqueue_style( 'twenty-twenty-one-child-style', get_stylesheet_uri(), array( 'twenty-twenty-one-style' ) );
}
add_action( 'wp_enqueue_scripts', 'ttoc_styles' );




function ttoc_supprime_editeur_page() {
    remove_post_type_support( 'page', 'editor' );
}
add_action( 'init', 'ttoc_supprime_editeur_page', 15 );



function ttoc_ajoute_auteur() {
    echo '<meta name="author" content="Jeff Jean-Louis">';
}
add_action( 'wp_head', 'ttoc_ajoute_auteur' );
