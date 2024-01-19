<?php require_once('_system/bloqueia_view.php'); ?>

<section style="position: relative; width: 100%; padding-top:70px; padding-bottom: 70px; background-color:<?=$_base['cor']['1']?>">

	<div class="container">
		<div class="row">
			<div class="col-sm-12 first-module module_slider module_cont pb0 light_parent">
				<div class="slider_container">
					<div class="fullscreen_slider sombrabanner">
						<ul>
							<?php

							foreach ($banners as $key => $value) {

								echo '
								<li '.$value['link'].' data-transition="fade" data-slotamount="5" data-masterspeed="700" >              
								<img src="'.$value['imagem'].'" data-bgposition="center top" data-bgrepeat="no-repeat" /> 
								</li>
								';

							}

							?>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

</section>