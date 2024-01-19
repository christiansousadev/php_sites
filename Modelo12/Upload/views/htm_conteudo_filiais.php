<?php if(!isset($_base['libera_views'])){ header("HTTP/1.0 404 Not Found"); exit; }

// echo "<pre>"; print_r($conteudo_sessao['cores']['detalhes']); echo "</pre>";
$cores = $conteudo_sessao['cores']['lista'];
$conteudo_config = $conteudo_sessao['data_grupo'];
$classes_css = str_replace(".", "", $conteudo_config->classes);
$classes_css_img = str_replace(".", "", $conteudo_config->classes_img);

?>

<div id="section-filiais-<?=$conteudo_id?>" class="container-fluid animate-effect" style="padding-top:50px; padding-bottom:80px; background-color: <?=$cores[54]?>; ">

	<?php if($conteudo_config->mostrar_titulo == 1){ ?>

		<div class='row' >
			<div class='col-xs-12 col-sm-12 col-md-12' >
				<div>
					<h2 class="titulo_padrao" style="color:<?=$cores[55]?> !important; border-color:<?=$cores[55]?> !important; " ><?=$conteudo_config->titulo?></h2>
					<div class="titulo_padrao_linha" style="color:<?=$cores[55]?>; " ></div> 
				</div>
			</div>
		</div>

	<?php } ?>

	<?php if($conteudo_config->descricao){ ?>

		<div class='row' >
			<div class='col-xs-12 col-sm-12 col-md-12' >
				<div style="margin-top:30px; padding-bottom: 20px; font-size: 16px; color:<?=$cores[55]?>; text-align: center;">
					<?=$conteudo_config->descricao?>
				</div>
			</div>
		</div>

	<?php } ?>

	<?php

	$lista = $conteudo_sessao['lista'];

	$n_row = 1;
	foreach ($lista as $key => $value) {

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
		<a class='filiais_item hvr-float-shadow' href='".DOMINIO.$controller."/filial/codigo/".$value['codigo']."' >
		";

		if($value['imagem']){
			echo "<div class='filiais_img $classes_css ' style='background-image:url(".$value['imagem'].")' ></div>";
		}

		echo " 
		<div class='filiais_titulo $classes_css' style='color:".$cores[55].";' >".$value['titulo']."</div>
		</a>
		</div>
		";

		if($n_row == $conteudo_config->itens_por_linha){ echo "</div>"; $n_row = 1; } else { $n_row++; }

	}
	if($n_row != 1){ echo "</div>"; }

	?>

</div>