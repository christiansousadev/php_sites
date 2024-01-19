<?php require_once('_system/bloqueia_view.php'); ?>
<!DOCTYPE html>
<html>
<head>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<link rel="shortcut icon" href="<?=$_base['imagem']['146955550242195'];?>">   
	<title><?=$data->titulo?> - <?=$_base['titulo_pagina']?></title>

	<meta name="description" content="<?=$data->titulo?> - <?=$_base['descricao']?>" />
	<meta property="og:description" content="<?=$_base['descricao']?>">
	<meta name="author" content="ComprePronto.com.br">
	<meta name="classification" content="Website" />
	<meta name="robots" content="index, follow">
	<meta name="Indentifier-URL" content="<?=DOMINIO?>" />

	<link href="<?=LAYOUT?>css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="<?=LAYOUT?>css/theme.css" rel="stylesheet" type="text/css" media="all" />
	<link href="<?=LAYOUT?>css/revslider.css" rel="stylesheet" type="text/css" media="all" />
	<link href="<?=LAYOUT?>css/custom.css" rel="stylesheet" type="text/css" media="all" />
	<link href="<?=LAYOUT?>api/OwlCarousel2-2.3.4/assets/owl.carousel.min.css" rel="stylesheet" type="text/css">      
	<link href="<?=LAYOUT?>api/OwlCarousel2-2.3.4/assets/owl.theme.default.css" rel="stylesheet" type="text/css">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,600i,700,700i,800|Roboto:400,400i,500,500i,700,700i,900" rel="stylesheet">
	<link href="<?=LAYOUT?>css/responsiveslides.css" rel="stylesheet" >
	<link href="<?=LAYOUT?>api/photobox-master/photobox/photobox.css" rel="stylesheet">

	<?php // css alteravel pelo painel
	require_once('_css_padrao.php');
	require_once('_css_personalizado.php');
	require_once('_css_responsivo.php');
	?>

