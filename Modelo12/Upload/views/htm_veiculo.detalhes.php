<?php if(!isset($_base['libera_views'])){ header("HTTP/1.0 404 Not Found"); exit; } ?>
<!DOCTYPE html>
<html>
<head>

	<meta http-equiv="Content-Type" charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<title><?=$data->titulo?> - <?=$data_pagina->meta_titulo?></title>
	<link rel="shortcut icon" href="<?=$_base['favicon'];?>" />

	<meta property="og:locale" content="pt_BR" />
	<meta property="og:type" content="article" />
	<meta property="og:title" content="<?=$data->titulo?> - <?=$data_pagina->meta_titulo?>" />
	<meta property="og:description" content="<?=strip_tags($data->descricao)?>" />
	<meta property="og:url" content="<?=$endereco_postagem_sem_ssl?>" />
	<meta property="og:site_name" content="<?=$data_pagina->meta_titulo?>" />

	<meta property="article:tag" content="destaque" />
	<meta property="article:published_time" content="<?=date('c');?>" />
	<meta property="article:modified_time" content="<?=date('c');?>" />
	<meta property="og:updated_time" content="<?=date('c');?>" />  
	<meta property="og:image" content="<?=$imagem_principal_sem_ssl?>" />
	<meta property="og:image:secure_url" content="<?=$imagem_principal_sem_ssl?>" />
	<meta property="og:image:width" content="<?=$imagem_principal_largura?>" />
	<meta property="og:image:height" content="<?=$imagem_principal_altura?>" />
	<meta name="twitter:card" content="summary_large_image" />
	<meta name="twitter:description" content="<?=strip_tags($data->descricao)?>" />
	<meta name="twitter:title" content="<?=$data->titulo?> - <?=$data_pagina->meta_titulo?>" />
	<meta name="twitter:image" content="<?=$imagem_principal_sem_ssl?>" />
	
	<link href="<?=LAYOUT?>api/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="<?=LAYOUT?>api/fontawesome/css/all.css" rel="stylesheet" type="text/css" />
	<link href="<?=LAYOUT?>css/animate.css" rel="stylesheet" type="text/css" />
	<link href="<?=LAYOUT?>api/hover-master/css/hover-min.css" rel="stylesheet" type="text/css" />
	<link href="<?=LAYOUT?>css/main.css" rel="stylesheet" type="text/css" />
	<link href="<?=LAYOUT?>css/responsiveslides.css" rel="stylesheet" type="text/css" />
	<link href="<?=LAYOUT?>api/bxslider/jquery.bxslider.css" rel="stylesheet" type="text/css" />
	<link href="<?=LAYOUT?>api/OwlCarousel2-2.3.4/dist/assets/owl.carousel.css" rel="stylesheet" type="text/css" />
	<link href="<?=LAYOUT?>api/photobox-master/photobox/photobox.css" rel="stylesheet" type="text/css"> 


	<?php include_once('htm_css.php'); ?>
	<?php include_once('htm_css_resp.php'); ?>

	<?php

	// echo "<pre>"; print_r($cores_detalhes); echo "</pre>";

	?>

	<style type="text/css">

		body {
			background-color:<?=$cores_gara[271]?>;
		}    

		.garagem_imagens_div_min{
			margin-left: 0px;
			margin-right: 0px;
		}
		.garagem_detalhes_imagens{
			border-radius: 15px;
		}
		.garagem_detalhes_imagens_min{
			border-radius:4px;
		}

		.garagem_detalhes_div_titulo{
			font-family:'Kastelov Intelo Bold';
			width: 100%; 
			padding: 20px;
			border-radius: 15px; 
		}

		.garagem_detalhes_ref{
			font-family: <?=$data_detalhes->font_family?>;
			font-size: 13px;
			text-align: left;
			padding: 0px;
			color:<?=$cores_gara[275]?>;
		}
		.garagem_detalhes_titulo{
			font-family:'Kastelov Intelo Bold'; 
			color:<?=$cores_gara[275]?>;
			font-size: 20px;
		}

		.garagem_detalhes_cat_val{
			font-family: <?=$data_detalhes->font_family?>;
			text-align: right;
			width: 100%;
		}

		.garagem_detalhes_valor{
			font-family: <?=$data_detalhes->font_family?>;
			display:inline-block;
			border-radius:15px;
			padding-left:20px;
			padding-right:20px;
			padding-top: 5px;
			padding-bottom: 5px;
			font-size: 14px;
			font-weight: 500;
			margin-left:5px;
			background-color:<?=$cores_gara[277]?>;
			color:<?=$cores_gara[278]?>;
		}

		.garagem_detalhes_descricao_titulo{
			font-family:'Kastelov Intelo Bold'; 
			font-size: 20px;
			margin-top: 20px;
			text-align: left;
			padding-left:30px;
			padding-right:30px;
			color:<?=$cores_gara[275]?>;
		}
		.garagem_detalhes_descricao{
			font-family: <?=$data_detalhes->font_family?>;
			padding: 0px;
			margin-top: 20px;
			font-size: 15px;
			padding-left:30px;
			padding-right:30px;
		}

		.garagem_detalhes_itens_div{
			font-family: <?=$data_detalhes->font_family?>;
			padding-left: 13px;
			padding-right: 13px;
		}

		.garagem_detalhes_itens_div .col-xs-4 {
			padding-left:3px !important;
			padding-right:3px !important;
		}

		.garagem_detalhes_itens{
			font-family: <?=$data_detalhes->font_family?>;
			padding: 15px;
			border-radius:8px; 
			display: inline-block;
			text-align: center;
			width: 100%;
			margin-bottom:0px;
			font-weight: bold;
			font-size: 16px; 
			color: <?=$cores_gara[279]?>;
		}
		.garagem_detalhes_itens img{
			width:35%;
		}

		.garagem_detalhes_itens span{
			font-family: <?=$data_detalhes->font_family?>;
			display: block;
			font-size: 14px;
			font-weight: 500; 
			color:<?=$cores_gara[279]?>;
		}
		.garagem_detalhes_botoes_div{
			padding-left: 25px;
			padding-right: 25px;
			padding-top: 17px;
			padding-bottom: 17px;
			margin-top:15px;
			border-radius: 10px; 
		}

		.garagem_destaque_titulo{
			font-family:'Kastelov Intelo Bold';
			color:<?=$cores_gara[275]?>;
			text-align: center;
			margin-bottom:30px;
		}

		.garagem_detalhes_desejainfo_titulo{
			font-family:'Kastelov Intelo Bold';
			color:<?=$cores_gara[275]?>;
			margin-top:30px;
			text-align:center;
			font-size:20px;
			margin-bottom:20px;

		}

		a.garagem_detalhes_botoes{
			font-family: <?=$data_detalhes->font_family?>;
			display:inline-block;
			width: 100%;
			text-align:left;
			background-color: #000;
			color:#fff;
			font-size: 16px;
			padding-top: 15px;
			padding-bottom: 15px;
			margin-top: 10px;
			border-radius:6px; 
			cursor: pointer;

		}
		a.garagem_detalhes_botoes i{
			margin-left:40px;
			font-size: 17px;
			margin-right:8px;
		}

		a.detalhes_veiculo_fav{
			font-family: <?=$data_detalhes->font_family?>;
			display: inline-block;
			margin-top:15px;
			font-size: 16px;
			color: #576d6e;
		}
		a.detalhes_veiculo_comp{
			font-family: <?=$data_detalhes->font_family?>;
			display: inline-block;
			margin-top:15px;
			font-size: 16px;
			color: #576d6e;
			cursor: pointer;
		}

		a.detalhes_veiculo_comp i{
			font-size: 19px;
			color:#0392f9;
		}
		a.detalhes_veiculo_fav i{
			font-size: 19px;
			color:#ff0000;
		}


		.botao_detalhesimo_voltar{
			font-family: <?=$data_detalhes->font_family?>;
			cursor: pointer;
			background-color: #012325;
			color: #fff;
			width: 100%;
			display:inline-block;
			text-align: center;
			padding-top: 10px;
			padding-bottom: 10px;
			border-radius: 6px;
			margin-top:15px;
			font-size: 16px;
		}

		.detalhes_garagem_corpo{
			margin-top:50px;
			margin-left: 70px;
			margin-right: 70px;
			margin-bottom: 50px;
		}

		.btsonoresponsivo{
			display: none;
		}


		.garagem_detalhes_descricao_titulo_resp{
			display: none;
		}
		.garagem_detalhes_descricao_resp{
			display: none;
		}


		#modal_janela{
			font-family: <?=$data_detalhes->font_family?> !important;
		}

		@media (max-width: 1200px){

			.garagem_detalhes_itens span{
				font-size: 12px;
			}

			.garagem_detalhes_itens{
				font-size: 13px;
				padding-left: 5px;
				padding-right: 5px;
			}

			a.detalhes_veiculo_fav{
				font-size: 15px;
			}
			a.detalhes_veiculo_fav i{
				font-size: 16px;
			}

			a.detalhes_veiculo_comp{
				font-size: 15px;
			}
			a.detalhes_veiculo_comp i{
				font-size: 16px;
			}

		}

		@media (max-width: 1024px){

			a.detalhes_veiculo_fav{
				font-size: 14px;
			}
			a.detalhes_veiculo_fav i{
				font-size: 16px;
			}

			a.detalhes_veiculo_comp{
				font-size: 14px;
			}
			a.detalhes_veiculo_comp i{
				font-size: 16px;
			}

		}

		@media (max-width: 990px){

			.detalhes_garagem_corpo{
				margin-left:60px;
				margin-right:60px; 
			}

			.garagem_detalhes_titulo{
				font-size: 18px;
				line-height: 18px;
			}

			.garagem_detalhes_bairro{
				font-size: 13px;
				margin-top: 5px;
			}
			.garagem_detalhes_cidade{
				font-size: 13px;
			}

			.garagem_detalhes_categoria{
				padding-left: 15px;
				padding-right: 15px;
				padding-top: 3px;
				padding-bottom: 3px;
				font-size: 12px;
				text-align: center;
				font-weight: 500;
			}
			.garagem_detalhes_valor{
				margin-top: 5px;
				border-radius:15px;
				padding-left:15px;
				padding-right:15px;
				padding-top: 3px;
				padding-bottom: 3px;
				font-size: 12px; 
				margin-left:0px; 
			}
			.garagem_detalhes_condominio{
				font-size:12px;
			}
			.garagem_detalhes_iptu{
				font-size:12px;
			}

			.garagem_detalhes_itens span{
				font-size: 12px;
			}
			.garagem_detalhes_itens{
				font-size: 14px;
				padding:10px;
			}

			.garagem_detalhes_itens_div{
				padding-left: 0px;
			}

			.garagem_detalhes_botoes_div{
				margin-left:-12px;
				padding-left:15px;
				padding-right:15px;
			}

			a.detalhes_veiculo_fav{
				font-size: 12px;
			}
			a.detalhes_veiculo_fav i{
				font-size: 13px;
			}

			a.detalhes_veiculo_comp{
				font-size: 12px;
			}
			a.detalhes_veiculo_comp i{
				font-size: 13px;
			}

			a.garagem_detalhes_botoes{
				margin-top: 5px;
				font-size: 14px;
			}
			a.garagem_detalhes_botoes i{
				margin-left:15px;
				margin-right:3px;
			}

			.garagem_detalhes_desejainfo_titulo{
				font-size: 18px;
			}
			.garagem_detalhes_descricao_titulo{
				font-size: 18px;
			}
			.botao_desejoinforma{
				font-size:15px;
			}
			.botao_detalhesimo_voltar{
				font-size: 15px;
				display: none;
			}

			.btsonoresponsivo{
				display: block;
			}
			
		}

		@media (max-width: 770px){
			
			.detalhes_garagem_corpo{ 
				margin-left:15px;
				margin-right:15px; 
			}
			.garagem_detalhes_itens_div{
				padding-left: 15px;
			}
			.garagem_detalhes_botoes_div{
				margin-left: 0px;
			}			 

			.garagem_detalhes_descricao_titulo{
				display:none;
			}
			.garagem_detalhes_descricao{
				display: none;
			}

			.garagem_detalhes_descricao_titulo_resp{
				display:block;
				padding-left: 0px;
				padding-right: 0px;
			}
			.garagem_detalhes_descricao_resp{
				display: block;
				padding-left: 0px;
				padding-right: 0px;
			}



		}


	</style>

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

	<section class="detalhes_garagem_corpo animate-effect" >
		
		<div class="row">

			<div class="col-xs-12 col-sm-8 col-md-7">


				<div class="garagem_detalhes_div_titulo">

					<div class="row">
						<div class="col-xs-7 col-sm-7 col-md-6">

							<?php if($data->ref){ ?>
								<div class="garagem_detalhes_ref" >REF. <?=$data->ref?></div>
							<?php } ?>

							<div class='garagem_detalhes_titulo' ><?=$data->titulo?></div> 

						</div>
						<div class="col-xs-5 col-sm-5 col-md-6">

							<div class="garagem_detalhes_cat_val"> 

								<div class="garagem_detalhes_valor" >R$ <?=$valor?></div> 

							</div>

						</div>
					</div>

				</div>




				<div class="garagem_imagens_div" >

					<div class="owl-carousel detalhes_imagens" >
						<?php

						foreach ($imagens as $key => $value) {

							echo "
							<div class='item' data-hash='img_".$value['id']."' >
							<div class='garagem_detalhes_imagens' style='background-image:url(".$value['imagem_g'].");' >
							</div>
							</div>
							";

						}

						if(count($imagens) == 0){
							echo "
							<div class='item' data-hash='img_1' >
							<div class='garagem_detalhes_imagens' style='background-image:url(".LAYOUT."img/semimagem.png);' >
							</div>
							</div>
							";
						}

						?>   
					</div>

				</div>

				<div class="garagem_imagens_div_min" id="galeria" >

					<div class="owl-carousel detalhes_imagens_miniaturas" id="galeria" >
						<?php

						foreach ($imagens as $key => $value) {

							echo "
							<div class='item' >
							<div class='garagem_detalhes_imagens_min' style='background-image:url(".$value['imagem_p'].");' >
							<a href='".$value['imagem_g']."' title='".$value['legenda']."' ><img src='".$value['imagem_p']."' style='width:100%; opacity:0; height:100%;'>
							</a>                
							</div>
							";

							if($value['legenda']){
								echo "<div style='font-size:11px; width:100%; text-align:center; margin-top:3px;'>".$value['legenda']."</div>";
							}

							echo "
							</div>
							";

						}

						?>
					</div>

				</div>

			</div>

			<div class="col-xs-12 col-sm-4 col-md-5"> 

				<div class="garagem_detalhes_itens_div" > 

					<div class="row">

						<?php if($data->marca_nome){ ?>
							<div class="col-xs-4 col-sm-6 col-md-3">
								<div class='garagem_detalhes_itens'> 
									<span><i class="fa fa-car" aria-hidden="true"></i> Marca</span>
									<?=$data->marca_nome?>
								</div>
							</div>
						<?php } ?>

						<?php if($data->modelo_nome){ ?>
							<div class="col-xs-4 col-sm-6 col-md-3">
								<div class='garagem_detalhes_itens'>
									<span>Modelo</span>
									<?=$data->modelo_nome?>
								</div>
							</div>
						<?php } ?>

						<?php if($data->cor_nome){ ?>
							<div class="col-xs-4 col-sm-6 col-md-3">
								<div class='garagem_detalhes_itens'>
									<span><i class="fa fa-paint-brush" aria-hidden="true"></i> Cor</span>
									<?=$data->cor_nome?>
								</div>
							</div>
						<?php } ?>

						<?php if($data->combustivel_nome){ ?>
							<div class="col-xs-4 col-sm-6 col-md-3">
								<div class='garagem_detalhes_itens'> 
									<span><i class='fas fa-gas-pump'></i> Combustivel</span>
									<?=$data->combustivel_nome?>
								</div>
							</div>
						<?php } ?>

						<?php if($data->motor_nome){ ?>
							<div class="col-xs-4 col-sm-6 col-md-3">
								<div class='garagem_detalhes_itens'> 
									<span><i class="fa fa-microchip" aria-hidden="true"></i> Motor</span>
									<?=$data->motor_nome?>
								</div>
							</div>
						<?php } ?>

						<?php if($data->transmissao_nome){ ?>
							<div class="col-xs-4 col-sm-6 col-md-3">
								<div class='garagem_detalhes_itens'>
									<span><i class="fa fa-cog" aria-hidden="true"></i> Transmissao</span>
									<?=$data->transmissao_nome?>
								</div>
							</div>
						<?php } ?>

						<?php if($data->ano_fab AND $data->ano_modelo){ ?>
							<div class="col-xs-4 col-sm-6 col-md-3">
								<div class='garagem_detalhes_itens'>
									<span><i class="fa fa-calendar" aria-hidden="true"></i> Ano</span>
									<?=$data->ano_fab?>/<?=$data->ano_modelo?>
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-12">
							<div class="garagem_detalhes_itens" style="padding-left: -100px;"> 
								<span><i class="fa fa-tags" aria-hidden="true"></i> Opcionais</span>
								<?php

								foreach ($opcionais as $key_opcionais => $value_opcionais) {
									echo "<div>".$value_opcionais['titulo']."</div>";
								}

								?>
							</div>
						<?php } ?>

						<?php if($data->obs){ ?>
							<div class="col-xs-12 col-sm-12 col-md-12">
								<div class='garagem_detalhes_itens' style="text-align: left; font-weight: normal;">
									<?=$data->obs?>
								</div>
							</div>
						<?php } ?>

					</div>


				</div>



				<div class="garagem_detalhes_botoes_div" >

					<div class="row"> 
						<div class="col-xs-12 col-sm-12 col-md-12">							 

							<div style="text-align: center; width: 100%;"> 

								<a class="detalhes_veiculo_comp" onclick="abresocial();" >
									<i class="fas fa-share-alt"></i> Compartilhar
								</a>

								<div class="social social_garagem" >
									<ul>
										<li>
											<a href="https://www.facebook.com/sharer.php?u=<?=$endereco_postagem_sem_ssl?>" class="facebook" target="_blank" title="Compartilhar via Facebook"><i class="fab fa-facebook"></i></a>
										</li>
										<li>
											<a href="https://twitter.com/intent/tweet?text=<?=$data->titulo?>&url=<?=$endereco_postagem_sem_ssl?>" class="twitter" target="_blank" title="Compartilhar via Twitter"><i class="fab fa-twitter"></i></a>
										</li>
										<li>
											<a href="https://api.whatsapp.com/send?text=Veja este veiculo:<?=$endereco_postagem_sem_ssl?>" class="whats" target="_blank" title="Compartilhar via WhatsApp"><i class="fab fa-whatsapp"></i></a>
										</li>
									</ul>

								</div>

							</div>

							<div style="margin-top:10px; text-align:center;">

								<a class="garagem_detalhes_botoes" style="background-color:#4caf50; " onclick="window.open('https://api.whatsapp.com/send?phone=5568992042105&text=Ol%C3%A1%20gostaria%20de%20mais%20informa%C3%A7%C3%B5es%20sobre%20o%20ve%C3%ADculo!  REF.<?=$data->ref?> <?=$data->titulo?>', '_blank');" ><i class="fab fa-whatsapp"></i> ENTRAR EM CONTATO PELO WHATSAPP</a>

							</div>

						</div>
					</div>




				</div>




			</div>



		</div>

	</div>


