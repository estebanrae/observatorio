<?php
// Template Name: Descarbagles
require 'header.php';
require 'menu.php';
?>
<div class="descargable-container">
<div class="descargable-inner-container">
	<div class="downloadable-title">
		<h1>Descargables</h1>
	</div>
<?php
//require 'grid.php';
/*
$query_images_args = array(
    'category' => 'downloadable',
    'posts_per_page' => - 1,
);

$query_images = new WP_Query( $query_images_args );

$images = array();
foreach ( $query_images->posts as $key => $image ) {
    echo $image;
    
}
*/
$args = array(
    'post_type' => 'attachment',
    //'type' => 'post',
    'numberposts' => -1,
    'post_status' => null,
    'post_parent' => null, // any parent
    'category_name' => 'descargable'
    //'taxonomy' => 'downloadable'
    ); 
$attachments = get_posts($args);
if ($attachments) {
    foreach ($attachments as $post) {
    	//var_dump();
    	?>
    	<div class="descargable">
    		<a href="<?= $post->guid; ?>" download>
    			<i class="fas fa-file"></i>    <?=get_the_title();?>
    		</a>
		</div>
    	<?php
    	//var_dump(get_attachment_link());
       /* setup_postdata($post);
        the_title();
        the_attachment_link($post->ID, false);
        the_excerpt();*/
    }
}
?>
</div>
</div>
<?php
require 'shadowbox.php';
require 'footer.php';
?>