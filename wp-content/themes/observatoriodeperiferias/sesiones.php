<?php
// Template Name: Sesiones
$args = array(
	'posts_per_page' => 4,
	'category_name' => 'Sesiones',
	'title' => 'Sesiones'
);
$playlistId = '';
$the_query = new WP_Query( $args );
if ( $the_query->have_posts() ) {
	while ( $the_query->have_posts() ) : $the_query->the_post();
		$playlistId = get_the_content();
	endwhile;
}
$args = array(
	'posts_per_page' => 4,
	'category_name' => 'Sesiones',
);
$titles = [];
$pIds = [];
$elems = [];
$the_query = new WP_Query( $args );
if ( $the_query->have_posts() ) {
	while ( $the_query->have_posts() ) : $the_query->the_post();
		array_push($elems, array("title" => get_the_title(), "playlistsIds" => get_the_content()));
	endwhile;
}
require 'header.php';
require 'menu.php';
require 'grid.php';
require 'shadowbox.php';
require 'footer.php';
?>