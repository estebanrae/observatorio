<?php 
// Functions
function register_my_menu() {
  register_nav_menu('header-menu',__( 'Main Menu' ));
}
add_action( 'init', 'register_my_menu' );

function wptp_add_categories_to_attachments() {
    register_taxonomy_for_object_type( 'category', 'attachment' );
}
add_action( 'init' , 'wptp_add_categories_to_attachments' );
?>