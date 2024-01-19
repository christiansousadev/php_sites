<?php require_once('_system/bloqueia_view.php'); ?>
<div class="subtopo">

	<div class="subtopo_faixa"></div>
	
	<div class="container">
		<div class="row" >
			<div class="col-xs-5 col-sm-5 col-md-4">
				
				<div class="subtopo_faixa_caminho">
					
					<a href="<?=DOMINIO?>" class="subtopo_faixa_caminho_item">INICIO</a><?=$caminho_pagina?>					 
					
				</div>
				
			</div>
			<div class="col-xs-7 col-sm-7 col-md-8">
				
				<div class="subtopo_redes" >
				<?php

					foreach ($listaredes as $key => $value) {
							
						if($value['titulo'] != 'facebook'){
							
							echo "
							<div class='redessociais_subtopo'>
								<a href='".$value['endereco']."' target='_blank' >
									<img src='".$value['imagem']."'>
								</a>
							</div>
							";
							
						}
					}

				?>
				<div style="clear: both;"></div>
				</div>

				<div class="subtopo_redes_txt">acompanhe nas redes sociais</div>

				<div style="clear: both;"></div>

			</div>
		</div>
	</div>
</div>