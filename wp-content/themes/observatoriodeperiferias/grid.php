<div class='grid-container'>
<div class='grid-row row-top'>
	<div class='grid-item grid-left' id='vid-0'>
		<div class='thumb'><div class="fade"></div></div>
		<div class='title'></div>
	</div>
	<div class='grid-item grid-right' id='vid-1'>
		<div class='thumb'><div class="fade"></div></div>
		<div class='title'></div>
	</div>
</div>
<div class="banner" id="banner" data-playlist =''>
	<div class="flecha-izq" id="flecha-izq" data-prev=''></div>
	<div class="title">
		<div class="selected-item">
			<span id="select-placeholder" data-value="<?= $elems[0]['playlistsIds']; ?>"><?= $elems[0]['title']; ?></span>
			<div class="flecha-down"></div>
		</div>
		<ul id="title-select">
			<?php
			foreach($elems as $element){
				echo "<li data-value='" . $element['playlistsIds'] . "'>" . $element['title'] . "</li>";
			}
			?>
		</ul>
	</div>
	<div class="flecha-der" id="flecha-der" data-next=''></div>
</div>
<div class='grid-row row-bottom'>
	<div class='grid-item grid-left' id='vid-2'>
		<div class='thumb'><div class="fade"></div></div>
		<div class='title'></div>
	</div>
	<div class='grid-item grid-right' id='vid-3'>
		<div class='thumb'><div class="fade"></div></div>
		<div class='title'></div>
	</div>
</div>
</div>
<script type="text/javascript">
	setInitialVids('<?= $playlistId; ?>');
</script>