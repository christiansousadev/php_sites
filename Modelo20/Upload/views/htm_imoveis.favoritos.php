<?php if(!isset($_base['libera_views'])){ header("HTTP/1.0 404 Not Found"); exit; } ?>
<!DOCTYPE html>
<html>
<head>

	<meta http-equiv="Content-Type" charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<title>Imóveis favoritos - <?=$data_pagina->meta_titulo?></title>
	<link rel="shortcut icon" href="<?=$_base['favicon'];?>" />

	<meta name="description" content="<?=$data_pagina->meta_descricao?>" />
	<meta property="og:description" content="<?=$data_pagina->meta_descricao?>" />
	<meta name="author" content="<?=AUTOR?>" />
	<meta name="classification" content="Website" />
	<meta name="robots" content="index, follow" />
	<meta name="Indentifier-URL" content="<?=DOMINIO?>" />
	
	<link href="<?=LAYOUT?>api/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="<?=LAYOUT?>api/jquery-ui-1.12.1/jquery-ui.min.css" rel="stylesheet" type="text/css" />
	<link href="<?=LAYOUT?>api/fontawesome/css/all.css" rel="stylesheet" type="text/css" />
	<link href="<?=LAYOUT?>css/animate.css" rel="stylesheet" type="text/css" />
	<link href="<?=LAYOUT?>api/hover-master/css/hover-min.css" rel="stylesheet" type="text/css" />
	<link href="<?=LAYOUT?>css/main.css" rel="stylesheet" type="text/css" />
	<link href="<?=LAYOUT?>css/responsiveslides.css" rel="stylesheet" type="text/css" />
	<link href="<?=LAYOUT?>api/bxslider/jquery.bxslider.css" rel="stylesheet" type="text/css" />
	<link href="<?=LAYOUT?>api/OwlCarousel2-2.3.4/dist/assets/owl.carousel.css" rel="stylesheet" type="text/css" />
	<link href="<?=LAYOUT?>api/select2/select2.min.css" rel="stylesheet" type="text/css" >
	<link href="<?=LAYOUT?>api/photobox-master/photobox/photobox.css" rel="stylesheet" type="text/css">

	<?php include_once('htm_css.php'); ?>
	<?php include_once('htm_css_resp.php'); ?>

