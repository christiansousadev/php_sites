<?php if(!isset($_base['libera_views'])){ header("HTTP/1.0 404 Not Found"); exit; }

//echo "<pre>"; print_r($conteudo_sessao['cores']['detalhes']); echo "</pre>";
$cores = $conteudo_sessao['cores']['lista'];
$conteudo_config = $conteudo_sessao['data_grupo'];
$paginacao = $conteudo_sessao['paginacao'];
$categorias = $conteudo_sessao['categorias'];
$categoria_selecionada = $conteudo_sessao['categoria_selecionada'];
$banners_esquerda = $value_layout['banners_esquerda'];
$banners_direita = $value_layout['banners_direita'];

?>

<section id="section-postagens-<?=$conteudo_id?>" class="animate-effect" style="padding-top:40px; padding-bottom:30px; background-color: <?=$cores[46]?>; ">
	<div class="container">

		
		<?php if($conteudo_config->mostrar_titulo == 1){ ?>

			<div class='row' >
				<div class='col-xs-12 col-sm-12 col-md-12' >
					<div>
						<h2 class="titulo_padrao" style="color:<?=$cores[47]?> !important; border-color:<?=$cores[47]?> !important;font-size: 42px; " ><?=$conteudo_config->titulo?></h2>
						<div class="titulo_padrao_linha" style="color:<?=$cores[47]?>; " ></div> 
					</div>
				</div>
			</div>

		<?php } ?>



		<?php
		if(
			($conteudo_config->mostrar_banners == 1) OR 
			($conteudo_config->mostrar_banners == 3) OR 
			($conteudo_config->mostrar_categorias == 1)
		){
			?>

			<div class='row' >

				<div class='col-xs-12 col-sm-3 col-md-3' >

					<?php

					if($conteudo_config->mostrar_categorias == 1){

						?>
						<div>

							<h2 class="titulo_padrao" style="padding-top: 30px; text-align: left;" >Categorias</h2> 

							<div style="margin-top:0px;" >
								<?php

								foreach ($categorias as $key => $value) {

									$endereco_cat = DOMINIO.$controller."/inicial/categoria_".$conteudo_id."/".$value['codigo'].'/#section-postagens-'.$conteudo_id;

									if($categoria_selecionada == $value['codigo']){
										$ativo = "color:".$cores[75]." !important; ";
										$active_folder = "fas fa-folder-open";
									} else {
										$ativo = "color:".$cores[74]." !important; ";
										$active_folder = "far fa-folder";
									}

									echo "
									<div class='blog_categorias' style='$ativo' >
									<a href='$endereco_cat' style='$ativo' ><i class='".$active_folder."'></i> ".$value['titulo']."</a>
									</div>
									";

								}

								?>
							</div>

						</div>
					<?php } ?>


					<?php

					if( ($conteudo_config->mostrar_banners == 1) OR ($conteudo_config->mostrar_banners == 3) ){

						echo "<div class='banners_esquerda_responsivo1'>";
						include 'htm_conteudo_banners_esq.php';
						echo '</div>';

					}

					?>


				</div>

				<?php

			}

			if( ($conteudo_config->mostrar_banners == 0) AND ($conteudo_config->mostrar_categorias == 0) ){
				echo "<div class='col-xs-12 col-sm-12 col-md-12' >";
			} else {
				if(
					($conteudo_config->mostrar_banners == 3) OR 
					( ($conteudo_config->mostrar_banners == 2) AND ($conteudo_config->mostrar_categorias == 1) ) OR 
					( ($conteudo_config->mostrar_banners == 1) AND ($conteudo_config->mostrar_categorias == 2) )
				){
					echo "<div class='col-xs-12 col-sm-6 col-md-6' >";
				} else {
					echo "<div class='col-xs-12 col-sm-9 col-md-9' >";
				}
			}

			?>


			<?php

			$itens_listados = 1;
			$postagens_lista = $conteudo_sessao['lista'];

			$n_row = 1;
			foreach ($postagens_lista as $key => $value) {

				if( ($itens_listados <= $conteudo_config->max_itens) OR ($conteudo_config->max_itens == 0) ){

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


					$endereconoticia = DOMINIO.$controller."/leitura/id/".$value['endereco'];


					if($conteudo_config->formato == 1){

						echo " 
						<div class='noticias_1_div' >

						<a class='noticias_1_item' href='".$endereconoticia."' >

						";

						if($value['imagem']){

							echo "
							<div class='noticias_1_".$conteudo_config->itens_por_linha ."_img' style='background-image:url(".$value['imagem'].");' ></div>
							";

						}

						echo "
						<div class='noticias_1_titulo' style='color:".$cores[72].";' >".$value['titulo']."</div>
						<div class='noticias_1_previa' style='color:".$cores[67].";' >".$value['previa']."</div>
						</a>
						</div>

						</div>
						";					 

					}


					if($conteudo_config->formato == 2){

						echo " 
						<div class='noticias_2_div' >

						<a class='noticias_2_item' href='".$endereconoticia."' >

						";

						if($value['imagem']){

							echo "
							<div class='noticias_2_".$conteudo_config->itens_por_linha ."_img' style='background-image:url(".$value['imagem'].");' >
							<div class='noticias_2_titulo' style='color:".$cores[72]."; background-color:".$cores[73].";' >".$value['titulo']."</div>
							</div>
							";

						}

						echo "
						</a>
						</div>

						</div>
						";

					}

					if($conteudo_config->formato == 3){

						echo " 
						<div class='noticias_3_div' >

						<a class='noticias_3_item' href='".$endereconoticia."' >
						 
						<div class='noticias_3_titulo' style='color:".$cores[72].";' >".$value['titulo']."</div>

						<div class='noticias_3_data' ><i class='far fa-calendar-alt' ></i> ".$value['data']."</div>
						
						";

						if($value['imagem']){

							echo "
							<div class='noticias_3_".$conteudo_config->itens_por_linha ."_img' style='background-image:url(".$value['imagem'].");' ></div>
							";

						}

						echo "

						<div class='noticias_3_previa' style='color:".$cores[67].";' >".$value['previa']."</div>
						</a>
						</div>

						</div>
						";

					}

					if($n_row == $conteudo_config->itens_por_linha){ echo "</div>"; $n_row = 1; } else { $n_row++; }

				}

				$itens_listados++;
			}
			if($n_row != 1){ echo "</div>"; }



			if( ($itens_listados <= $conteudo_config->max_itens) OR ($conteudo_config->max_itens == 0) ){
				?>
				<style type="text/css">

					.pagination li a, .pagination li span{
						background-color: <?=$cores[68]?> !important;
						color: <?=$cores[69]?> !important;
						border-radius:3px !important;
					}
					.pi-pagenav li .active{
						background-color: <?=$cores[70]?> !important;
						color: <?=$cores[71]?> !important;
						border-radius:3px !important;
					}

				</style>

				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12" >
						<div class="pi-pagenav" style="padding-top:10px; margin-bottom:30px; " >
							<?=$paginacao?>
						</div>
					</div>
				</div>
				<?php
			}
			?>

		</div>

		<?php if( ($conteudo_config->mostrar_banners >= 1) OR ($conteudo_config->mostrar_categorias == 2) ){ ?>

			<div class='col-xs-12 col-sm-3 col-md-3' >


				<?php

				if($conteudo_config->mostrar_categorias == 2){

					?>
					<div>

						<h2 class="titulo_padrao" style="padding-top: 30px; text-align: left;" >Categorias</h2> 

						<div style="margin-top:0px; text-align: left;" >
							<?php
							
							foreach ($categorias as $key => $value) {

								$endereco_cat = DOMINIO.$controller."/inicial/categoria_".$conteudo_id."/".$value['codigo'].'/#section-postagens-'.$conteudo_id;
								
								if($categoria_selecionada == $value['codigo']){
									$ativo = "color:".$cores[75]." !important; ";
									$active_folder = "fas fa-folder-open";
								} else {
									$ativo = "color:".$cores[74]." !important; ";
									$active_folder = "far fa-folder";
								}
								
								echo "
								<div class='blog_categorias' style='$ativo' >
								<a href='$endereco_cat' style='$ativo' ><i class='".$active_folder."'></i> ".$value['titulo']."</a>
								</div>
								";

							}

							?>
						</div>

					</div>
				<?php } ?>


				<?php

				if( ($conteudo_config->mostrar_banners == 2) OR ($conteudo_config->mostrar_banners == 3) ){

					echo "<div class='banners_esquerda_responsivo2'>";
					include 'htm_conteudo_banners_esq.php';
					echo '</div>';

					include 'htm_conteudo_banners_dir.php';

				}

				?>


			</div>

		</div>

		<?php
	}
	?>


</div>



</section>