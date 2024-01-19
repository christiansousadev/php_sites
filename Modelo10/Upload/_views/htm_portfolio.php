<?php require_once('_system/bloqueia_view.php'); ?>
<!DOCTYPE html>
<html>
<head>

	<meta http-equiv="Content-Type" charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

	<title>Portfólio - <?=$_base['titulo_pagina']?></title>
	<link rel="shortcut icon" href="<?=$_base['favicon'];?>">

	<meta name="description" content="Portfólio - <?=$_base['descricao']?>" />
	<meta property="og:description" content="<?=$_base['descricao']?>">
	<meta name="author" content="mrcloud.com.br">
	<meta name="classification" content="Website" />
	<meta name="robots" content="index, follow">
	<meta name="Indentifier-URL" content="<?=DOMINIO?>" />
	
	<link rel="stylesheet" href="<?=LAYOUT?>api/bootstrap/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="<?=LAYOUT?>api/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
	
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto+Condensed:400,400i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

	<link href="<?=LAYOUT?>css/style.css" rel="stylesheet" type="text/css"  media="all" />
	<link href="<?=LAYOUT?>api/photobox-master/photobox/photobox.css" rel="stylesheet">

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
				<h2 class="titulos" >Portfólio <img src="<?=LAYOUT?>img/titulo_ico.png"></h2>
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

								$endereco = DOMINIO."portfolio/inicial/categoria/".$value2['codigo'];

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

								$endereco = DOMINIO."portfolio/inicial/categoria/".$value['codigo'];

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

			</div>


			<div class="col-md-9 col-sm-12">
				
				<div id="gallery" class="features_items portfolio_imagens"  style="margin-top:50px;">
					<?php
					
					$n = 1;
					foreach ($portfolio as $key => $value2) {			        		

						if($n == 1){ echo "<div class='row' >"; }

						echo "
						<div class='col-md-3 col-sm-12'>
						<a href='".$value2['imagem']."' class='portfolio_imagens_item' ><img src='".$value2['imagem']."'></a>
						</div>
						";

						if($n == 4){ echo "</div>"; $n = 1; } else { $n++; }

					}
					
					if($n != 1){ echo "</div>"; }
					
					?>
				</div>

				<div class="pi-pagenav" style="padding-top:10px; margin-bottom:30px; " >
					<?=$paginacao?>
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

<script>function dominio(){ return '<?=DOMINIO?>'; }</script>

<script src="<?=LAYOUT?>api/photobox-master/photobox/jquery.photobox.js"></script>
<script>
	$(function(){
		$('#gallery').photobox('a',{ time:0 });
	});
</script>

<script src="<?=LAYOUT?>js/geral.js"></script>