</head>
<body>

	<?=$_base['analytics']?>

	<?php include_once('htm_modal.php'); ?>

	<?php
	// topo 
	foreach ($layout_lista as $key_layout => $value_layout) {

		if($value_layout['full'] != 1){
			echo "<div class='container' >";
		}
		echo "<div class='row' style='margin-right:0px; margin-left:0px;' >";

		if($value_layout['colunas'] == 1){
			?>

			<div class="col-md-12 corrige_cedulas_principais">
				<?php

				$conteudo_coluna = $value_layout['coluna1'];
				if($conteudo_coluna['tipo'] == 'topo'){

					$conteudo_id = $conteudo_coluna['id'];
					$conteudo_sessao = $conteudo_coluna['conteudo'];
					include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

				}

				?>
			</div>

		<?php }

		if($value_layout['colunas'] == 2){

			if($value_layout['formato'] == '6_6'){
				?>      

				<div class="col-md-6 corrige_cedulas_principais">
					<?php

					$conteudo_coluna = $value_layout['coluna1'];
					if($conteudo_coluna['tipo'] == 'topo'){

						$conteudo_id = $conteudo_coluna['id'];
						$conteudo_sessao = $conteudo_coluna['conteudo'];
						include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

					}

					?>
				</div>
				<div class="col-md-6 corrige_cedulas_principais">
					<?php

					$conteudo_coluna = $value_layout['coluna2'];
					if($conteudo_coluna['tipo'] == 'topo'){

						$conteudo_id = $conteudo_coluna['id'];
						$conteudo_sessao = $conteudo_coluna['conteudo'];
						include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

					}

					?>          
				</div>

			<?php }

			if($value_layout['formato'] == '4_8'){
				?>        

				<div class="col-md-4 corrige_cedulas_principais">
					<?php

					$conteudo_coluna = $value_layout['coluna1'];
					if($conteudo_coluna['tipo'] == 'topo'){

						$conteudo_id = $conteudo_coluna['id'];
						$conteudo_sessao = $conteudo_coluna['conteudo'];
						include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

					}

					?>
				</div>
				<div class="col-md-8 corrige_cedulas_principais">
					<?php

					$conteudo_coluna = $value_layout['coluna2'];
					if($conteudo_coluna['tipo'] == 'topo'){

						$conteudo_id = $conteudo_coluna['id'];
						$conteudo_sessao = $conteudo_coluna['conteudo'];
						include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

					}

					?>
				</div>

			<?php }

			if($value_layout['formato'] == '8_4'){
				?>
				<div class="col-md-8 corrige_cedulas_principais">
					<?php

					$conteudo_coluna = $value_layout['coluna1'];
					if($conteudo_coluna['tipo'] == 'topo'){

						$conteudo_id = $conteudo_coluna['id'];
						$conteudo_sessao = $conteudo_coluna['conteudo'];
						include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

					}

					?>
				</div>
				<div class="col-md-4 corrige_cedulas_principais">
					<?php

					$conteudo_coluna = $value_layout['coluna2'];
					if($conteudo_coluna['tipo'] == 'topo'){

						$conteudo_id = $conteudo_coluna['id'];
						$conteudo_sessao = $conteudo_coluna['conteudo'];
						include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

					}

					?>
				</div>        
			<?php }

		}

		if($value_layout['colunas'] == 3){

			if($value_layout['formato'] == '4_4_4'){
				?>

				<div class="col-md-4 corrige_cedulas_principais">
					<?php

					$conteudo_coluna = $value_layout['coluna1'];
					if($conteudo_coluna['tipo'] == 'topo'){

						$conteudo_id = $conteudo_coluna['id'];
						$conteudo_sessao = $conteudo_coluna['conteudo'];
						include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

					}

					?>
				</div>
				<div class="col-md-4 corrige_cedulas_principais">
					<?php

					$conteudo_coluna = $value_layout['coluna2'];
					if($conteudo_coluna['tipo'] == 'topo'){

						$conteudo_id = $conteudo_coluna['id'];
						$conteudo_sessao = $conteudo_coluna['conteudo'];
						include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

					}

					?>
				</div>
				<div class="col-md-4 corrige_cedulas_principais">
					<?php

					$conteudo_coluna = $value_layout['coluna3'];
					if($conteudo_coluna['tipo'] == 'topo'){

						$conteudo_id = $conteudo_coluna['id'];
						$conteudo_sessao = $conteudo_coluna['conteudo'];
						include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

					}

					?>
				</div> 

			<?php }


			if($value_layout['formato'] == '2_5_5'){
				?>      

				<div class="col-md-2 corrige_cedulas_principais">
					<?php

					$conteudo_coluna = $value_layout['coluna1'];
					if($conteudo_coluna['tipo'] == 'topo'){

						$conteudo_id = $conteudo_coluna['id'];
						$conteudo_sessao = $conteudo_coluna['conteudo'];
						include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

					}

					?>
				</div>
				<div class="col-md-5 corrige_cedulas_principais">
					<?php

					$conteudo_coluna = $value_layout['coluna2'];
					if($conteudo_coluna['tipo'] == 'topo'){

						$conteudo_id = $conteudo_coluna['id'];
						$conteudo_sessao = $conteudo_coluna['conteudo'];
						include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

					}

					?>
				</div>
				<div class="col-md-5 corrige_cedulas_principais">
					<?php

					$conteudo_coluna = $value_layout['coluna3'];
					if($conteudo_coluna['tipo'] == 'topo'){

						$conteudo_id = $conteudo_coluna['id'];
						$conteudo_sessao = $conteudo_coluna['conteudo'];
						include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

					}

					?>
				</div> 

			<?php }


			if($value_layout['formato'] == '5_2_5'){
				?>      

				<div class="col-md-5 corrige_cedulas_principais">
					<?php

					$conteudo_coluna = $value_layout['coluna1'];
					if($conteudo_coluna['tipo'] == 'topo'){

						$conteudo_id = $conteudo_coluna['id'];
						$conteudo_sessao = $conteudo_coluna['conteudo'];
						include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

					}

					?>
				</div>
				<div class="col-md-2 corrige_cedulas_principais">
					<?php

					$conteudo_coluna = $value_layout['coluna2'];
					if($conteudo_coluna['tipo'] == 'topo'){

						$conteudo_id = $conteudo_coluna['id'];
						$conteudo_sessao = $conteudo_coluna['conteudo'];
						include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

					}

					?>
				</div>
				<div class="col-md-5 corrige_cedulas_principais">
					<?php

					$conteudo_coluna = $value_layout['coluna3'];
					if($conteudo_coluna['tipo'] == 'topo'){

						$conteudo_id = $conteudo_coluna['id'];
						$conteudo_sessao = $conteudo_coluna['conteudo'];
						include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

					}

					?>
				</div>

			<?php }

			if($value_layout['formato'] == '5_5_2'){
				?>        

				<div class="col-md-5 corrige_cedulas_principais">
					<?php

					$conteudo_coluna = $value_layout['coluna1'];
					if($conteudo_coluna['tipo'] == 'topo'){

						$conteudo_id = $conteudo_coluna['id'];
						$conteudo_sessao = $conteudo_coluna['conteudo'];
						include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

					}

					?>
				</div>
				<div class="col-md-5 corrige_cedulas_principais">
					<?php

					$conteudo_coluna = $value_layout['coluna2'];
					if($conteudo_coluna['tipo'] == 'topo'){

						$conteudo_id = $conteudo_coluna['id'];
						$conteudo_sessao = $conteudo_coluna['conteudo'];
						include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

					}

					?>
				</div>
				<div class="col-md-2 corrige_cedulas_principais">
					<?php

					$conteudo_coluna = $value_layout['coluna3'];
					if($conteudo_coluna['tipo'] == 'topo'){

						$conteudo_id = $conteudo_coluna['id'];
						$conteudo_sessao = $conteudo_coluna['conteudo'];
						include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

					}

					?>
				</div>

			<?php }

		}

		if($value_layout['colunas'] == 4){

			if($value_layout['formato'] == '3_3_3_3'){
				?>                                

				<div class="col-md-3 corrige_cedulas_principais">
					<?php

					$conteudo_coluna = $value_layout['coluna1'];
					if($conteudo_coluna['tipo'] == 'topo'){

						$conteudo_id = $conteudo_coluna['id'];
						$conteudo_sessao = $conteudo_coluna['conteudo'];
						include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

					}

					?>
				</div>
				<div class="col-md-3 corrige_cedulas_principais">
					<?php

					$conteudo_coluna = $value_layout['coluna2'];
					if($conteudo_coluna['tipo'] == 'topo'){

						$conteudo_id = $conteudo_coluna['id'];
						$conteudo_sessao = $conteudo_coluna['conteudo'];
						include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

					}

					?>
				</div>
				<div class="col-md-3 corrige_cedulas_principais">
					<?php

					$conteudo_coluna = $value_layout['coluna3'];
					if($conteudo_coluna['tipo'] == 'topo'){

						$conteudo_id = $conteudo_coluna['id'];
						$conteudo_sessao = $conteudo_coluna['conteudo'];
						include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

					}

					?>
				</div>
				<div class="col-md-3 corrige_cedulas_principais">
					<?php

					$conteudo_coluna = $value_layout['coluna4'];
					if($conteudo_coluna['tipo'] == 'topo'){

						$conteudo_id = $conteudo_coluna['id'];
						$conteudo_sessao = $conteudo_coluna['conteudo'];
						include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

					}

					?>
				</div>

			<?php }


			if($value_layout['formato'] == '4_2_2_4'){
				?>

				<div class="col-md-4 corrige_cedulas_principais">
					<?php

					$conteudo_coluna = $value_layout['coluna1'];
					if($conteudo_coluna['tipo'] == 'topo'){

						$conteudo_id = $conteudo_coluna['id'];
						$conteudo_sessao = $conteudo_coluna['conteudo'];
						include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

					}

					?>
				</div>
				<div class="col-md-2 corrige_cedulas_principais">
					<?php

					$conteudo_coluna = $value_layout['coluna2'];
					if($conteudo_coluna['tipo'] == 'topo'){

						$conteudo_id = $conteudo_coluna['id'];
						$conteudo_sessao = $conteudo_coluna['conteudo'];
						include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

					}

					?>
				</div>
				<div class="col-md-2 corrige_cedulas_principais">
					<?php

					$conteudo_coluna = $value_layout['coluna3'];
					if($conteudo_coluna['tipo'] == 'topo'){

						$conteudo_id = $conteudo_coluna['id'];
						$conteudo_sessao = $conteudo_coluna['conteudo'];
						include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

					}

					?>
				</div>
				<div class="col-md-4 corrige_cedulas_principais">
					<?php

					$conteudo_coluna = $value_layout['coluna4'];
					if($conteudo_coluna['tipo'] == 'topo'){

						$conteudo_id = $conteudo_coluna['id'];
						$conteudo_sessao = $conteudo_coluna['conteudo'];
						include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

					}

					?>
				</div> 

			<?php }

			if($value_layout['formato'] == '2_4_4_2'){
				?>

				<div class="col-md-2 corrige_cedulas_principais">
					<?php

					$conteudo_coluna = $value_layout['coluna1'];
					if($conteudo_coluna['tipo'] == 'topo'){

						$conteudo_id = $conteudo_coluna['id'];
						$conteudo_sessao = $conteudo_coluna['conteudo'];
						include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

					}

					?>
				</div>
				<div class="col-md-4 corrige_cedulas_principais">
					<?php

					$conteudo_coluna = $value_layout['coluna2'];
					if($conteudo_coluna['tipo'] == 'topo'){

						$conteudo_id = $conteudo_coluna['id'];
						$conteudo_sessao = $conteudo_coluna['conteudo'];
						include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

					}

					?>
				</div>
				<div class="col-md-4 corrige_cedulas_principais">
					<?php

					$conteudo_coluna = $value_layout['coluna3'];
					if($conteudo_coluna['tipo'] == 'topo'){

						$conteudo_id = $conteudo_coluna['id'];
						$conteudo_sessao = $conteudo_coluna['conteudo'];
						include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

					}

					?>
				</div>
				<div class="col-md-2 corrige_cedulas_principais">
					<?php

					$conteudo_coluna = $value_layout['coluna4'];
					if($conteudo_coluna['tipo'] == 'topo'){

						$conteudo_id = $conteudo_coluna['id'];
						$conteudo_sessao = $conteudo_coluna['conteudo'];
						include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

					}

					?>
				</div> 

				<?php
			}

		}

		if($value_layout['colunas'] == 6){
			?>

			<div class="col-md-2 corrige_cedulas_principais">
				<?php

				$conteudo_coluna = $value_layout['coluna1'];
				if($conteudo_coluna['tipo'] == 'topo'){

					$conteudo_id = $conteudo_coluna['id'];
					$conteudo_sessao = $conteudo_coluna['conteudo'];
					include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

				}

				?>
			</div>
			<div class="col-md-2 corrige_cedulas_principais">
				<?php

				$conteudo_coluna = $value_layout['coluna2'];
				if($conteudo_coluna['tipo'] == 'topo'){

					$conteudo_id = $conteudo_coluna['id'];
					$conteudo_sessao = $conteudo_coluna['conteudo'];
					include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

				}

				?>
			</div>
			<div class="col-md-2 corrige_cedulas_principais">
				<?php

				$conteudo_coluna = $value_layout['coluna3'];
				if($conteudo_coluna['tipo'] == 'topo'){

					$conteudo_id = $conteudo_coluna['id'];
					$conteudo_sessao = $conteudo_coluna['conteudo'];
					include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

				}

				?>
			</div>
			<div class="col-md-2 corrige_cedulas_principais">
				<?php

				$conteudo_coluna = $value_layout['coluna4'];
				if($conteudo_coluna['tipo'] == 'topo'){

					$conteudo_id = $conteudo_coluna['id'];
					$conteudo_sessao = $conteudo_coluna['conteudo'];
					include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

				}

				?>
			</div>
			<div class="col-md-2 corrige_cedulas_principais">
				<?php

				$conteudo_coluna = $value_layout['coluna5'];
				if($conteudo_coluna['tipo'] == 'topo'){

					$conteudo_id = $conteudo_coluna['id'];
					$conteudo_sessao = $conteudo_coluna['conteudo'];
					include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

				}

				?>
			</div>              
			<div class="col-md-2 corrige_cedulas_principais">
				<?php

				$conteudo_coluna = $value_layout['coluna6'];
				if($conteudo_coluna['tipo'] == 'topo'){

					$conteudo_id = $conteudo_coluna['id'];
					$conteudo_sessao = $conteudo_coluna['conteudo'];
					include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

				}

				?>
			</div>

		<?php }


		echo "
		</div>
		";

		if($value_layout['full'] != 1){
			echo "</div>";
		}

	}
	
	// termina topo
	?>

	<style type="text/css">


		.imoveis_lista_normal2_<?=$conteudo_id?>{
			position: relative;
			width: 96%;
			height: auto;
			margin-left:2%;
			margin-right:2%; 
			padding-bottom:50px;
			padding-top: 70px;
			font-family: <?=$data_detalhes->font_family?>;
		}
		.imoveis_destaques_<?=$conteudo_id?>{
			padding-bottom: 100px;
		}
		.imoveis_lista_normal2_<?=$conteudo_id?> .imovel_quadro{
			position: relative;
			border-color:<?=$cores_imo[175]?> !important;
			background-color: <?=$cores_imo[174]?> !important;
			color: <?=$cores_imo[176]?> !important;
			border-radius:16px;
			height: 340px;
			margin-bottom:30px;
			font-family: <?=$data_detalhes->font_family?>;
		}

		.imoveis_lista_normal2_<?=$conteudo_id?> .imovel_imagem_div{
			height: 220px;
			margin-bottom:10px;
			font-family: <?=$data_detalhes->font_family?>;
		}
		.imoveis_lista_normal2_<?=$conteudo_id?> .imovel_imagem{
			height: 210px;
		}

		.imoveis_lista_normal2_<?=$conteudo_id?> .imovel_titulo{
			color: <?=$cores_imo[177]?> !important;
			font-size: 15px;
			font-weight: bold;
			display: block;
			width: 100%;
			float: none;
			padding-bottom: 0px;
			padding-top:0px;
			font-family: <?=$data_detalhes->font_family?>;
		}

		.imoveis_lista_normal2_<?=$conteudo_id?> .imovel_endereco{
			display: block;
			width: 100%;
			float: none;
			font-size: 12px;
			padding-top: 5px;
			font-family: <?=$data_detalhes->font_family?>;
		}


		.imoveis_lista_normal2_<?=$conteudo_id?> .imoveis_lista_itens{
			background-color:transparent !important;
			color: <?=$cores_imo[172]?> !important;
			border:none;
			padding-left:2px;
			padding-right:2px;
			font-size:13px;
			text-align: center !important;
			display: inline-block;
			font-family: <?=$data_detalhes->font_family?>;
		}

		.imoveis_lista_normal2_<?=$conteudo_id?> .imoveis_lista_itens i{ 
			color: <?=$cores_imo[172]?> !important; 
		}
		.imoveis_lista_normal2_<?=$conteudo_id?> .imoveis_lista_itens img{ 
			color: #0091F8 !important; 
			padding:0px;
			width: 23px;
			display: inline-block;
			fill:#0091F8 !important;
			font-family: <?=$data_detalhes->font_family?>;
		}
		.imoveis_lista_normal2_<?=$conteudo_id?> .imoveis_lista_itens_tit{ 
			color: #0091F8 !important;
			font-size:10px;
			display: block;
			text-align: center !important;
			margin-top: 2px;
			font-family: <?=$data_detalhes->font_family?>;
		}


		.imoveis_lista_normal2_<?=$conteudo_id?> .imovel_categoria {
			background-color: <?=$cores_imo[178]?> !important;
			color: <?=$cores_imo[179]?> !important;        	 
			position: absolute;
			top: 15px;
			left: 15px;
			font-size: 14px;
			font-weight: 500;
			text-transform: uppercase;
			border-radius:18px;
			padding-left:18px;
			padding-right:15px;
			padding-top:6px;
			padding-bottom:6px;
			z-index: 999;
			font-family: <?=$data_detalhes->font_family?>;
		}
		.imoveis_lista_normal2_<?=$conteudo_id?> .imovel_valor2 {
			background-color: <?=$cores_imo[180]?> !important;
			color: <?=$cores_imo[181]?> !important;   			 
			position: absolute;
			top: 165px;
			right: 15px;
			font-size: 14px;
			font-weight: 500;
			text-transform: uppercase;
			border-radius:18px;
			padding-left:18px;
			padding-right:15px;
			padding-top:6px;
			padding-bottom:6px;
			z-index: 999;
			font-family: <?=$data_detalhes->font_family?>;
		} 

		.imoveis_lista_normal2_<?=$conteudo_id?> .imovel_bt_det { 
			color: #FFF !important;				 
			position: absolute;
			top:0px;
			right:0px;
			font-size:30px;
			font-weight: 500;
			text-transform: uppercase;
			border-radius:0px 16px 0px 26px;
			padding-left:15px;
			padding-right:10px;
			padding-top:4px;
			padding-bottom:8px;
			line-height:22px;
			z-index: 999;
			cursor: pointer;
			background-color:#076EB9;
			background-image: linear-gradient(to bottom, transparent, #0091F8);
			font-family: <?=$data_detalhes->font_family?>;
		} 

		.imoveis_lista_normal2_<?=$conteudo_id?> .item { 

		}

		.imoveis_lista_normal2_<?=$conteudo_id?> .owl-prev{
			top:76% !important;
			left:15px !important;
		}
		.imoveis_lista_normal2_<?=$conteudo_id?> .owl-next{
			top:76% !important;
			right:15px !important;
		}

		.carrosel_menu{
			display: inline-block;
			margin-left: 10px;
			margin-right: 10px;
			margin-bottom: 20px;
			text-align: center;
			font-size: 15px;
			font-weight: 500;
			cursor: pointer;
			font-family: <?=$data_detalhes->font_family?>;
		}

		@media (max-width: 1200px){		

			.imoveis_lista_normal2_<?=$conteudo_id?> .imovel_titulo{
				padding-top:3px;
				font-size: 14px;
			}
			.imoveis_lista_normal2_895 .imoveis_lista_itens img{
				width: 14px;
			}
			.imoveis_lista_normal2_895 .imoveis_lista_itens{
				font-size: 11px;
			}
			.imoveis_lista_normal2_895 .imoveis_lista_itens_tit{
				font-size: 9px;
			}
			.imoveis_lista_normal2_895 .imovel_endereco{
				font-size: 10px;
			}

			.imoveis_lista_normal2_895 .imovel_quadro{
				height: 380px;
			}
		}

		@media (max-width: 990px){		

			.imoveis_lista_normal2_<?=$conteudo_id?> .imovel_titulo{
				padding-top:3px;
				font-size: 12px;
			}
			.imoveis_lista_normal2_895 .imoveis_lista_itens img{
				width: 12px;
			}
			.imoveis_lista_normal2_895 .imoveis_lista_itens{
				font-size: 10px;
			}
			.imoveis_lista_normal2_895 .imoveis_lista_itens_tit{
				font-size: 8px;
			}
		}
		@media (max-width: 770px){			 

			.imoveis_lista_normal2_<?=$conteudo_id?> .imovel_titulo{
				padding-top:3px;
				font-size: 15px;
				font-weight: bold;
			}

			.imoveis_lista_normal2_<?=$conteudo_id?> .imoveis_lista_itens{
				padding-left:1px !important;
				padding-right:1px !important;
				font-size:11px !important; 
			} 
			.imoveis_lista_normal2_<?=$conteudo_id?> .imoveis_lista_itens img{  
				width: 22px !important; 
			}
			.imoveis_lista_normal2_<?=$conteudo_id?> .imoveis_lista_itens_tit{
				font-size:10px !important; 
				margin-top: 2px !important;
			}
			.imoveis_lista_normal2_<?=$conteudo_id?> .imovel_endereco{ 
				font-size: 11px; 
			}

			.carrosel_menu{
				font-size: 14px;
				margin-left:0px;
				margin-right:0px;
				display: block;
				margin-top:0px;
				padding-top: 0px;
				padding-bottom: 5px;
				margin-bottom: 0px;
			}

		}



	</style>

	<section style="padding-top:50px; padding-bottom:50px; background-color: #efefef;" >
		<div class="imoveis_lista_normal2_<?=$conteudo_id?>" >
			<div class="container" >

				<?php

				$itens_listados = 1;
				$n_row = 1;
				$total_listados = 0;

				foreach ($lista_favoritos as $key => $value) {


					if($n_row == 1){ echo "<div class='row' >"; }

					echo "<div class='col-xs-12 col-sm-4 col-md-4' >";

					$endereco_imo = DOMINIO.$controller.'/imoveis_detalhes/id/'.$value['codigo'];

					if($value['valor'] == '0,00'){
								// $valor_final_imo = "<div class='imovel_valor' style='font-weight:400;'>Consulte!</div>";
						$valor_final_imo = "";
					} else {
						$valor_final_imo = "<div class='imovel_valor2' >R$ ".$value['valor']."</div>";
					}

					$categoria = $value['categoria_titulo'];

					echo " 
					<div class='imovel_quadro' >
					<div class='imovel_imagem_div'>
					<div class='imovel_categoria'>".$categoria."</div>
					<div class='imovel_bt_det'  onClick=\"window.location='".$endereco_imo."';\" >+</div>
					".$valor_final_imo."
					<div class='imovel_imagem ' style='background-image:url(".$value['imagem'].");' >
					<a href='".$endereco_imo."'><img src='".LAYOUT."img/transp.png' style='width:100%; height:100%;'></a>
					</div>
					</div>

					<div class='row' >
					<div class='col-xs-5 col-sm-5 col-md-5' >

					<div class='imovel_titulo' onClick=\"window.location='".$endereco_imo."';\" >".$value['titulo']."</div>

					<div class='imovel_endereco' >
					<div>".$value['bairro']."</div>
					<div>".$value['cidade']." - ".$value['uf']."</div>
					</div>

					</div>
					<div class='col-xs-7 col-sm-7 col-md-7' >	

					<div style='margin-right:15px; text-align:right;' >
					";

					if($value['area_total']){
						echo "
						<span class='imoveis_lista_itens'>
						<img src='".LAYOUT."img/icos_imo/ico_areat.svg'  >
						<span class='imoveis_lista_itens_tit'>Área total</span>
						".$value['area_total']."
						</span>
						";
					}

					if($value['quartos']){
						echo "
						<span class='imoveis_lista_itens'>
						<img src='".LAYOUT."img/icos_imo/ico_quart.svg' >
						<span class='imoveis_lista_itens_tit'>Dormit.</span>
						".$value['quartos']."
						</span>
						";
					}

					if($value['garagem']){
						echo "
						<span class='imoveis_lista_itens'>
						<img src='".LAYOUT."img/icos_imo/ico_garagem.svg' >
						<span class='imoveis_lista_itens_tit'>Vagas</span>
						".$value['garagem']."
						</span>
						";
					}

					echo "
					</div>
					</div>
					</div>
					</div>
					</div>
					";

					$total_listados++;

					if($n_row == 3){ echo "</div>"; $n_row = 1; } else { $n_row++; }

					$itens_listados++;
				}
				if($n_row != 1){ echo "</div>"; }



				if($total_listados == 0){

					?>

					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12" >
							<div style="text-align:center; padding-top:60px; padding-bottom:60px; font-size: 15px; color:<?=$cores[124]?>; " >
								Nenhum resultado encontrado!
							</div>
						</div>
					</div>

					<?php
				}

				?>

			</div>

		</div>

	</section>	


	
	<?php

	// rodape
	foreach ($layout_lista as $key_layout => $value_layout) {
		
		if($value_layout['full'] != 1){
			echo "<div class='container' >";
		}
		echo "<div class='row' style='margin-right:0px; margin-left:0px;' >";

		if($value_layout['colunas'] == 1){
			?>

			<div class="col-md-12 corrige_cedulas_principais">
				<?php

				$conteudo_coluna = $value_layout['coluna1'];
				if($conteudo_coluna['tipo'] == 'rodape'){

					$conteudo_id = $conteudo_coluna['id'];
					$conteudo_sessao = $conteudo_coluna['conteudo'];
					include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

				}

				?>
			</div>

		<?php }

		if($value_layout['colunas'] == 2){

			if($value_layout['formato'] == '6_6'){
				?>      

				<div class="col-md-6 corrige_cedulas_principais">
					<?php

					$conteudo_coluna = $value_layout['coluna1'];
					if($conteudo_coluna['tipo'] == 'rodape'){

						$conteudo_id = $conteudo_coluna['id'];
						$conteudo_sessao = $conteudo_coluna['conteudo'];
						include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

					}

					?>
				</div>
				<div class="col-md-6 corrige_cedulas_principais">
					<?php

					$conteudo_coluna = $value_layout['coluna2'];
					if($conteudo_coluna['tipo'] == 'rodape'){

						$conteudo_id = $conteudo_coluna['id'];
						$conteudo_sessao = $conteudo_coluna['conteudo'];
						include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

					}

					?>          
				</div>

			<?php }

			if($value_layout['formato'] == '4_8'){
				?>        

				<div class="col-md-4 corrige_cedulas_principais">
					<?php

					$conteudo_coluna = $value_layout['coluna1'];
					if($conteudo_coluna['tipo'] == 'rodape'){

						$conteudo_id = $conteudo_coluna['id'];
						$conteudo_sessao = $conteudo_coluna['conteudo'];
						include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

					}

					?>
				</div>
				<div class="col-md-8 corrige_cedulas_principais">
					<?php

					$conteudo_coluna = $value_layout['coluna2'];
					if($conteudo_coluna['tipo'] == 'rodape'){

						$conteudo_id = $conteudo_coluna['id'];
						$conteudo_sessao = $conteudo_coluna['conteudo'];
						include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

					}

					?>
				</div>

			<?php }

			if($value_layout['formato'] == '8_4'){
				?>
				<div class="col-md-8 corrige_cedulas_principais">
					<?php

					$conteudo_coluna = $value_layout['coluna1'];
					if($conteudo_coluna['tipo'] == 'rodape'){

						$conteudo_id = $conteudo_coluna['id'];
						$conteudo_sessao = $conteudo_coluna['conteudo'];
						include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

					}

					?>
				</div>
				<div class="col-md-4 corrige_cedulas_principais">
					<?php

					$conteudo_coluna = $value_layout['coluna2'];
					if($conteudo_coluna['tipo'] == 'rodape'){

						$conteudo_id = $conteudo_coluna['id'];
						$conteudo_sessao = $conteudo_coluna['conteudo'];
						include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

					}

					?>
				</div>        
			<?php }

		}

		if($value_layout['colunas'] == 3){

			if($value_layout['formato'] == '4_4_4'){
				?>

				<div class="col-md-4 corrige_cedulas_principais">
					<?php

					$conteudo_coluna = $value_layout['coluna1'];
					if($conteudo_coluna['tipo'] == 'rodape'){

						$conteudo_id = $conteudo_coluna['id'];
						$conteudo_sessao = $conteudo_coluna['conteudo'];
						include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

					}

					?>
				</div>
				<div class="col-md-4 corrige_cedulas_principais">
					<?php

					$conteudo_coluna = $value_layout['coluna2'];
					if($conteudo_coluna['tipo'] == 'rodape'){

						$conteudo_id = $conteudo_coluna['id'];
						$conteudo_sessao = $conteudo_coluna['conteudo'];
						include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

					}

					?>
				</div>
				<div class="col-md-4 corrige_cedulas_principais">
					<?php

					$conteudo_coluna = $value_layout['coluna3'];
					if($conteudo_coluna['tipo'] == 'rodape'){

						$conteudo_id = $conteudo_coluna['id'];
						$conteudo_sessao = $conteudo_coluna['conteudo'];
						include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

					}

					?>
				</div> 

			<?php }


			if($value_layout['formato'] == '2_5_5'){
				?>      

				<div class="col-md-2 corrige_cedulas_principais">
					<?php

					$conteudo_coluna = $value_layout['coluna1'];
					if($conteudo_coluna['tipo'] == 'rodape'){

						$conteudo_id = $conteudo_coluna['id'];
						$conteudo_sessao = $conteudo_coluna['conteudo'];
						include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

					}

					?>
				</div>
				<div class="col-md-5 corrige_cedulas_principais">
					<?php

					$conteudo_coluna = $value_layout['coluna2'];
					if($conteudo_coluna['tipo'] == 'rodape'){

						$conteudo_id = $conteudo_coluna['id'];
						$conteudo_sessao = $conteudo_coluna['conteudo'];
						include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

					}

					?>
				</div>
				<div class="col-md-5 corrige_cedulas_principais">
					<?php

					$conteudo_coluna = $value_layout['coluna3'];
					if($conteudo_coluna['tipo'] == 'rodape'){

						$conteudo_id = $conteudo_coluna['id'];
						$conteudo_sessao = $conteudo_coluna['conteudo'];
						include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

					}

					?>
				</div> 

			<?php }


			if($value_layout['formato'] == '5_2_5'){
				?>      

				<div class="col-md-5 corrige_cedulas_principais">
					<?php

					$conteudo_coluna = $value_layout['coluna1'];
					if($conteudo_coluna['tipo'] == 'rodape'){

						$conteudo_id = $conteudo_coluna['id'];
						$conteudo_sessao = $conteudo_coluna['conteudo'];
						include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

					}

					?>
				</div>
				<div class="col-md-2 corrige_cedulas_principais">
					<?php

					$conteudo_coluna = $value_layout['coluna2'];
					if($conteudo_coluna['tipo'] == 'rodape'){

						$conteudo_id = $conteudo_coluna['id'];
						$conteudo_sessao = $conteudo_coluna['conteudo'];
						include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

					}

					?>
				</div>
				<div class="col-md-5 corrige_cedulas_principais">
					<?php

					$conteudo_coluna = $value_layout['coluna3'];
					if($conteudo_coluna['tipo'] == 'rodape'){

						$conteudo_id = $conteudo_coluna['id'];
						$conteudo_sessao = $conteudo_coluna['conteudo'];
						include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

					}

					?>
				</div>

			<?php }

			if($value_layout['formato'] == '5_5_2'){
				?>        

				<div class="col-md-5 corrige_cedulas_principais">
					<?php

					$conteudo_coluna = $value_layout['coluna1'];
					if($conteudo_coluna['tipo'] == 'rodape'){

						$conteudo_id = $conteudo_coluna['id'];
						$conteudo_sessao = $conteudo_coluna['conteudo'];
						include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

					}

					?>
				</div>
				<div class="col-md-5 corrige_cedulas_principais">
					<?php

					$conteudo_coluna = $value_layout['coluna2'];
					if($conteudo_coluna['tipo'] == 'rodape'){

						$conteudo_id = $conteudo_coluna['id'];
						$conteudo_sessao = $conteudo_coluna['conteudo'];
						include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

					}

					?>
				</div>
				<div class="col-md-2 corrige_cedulas_principais">
					<?php

					$conteudo_coluna = $value_layout['coluna3'];
					if($conteudo_coluna['tipo'] == 'rodape'){

						$conteudo_id = $conteudo_coluna['id'];
						$conteudo_sessao = $conteudo_coluna['conteudo'];
						include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

					}

					?>
				</div>

			<?php }

		}

		if($value_layout['colunas'] == 4){

			if($value_layout['formato'] == '3_3_3_3'){
				?>                                

				<div class="col-md-3 corrige_cedulas_principais">
					<?php

					$conteudo_coluna = $value_layout['coluna1'];
					if($conteudo_coluna['tipo'] == 'rodape'){

						$conteudo_id = $conteudo_coluna['id'];
						$conteudo_sessao = $conteudo_coluna['conteudo'];
						include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

					}

					?>
				</div>
				<div class="col-md-3 corrige_cedulas_principais">
					<?php

					$conteudo_coluna = $value_layout['coluna2'];
					if($conteudo_coluna['tipo'] == 'rodape'){

						$conteudo_id = $conteudo_coluna['id'];
						$conteudo_sessao = $conteudo_coluna['conteudo'];
						include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

					}

					?>
				</div>
				<div class="col-md-3 corrige_cedulas_principais">
					<?php

					$conteudo_coluna = $value_layout['coluna3'];
					if($conteudo_coluna['tipo'] == 'rodape'){

						$conteudo_id = $conteudo_coluna['id'];
						$conteudo_sessao = $conteudo_coluna['conteudo'];
						include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

					}

					?>
				</div>
				<div class="col-md-3 corrige_cedulas_principais">
					<?php

					$conteudo_coluna = $value_layout['coluna4'];
					if($conteudo_coluna['tipo'] == 'rodape'){

						$conteudo_id = $conteudo_coluna['id'];
						$conteudo_sessao = $conteudo_coluna['conteudo'];
						include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

					}

					?>
				</div>

			<?php }


			if($value_layout['formato'] == '4_2_2_4'){
				?>

				<div class="col-md-4 corrige_cedulas_principais">
					<?php

					$conteudo_coluna = $value_layout['coluna1'];
					if($conteudo_coluna['tipo'] == 'rodape'){

						$conteudo_id = $conteudo_coluna['id'];
						$conteudo_sessao = $conteudo_coluna['conteudo'];
						include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

					}

					?>
				</div>
				<div class="col-md-2 corrige_cedulas_principais">
					<?php

					$conteudo_coluna = $value_layout['coluna2'];
					if($conteudo_coluna['tipo'] == 'rodape'){

						$conteudo_id = $conteudo_coluna['id'];
						$conteudo_sessao = $conteudo_coluna['conteudo'];
						include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

					}

					?>
				</div>
				<div class="col-md-2 corrige_cedulas_principais">
					<?php

					$conteudo_coluna = $value_layout['coluna3'];
					if($conteudo_coluna['tipo'] == 'rodape'){

						$conteudo_id = $conteudo_coluna['id'];
						$conteudo_sessao = $conteudo_coluna['conteudo'];
						include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

					}

					?>
				</div>
				<div class="col-md-4 corrige_cedulas_principais">
					<?php

					$conteudo_coluna = $value_layout['coluna4'];
					if($conteudo_coluna['tipo'] == 'rodape'){

						$conteudo_id = $conteudo_coluna['id'];
						$conteudo_sessao = $conteudo_coluna['conteudo'];
						include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

					}

					?>
				</div> 

			<?php }

			if($value_layout['formato'] == '2_4_4_2'){
				?>

				<div class="col-md-2 corrige_cedulas_principais">
					<?php

					$conteudo_coluna = $value_layout['coluna1'];
					if($conteudo_coluna['tipo'] == 'rodape'){

						$conteudo_id = $conteudo_coluna['id'];
						$conteudo_sessao = $conteudo_coluna['conteudo'];
						include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

					}

					?>
				</div>
				<div class="col-md-4 corrige_cedulas_principais">
					<?php

					$conteudo_coluna = $value_layout['coluna2'];
					if($conteudo_coluna['tipo'] == 'rodape'){

						$conteudo_id = $conteudo_coluna['id'];
						$conteudo_sessao = $conteudo_coluna['conteudo'];
						include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

					}

					?>
				</div>
				<div class="col-md-4 corrige_cedulas_principais">
					<?php

					$conteudo_coluna = $value_layout['coluna3'];
					if($conteudo_coluna['tipo'] == 'rodape'){

						$conteudo_id = $conteudo_coluna['id'];
						$conteudo_sessao = $conteudo_coluna['conteudo'];
						include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

					}

					?>
				</div>
				<div class="col-md-2 corrige_cedulas_principais">
					<?php

					$conteudo_coluna = $value_layout['coluna4'];
					if($conteudo_coluna['tipo'] == 'rodape'){

						$conteudo_id = $conteudo_coluna['id'];
						$conteudo_sessao = $conteudo_coluna['conteudo'];
						include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

					}

					?>
				</div> 

				<?php
			}

		}

		if($value_layout['colunas'] == 6){
			?>

			<div class="col-md-2 corrige_cedulas_principais">
				<?php

				$conteudo_coluna = $value_layout['coluna1'];
				if($conteudo_coluna['tipo'] == 'rodape'){

					$conteudo_id = $conteudo_coluna['id'];
					$conteudo_sessao = $conteudo_coluna['conteudo'];
					include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

				}

				?>
			</div>
			<div class="col-md-2 corrige_cedulas_principais">
				<?php

				$conteudo_coluna = $value_layout['coluna2'];
				if($conteudo_coluna['tipo'] == 'rodape'){

					$conteudo_id = $conteudo_coluna['id'];
					$conteudo_sessao = $conteudo_coluna['conteudo'];
					include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

				}

				?>
			</div>
			<div class="col-md-2 corrige_cedulas_principais">
				<?php

				$conteudo_coluna = $value_layout['coluna3'];
				if($conteudo_coluna['tipo'] == 'rodape'){

					$conteudo_id = $conteudo_coluna['id'];
					$conteudo_sessao = $conteudo_coluna['conteudo'];
					include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

				}

				?>
			</div>
			<div class="col-md-2 corrige_cedulas_principais">
				<?php

				$conteudo_coluna = $value_layout['coluna4'];
				if($conteudo_coluna['tipo'] == 'rodape'){

					$conteudo_id = $conteudo_coluna['id'];
					$conteudo_sessao = $conteudo_coluna['conteudo'];
					include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

				}

				?>
			</div>
			<div class="col-md-2 corrige_cedulas_principais">
				<?php

				$conteudo_coluna = $value_layout['coluna5'];
				if($conteudo_coluna['tipo'] == 'rodape'){

					$conteudo_id = $conteudo_coluna['id'];
					$conteudo_sessao = $conteudo_coluna['conteudo'];
					include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

				}

				?>
			</div>              
			<div class="col-md-2 corrige_cedulas_principais">
				<?php

				$conteudo_coluna = $value_layout['coluna6'];
				if($conteudo_coluna['tipo'] == 'rodape'){

					$conteudo_id = $conteudo_coluna['id'];
					$conteudo_sessao = $conteudo_coluna['conteudo'];
					include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

				}

				?>
			</div>

		<?php }


		echo "
		</div>
		";

		if($value_layout['full'] != 1){
			echo "</div>";
		}

	}

	// termina rodape
	?>

	<script type="text/javascript" src="<?=LAYOUT?>js/jquery-2.2.4.min.js" ></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script type="text/javascript" src="<?=LAYOUT?>js/jquery-ui.min.js"></script>  
	<script type="text/javascript" src="<?=LAYOUT?>api/OwlCarousel2-2.3.4/dist/owl.carousel.min.js"></script>
	<script type="text/javascript" >function dominio(){ return '<?=DOMINIO?>'; }</script>
	<script type="text/javascript" src="<?=LAYOUT?>js/funcoes.js"></script>
	<script src='https://www.google.com/recaptcha/api.js'></script>
	<script type="text/javascript" src="<?=LAYOUT?>js/animation.js"></script>
	<script type="text/javascript" src="<?=LAYOUT?>js/responsiveslides.min.js"></script>
	<script src="<?=LAYOUT?>api/photobox-master/photobox/jquery.photobox.js"></script>

	<?php
	
	foreach ($layout_lista as $key_layout => $value_blocos) {
		$n_col = 1;
		while ($n_col <= $value_blocos['colunas']) {

			$value_layout = $value_blocos['coluna'.$n_col];
			
			if(isset($value_layout['tipo'])){
				
				if($value_layout['tipo'] == 'topo'){
					
					$conteudo_id = $value_layout['id'];
					$conteudo_sessao = $value_layout['conteudo'];
					$id_script = '#slider_topo_'.$conteudo_id;
					
					?>
					<script>

						<?php if($conteudo_sessao['data_topo']->modelo  == 11){ ?>

							$("<?=$id_script?>").responsiveSlides({
								auto: true,
								pager: false,
								nav: false,
								speed: 500,
								pause: true,
								pauseControls: true,
								namespace: "callbacks",
								before: function () {
									$('.events').append("<li>before event fired.</li>");
								},
								after: function () {
									$('.events').append("<li>after event fired.</li>");
								}
							});

						<?php } ?>
						
						$(document).ready(function(){
							$(window).on('scroll', function() {
								var posicao_topo = $(window).scrollTop();

								<?php if($conteudo_sessao['data_topo']->modelo  == 6){ ?>

									if(posicao_topo > 100){          
										$(".topo6").addClass("topo6_decendo");
									}
									if(posicao_topo < 100){          
										$(".topo6").removeClass("topo6_decendo");
									}

								<?php } ?>

								<?php if($conteudo_sessao['data_topo']->modelo  == 7){ ?>

									if(posicao_topo > 100){          
										$(".topo7").addClass("topo7_decendo");
									}
									if(posicao_topo < 100){          
										$(".topo7").removeClass("topo7_decendo");
									}

								<?php } ?>

								<?php if($conteudo_sessao['data_topo']->modelo  == 8){ ?>

									if(posicao_topo > 100){          
										$(".topo8").addClass("topo8_decendo");
									}
									if(posicao_topo < 100){          
										$(".topo8").removeClass("topo8_decendo");
									}

								<?php } ?>

								<?php if($conteudo_sessao['data_topo']->modelo  == 9){ ?>

									if(posicao_topo > 100){          
										$(".topo9").addClass("topo9_decendo");
									}
									if(posicao_topo < 100){          
										$(".topo9").removeClass("topo9_decendo");
									}

								<?php } ?>

								<?php if($conteudo_sessao['data_topo']->modelo  == 10){ ?>

									if(posicao_topo > 100){          
										$(".topo10").addClass("topo10_decendo");
									}
									if(posicao_topo < 100){          
										$(".topo10").removeClass("topo10_decendo");
									}

								<?php } ?>
								
								<?php if($conteudo_sessao['data_topo']->modelo  == 13){ ?>

									if(posicao_topo > 100){          
										$(".topo13").addClass("topo13_decendo");
									}
									if(posicao_topo < 100){          
										$(".topo13").removeClass("topo13_decendo");
									}
									
								<?php } ?>
								
							});
						});

					</script>
					<?php
				}
			}
			$n_col++;
		}

    // termina lista
	}

	?>

	<?php if($data_pagina->bloqueio == 1){ ?>

		<script type="text/javascript">

			$(document).ready(function(){
				$(document).bind("contextmenu",function(e){
					return false;
				});

				$('body').bind('contextmenu', function(event) {
					event.preventDefault();
				});

				$('body').bind('selectstart dragstart', function(event) {
					event.preventDefault();
					return false;
				});

				$("body").bind("cut copy paste", function() {
					return false;
				});

				$('body').focus(function() {
					$(this).blur();
				});

			});
		</script>

	<?php } ?> 



</body>
</html>