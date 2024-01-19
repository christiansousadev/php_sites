<?php require_once('_system/bloqueia_view.php'); ?>
<!DOCTYPE html>
<html>
<head>

	<meta http-equiv="Content-Type" charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

	<title><?=$_base['titulo_pagina']?></title>
	<link rel="shortcut icon" href="<?=$_base['favicon'];?>">

	<meta name="description" content="<?=$_base['descricao']?>" />
	<meta property="og:description" content="<?=$_base['descricao']?>">
	<meta name="author" content="mrcloud.com.br">
	<meta name="classification" content="Website" />
	<meta name="robots" content="index, follow">
	<meta name="Indentifier-URL" content="<?=DOMINIO?>" />
	
	<link rel="stylesheet" href="<?=LAYOUT?>api/bootstrap/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="<?=LAYOUT?>api/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="<?=LAYOUT?>api/hover-master/css/hover-min.css" rel="stylesheet">
	
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto+Condensed:400,400i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
	
	<link href="<?=LAYOUT?>css/style.css" rel="stylesheet" type="text/css"  media="all" />
	<link href="<?=LAYOUT?>css/responsiveslides.css" rel="stylesheet" >	 
	<link href="<?=LAYOUT?>css/blog.css" rel="stylesheet" >
	
	<link href="<?=LAYOUT?>api/owl.carousel/css/owl.carousel.min.css" rel="stylesheet" >
	<link href="<?=LAYOUT?>api/owl.carousel/css/owl.theme.default.min.css" rel="stylesheet" >
	
	<?php include_once('htm_css.php'); ?>

</head>	

<body>
	
	<?=ANALYTICS?>
	
	<?php include_once('htm_modal.php'); ?>
	
	<?php include_once('htm_topo.php'); ?>
	
	<?php include_once('htm_banners.php'); ?>
	


	<div id="corpo" class="content" style="padding-bottom: 40px;">
		<div class="container">

			<div class="row" >
				
				<div class="col-md-12">

					<h2 class="titulos" >PRODUTOS EM DESTAQUE <img src="<?=LAYOUT?>img/titulo_ico.png"></h2>

					<div id="produtos_inicial" style="padding-top:30px; ">

						<div class="owl-carousel owl-theme carrocel1" >
							<?php
							
							foreach ($produtos as $key => $value) {
								
								$endereco = DOMINIO.'produtos/detalhes/codigo/'.$value['codigo'];
								
								echo "
								<div class='item'>
								<div class='produtos_inicial_item' >
								<div class='produtos_inicial_img_div'>
								<a href='$endereco' >
								<img src='".$value['imagem']."' style='width:200px;'>
								</a>
								</div>
								<div class='produtos_inicial_titulo'><a href='$endereco' >".$value['titulo']."</a></div>
								<div class='produtos_inicial_previa'>".$value['previa']."</div>
								<div class='produtos_inicial_botao_div'><a href='$endereco' >sob consulta</a></div>
								</div>
								</div>
								";

							}
							?>
						</div>

					</div>

				</div>
				
			</div>
			
		</div>
	</div>



	<div class="content" style="background-color: #f5f5f5; ">
		<div class="container">		 

			<div class="row" >
				
				<div class="col-md-6">

					<h2 class="titulos" >SOBRE NÓS <img src="<?=LAYOUT?>img/titulo_ico2.png"></h2>

					<div class="quemsomos_inicial_caixa" >
						<div class="quemsomos_inicial_texto"><?=$quemsomos_texto?></div> 
						<div style="text-align: right;">
							<button type="button" class="quemsomos_inicial_botao" onclick="window.location='<?=DOMINIO?>quemsomos';">SAIBA MAIS </button>			 			
						</div>
					</div>

				</div>
				
				<div class="col-md-6">
					
					<h2 class="titulos" >PORTFÓLIO <img src="<?=LAYOUT?>img/titulo_ico2.png"></h2>
					
					<div id="trabalhos_inicial" style="padding-top:20px;">
						
						<div class="owl-carousel owl-theme carrocel2" >
							<?php
							
							foreach ($portfolio as $key => $value) {
								
								$endereco = DOMINIO.'portfolio';

								echo "<div class='item'><a href='$endereco'><img src='".$value['imagem']."' style='width:100%;'></a></div>";
								
							}

							?>
						</div>
						
					</div>
					
					<a class="botao_portfolio_inicial" href="<?=DOMINIO?>portfolio" >CONHECER MAIS</a>

				</div>
				
			</div>
			
		</div>
	</div>


	<div class="content" style="background-color: #fff; ">
		<div class="container">		 

			<div class="row" >
				
				<div class="col-md-12">
					
					<h2 class="titulos" >SERVIÇOS <img src="<?=LAYOUT?>img/titulo_ico.png"></h2>

					<div id="servicos_inicial" style="padding-top:30px; ">

						<div class="owl-carousel owl-theme carrocel3" >
							<?php

							foreach ($servicos as $key => $value) {

								$endereco = DOMINIO.'servicos/detalhes/codigo/'.$value['codigo'];

								echo "
								<div class='item'>
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
			
		</div>
	</div>


	<div id="parceiros" class="content parceiros_inicial" style="background-color: #f2f2f2; padding-bottom:50px;" >
		<div class="container">
			<div class="row" >
				<div class='col-md-12'>
					
					<h2 class="titulos" >NOSSOS CLIENTES <img src="<?=LAYOUT?>img/titulo_ico.png"></h2>
					
					<div style="margin-top:30px;">

						<div class="owl-carousel owl-theme carrocel4" >
							<?php
							
							foreach ($parceiros as $key => $value) {
								
								if($value['endereco']){

									echo "<div class='item parceiros'><a href='".$value['endereco']."' target='_blank' ><img src='".$value['imagem']."' ></a></div>";

								} else {

									echo "<div class='item parceiros'><a><img src='".$value['imagem']."' ></a></div>";
									
								}
								
							}
							?>
						</div>
						
					</div>

				</div>

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
		
		
		$('.carrocel1').owlCarousel({
			loop:true,
			margin:20,
			responsiveClass:true,
			callbacks:true,
			responsive:{
				0:{
					items:1
				},
				600:{
					items:3
				},
				1000:{
					items:4	             
				}
			}
		});

		$('.carrocel2').owlCarousel({
			loop:true,
			margin:30,
			responsiveClass:true,
			callbacks:true,
			responsive:{
				0:{
					items:1
				},
				600:{
					items:2
				},
				1000:{
					items:2   
				}
			}
		});

		$('.carrocel3').owlCarousel({
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

		$('.carrocel4').owlCarousel({
			loop:true,
			margin:30,
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
					items:5   
				}
			}
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
		
	});
</script>