<?php
function getCurrentPost(int $offset = 0){
	$args = array(
		'posts_per_page' => 1,
		'offset' => $offset,
		'category_name' => 'memoria'
	);
	$the_query = new WP_Query( $args );
	if ( $the_query->have_posts() ) {
		while ( $the_query->have_posts() ) : $the_query->the_post();
			the_content();
		endwhile;
	}
}