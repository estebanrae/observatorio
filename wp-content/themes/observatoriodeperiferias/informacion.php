<?php
// Template Name: Informacion
require 'header.php';
require 'menu.php';
?>
<div class="informacion-container">
<div class="informacion-inner-container">
<?php
$args = array(
	'category_name' => 'informacion'
);
$the_query = new WP_Query( $args );
if ( $the_query->have_posts() ) {
	while ( $the_query->have_posts() ) : $the_query->the_post();
		the_content();
	endwhile;
}
?>
</div>
</div>
<?php
require 'shadowbox.php';
require 'footer.php';
?>