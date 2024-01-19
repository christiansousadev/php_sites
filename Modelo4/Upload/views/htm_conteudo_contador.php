<?php if(!isset($_base['libera_views'])){ header("HTTP/1.0 404 Not Found"); exit; }

//echo "<pre>"; print_r($conteudo_sessao['cores']['detalhes']); echo "</pre>";
$cores = $conteudo_sessao['cores']['lista'];
$conteudo_config = $conteudo_sessao['data_grupo'];

?>
<section id="section-contador-<?=$conteudo_id?>" class="" style="padding-top:10px; padding-bottom:20px; background-color: <?=$cores[24]?>" >
	<div class="container">

		<?php if($conteudo_config->mostrar_titulo == 1){ ?>

			<div class='row' >
				<div class='col-xs-12 col-sm-12 col-md-12' >
					<div>
						<h2 class="titulo_padrao" style="color:<?=$cores[25]?> !important; border-color:<?=$cores[25]?> !important; " ><?=$conteudo_config->titulo?></h2>
						<div class="titulo_padrao_linha" style="color:<?=$cores[25]?>; " ><i class="fas fa-caret-down"></i></div> 
					</div>
				</div>
			</div>

		<?php } ?>

		<?php if($conteudo_config->descricao){ ?>

			<div class='row' >
				<div class='col-xs-12 col-sm-12 col-md-12' >
					<div style="padding-top:40px; padding-bottom:10px; font-size: 16px; color:<?=$cores[25]?>; text-align: center;">
						<?=$conteudo_config->descricao?>
					</div>
				</div>
			</div>

		<?php } ?>

		<?php

		$contadores_lista = $conteudo_sessao['lista'];

		$n_row = 1;
		foreach ($contadores_lista as $key => $value) {

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
			<div class='contador_div'>

			<div class='contador_img' ><img src='".$value['imagem']."' ></div>
			<div class='count-up count_".$value['codigo']." contador_valor' style='color:".$cores[25]."' data-from='10' data-to='".$value['valor']."' data-time='3000'>0</div>
			<div class='contador_titulo' style='color:".$cores[25]."'>".$value['titulo']."</div>
			<div class='stat_temp'></div>
			</div>
			</div>
			";

			if($n_row == $conteudo_config->itens_por_linha){ echo "</div>"; $n_row = 1; } else { $n_row++; }

		}
		if($n_row != 1){ echo "</div>"; }

		?>

	</div>
	<div id="final_contador"></div>
</section>