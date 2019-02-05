<?php
// Template Name: Memoria
require 'header.php';
require 'menu.php';
$offsetVal = ($_GET['offset']) ? $_GET['offset'] : 0;
?>
<div class="memoria-container">
<?php
$args = array(
	'posts_per_page' => -1,
	'category_name' => 'memoria',
	'offset' => $offsetVal
);
$the_query = new WP_Query( $args );
?>
<div class="number-selection">
	<?php
	if($offsetVal == 0){
		?>
		<div class="flecha-izq" id="flecha-izq-mem" data-prev=''></div>
		<?php
	}else{
		?>
		<div class="flecha-izq" id="flecha-izq-mem" style="display: block;" data-prev=''></div>
		<?php
	} 
	?>
	<div class="numbers" id="numbers">
	<?php
	global $wp;
  	$current_url = home_url( add_query_arg( array(), $wp->request ) );
  	for($i = 0; $i< $the_query->post_count; $i++){
  		if($i == $offsetVal){
  			echo "<a class='selected-page' href='" . $current_url . "?offset=" . $i . "'>" . ($i + 1) . "</a>";
  		}else{
  			echo "<a href='" . $current_url . "?offset=" . $i . "'>" . ($i + 1) . "</a>";
  		}
  	}
  	echo $the_query->post_count;
	?>
	</div>
	<?php
	if($offsetVal == $the_query->post_count - 1){
		?>
		<div class="flecha-der" id="flecha-der-mem" style="display: none;" data-prev=''></div>
		<?php
	}else{
		?>
		<div class="flecha-der" id="flecha-der-mem" data-prev=''></div>
		<?php
	}
	?>
</div>
<div class="memoria-inner-container">
<?php
var_dump($offsetVal);
require 'currPost.php';
var_dump($offsetVal);
getCurrentPost($offsetVal);
?>
</div>
</div>
<?php
require 'shadowbox.php';
require 'footer.php';
?>