<?php if(!isset($_base['libera_views'])){ header("HTTP/1.0 404 Not Found"); exit; }

//echo "<pre>"; print_r($conteudo_sessao['cores']['detalhes']); echo "</pre>";
$cores = $conteudo_sessao['cores']['lista'];
$conteudo_config = $conteudo_sessao['data_grupo'];

?>

<section id="section-caracteristicas-<?=$conteudo_id?>" class="" style="padding-top:50px; padding-bottom:80px; background-color: <?=$cores[22]?>; ">
	<div class="container">

		<?php if($conteudo_config->mostrar_titulo == 1){ ?>

			<div class='row' >
				<div class='col-xs-12 col-sm-12 col-md-12' >
					<div>
						<h2 class="titulo_padrao" style="color:<?=$cores[23]?> !important; border-color:<?=$cores[23]?> !important; " ><?=$conteudo_config->titulo?></h2>
						<div class="titulo_padrao_linha" style="color:<?=$cores[23]?>; " ><i class="fas fa-caret-down"></i></div> 
					</div>
				</div>
			</div>

		<?php } ?>

		<?php if($conteudo_config->descricao){ ?>

			<div class='row' >
				<div class='col-xs-12 col-sm-12 col-md-12' >
					<div style="margin-top:30px; padding-bottom: 20px; font-size: 16px; color:<?=$cores[23]?>; text-align: center;">
						<?=$conteudo_config->descricao?>
					</div>
				</div>
			</div>

		<?php } ?>

		<?php

		$caracteristicas_lista = $conteudo_sessao['lista'];

		$n_row = 1;
		foreach ($caracteristicas_lista as $key => $value) {

			if($n_row == 1){ echo "<div class='row' >"; }

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
			<div class='caracteristicas_div' >
			<div class='caracteristicas_img' >
			";

			if($value['imagem']){
				echo "<img src='".$value['imagem']."' >";
			}

			echo "
			</div>
			<div class='caracteristicas_titulo' style='color:".$cores[23]."' >".$value['titulo']."</div>
			<div class='caracteristicas_descricao' style='color:".$cores[23]."' >".$value['descricao']."</div>
			</div>
			</div>
			";

			if($n_row == $conteudo_config->itens_por_linha){ echo "</div>"; $n_row = 1; } else { $n_row++; }

		}
		if($n_row != 1){ echo "</div>"; }

		?>

	</div>
</section>