</head>
<body>

	<?php require_once('htm_modal.php'); ?>  

	<?php require_once('htm_topo2.php'); ?>  

	<?php include_once('htm_banners.php'); ?>



	<div class="wrapper" id="corpo" style="padding-top: 0px;" >

		<?php

		foreach ($_base['listaredes'] as $key => $value) {
						
			if( ($value['titulo'] == "Whatsapp") OR ($value['titulo'] == "whatsapp") OR ($value['titulo'] == "Whats") OR ($value['titulo'] == "whats") OR ($value['codigo'] == '154352001097460') ){
				
				echo "
				<div class='whatsapp_lateral' >
				<a href='".$value['endereco']."' target='_blank' >
				<img src='".LAYOUT."img/whats.png' >
				</a>
				</div>
				";
			}
		}

		?>

		<div style="background-color:#ddd; width: 100%; height:34px; margin-bottom: 70px;">
			<div class="container">
				<div class="row">
					<div class="col-sm-12" >
						<div style='color:#000; padding:5px;' ><a href="<?=DOMINIO?>" style='color:#000;' >Início</a> > <strong>Viagens</strong></div>
					</div>
				</div>
			</div>
		</div>

		<div class="container">

			<div class="row">
				<div class="col-sm-12" >
					<div class="titulo_padrao" ><img src="<?=LAYOUT?>img/ico1.png" > PACOTES</div>
				</div>
			</div>

			<div class="content_block row no-sidebar">
				<div class="fl-container">
					<div class="posts-block">
						<div class="contentarea"> 

							<div style="margin-top:50px;">

								<div class="row">
									<div class="col-sm-8" >




										<div class="social" >
											<ul>
												<li>
													<a href="http://www.facebook.com/sharer.php?u=<?=$endereco_postagem?>" class="facebook" target="_blank" title="Compartilhar via Facebook"><i class="fab fa-facebook"></i></a>
												</li>
												<li>
													<a href="http://twitter.com/intent/tweet?text=<?=$data->titulo?>&url=<?=$endereco_postagem?>" class="twitter" target="_blank" title="Compartilhar via Twitter"><i class="fab fa-twitter"></i></a>
												</li>
												<li>
													<a href="https://plus.google.com/share?url=<?=$endereco_postagem?>" target="_blank" class="googleplus" title="Compartilhar via Google+"><i class="fab fa-google-plus"></i></a>
												</li>
												<li>
													<a href="http://linkedin.com/shareArticle?mini=true&amp;url=<?=$endereco_postagem?>" target="_blank" class="linkedin" title="Compartilhar via LinkedIn"><i class="fab fa-linkedin"></i></a>
												</li>
											</ul>
											<div style="clear: both;"></div>
										</div>


										<div class="slider_container">
											<ul id="gallery" style="text-align: center; margin-top: 20px;" > 
												<?php

												foreach ($imagens as $key => $value) {

													echo "
													<li class='pacotes_imagem_interna' >              
													<a href='".$value['imagem_g']."' ><img src='".$value['imagem_g']."' ></a>
													</li>
													";

												}

												?>
											</ul> 
										</div>


										<div style="text-align: left; font-weight: bold; font-size: 20px;  padding-top:30px; color:#666;">DESCRIÇÃO:</div>

										<div class="pacotes_descricao" >
											<?=$data->descricao?>
										</div>

										<div style="margin-top: 50px;" >
											<input type='button' value='VOLTAR' class='botao_padrao' onClick="history.go(-1)" >
										</div>

									</div>

									<div class="col-sm-4" >

										<h1 class='pacotes_titulo_interno' ><?=$data->titulo?></h1>

										<div style="text-align: left; font-weight: bold; font-size:18px; color:#666; margin-top: 20px; padding-top:20px; border-top:1px solid #ccc;">
											<span style="display: inline-block; padding-right: 10px; font-size: 26px; color:#ccc;"><i class="fas fa-map-marked-alt"></i></span> DESTINOS</div>

											<div style="padding-top: 20px;">
												<?php

												foreach ($destinos as $key2 => $value2) {

													echo "
													<div class='pacotes_item_destinos' style='width:100%; margin-left:0px;' >
													<i class='fas fa-caret-right'></i> ".$value2['nome']."
													</div>
													";

												}

												?>
											</div>
											<div style="clear: both;"></div>

											<div style="text-align: left; font-weight: bold; font-size:18px; color:#666; margin-top: 20px; padding-top:20px; border-top:1px solid #ccc;">
												<span style="display: inline-block; padding-right: 10px; font-size:26px; color:#ccc;">
													<i class="fas fa-plane-departure"></i></span> SAIDA</div>
													<div style="margin-top: 15px; font-size: 16px; color:#000;"><?=$data->saida?></div>

													<div style="text-align: left; font-weight: bold; font-size:18px; color:#666; margin-top: 20px; padding-top:20px; border-top:1px solid #ccc;">
														<span style="display: inline-block; padding-right: 10px; font-size: 26px; color:#ccc;">
															<i class="far fa-credit-card"></i></span> VALOR</div>
															<div style="margin-top: 15px; font-weight: bold; font-size: 20px; color:red;">R$ <?=$valor?></div>

															<div style="margin-top: 20px; padding-top:20px; border-top:1px solid #ccc; ">
																<input type="button" class="botao_padrao" value="ENTRE EM CONTATO" onclick="window.location='<?=DOMINIO?>index/#contato';" >
															</div>

														</div>

													</div>

												</div>

											</div>
										</div>

									</div>
								</div>
							</div>



						</div>

						<?php include_once('htm_rodape2.php'); ?>

						<div class="fixed-menu"></div>

						<script type="text/javascript" src="<?=LAYOUT?>js/jquery.min.js"></script>	
						<script type="text/javascript" src="<?=LAYOUT?>js/jquery-ui.min.js"></script>    
						<script type="text/javascript" src="<?=LAYOUT?>js/bootstrap.min.js"></script>
						<script type="text/javascript" src="<?=LAYOUT?>js/modules.js"></script>	
						<script type="text/javascript" src="<?=LAYOUT?>js/theme.js"></script>
						<script type="text/javascript" src="<?=LAYOUT?>js/jquery.themepunch.plugins.min.js"></script>
						<script type="text/javascript" src="<?=LAYOUT?>js/jquery.themepunch.revolution.min.js"></script>
						<script src="<?=LAYOUT?>js/responsiveslides.min.js"></script>
						<script type="text/javascript" src="<?=LAYOUT?>js/funcoes.js"></script>
						<script type="text/javascript">function dominio(){ return "<?=DOMINIO?>"; }</script>

						<script type="text/javascript">

							jQuery(document).ready(function() {
								"use strict";                    
								jQuery('.fullscreen_slider').show().revolution({
									delay: 5000,
									startwidth: 1366,
									startheight: 427,
									fullWidth:"on",
									fullScreen:"off",
									navigationType:"bullet",
									fullScreenOffsetContainer: ".main_header",
									fullScreenOffset: ""
								});
							});

						</script>

						<script type="text/javascript">
							$('a.scrollSuave').on('click', function(event) {

								var target = $( $(this).attr('href') );

								if( target.length ) {
									event.preventDefault();
									$('html, body').animate({
										scrollTop: target.offset().top
									}, 500);
								}

							});
						</script>

						<script>
							$(function (){

								var target_offset = $("#corpo").offset();
								var target_top = target_offset.top;
								$('html, body').animate({ scrollTop: target_top }, 500);

								$("#slider").responsiveSlides({
									auto: true,
									pager: false,
									nav: true,
									speed: 500,
									prevText: "",
									nextText: "", 
									before: function () {
										$('.events').append("<li>before event fired.</li>");
									},
									after: function () {
										$('.events').append("<li>after event fired.</li>");
									}
								});

								$("#gallery").responsiveSlides({
									auto: true,
									pager: false,
									nav: true,
									speed: 500,
									prevText: "<i class='fas fa-chevron-left'></i>",
									nextText: "<i class='fas fa-chevron-right'></i>", 
									before: function () {
										$('.events').append("<li>before event fired.</li>");
									},
									after: function () {
										$('.events').append("<li>after event fired.</li>");
									}
								});

							});
						</script>

						<script src="<?=LAYOUT?>api/photobox-master/photobox/jquery.photobox.js"></script>

						<script>		
							$(function(){
								$('#gallery').photobox('a',{ time:0 });
							});
						</script>

					</body>
					</html>