<?php if(!isset($_base['libera_views'])){ header("HTTP/1.0 404 Not Found"); exit; }

//echo "<pre>"; print_r($conteudo_sessao['cores']['detalhes']); echo "</pre>";
$cores = $conteudo_sessao['cores']['lista'];
$conteudo_config = $conteudo_sessao['data_grupo'];

?>

<section id="section-destaques-<?=$conteudo_id?>" class="" style="padding-top:10px; padding-bottom:50px; background-color: <?=$cores[63]?>; ">
	<div class="container">

		<?php if($conteudo_config->mostrar_titulo == 1){ ?>

			<div class='row' >
				<div class='col-xs-12 col-sm-12 col-md-12' >
					<div>
						<h2 class="titulo_padrao" style="color:<?=$cores[64]?> !important; font-size: 46px; border-color:<?=$cores[64]?> !important; " ><?=$conteudo_config->titulo?></h2> 
					</div>
				</div>
			</div>

		<?php } ?>

		<?php if($conteudo_config->descricao){ ?>

			<div class='row' >
				<div class='col-xs-12 col-sm-12 col-md-12' >
					<div style="margin-top:5px; padding-bottom: 10px; font-size: 16px; color:<?=$cores[64]?>; text-align: center;">
						<?=$conteudo_config->descricao?>
					</div>
				</div>
			</div>

		<?php } ?>

		<?php

		$destaques_lista = $conteudo_sessao['lista'];

		$n_row = 1;
		foreach ($destaques_lista as $key => $value) {

			if($value['imagem']){

				if($n_row == 1){ echo "<div class='row' >"; }

				if($conteudo_config->itens_por_linha == 2){
					echo "<div class='col-xs-12 col-sm-6 col-md-6' style='padding-left:0px !important; padding-right:0px !important;' >";
				}
				if($conteudo_config->itens_por_linha == 3){
					echo "<div class='col-xs-12 col-sm-4 col-md-4' style='padding-left:0px !important; padding-right:0px !important;' >";
				}
				if($conteudo_config->itens_por_linha == 4){
					echo "<div class='col-xs-12 col-sm-3 col-md-3' style='padding-left:0px !important; padding-right:0px !important;' >";
				}

				if($value['link']){
					$link = " href='".$value['link']."' ";
				} else {
					$link = "";
				}

				echo " 
				<a class='destaques_div' $link >
				<div class='destaques_img' style='background-image:url(".$value['imagem'].");' ></div>
				<div class='destaques_titulo' style='color:".$cores[65]."; background-color:".$cores[66]."' >".$value['titulo']."</div>
				</div>
				</a>
				";

				if($n_row == $conteudo_config->itens_por_linha){ echo "</div>"; $n_row = 1; } else { $n_row++; }
			}
		}
		if($n_row != 1){ echo "</div>"; }

		?>

	</div>
</section>