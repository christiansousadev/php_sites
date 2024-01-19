<?php require_once('_system/bloqueia_view.php'); ?>
<!DOCTYPE html>
<html>
<head>

	<meta http-equiv="Content-Type" charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

	<title>Serviços - <?=$_base['titulo_pagina']?></title>
	<link rel="shortcut icon" href="<?=$_base['favicon'];?>">

	<meta name="description" content="Serviços - <?=$_base['descricao']?>" />
	<meta property="og:description" content="<?=$_base['descricao']?>">
	<meta name="author" content="mrcloud.com.br">
	<meta name="classification" content="Website" />
	<meta name="robots" content="index, follow">
	<meta name="Indentifier-URL" content="<?=DOMINIO?>" />
	
	<link rel="stylesheet" href="<?=LAYOUT?>api/bootstrap/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="<?=LAYOUT?>api/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
	
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto+Condensed:400,400i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

	<link href="<?=LAYOUT?>css/style.css" rel="stylesheet" type="text/css"  media="all" />

	<link href="<?=LAYOUT?>api/owl.carousel/css/owl.carousel.min.css" rel="stylesheet" >
	<link href="<?=LAYOUT?>api/owl.carousel/css/owl.theme.default.min.css" rel="stylesheet" >

	<?php include_once('htm_css.php'); ?>
	
</head>

<body>

	<?=ANALYTICS?>
	
	<?php include_once('htm_modal.php'); ?>

	<?php include_once('htm_topo.php'); ?>

	<?php include_once('htm_subtopo.php'); ?>

	<div id="corpo" class="container" style="margin-bottom:-5px;">

		<div style="margin-bottom:50px; width: 100%;"></div>

		<div class="row" >
			<div class="col-md-12">
				<h2 class="titulos" >Serviços <img src="<?=LAYOUT?>img/titulo_ico.png"></h2>
			</div>
		</div>


		<div class="row" >
			
			<div class="col-md-12">

				<div id="servicos_inicial" style="margin-bottom:30px;">

					<div class="servicoes_quadro1" style="margin-top:40px; " >CONHEÇA TODOS NOSSOS SERVIÇOS</div>

					<div class="owl-carousel owl-theme" >
						<?php

						foreach ($servicos as $key => $value) {

							$endereco = DOMINIO.'servicos/detalhes/codigo/'.$value['codigo'];

							echo "
							<div class='item' >
							<div class='servicos_inicial_img_div'>
							<a href='$endereco' >
							<img src='".$value['imagem']."' >
							</a>
							</div>
							</div>
							";

						}
						?>
					</div>

				</div>

			</div>

		</div>


		<div class="row" >
			<div class="col-md-12">
				<div class="servicos_imagem"><a href="<?=DOMINIO?>orcamento"><img src="<?=$imagem_serv?>"></a></div>
			</div>				
		</div>

	</div>


	<?php include_once('htm_rodape.php'); ?>
	
</body>
</html>

<script src="https://code.jquery.com/jquery-2.2.4.min.js" type="text/javascript" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<script src="<?=LAYOUT?>js/jquery.easing.js"></script> 
<script src="<?=LAYOUT?>js/responsiveslides.min.js"></script>
<script src="<?=LAYOUT?>js/geral.js"></script>
<script>function dominio(){ return '<?=DOMINIO?>'; }</script>

<script type="text/javascript" src="<?=LAYOUT?>api/owl.carousel/owl.carousel.min.js"></script>
<script type="text/javascript" src="<?=LAYOUT?>api/owl.carousel/owl.carousel.resp.js"></script>
<script type="text/javascript">
	$(window).load(function() {

		$('.owl-theme').owlCarousel({
			loop:true,
			margin:0,
			responsiveClass:true,
			callbacks:true,
			responsive:{
				0:{
					items:1
				},
				600:{
					items:4
				},
				1000:{
					items:4   
				}
			}
		});
		
		var target_offset = $("#corpo").offset();
		var target_top = target_offset.top;
		$('html, body').animate({ scrollTop: target_top }, 500);
		
	});
</script>