<?php require_once('_system/bloqueia_view.php'); ?>

<?php if($_base['topo']){ ?>
	<div class="topo_imagem"><img src="<?=$_base['topo']?>"></div>
<?php } ?>

<div class="header">
	
	<div class="borda_topo"></div>
	
	<div class="container">
		<div class="row" >
			<div class="col-md-12">

				<div class="logo">
					<a href="<?=DOMINIO?>"><img src="<?=$_base['logo']?>" title="logo" /></a>
				</div>

				<div class="topo_contatos" >

					<span><i class="fa fa-envelope-o" style="font-size: 20px;" aria-hidden="true"></i></span> <?=$_base['topo_email']?>

					<span><i class="fa fa-whatsapp" style="font-size: 20px;" aria-hidden="true"></i></span> <strong><?=$_base['topo_fone1']?></strong>

					<div class="topo_telefone2" ><span><i class="fa fa-phone" style="font-size: 20px;" aria-hidden="true"></i></span> <strong><?=$_base['topo_fone2']?></strong></div>

				</div>

				<div class="botaomenuresponsivo">
					<i class="fa fa-bars" aria-hidden="true"></i>
				</div>

				<div class="top-nav">
					<ul>
						<?php

						$caminho_pagina = "";
						foreach ($_base['menu'] as $key => $value) {

							if($value['controller'] == $controller){

								$active = " class='active' ";
								$caminho_pagina = "<span>></span><a href='".$value['destino']."' class='subtopo_faixa_caminho_item' >".$value['titulo']."</a>";

							} else {
						// gambia por que nao tem o portfolio no menu
								if($controller == 'portfolio'){
									$active = "";
									$caminho_pagina = "<span>></span><a href='".$value['destino']."' class='subtopo_faixa_caminho_item' >Portfólio</a>";
								} else {
									$active = "";
								}
							}

							echo "
							<li ".$active." >
							<span class='esq'></span>
							<a href='".$value['destino']."' >".$value['titulo']."</a>
							<span class='dir'></span>
							</li>
							";

						}
						?>
					</ul>
				</div>

				<div class="clear"></div>

			</div>
		</div>
	</div>
</div>