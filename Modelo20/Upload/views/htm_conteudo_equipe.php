<?php if(!isset($_base['libera_views'])){ header("HTTP/1.0 404 Not Found"); exit; }

//echo "<pre>"; print_r($conteudo_sessao['cores']['detalhes']); echo "</pre>";
$cores = $conteudo_sessao['cores']['lista'];
$conteudo_config = $conteudo_sessao['data_grupo'];
$classes_css = str_replace(".", "", $conteudo_config->classes);
$classes_css_img = str_replace(".", "", $conteudo_config->classes_img);


?>

<div id="section-equipe-<?=$conteudo_id?>" class="container-fluid animate-effect" style="padding-top:50px; padding-bottom:50px; background-color: <?=$cores[38]?>; ">

	<?php if($conteudo_config->mostrar_titulo == 1){ ?>

		<div class='row' >
			<div class='col-xs-12 col-sm-12 col-md-12' >
				<div>
					<h2 class="titulo_padrao" style="color:<?=$cores[39]?> !important; border-color:<?=$cores[39]?> !important; " ><?=$conteudo_config->titulo?></h2>
					<div class="titulo_padrao_linha" style="color:<?=$cores[39]?>; " ></div> 
				</div>
			</div>
		</div>

	<?php } ?>

	<?php if($conteudo_config->descricao){ ?>

		<div class='row' >
			<div class='col-xs-12 col-sm-12 col-md-12' >
				<div style="margin-top:-50px; padding-bottom: -50px; font-size: 16px; color:<?=$cores[39]?>; text-align: center;">
					<?=$conteudo_config->descricao?>
				</div>
			</div>
		</div>

	<?php } ?>

	<?php

	$equipe_lista = $conteudo_sessao['lista'];

	$n_row = 1;
	foreach ($equipe_lista as $key => $value) {

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
		<div class='equipe_div $classes_css' >
		<div class='equipe_img' >
		";

		if($value['imagem']){
			echo "<img src='".$value['imagem']."' class='$classes_css_img' >";
		}

		echo "
		</div>
		<div class='equipe_titulo' style='color:".$cores[39]."' >".$value['titulo']."</div>
		<div class='equipe_descricao' style='color:".$cores[39]."' >".$value['descricao']."</div>
		<div style='width:100%; margin-top:10px;' >
		";

		foreach ($value['links'] as $key2 => $value2) {

			echo "
			<a href='".$value2['link']."' target='_blank' style='display:inline-block; margin:5px;' >
			<img src='".$value2['ico']."' title='".$value2['titulo']."' style='max-width:50px;' class='$classes_css_img' >
			</a>
			";

		}
		
		echo "
		</div>
		</div>
		</div>
		";

		if($n_row == $conteudo_config->itens_por_linha){ echo "</div>"; $n_row = 1; } else { $n_row++; }

	}
	if($n_row != 1){ echo "</div>"; }

	?>

</div>