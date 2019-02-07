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
    }
}
?>
</div>
</div>
<?php
require 'shadowbox.php';
require 'footer.php';
?>