</section>

<style type="text/css">

	.similares{
		position: relative;
		width: 96%;
		height: auto;
		margin-left:2%;
		margin-right:2%; 
		padding-bottom:1px;
	}
	.similares .veiculo_quadro{
		border-color:<?=$cores_gara[175]?> !important;
		background-color: <?=$cores_gara[174]?> !important;
		color: <?=$cores_gara[176]?> !important;
		border-radius:16px;
		height: 270px;
	}

	.similares .veiculo_imagem_div{
		height: 220px;
		margin-bottom:10px;
	}
	.similares .veiculo_imagem{
		height: 210px;
	}

	.similares .veiculo_titulo{				 
		font-size: 16px;
		font-weight: bold;
		display: block;
		width: 100%;
		float: none;
		padding-bottom: 0px;
		padding-top:0px;
		text-align: center;
		color: <?=$cores[237]?> !important;
	}

	.similares .veiculo_endereco{
		display: block;
		width: 100%;
		float: none;
		font-size: 12px;
		padding-top: 5px;
		font-family: <?=$data_detalhes->font_family?>;
	}

	
	.similares .veiculo_valor2 {
		background-color: #000!important;
		color: #fff !important;				 
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
		z-index: 99999;
	} 

	.similares .veiculo_bt_det { 
		color: <?=$cores_gara[183]?> !important;        
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
		z-index: 99999;
		cursor: pointer;
		background-color:<?=$cores_gara[182]?>;
		background-image: linear-gradient(to bottom, transparent, #0091F8);
	} 

	.similares .item { 

	}

	.similares .owl-prev{
		top:76% !important;
		left:15px !important;
	}
	.similares .owl-next{
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
	}

	@media (max-width: 770px){       

		.similares .veiculo_titulo{
			padding-top:3px;
			font-size: 15px;
			font-weight: bold;
		}

		.similares .garagem_lista_itens{
			padding-left:1px !important;
			padding-right:1px !important;
			font-size:11px !important; 
		} 
		.similares .garagem_lista_itens img{  
			width: 22px !important; 
		}
		.similares .garagem_lista_itens_tit{
			font-size:10px !important; 
			margin-top: 2px !important;
		}
		.similares .veiculo_endereco{ 
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

<div style="padding-bottom:70px; padding-top:15px; background-color:#fff; ">

	<div><h2 class="garagem_destaque_titulo" >OLHE ESTES MODELOS!</h2></div>

	<div class="owl-carousel similares" >
		<?php

		foreach ($similares as $key => $value) {

			$endereco_gara = DOMINIO.$controller.'/veiculo_detalhes/id/'.$value['codigo'];

			if($value['valor'] == '0,00'){
								// $valor_final_gara = "<div class='veiculo_valor' style='font-weight:400;'>Consulte!</div>";
				$valor_final_gara = "";
			} else {
				$valor_final_gara = "<div class='veiculo_valor2' >R$ ".$value['valor']."</div>";
			}

			echo "
			<div class='item' >
			<div class='veiculo_quadro' >

			<div class='veiculo_imagem_div'>
			
			".$valor_final_gara."
			<div class='veiculo_imagem' style='background-image:url(".$value['imagem'].");' >
			<a href='".$endereco_gara."'><img src='".LAYOUT."img/transp.png' style='width:100%; height:100%;'></a>
			</div>
			</div>

			<div class='veiculo_titulo' onClick=\"window.location='".$endereco_gara."';\" >".$value['titulo']."</div>

			</div>
			</div>
			";

		}

		?>
	</div>

</div>



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


<script>
	$(document).ready(function () {

		$('#galeria').photobox('a',{ time:0 });

		var owl_detalhes = $('.detalhes_imagens');
		owl_detalhes.owlCarousel({
			autoplay: false,
			nav: false,
			navText:["", ""],
			dots: false,
			margin: 0,
			loop: false,
			URLhashListener:true,
			startPosition: 'URLHash',
			responsive: {
				0: {
					items: 1
				},
				600: {
					items: 1
				},
				1000: {
					items: 1
				}        
			}
		});
		var owl_detalhes_min = $('.detalhes_imagens_miniaturas');
		owl_detalhes_min.owlCarousel({
			autoplay: false,
			nav: false,
			navText:["", ""],
			dots: false,
			margin:10,
			loop: false,
			URLhashListener: true,
			autoplayHoverPause: true,
			startPosition: 'URLHash',
			responsive: {
				0: {
					items: 3
				},
				600: {
					items: 6
				},
				1000: {
					items: 6
				}
			}
		});
		var owl = $('.similares');
		owl.owlCarousel({
			autoplay: true,
			autoplayTimeout: 7000,
			nav: false,
			navText:["", ""],
			dots: true,
			margin: 50,
			loop: true,
			responsive: {
				0: {
					items: 1
				},
				600: {
					items: 2
				},
				1000: {
					items: 3
				}
			}
		});


	});


	function abresocial(){
		$('.social_garagem').toggle();
	}

</script>

</body>
</html>