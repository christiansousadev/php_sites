<?php require_once('_system/bloqueia_view.php'); ?>
<!DOCTYPE html>
<html>
<head>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<link rel="shortcut icon" href="<?=$_base['imagem']['146955550242195'];?>">   
	<title>Pacotes - <?=$_base['titulo_pagina']?></title>

	<link href="<?=LAYOUT?>css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="<?=LAYOUT?>css/theme.css" rel="stylesheet" type="text/css" media="all" />
	<link href="<?=LAYOUT?>css/revslider.css" rel="stylesheet" type="text/css" media="all" />
	<link href="<?=LAYOUT?>css/custom.css" rel="stylesheet" type="text/css" media="all" />
	<link href="<?=LAYOUT?>api/OwlCarousel2-2.3.4/assets/owl.carousel.min.css" rel="stylesheet" type="text/css">      
	<link href="<?=LAYOUT?>api/OwlCarousel2-2.3.4/assets/owl.theme.default.css" rel="stylesheet" type="text/css">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,600i,700,700i,800|Roboto:400,400i,500,500i,700,700i,900" rel="stylesheet">

	<link href="<?=LAYOUT?>css/responsiveslides.css" rel="stylesheet" >

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

	<div class="wrapper" id="corpo" >



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
							
							<div style="padding-top: 70px;">

								<div class="row">
									<div class="col-sm-8" >

										<div style="margin-top:0px;">
											<?php

											if($numitems == 0){

												echo "<div style='text-align:center; padding-top:50px; padding-bottom:50px; font-size:16px; color:#666;' >Nenhum resultado encontrado!</div>";

											} else {

												$n = 1;
												foreach ($lista as $key => $value) {  

													if($n == 1){ echo "<div class='row' >"; }

													echo "
													<div class='col-sm-6' >
													<div class='item pacotes_item pacotes_interno' >

														<div class='pacotes_item_img' style='background-image:url(".$value['imagem_princial'].");' ></div>
														<h3>".$value['titulo']."</h3>
														
														<div class='destinos_div' >
													";

													foreach ($value['destinos'] as $key2 => $value2) {

														echo "
														<div class='pacotes_item_destinos' >
														<i class='fas fa-caret-right'></i> ".$value2['nome']."
														</div>
														";

													}

													echo "
														</div>
														
														<div style='clear: both;' ></div>
														
														<div class='pacotes_item_valor' >a partir de <span>R$ ".$value['valor']."</span> MENSAIS</div>

														<div style='text-align:center;' >
															<a href='".$value['endereco']."' class='pacotes_item_botao'>SAIBA MAIS</a>
														</div>

													</div>
													</div>
													";

													if($n == 2){ echo "</div>"; $n = 1; } else { $n++; }

												}

												if($n != 1){ echo "</div>"; }

											}

											?>
										</div>

										<div class="paginacao" >
											<?=$paginacao?>
										</div>

									</div>

									<div class="col-sm-4" >
										<div class="blog_divisao_lateral" >
											<?php include_once('htm_pacotes.lateral.php'); ?>
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

		});
	</script>

</body>
</html>