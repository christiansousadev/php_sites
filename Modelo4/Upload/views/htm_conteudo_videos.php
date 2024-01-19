<?php if(!isset($_base['libera_views'])){ header("HTTP/1.0 404 Not Found"); exit; }

// echo "<pre>"; print_r($conteudo_sessao['cores']['detalhes']); echo "</pre>";
$cores = $conteudo_sessao['cores']['lista'];
$conteudo_config = $conteudo_sessao['data_grupo'];
$categorias = $conteudo_sessao['categorias'];

if($conteudo_config->itens_por_linha == 1){
	$altura = "315px;";
}
if($conteudo_config->itens_por_linha == 2){
	$altura = "315px";
}
if($conteudo_config->itens_por_linha == 3){
	$altura = "215px";
}
if($conteudo_config->itens_por_linha == 4){
	$altura = "215px";
}

?>
<style type="text/css">
	.videos_conteudo iframe{
		max-width: 100% !important;
		height:<?=$altura?> !important;
	}
	.videos_titulo{
		color:<?=$cores[57]?>;
	}
	.videos_descricao{
		color:<?=$cores[57]?>;
	}
	.videos_titulo{
		color:<?=$cores[57]?>;
	}
</style>
<section id="section-videos-<?=$conteudo_id?>" class="" style="padding-top:-10px; padding-bottom:-10px; background-color: <?=$cores[56]?>; ">
	<div class="container">
		
		<?php if($conteudo_config->mostrar_titulo == 1){ ?>

			<div class='row' >
				<div class='col-xs-12 col-sm-12 col-md-12' >
					<div>
						<h2 class="titulo_padrao" style="color:<?=$cores[57]?> !important; border-color:<?=$cores[57]?> !important; " ><?=$conteudo_config->titulo?></h2>
					</div>
				</div>
			</div>

		<?php } ?>

		<?php

		$lista = $conteudo_sessao['lista'];


		if($conteudo_config->mostrar_categorias == 0){



			$n_row = 1;
			foreach ($lista as $key => $value) {

				if($n_row == 1){ echo "<div class='row' >"; }


				if($conteudo_config->itens_por_linha == 1){
					echo "<div class='col-xs-12 col-sm-12 col-md-12' >";
				}
				if($conteudo_config->itens_por_linha == 2){
					echo "<div class='col-xs-12 col-sm-6 col-md-6' >";
				}
				if($conteudo_config->itens_por_linha == 3){
					echo "<div class='col-xs-12 col-sm-4 col-md-4' >";
				}
				if($conteudo_config->itens_por_linha == 4){
					echo "<div class='col-xs-12 col-sm-3 col-md-3' >";
				}


				echo " 
				<div class='videos_div' >
				";

				if($conteudo_config->mostrar_titulo_video == 1){
					
					echo "<div class='videos_titulo'  >".$value['titulo']."</div>";
					
				}

				echo "
				<div class='videos_descricao' >".$value['previa']."</div>
				<div class='videos_conteudo' >".$value['conteudo']."</div>

				</div>
				</div>
				";

				if($n_row == $conteudo_config->itens_por_linha){ echo "</div>"; $n_row = 1; } else { $n_row++; }

			}
			if($n_row != 1){ echo "</div>"; }



		} else {

			// aqui com categorias

			?>

			<div class="row">

				<?php if($conteudo_config->tipo_menu == 0){ $tipo = ''; ?>				
				<div class="col-sm-4">
				<?php } else { $tipo = '_topo'; ?>
				<div class="col-sm-12">
				<?php } ?>

				<div style="margin-top: 0px; background-color:<?=$cores['95']?>; padding-left:0px; padding-right: 0px; padding-bottom: 0px; padding-top: 10px; <?php if($conteudo_config->tipo_menu == 1){ echo "text-align:center;";  } ?> ">
					<?php

					$primeiro_video = '';
					$n_vid = 0;
					foreach ($categorias as $key => $value) {

						if($n_vid == 0){
							$primeiro_video = $value['codigo'];

							if($conteudo_config->tipo_menu == 1){ 
								$borderleft = "border-left:1px solid ".$cores['96']."; padding-left: 10px; ";
							} else {
								$borderleft = "";
							}

						} else {
							$borderleft = "";
						}

						if($conteudo_config->tipo_menu == 1){ 
							$borderright = " border-right:1px solid ".$cores['96']."; ";
						} else {
							$borderright = "";
						}

						echo "
						<a class='videos_categorias".$tipo."' style='color:".$cores['96']."; ".$borderleft."".$borderright." ' onclick=\"videos_categoria_".$conteudo_id."('".$value['codigo']."');\" >".$value['titulo']."</a>
						";

						$n_vid++;
					}

					?>
				</div>
			</div>

			<?php if($conteudo_config->tipo_menu == 0){ ?>
				<div class="col-sm-8">
				<?php } else { ?>
					<div class="col-sm-12">
					<?php } ?>

					<div id="videos_div-<?=$conteudo_id?>" >

					</div>

				</div>

			</div>


			<?php

		}





		?>

	</div>
</section>