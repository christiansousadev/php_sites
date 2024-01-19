<?php require_once('_system/bloqueia_view.php'); ?>
<!DOCTYPE html>
<html>
<head>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<link rel="shortcut icon" href="<?=$_base['imagem']['146955550242195'];?>">   
	<title><?=$_base['titulo_pagina']?></title>

	<meta name="description" content="<?=$_base['descricao']?>" />
	<meta property="og:description" content="<?=$_base['descricao']?>">
	<meta name="author" content="fabricadosite.com">
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

	<link href="<?=LAYOUT?>api/bootstrap-fileupload/bootstrap-fileupload.min.css" rel="stylesheet" />

	<?php // css alteravel pelo painel
	require_once('_css_padrao.php');
	require_once('_css_personalizado.php');
	require_once('_css_responsivo.php');
	?>

</head>
<body>

	<?php require_once('htm_modal.php'); ?>  

	<?php require_once('htm_topo.php'); ?>  

	<?php include_once('htm_banners.php'); ?>

	<div class="wrapper" >


		<div class="pacotes" id="pacotes"  >
			<div class="container">

				<div class="row">
					<div class="col-sm-12" >
						<div class="titulo_padrao" ><img src="<?=LAYOUT?>img/ico1.png" > VIAGENS</div>
					</div>
				</div>

				<div class="row"  >
					<div class="col-sm-12" >
						<div class="owl-carousel owl-theme" id="carrocel_pacotes" >
							<?php

							foreach ($pacotes as $key => $value) {  

								echo "
								<div class='item pacotes_item' >
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
								";

							}

							?>
						</div>
					</div>					
				</div>

			</div>
		</div>


		<div class="orcamentos" id="orcamentos"  >
			<div class="container">
				<form id="form_orcamento" name="form_orcamento" >

					<div class="row">
						<div class="col-sm-12" >
							<div class="titulo_padrao" ><img src="<?=LAYOUT?>img/ico2.png" > ORÇAMENTO</div>
							<div style="width: 100%; padding-top: 35px;"></div>
						</div>
					</div>

					<div class="row">

						<div class="col-sm-4" >
							<div>
								<label>E-MAIL</label>
								<input class="orcamentos_campos" type="text" placeholder="E-MAIL" name="email" >
							</div>
						</div>

						<div class="col-sm-5" >
							<div>
								<label>NOME</label>
								<input class="orcamentos_campos" type="text" placeholder="NOME" name="nome" >
							</div>
						</div>            

						<div class="col-sm-3" >
							<div>
								<label>TELEFONE</label>
								<input class="orcamentos_campos" type="text" placeholder="TELEFONE" name="fone" onKeyPress="Mascara(this,telefone)" onKeyDown="Mascara(this,telefone)" maxlength="15" >
							</div>
						</div>

					</div>

					<div class="row">

						<div class="col-sm-5" >
							<div>
								<label>PACOTE</label>
								<select name="pacote" class="orcamentos_campos_select" >
									<option value="" selected="" >SELECIONE</option>
									<?php

									foreach ($pacotes_orcamento as $key => $value) {

										echo "
										<option value='".$value['titulo']."' >".$value['titulo']."</option>
										";

									}

									?>
								</select>
							</div>
						</div>

						<div class="col-sm-3" >
							<div id="select_pessoas"   >
								<label>PESSOAS</label>
								<input type="text" name="pessoas" id="pessoas" class="orcamentos_campos" placeholder="PESSOAS" onClick="bloco_pessoas();" >
							</div>
							<div id="bloco_pessoas">

								<div style="margin-top:-15px; color:#f5811e; font-size:40px; padding-left:25px; text-align: left;"><i class="fas fa-sort-up"></i></div>
								
								<div style="padding-left:15px; padding-right: 15px;">

									<div class="bloco_pessoas_label">
										ADULTOS<span>A partir de 18 anos</span>
									</div>
									<div style="float: right; width:47%;">

										<div class="input-group-prepend">
											<button type="button" class="btn btn-sm bloco_pessoas_form" id="adultos_menos" ><i class="fa fa-minus"></i></button>
										</div>
										<input type="number" id="adultos_num" class="form-control form-control-sm bloco_pessoas_form" value="1" min="1" >
										<div class="input-group-prepend">
											<button type="button" class="btn btn-sm bloco_pessoas_form" id="adultos_mais" ><i class="fa fa-plus"></i></button>
										</div> 
										<div style="clear: both;"></div>
									</div>
									<div style="clear: both;"></div>

								</div>

								<div style="padding-left:15px; padding-right: 15px; margin-top: 10px;">

									<div class="bloco_pessoas_label">
										CRIANÇAS<span>Até 17 anos</span>
									</div>
									<div style="float: right; width:47%;">

										<div class="input-group-prepend">
											<button type="button" class="btn btn-sm bloco_pessoas_form" id="criancas_menos" ><i class="fa fa-minus"></i></button>
										</div>
										<input type="number" id="criancas_num" class="form-control form-control-sm bloco_pessoas_form" value="1" min="1" >
										<div class="input-group-prepend">
											<button type="button" class="btn btn-sm bloco_pessoas_form" id="criancas_mais" ><i class="fa fa-plus"></i></button>
										</div> 
										<div style="clear: both;"></div>
									</div>
									<div style="clear: both;"></div>

								</div>

								<div style="margin-top: 10px; padding-bottom: 20px; padding-right: 17px; text-align: right;">
									<input type="buttom" value="Aplicar" class="bloco_pessoas_botao" onClick="pessoas_aplicar()">
								</div>

							</div>
						</div>

						<div class="col-sm-4" >
							<div>
								<label>QUARTOS</label>
								<select name="quartos" class="orcamentos_campos_select" >
									<option value="1" selected="" >1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="6">6</option>
									<option value="7">7</option>
									<option value="8">8</option>
									<option value="9">9</option>
								</select>
							</div>
						</div>

					</div>

					<div class="row">
						<div class="col-sm-12" >
							<div>
								<label>TIRE SUAS DÚVIDAS</label>
								<textarea name="msg" class="orcamentos_campos_msg" placeholder="TIRE SUAS DÚVIDAS" ></textarea>
							</div>

							<div style="text-align: right; margin-top: 20px;">
								<button type="button" class="orcamentos_botao" onClick="envia_orcamento();" >ENVIAR</button> 
							</div>

						</div>
					</div>

				</form>
			</div>
		</div>


		<div id="parceiros" class="parceiros" >
			<div class="container">

				<div class="row">
					<div class="col-sm-12" >
						<div class="titulo_padrao" ><img src="<?=LAYOUT?>img/ico3.png" > PARCEIROS</div>
						<div style="width: 100%; padding-top: 35px;"></div>
					</div>
				</div>

				<div class="row">
					<div class="col-sm-12" >

						<div class="owl-carousel owl-theme" id="parceiros_carrocel" style="padding-top:20px;" >
							<?php

							foreach ($parceiros as $key => $value) {

								if($value['endereco']){
									$destino = " href='".$value['endereco']."' target='_blank' ";
								} else {
									$destino = "";
								}
								
								echo "
								<div class='item parceiros_item' >
								<a $destino >
								<img src='".$value['imagem']."' >
								</a>
								</div>
								";

							}

							?>
						</div>

					</div>
				</div>

			</div>
		</div>


		<div id="galeria" class="galeria" >
			<div class="container">

				<div class="row">
					<div class="col-sm-12" >
						<div class="titulo_padrao" style="color:<?=$_base['cor'][8]?>;" ><img src="<?=LAYOUT?>img/ico4.png" > ÚLTIMAS VIAGENS</div>
						<div style="width: 100%; padding-top:25px;"></div>
					</div>
				</div>

				<div class="row">
					<div class="col-sm-12" >

						<div id="galeria_carrocel" class="owl-carousel owl-theme" >
							<?php

							$n = 1;
							foreach ($galeria as $key => $value) {

								if($n <= 8){

									$endereco = DOMINIO."galeria/detalhes/codigo/".$value['codigo'];

									echo "
									<a href='".$endereco."' class='item galeria_inicial_item' id='galeria_inicial_item_".$n."'  >

									<div class='galeria_inicial_item_img' style='background-image:url(".$value['imagem_principal'].");' ></div>
									<div class='galeria_inicial_item_titulo' id='galeria_inicial_item_titulo".$n."' >".$value['titulo']."<span>CONFIRA FOTOS</span></div>

									</a>
									";

								}

								$n++;
							}

							?>
						</div>

					</div>
				</div>

			</div>
		</div>


		<div id="cadastro_email" class="cadastro_email" >
			<div class="container">

				<div class="row">
					<div class="col-sm-12" >
						<div class="titulo_padrao" style="color:#000;" ><img src="<?=LAYOUT?>img/ico3.png" > DESCONTOS</div>
						<div style="width: 100%; padding-top: 50px;"></div>
					</div>
				</div>

				<div class="row">

					<div class="col-sm-4" >
						<div class="cadastro_email_texto" >Inscreva-se para receber ofertas exclusivas</div>
					</div>

					<div class="col-sm-8" >
						<form name="cadastro_email_form" id="cadastro_email_form" >

							<div class="row">

								<div class="col-sm-6" >
									<div class="cadastro_email_div_campos" >
										<input class="orcamentos_campos cadastro_email_campos" type="text" placeholder="NOME" name="nome" >
									</div>
								</div>
								<div class="col-sm-6" >
									<div class="cadastro_email_div_campos" > 
										<input class="orcamentos_campos cadastro_email_campos" type="text" placeholder="E-MAIL" name="email" >
									</div>
									<div class="cadastro_email_div_botao" >
										<button class="cadastro_email_botao" type="button" onClick="cadastrar_email();" >Quero recebe-las</button>
									</div>
								</div>

							</div>

						</form>
					</div>

				</div>

			</div>
		</div>


		<div id="contato" class="contato" >
			<div class="container">

				<form name="fale_conosco_form" action="<?=DOMINIO?>faleconosco/enviar" method="post" enctype="multipart/form-data" >

					<div class="row">
						<div class="col-sm-12" >
							<div class="titulo_padrao" style="color:#fff;" ><img src="<?=LAYOUT?>img/ico5.png" > FALE CONOSCO</div>
							<div style="width: 100%; padding-top:40px;"></div>
						</div>
					</div>

					<div class="row">

						<div class="col-sm-5" >

							<div style="margin-top:5px;"><?=$mapa?></div>

							<div style="margin-top: 20px;">
								<div class="form-group">
									<label>ANEXO</label>
									<div class="fileupload fileupload-new" data-provides="fileupload">
										<div class="input-append">
											<div class="uneditable-input">
												<i class="fa fa-file fileupload-exists"></i>
												<span class="fileupload-preview"></span>
											</div>
											<span class="btn btn-default btn-file">
												<span class="fileupload-exists">Alterar</span>
												<span class="fileupload-new">Anexar arquivo</span>
												<input type="file" name="arquivo" />
											</span>
											<a href="#" class="btn btn-default fileupload-exists" data-dismiss="fileupload">Remover</a>
										</div>
									</div>
								</div>
							</div>

						</div>

						<div class="col-sm-7" >

							<div style="margin-top:0px;">
								<label>E-MAIL</label>
								<input class="orcamentos_campos contato_campos" type="text" name="email" >
							</div>

							<div style="margin-top: 20px;">
								<label>NOME</label>
								<input class="orcamentos_campos contato_campos" type="text" name="nome" >
							</div>            

							<div style="margin-top: 20px;">
								<label>TELEFONE</label>
								<input class="orcamentos_campos contato_campos" type="text" name="fone" onKeyPress="Mascara(this,telefone)" onKeyDown="Mascara(this,telefone)" maxlength="15" >
							</div>

							<div style="margin-top: 20px;">
								<label>MENSAGEM</label>
								<textarea name="msg" class="orcamentos_campos_msg contato_campos contato_msg"  ></textarea>
							</div>

							<div class="cadastro_email_div_botao" >
								<button class="contato_botao" type="submit" >ENVIAR</button>
							</div>

						</div>

					</div>

				</form>
			</div>
		</div>
		
		
		<div id="instagram" class="instagram" >
			<div class="container">

				<div class="row">

					<div class="col-sm-3" >
						<div>
							<img src="<?=LAYOUT?>img/instagram.png" >
						</div>
					</div>

					<div class="col-sm-9" >
						<div style="text-align: left;"><?=$instagram?></div>
					</div>

				</div>

			</div>
		</div>


	</div>

	<?php include_once('htm_rodape.php'); ?>

	<div class="fixed-menu"></div>

	<script type="text/javascript" src="<?=LAYOUT?>js/jquery.min.js"></script>	
	<script type="text/javascript" src="<?=LAYOUT?>js/jquery-ui.min.js"></script>    
	<script type="text/javascript" src="<?=LAYOUT?>js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?=LAYOUT?>js/modules.js"></script>	
	<script type="text/javascript" src="<?=LAYOUT?>js/theme.js"></script>
	<script type="text/javascript" src="<?=LAYOUT?>js/jquery.themepunch.plugins.min.js"></script>
	<script type="text/javascript" src="<?=LAYOUT?>js/jquery.themepunch.revolution.min.js"></script>
	<script type="text/javascript" src="<?=LAYOUT?>api/bootstrap-fileupload/bootstrap-fileupload.min.js"></script>
	<script type="text/javascript" src="<?=LAYOUT?>js/funcoes.js"></script>
	<script type="text/javascript">function dominio(){ return "<?=DOMINIO?>"; }</script>

	<script type="text/javascript">


		function bloco_pessoas(){
			$('#bloco_pessoas').show(100);
		}

		function pessoas_aplicar(){

			var criancas = $('#criancas_num').val();
			var adultos = $('#adultos_num').val();

			$('#pessoas').val(adultos+' adultos e '+criancas+' crianças');
			$('#bloco_pessoas').hide(100);
		}

		function envia_orcamento(){

			$('#modal_conteudo').html("<div style='text-align:center;'><img src='"+dominio()+"_views/img/loading.gif' style='width:25px;'></div>");
			$('#janela_modal').modal('show');

			var dados = $('#form_orcamento').serialize();

			$.post('<?=DOMINIO?>orcamentos/enviar', dados, function(data){
				if(data){
					$('#modal_conteudo').html(data);
				}
			});

		}

		function cadastrar_email(){

			$('#modal_conteudo').html("<div style='text-align:center;'><img src='"+dominio()+"_views/img/loading.gif' style='width:25px;'></div>");
			$('#janela_modal').modal('show');

			var dados = $('#cadastro_email_form').serialize();

			$.post('<?=DOMINIO?>cadastrar_email/enviar', dados, function(data){
				if(data){
					$('#modal_conteudo').html(data);
				}
			});

		}



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

	<script type="text/javascript" src="<?=LAYOUT?>api/rslides/responsiveslides.min.js"></script> 

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

	<script src="<?=LAYOUT?>api/OwlCarousel2-2.3.4/owl.carousel.min.js"></script>

	<script>
		$(document).ready(function(){

			$("#carrocel_pacotes").owlCarousel({
				loop:true,
				margin:0,
				nav:false,
				callbacks:true,
				responsive:{
					0:{
						items:1
					},
					600:{
						items:2
					},
					1000:{
						items:3
					}
				}
			});

			$("#parceiros_carrocel").owlCarousel({
				loop:true,
				margin:20,
				nav:false,
				callbacks:true,
				responsive:{
					0:{
						items:2
					},
					600:{
						items:3
					},
					1000:{
						items:5
					}
				}
			});

			$("#galeria_carrocel").owlCarousel({
				loop:true,
				margin:20,
				nav:false,
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

		});
	</script>

	<script type="text/javascript">
		$(document).ready(function(){
			
			$('#adultos_num').prop('disabled', true);
			$('#adultos_mais').click(function(){
				$('#adultos_num').val(parseInt($('#adultos_num').val()) + 1 );
			});
			$('#adultos_menos').click(function(){
				$('#adultos_num').val(parseInt($('#adultos_num').val()) - 1 );
				if ($('#adultos_num').val() < 0) {
					$('#adultos_num').val(0);
				}
			});

			$('#criancas_num').prop('disabled', true);
			$('#criancas_mais').click(function(){
				$('#criancas_num').val(parseInt($('#criancas_num').val()) + 1 );
			});
			$('#criancas_menos').click(function(){
				$('#criancas_num').val(parseInt($('#criancas_num').val()) - 1 );
				if ($('#criancas_num').val() < 0) {
					$('#criancas_num').val(0);
				}
			});

		});
	</script>

</body>
</html>