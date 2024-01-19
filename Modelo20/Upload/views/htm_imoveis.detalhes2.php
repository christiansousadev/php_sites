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
	<meta property="og:url" content="<?=$endereco_imovel_sem_ssl?>" />
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

  // echo "<pre>"; print_r($cores_imo); echo "</pre>";

	?>

	<style type="text/css">

		body {
			background-color:<?=$cores_imo[160]?>;
		}    

		.imoveis_imagens_div_min{
			margin-left: 0px;
			margin-right: 0px;
		}
		.imoveis_detalhes_imagens{
			border-radius: 15px;
		}
		.imoveis_detalhes_imagens_min{
			border-radius:4px;
		}

		.imoveis_detalhes_div_titulo{
			font-family:'Kastelov Intelo Bold';
			width: 100%; 
			padding: 20px;
			border-radius: 15px;
			background-color: <?=$cores_imo[163]?>;
		}

		.imoveis_detalhes_ref{
			font-family: <?=$data_detalhes->font_family?>;
			font-size: 13px;
			text-align: left;
			padding: 0px;
			color:<?=$cores_imo[164]?>;
		}
		.imoveis_detalhes_titulo{
			font-family:'Kastelov Intelo Bold'; 
			color:<?=$cores_imo[164]?>;
		}

		.imoveis_detalhes_bairro{
			font-family: <?=$data_detalhes->font_family?>;
			font-size: 14px;
			color:<?=$cores_imo[165]?>;
		}
		.imoveis_detalhes_cidade{
			font-family: <?=$data_detalhes->font_family?>;
			font-size: 14px; 
			color:<?=$cores_imo[165]?>;
		}

		.imoveis_detalhes_cat_val{
			font-family: <?=$data_detalhes->font_family?>;
			text-align: right;
			width: 100%;
		}

		.imoveis_detalhes_categoria{
			font-family: <?=$data_detalhes->font_family?>;
			display:inline-block; 
			border-radius:15px;
			padding-left: 15px;
			padding-right: 15px;
			padding-top: 5px;
			padding-bottom: 5px;
			font-size: 14px;
			text-align: center;
			font-weight: 500;
			background-color:<?=$cores_imo[161]?>;
			color:<?=$cores_imo[162]?>;
		}
		.imoveis_detalhes_valor{
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
			background-color:<?=$cores_imo[166]?>;
			color:<?=$cores_imo[167]?>;
		}

		.imoveis_detalhes_condominio{
			font-family: <?=$data_detalhes->font_family?>;
			font-size: 13px; 
			text-align: right;
			color:<?=$cores_imo[165]?>;
		}
		.imoveis_detalhes_iptu{
			font-family: <?=$data_detalhes->font_family?>;
			font-size: 13px; 
			text-align: right;
			color:<?=$cores_imo[165]?>;
		}

		.imoveis_detalhes_descricao_titulo{
			font-family:'Kastelov Intelo Bold'; 
			font-size: 20px;
			margin-top: 20px;
			text-align: left;
			padding-left:30px;
			padding-right:30px;
			color:<?=$cores_imo[164]?>;
		}
		.imoveis_detalhes_descricao{
			font-family: <?=$data_detalhes->font_family?>;
			padding: 0px;
			margin-top: 20px;
			font-size: 15px;
			padding-left:30px;
			padding-right:30px;
		}

		.imoveis_detalhes_itens_div{
			font-family: <?=$data_detalhes->font_family?>;
			padding-left: 13px;
			padding-right: 13px;       

		}

		.imoveis_detalhes_itens_div .col-xs-4 {
			padding-left:3px !important;
			padding-right:3px !important;
		}

		.imoveis_detalhes_itens{
			font-family: <?=$data_detalhes->font_family?>;
			padding: 15px;
			border-radius:8px; 
			display: inline-block;
			text-align: center;
			width: 100%;
			margin-bottom:6px;
			font-weight: bold;
			font-size: 16px;
			background-color: <?=$cores_imo[163]?>;
			color: <?=$cores_imo[168]?>;
		}
		.imoveis_detalhes_itens img{
			width:35%;
		}

		.imoveis_detalhes_itens span{
			font-family: <?=$data_detalhes->font_family?>;
			display: block;
			font-size: 14px;
			font-weight: 500; 
			color:<?=$cores_imo[165]?>;
		}
		.imoveis_detalhes_botoes_div{
			padding-left: 25px;
			padding-right: 25px;
			padding-top: 17px;
			padding-bottom: 17px;
			margin-top:15px;
			border-radius: 10px;
			background-color: <?=$cores_imo[163]?>;
		}

		.imoveis_destaque_titulo{
			font-family:'Kastelov Intelo Bold';
			color:<?=$cores_imo[164]?>;
		}

		.imoveis_detalhes_desejainfo_titulo{
			font-family:'Kastelov Intelo Bold';
			color:<?=$cores_imo[164]?>;
			margin-top:30px;
			text-align:center;
			font-size:20px;
			margin-bottom:20px;

		}

		a.imoveis_detalhes_botoes{
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
		a.imoveis_detalhes_botoes i{
			margin-left:40px;
			font-size: 17px;
			margin-right:8px;
		}

		a.detalhes_imovel_fav{
			font-family: <?=$data_detalhes->font_family?>;
			display: inline-block;
			margin-top:15px;
			font-size: 16px;
			color: #576d6e;
		}
		a.detalhes_imovel_comp{
			font-family: <?=$data_detalhes->font_family?>;
			display: inline-block;
			margin-top:15px;
			font-size: 16px;
			color: #576d6e;
		}

		a.detalhes_imovel_comp i{
			font-size: 19px;
			color:#0392f9;
		}
		a.detalhes_imovel_fav i{
			font-size: 19px;
			color:#ff0000;
		}

		.imo_form{


		}
		.imo_form_obs{
			font-family: <?=$data_detalhes->font_family?>;
			font-size: 13px; 
			margin-bottom: 5px;
			color:<?=$cores_imo[165]?>;
		}
		.botao_desejoinforma{
			padding:10px;
			text-align: center; 
			font-size: 16px;
			font-family: <?=$data_detalhes->font_family?>;
			border-radius: 6px;
			width:100%;
			border:0px;
			margin-top: 15px;
			background-color:<?=$cores_imo[169]?>;
			color:<?=$cores_imo[170]?>;
		}

		.div_form label{
			font-family: <?=$data_detalhes->font_family?>;
			color:<?=$cores_imo[165]?>;
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

		.detalhes_imoveis_corpo{
			margin-top:50px;
			margin-left: 70px;
			margin-right: 70px;
			margin-bottom: 50px;
		}

		.btsonoresponsivo{
			display: none;
		}


		.imoveis_detalhes_descricao_titulo_resp{
			display: none;
		}
		.imoveis_detalhes_descricao_resp{
			display: none;
		}


		#modal_janela{
			font-family: <?=$data_detalhes->font_family?> !important;
		}

		@media (max-width: 1200px){

			.imoveis_detalhes_itens span{
				font-size: 12px;
			}

			.imoveis_detalhes_itens{
				font-size: 13px;
				padding-left: 5px;
				padding-right: 5px;
			}

			a.detalhes_imovel_fav{
				font-size: 15px;
			}
			a.detalhes_imovel_fav i{
				font-size: 16px;
			}

			a.detalhes_imovel_comp{
				font-size: 15px;
			}
			a.detalhes_imovel_comp i{
				font-size: 16px;
			}

		}

		@media (max-width: 1024px){

			a.detalhes_imovel_fav{
				font-size: 14px;
			}
			a.detalhes_imovel_fav i{
				font-size: 16px;
			}

			a.detalhes_imovel_comp{
				font-size: 14px;
			}
			a.detalhes_imovel_comp i{
				font-size: 16px;
			}

		}

		@media (max-width: 990px){

			.detalhes_imoveis_corpo{
				margin-left:60px;
				margin-right:60px; 
			}

			.imoveis_detalhes_titulo{
				font-size: 18px;
				line-height: 18px;
			}

			.imoveis_detalhes_bairro{
				font-size: 13px;
				margin-top: 5px;
			}
			.imoveis_detalhes_cidade{
				font-size: 13px;
			}

			.imoveis_detalhes_categoria{
				padding-left: 15px;
				padding-right: 15px;
				padding-top: 3px;
				padding-bottom: 3px;
				font-size: 12px;
				text-align: center;
				font-weight: 500;
			}
			.imoveis_detalhes_valor{
				margin-top: 5px;
				border-radius:15px;
				padding-left:15px;
				padding-right:15px;
				padding-top: 3px;
				padding-bottom: 3px;
				font-size: 12px; 
				margin-left:0px; 
			}
			.imoveis_detalhes_condominio{
				font-size:12px;
			}
			.imoveis_detalhes_iptu{
				font-size:12px;
			}

			.imoveis_detalhes_itens span{
				font-size: 12px;
			}
			.imoveis_detalhes_itens{
				font-size: 14px;
				padding:10px;
			}

			.imoveis_detalhes_itens_div{
				padding-left: 0px;
			}

			.imoveis_detalhes_botoes_div{
				margin-left:-12px;
				padding-left:15px;
				padding-right:15px;
			}

			a.detalhes_imovel_fav{
				font-size: 12px;
			}
			a.detalhes_imovel_fav i{
				font-size: 13px;
			}

			a.detalhes_imovel_comp{
				font-size: 12px;
			}
			a.detalhes_imovel_comp i{
				font-size: 13px;
			}

			a.imoveis_detalhes_botoes{
				margin-top: 5px;
				font-size: 14px;
			}
			a.imoveis_detalhes_botoes i{
				margin-left:15px;
				margin-right:3px;
			}

			.imoveis_detalhes_desejainfo_titulo{
				font-size: 18px;
			}
			.imoveis_detalhes_descricao_titulo{
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
			
			.detalhes_imoveis_corpo{ 
				margin-left:15px;
				margin-right:15px; 
			}
			.imoveis_detalhes_itens_div{
				padding-left: 15px;
			}
			.imoveis_detalhes_botoes_div{
				margin-left: 0px;
			}			 

			.imoveis_detalhes_descricao_titulo{
				display:none;
			}
			.imoveis_detalhes_descricao{
				display: none;
			}

			.imoveis_detalhes_descricao_titulo_resp{
				display:block;
				padding-left: 0px;
				padding-right: 0px;
			}
			.imoveis_detalhes_descricao_resp{
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

	<section class="detalhes_imoveis_corpo animate-effect" >

		<div class="row">

			<div class="col-xs-12 col-sm-8 col-md-7">


				<div class="imoveis_detalhes_div_titulo">

					<div class="row">
						<div class="col-xs-7 col-sm-7 col-md-6">

							<div class="imoveis_detalhes_ref" >REF. <?=$data->cod_interno?></div>
							<div class='imoveis_detalhes_titulo' ><?=$data->titulo?></div>
							<div class='imoveis_detalhes_bairro'><?=$data->bairro?></div>
							<div class='imoveis_detalhes_cidade'><?=$data->cidade?> - <?=$data->uf?></div>

						</div>
						<div class="col-xs-5 col-sm-5 col-md-6">

							<div class="imoveis_detalhes_cat_val"> 

								<div class="imoveis_detalhes_categoria" >
									<?php
									if($data->categoria_id == 5279){
										echo "VENDA";
									} else {
										echo "LOCAÇÃO";
									}
									?>                      
								</div>  

								<div class="imoveis_detalhes_valor" >R$ <?=$valor?></div> 

							</div>

							<?php if($data->condominio){ ?><div class="imoveis_detalhes_condominio" >Condomínio: R$ <?=$condominio?></div><?php } ?>
							<?php if($data->iptu > 0){ ?><div class="imoveis_detalhes_iptu" >IPTU: R$ <?=$iptu?></div><?php } ?>

						</div>
					</div>

				</div>




				<div class="imoveis_imagens_div" >

					<div class="owl-carousel detalhes_imagens" >
						<?php

						foreach ($imagens as $key => $value) {

							echo "
							<div class='item' data-hash='img_".$value['id']."' >
							<div class='imoveis_detalhes_imagens' style='background-image:url(".$value['imagem_g'].");' >                                             
							</div>
							</div>
							";

						}

						if(count($imagens) == 0){
							echo "
							<div class='item' data-hash='img_1' >
							<div class='imoveis_detalhes_imagens' style='background-image:url(".LAYOUT."img/semimagem.png);' >                                             
							</div>
							</div>
							";
						}

						?>   
					</div>

				</div>

				<div class="imoveis_imagens_div_min" id="galeria" >

					<div class="owl-carousel detalhes_imagens_miniaturas" id="galeria" >
						<?php

						foreach ($imagens as $key => $value) {

							echo "
							<div class='item' >
							<div class='imoveis_detalhes_imagens_min' style='background-image:url(".$value['imagem_p'].");' >
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

				<?php if($data->descricao){ ?> 

					<div class="imoveis_detalhes_descricao_titulo" >Descrição do Imóvel</div>
					<div class="imoveis_detalhes_descricao" ><?=$data->descricao?></div>

				<?php } ?>

			</div>

			<div class="col-xs-12 col-sm-4 col-md-5"> 

				<div class="imoveis_detalhes_itens_div" > 

					<div class="row">

						<?php if($data->area_total){ ?>
							<div class="col-xs-4 col-sm-6 col-md-3">
								<div class='imoveis_detalhes_itens'>
									<img src="<?=LAYOUT?>img/icos_imo/ico_areat.svg" class="imoveis_detalhes_itens_svg" >
									<span>Área total</span>
									<?=$data->area_total?>
								</div>
							</div>
						<?php } ?>

						<?php if($data->area_util){ ?>
							<div class="col-xs-4 col-sm-6 col-md-3">
								<div class='imoveis_detalhes_itens'>
									<img src='<?=LAYOUT?>img/icos_imo/ico_areau.svg' class='imoveis_detalhes_itens_svg' >
									<span>Área útil</span>
									<?=$data->area_util?>
								</div>
							</div>
						<?php } ?>

						<?php if($data->quartos){ ?>
							<div class="col-xs-4 col-sm-6 col-md-3">
								<div class='imoveis_detalhes_itens'>
									<img src='<?=LAYOUT?>img/icos_imo/ico_quart.svg' class='imoveis_detalhes_itens_svg' >
									<span>Dormit.</span>
									<?=$data->quartos?>
								</div>
							</div>
						<?php } ?>

						<?php if($data->suites){ ?>
							<div class="col-xs-4 col-sm-6 col-md-3">
								<div class='imoveis_detalhes_itens'>
									<img src='<?=LAYOUT?>img/icos_imo/ico_quartsui.svg' class='imoveis_detalhes_itens_svg' >
									<span>Suites.</span>
									<?=$data->suites?>
								</div>
							</div>
						<?php } ?>

						<?php if($data->garagem){ ?>
							<div class="col-xs-4 col-sm-6 col-md-3">
								<div class='imoveis_detalhes_itens'>
									<img src='<?=LAYOUT?>img/icos_imo/ico_garagem.svg' class='imoveis_detalhes_itens_svg' >
									<span>Vagas</span>
									<?=$data->garagem?>
								</div>
							</div>
						<?php } ?>

						<?php if($data->churrasqueira){ ?>
							<div class="col-xs-4 col-sm-6 col-md-3">
								<div class='imoveis_detalhes_itens'>
									<img src='<?=LAYOUT?>img/icos_imo/ico_churra.svg' class='imoveis_detalhes_itens_svg' >
									<span>Churrasqueira</span>
									<?=$data->churrasqueira?>
								</div>
							</div>
						<?php } ?>

						<?php if($data->banheiros){ ?>
							<div class="col-xs-4 col-sm-6 col-md-3">
								<div class='imoveis_detalhes_itens'>
									<img src='<?=LAYOUT?>img/icos_imo/ico_banhe.svg' class='imoveis_detalhes_itens_svg' >
									<span>Banheiros</span>
									<?=$data->banheiros?>
								</div>
							</div>
						<?php } ?>

					</div>


				</div>


				<?php if($data->descricao){ ?> 

					<div class="imoveis_detalhes_descricao_titulo imoveis_detalhes_descricao_titulo_resp" >Descrição do Imóvel</div>
					<div class="imoveis_detalhes_descricao imoveis_detalhes_descricao_resp" ><?=$data->descricao?></div>

				<?php } ?>


				<div class="imoveis_detalhes_botoes_div" >


					<div class="row">
						<div class="col-xs-6 col-sm-6 col-md-6">
							<style type="text/css">
								#coracao_<?=$favorito?>{
									display: none;
								}
							</style>
							<a class="detalhes_imovel_fav" onclick="favoritar();">
								<i id="coracao_1" class="far fa-heart"></i> <i id="coracao_2" class="fas fa-heart"></i> Favoritar Imóvel
							</a>

						</div>
						<div class="col-xs-6 col-sm-6 col-md-6">

							<a class="detalhes_imovel_comp" onclick="abresocial();" >
								<i class="fas fa-share-alt"></i> Compartilhar
							</a>

							<div class="social social_imoveis" >
								<ul>
									<li>
										<a href="https://www.facebook.com/sharer.php?u=<?=$endereco_postagem_sem_ssl?>" class="facebook" target="_blank" title="Compartilhar via Facebook"><i class="fab fa-facebook"></i></a>
									</li>
									<li>
										<a href="https://twitter.com/intent/tweet?text=<?=$data->titulo?>&url=<?=$endereco_postagem_sem_ssl?>" class="twitter" target="_blank" title="Compartilhar via Twitter"><i class="fab fa-twitter"></i></a>
									</li>
									<li>
										<a href="https://api.whatsapp.com/send?text=Veja este imóvel:<?=$endereco_postagem_sem_ssl?>" class="whats" target="_blank" title="Compartilhar via WhatsApp"><i class="fab fa-whatsapp"></i></a>
									</li>
								</ul>

							</div>

						</div>
					</div>

					<div style="margin-top: 20px; text-align:center;">

						<a class="imoveis_detalhes_botoes" style="background-color:#4caf50; " onclick="window.open('https://api.whatsapp.com/send/?phone=55<?=$data_detalhes->whats_destino?>&text&app_absent=0', '_blank');" ><i class="fab fa-whatsapp"></i> Falar pelo whatsapp</a>

						<a class="imoveis_detalhes_botoes" style="background-color:#012325;" onclick="modal('<?=DOMINIO?><?=$controller?>/imoveis_agendar/id/<?=$data->id?>', 'Agendar visita');" ><i class="far fa-calendar"></i> Agendar visita</a>

						<a class="imoveis_detalhes_botoes" style="background-color:#0091f8;" onclick="modal('<?=DOMINIO?><?=$controller?>/imoveis_proposta/id/<?=$data->id?>', 'Fazer proposta');" ><i class="fas fa-list-alt"></i> Fazer proposta</a>

					</div>


					<div class="imoveis_detalhes_desejainfo_titulo">Deseja mais informações?</div>


					<div>
						<form name="formdesejoimovel" id="formdesejoimovel" >

							<div class="div_form" >
								<label>Nome completo</label>
								<input type="text" class="form-control imo_form" name="nome" placeholder="digite seu nome..." >
							</div>

							<div class="div_form" >
								<label>Seu whatsapp</label>
								<input type="text" class="form-control imo_form" name="fone" placeholder="digite seu whatsapp..." >
							</div>

							<div class="div_form" >
								<label>Mensagem</label>
								<div class="imo_form_obs" >Além do texto abaixo, escreva quais informações deseja do imóvel. O que te chamou atenção nele? Assim poderemos te atender melhor.</div>
								<textarea class="form-control imo_form" name="msg" placeholder="Olá, Gostaria de mais informações sobre este imóvel" style="height: 120px;" ></textarea>
							</div>

							<div class="row">

								<div class="col-xs-12 col-sm-12 col-md-6">

									<div class="botao_detalhesimo_voltar" onClick="<?php if(!$data_detalhes->destino_voltar){ echo "history.go(-1);"; } else { echo "window.location='".DOMINIO.$data_detalhes->destino_voltar."';"; } ?>" >Voltar</div>

								</div>

								<div class="col-xs-12 col-sm-12 col-md-6">
									<button type="button" class="botao_desejoinforma" onclick="enviaforminfoimo();">Enviar agora</button>
									<input type="hidden" name="imovel" value="<?=$data->cod_interno?>">

									<div class="botao_detalhesimo_voltar btsonoresponsivo" onClick="<?php if(!$data_detalhes->destino_voltar){ echo "history.go(-1);"; } else { echo "window.location='".DOMINIO.$data_detalhes->destino_voltar."';"; } ?>" >Voltar</div>

								</div>

							</div>


						</div>

					</form> 
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
	.similares .imovel_quadro{
		border-color:<?=$cores_imo[175]?> !important;
		background-color: <?=$cores_imo[174]?> !important;
		color: <?=$cores_imo[176]?> !important;
		border-radius:16px;
		height: 330px;
	}

	.similares .imovel_imagem_div{
		height: 220px;
		margin-bottom:10px;
	}
	.similares .imovel_imagem{
		height: 210px;
	}

	.similares .imovel_titulo{
		color: <?=$cores_imo[177]?> !important;
		font-size: 15px; 
		display: block;
		width: 100%;
		float: none;
		padding-bottom: 0px;
		padding-top:0px;
		font-family: <?=$data_detalhes->font_family?>;
		font-weight: bold;
	}

	.similares .imovel_endereco{
		display: block;
		width: 100%;
		float: none;
		font-size: 12px;
		padding-top: 5px;
		font-family: <?=$data_detalhes->font_family?>;
	}


	.similares .imoveis_lista_itens{
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

	.similares .imoveis_lista_itens i{ 
		color: <?=$cores_imo[173]?> !important; 
	}
	.similares .imoveis_lista_itens img{
		padding:0px;
		width: 23px;
		display: inline-block;
		color: <?=$cores_imo[173]?> !important; 
		fill:<?=$cores_imo[173]?> !important;
	}
	.similares .imoveis_lista_itens_tit{ 
		color: <?=$cores_imo[173]?> !important;
		font-size:10px;
		display: block;
		text-align: center !important;
		margin-top: 2px;
		font-family: <?=$data_detalhes->font_family?>;
	}

	.similares .imovel_categoria {
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
		z-index: 99999;
		font-family: <?=$data_detalhes->font_family?>;
	}
	.similares .imovel_valor2 {
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
		z-index: 99999;
		font-family: <?=$data_detalhes->font_family?>;
	} 

	.similares .imovel_bt_det { 
		color: <?=$cores_imo[183]?> !important;        
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
		background-color:<?=$cores_imo[182]?>;
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

		.similares .imovel_titulo{
			padding-top:3px;
			font-size: 15px;
			font-weight: bold;
		}

		.similares .imoveis_lista_itens{
			padding-left:1px !important;
			padding-right:1px !important;
			font-size:11px !important; 
		} 
		.similares .imoveis_lista_itens img{  
			width: 22px !important; 
		}
		.similares .imoveis_lista_itens_tit{
			font-size:10px !important; 
			margin-top: 2px !important;
		}
		.similares .imovel_endereco{ 
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

<div style="margin-top:60px; padding-bottom:70px; padding-top:40px;">


	<div><h2 class="imoveis_destaque_titulo" >Imóveis Similares</h2></div>

	<div class="owl-carousel similares" >
		<?php

		foreach ($similares as $key => $value) {

			$endereco_imo = DOMINIO.$controller.'/imoveis_detalhes/id/'.$value['codigo'];

			if($value['valor'] == '0,00'){
                // $valor_final_imo = "<div class='imovel_valor' style='font-weight:400;'>Consulte!</div>";
				$valor_final_imo = "";
			} else {
				$valor_final_imo = "<div class='imovel_valor2' >R$ ".$value['valor']."</div>";
			}

			$categoria = $value['categoria_titulo'];

			echo "
			<div class='item' >
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
			<div class='col-xs-5 col-sm-5 col-md-6' >

			<div class='imovel_titulo' onClick=\"window.location='".$endereco_imo."';\" >".$value['titulo']."</div>

			<div class='imovel_endereco' >
			<div>".$value['bairro']."</div>
			<div>".$value['cidade']." - ".$value['uf']."</div>
			</div>

			</div>
			<div class='col-xs-7 col-sm-7 col-md-6' > 

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


	function enviaforminfoimo(){

		$('#modal_janela').modal('show');
		$('#modal_conteudo').html("<div style='text-align:center;'><img src='<?=LAYOUT?>img/loading.gif' style='width:25px;'></div>");

		var dados = $("#formdesejoimovel").serialize();

		$.post('<?=DOMINIO?><?=$controller?>/desejo_enviar2', dados,function(data){
			if(data){
				$('#modal_conteudo').html(data);
			}
		});

	}

	function favoritar(){

		$.post('<?=DOMINIO?><?=$controller?>/imoveis_favoritos_acao',{ codigo:'<?=$data->codigo?>' },function(data){
			if(data){
				if(data == '1'){
					$('#coracao_1').show();
					$('#coracao_2').hide();
				} else {
					$('#coracao_2').show();
					$('#coracao_1').hide();
				}
			}
		});

	}

	function abresocial(){
		$('.social_imoveis').toggle();
	}

</script>

</body>
</html>