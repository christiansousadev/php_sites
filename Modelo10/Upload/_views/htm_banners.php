<?php require_once('_system/bloqueia_view.php'); ?>

<div id="top" class="callbacks_container">

	<ul class="rslides" id="slider1">
		<?php
		
		foreach ($banners_grande as $key => $value) {
			
			echo "
			<li ".$value['link']." >
			<div class='banner_personal' >
			<img src='".$value['imagem']."' >
			</div>
			</li>
			";
			
		}
		
		?>
	</ul>

</div>
<div class="clearfix"></div>