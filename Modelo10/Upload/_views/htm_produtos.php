<?php require_once('_system/bloqueia_view.php'); ?>
<!DOCTYPE html>
<html>
<head>

	<meta http-equiv="Content-Type" charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

	<title>Produtos - <?=$_base['titulo_pagina']?></title>
	<link rel="shortcut icon" href="<?=$_base['favicon'];?>">

	<meta name="description" content="Produtos - <?=$_base['descricao']?>" />
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

	<div id="corpo" class="container" style="margin-bottom:-5px;">

		<div style="margin-bottom:50px; width: 100%;"></div>

		<div class="row" >
			<div class="col-md-12">
				<h2 class="titulos" >Produtos <img src="<?=LAYOUT?>img/titulo_ico.png"></h2>
			</div>
		</div>


		<div class="row" >

			<div class="col-md-3 col-sm-12">
				
				<div class="produtos_filtro_titulo">
					FILTRAR POR CATEGORIAS
					<div class="detalhes_canto"><div></div></div>
				</div>

				<div class="panel-group">
					<div class="panel panel-default">
						<?php
						
						foreach ($categorias as $key => $value) {

							if($value['codigo'] == $categoria_selecionada){
								$selecionado = " style='font-weight:bold; ' ";
							} else {
								$selecionado = "";
							}
							
							$n_filhos = 0;
							$filhos = "";
							foreach ($value['filhos'] as $key2 => $value2) {
								
								if($value2['codigo'] == $categoria_selecionada){
									$selecionado = " style='font-weight:bold; ' ";
								} else {
									$selecionado = "";
								}

								$endereco = DOMINIO."produtos/inicial/categoria/".$value2['codigo'];

								$filhos .= "<li class='subcategoria'><a href='$endereco' class='categoria_link' $selecionado >
								<span><img src='".LAYOUT."img/produtos_seta.png'></span>
								".$value2['titulo']."</a></li>";

								$n_filhos++;
							}
							
							if($n_filhos != 0){

								if($value['codigo'] == $categoria_selecionada){
									$selecionado = " style='font-weight:500; ' ";
								} else {
									$selecionado = "";
								}

								echo "
								<div class='panel-heading' >
								<h4 class='panel-title categorias' >
								<a data-toggle='collapse' data-parent='#accordian' href='#catepai_".$value['id']."' class='categoria_link' $selecionado >
								".$value['titulo']."
								</a>
								</h4>
								</div>
								";
								
								echo "<div id='catepai_".$value['id']."' class='panel-collapse' >
								<div class='panel-body' >
								<ul>";
								
								echo "$filhos";

								echo "</ul></div></div>";

							} else {

								$endereco = DOMINIO."produtos/inicial/categoria/".$value['codigo'];

								echo "
								<div class='panel-heading' >
								<h4 class='panel-title categorias' >
								<a href='".$endereco."' class='categoria_link' $selecionado >
								".$value['titulo']."
								</a>
								</h4>
								</div>
								";

							}

						}
						
						?>
					</div>
				</div>

				<div style="margin-top: 30px; width: 100%; padding: 15px; background-color: #333;">

					<div class="rodape_news_txt" style="font-size: 13px;">
						Cadastre seu e-mail, receba nossas ofertas e novidades em primeira mão:
					</div>

					<div style="margin-top:15px; padding-bottom:5px;">
						<div class="input-field">							
							<input type="text" name="news_email" id="news_email2" class="form_rodape" placeholder="Digite seu E-mail" />
							<button class="form_rodape_botao" onClick="abre_cadastro_news2();" >
								<i class="fa fa-angle-right">&nbsp;</i>
							</button>
							<div style="clear: both;"></div>
						</div>
					</div>

				</div>

			</div>


			<div class="col-md-9 col-sm-12">
				
				<div class="features_items"  style="margin-top:50px;">
					<?php
					
					$i = 1;
					$row = 1;
					foreach ($produtos as $key => $value) {
						
						if($row == 1){ echo "<div class='row' >"; }  
						
						$endereco = DOMINIO."produtos/detalhes/codigo/".$value['codigo'];
						
						echo "
						<div class='col-xs-12 col-sm-12 col-md-4' >
						
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
						
						if($row == 3){ echo "</div>"; $row = 1; } else {  $row++; }
						$i++;
					}
					
					if($row != 1){ echo "</div>"; }
					
					?>
				</div>


			</div>

		</div>



	</div>

	<div style="padding-top:70px;"></div>

	<?php include_once('htm_rodape.php'); ?>
	
</body>
</html>

<script src="https://code.jquery.com/jquery-2.2.4.min.js" type="text/javascript" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<script src="<?=LAYOUT?>js/jquery.easing.js"></script> 
<script src="<?=LAYOUT?>js/responsiveslides.min.js"></script>
<script src="<?=LAYOUT?>js/geral.js"></script>
<script>function dominio(){ return '<?=DOMINIO?>'; }</script>
<script>

	function abre_cadastro_news2(){
		var email = $('#news_email2').val();
		window.location='<?=DOMINIO?>cadastrar_email/inicial/email/'+email;
	}

</script>

<script type="text/javascript" src="<?=LAYOUT?>js/jquery.flexisel.js"></script>
<script type="text/javascript">
	$(window).load(function() {

		$("#flexisel_serv").flexisel({
			visibleItems: 4,
			animationSpeed: 500,
			autoPlay: true,
			autoPlaySpeed: 2000,
			pauseOnHover: true,
			enableResponsiveBreakpoints: true,
			infinite: true
		});
		
		var target_offset = $("#corpo").offset();
		var target_top = target_offset.top;
		$('html, body').animate({ scrollTop: target_top }, 500);
		
	});
</script>