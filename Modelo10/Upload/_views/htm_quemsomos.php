<?php require_once('_system/bloqueia_view.php'); ?>
<!DOCTYPE html>
<html>
<head>

	<meta http-equiv="Content-Type" charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

	<title>Quem Somos - <?=$_base['titulo_pagina']?></title>
	<link rel="shortcut icon" href="<?=$_base['favicon'];?>">

	<meta name="description" content="Quem Somos - <?=$_base['descricao']?>" />
	<meta property="og:description" content="<?=$_base['descricao']?>">
	<meta name="author" content="mrcloud.com.br">
	<meta name="classification" content="Website" />
	<meta name="robots" content="index, follow">
	<meta name="Indentifier-URL" content="<?=DOMINIO?>" />
	
	<link rel="stylesheet" href="<?=LAYOUT?>api/bootstrap/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="<?=LAYOUT?>api/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
	
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto+Condensed:400,400i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

	<link href="<?=LAYOUT?>css/style.css" rel="stylesheet" type="text/css"  media="all" />
	<link href="<?=LAYOUT?>css/responsiveslides.css" rel="stylesheet" >

	<?php include_once('htm_css.php'); ?>
	
</head>

<body>	

	<?=ANALYTICS?>
	
	<?php include_once('htm_modal.php'); ?>

	<?php include_once('htm_topo.php'); ?>

	<?php include_once('htm_subtopo.php'); ?>

	<div id="corpo" class="container">

		<div style="margin-bottom:50px; width: 100%;"></div>

		<div class="row" >
			<div class="col-md-12">
				<h2 class="titulos" >Empresa <img src="<?=LAYOUT?>img/titulo_ico.png"></h2>
			</div>
		</div>

		<div class="row" >
			
			<div class="col-md-6">
				<div class="quemsomos_imagem"><img src="<?=$imagem_quemsomos?>"></div>
			</div>
			<div class="col-md-6">
				<div style="margin-top:50px;"><?=$texto_quemsomos?></div>
			</div>
			
		</div>

	</div>

	<div class="content content2">

		<div class="container">
			<div class="row" >				
				
				<div class="col-md-4">

					<h2 class="quemsomos_titulos" >MISSÃO</h2>
					<div class="quemsomos_quadros" ><?=$texto_missao?></div>

				</div>

				<div class="col-md-4">

					<h2 class="quemsomos_titulos" >VISÃO</h2>
					<div class="quemsomos_quadros" ><?=$texto_visao?></div>

				</div>

				<div class="col-md-4">
					
					<h2 class="quemsomos_titulos" >VALORES</h2>
					<div class="quemsomos_quadros" ><?=$texto_valores?></div>

				</div>

			</div>
		</div>

	</div>

	<div class="content content2" style="padding-top:0px; margin-top: 0px;" >
		<div class="container">
			<div class="row" >
				<div class="col-md-12">
					<div class="quemsomos_imagem" style="padding-top:0px; margin-top: 0px;" ><img src="<?=$imagem_quemsomos2?>"></div>
				</div>
			</div>
		</div>
	</div>
	

	<?php include_once('htm_rodape.php'); ?>
	
</body>
</html>

<script src="https://code.jquery.com/jquery-2.2.4.min.js" type="text/javascript" ></script>
<script src="https://bootstrapcdn.co/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="<?=LAYOUT?>js/jquery.easing.js"></script> 
<script src="<?=LAYOUT?>js/responsiveslides.min.js"></script>
<script src="<?=LAYOUT?>js/geral.js"></script>
<script>function dominio(){ return '<?=DOMINIO?>'; }</script>

<script type="text/javascript" src="<?=LAYOUT?>js/jquery.flexisel.js"></script>
<script type="text/javascript">
	$(window).load(function() {

		$("#flexisel2").flexisel({
			visibleItems: 7,
			animationSpeed: 300,
			autoPlay: true,
			autoPlaySpeed: 2000,
			pauseOnHover: true,
			enableResponsiveBreakpoints: true,
			infinite: true, 
		});

		$("#slider1").responsiveSlides({
			auto: true,
			pager: true,
			nav: true,
			speed: 500,
			namespace: "callbacks",
			before: function () {
				$('.events').append("<li>before event fired.</li>");
			},
			after: function () {
				$('.events').append("<li>after event fired.</li>");
			}
		});
		
		var target_offset = $("#corpo").offset();
		var target_top = target_offset.top;
		$('html, body').animate({ scrollTop: target_top }, 500);
		
	});
</script>