<div class="side-menu">
	<?php
	$args = array(
	    'post_type' => 'attachment',
	    //'type' => 'post',
	    'numberposts' => 1,
	    'post_status' => null,
	    'post_parent' => null, // any parent
	    'category_name' => 'logo'
	    ); 
	$attachments = get_posts($args);
	if ($attachments) {
	    foreach ($attachments as $post) {
	    	?>
	    	<div class="logo-container"><img src="<?= $post->guid; ?>" /></div>
	    	<?php
	    }
	}
	?>
	<?php
	wp_nav_menu(array());
	?>
</div>
<div class="top-menu">
	<?php
	$attachments = get_posts($args);
	if ($attachments) {
	    foreach ($attachments as $post) {
	    	?>
	    	<div class="logo-container"><img src="<?= $post->guid; ?>" /></div>
	    	<?php
	    }
	}
	?>
	<div class="menu-bars">
		<div class="top-bar"></div>
		<div class="medium-bar"></div>
		<div class="bottom-bar"></div>
	</div>
	<div class="open-menu">
		<?php
		wp_nav_menu(array());
		?>
	</div>
</div>