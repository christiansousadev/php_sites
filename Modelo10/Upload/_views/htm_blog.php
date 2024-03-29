<?php require_once('_system/bloqueia_view.php'); ?>
<!DOCTYPE html>
<html>
<head>

	<meta http-equiv="Content-Type" charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Blog - <?=$_base['titulo_pagina']?></title>
	<link rel="shortcut icon" href="<?=$_base['favicon'];?>">

	<meta name="description" content="Blog - <?=$_base['descricao']?>" />
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
	<link href="<?=LAYOUT?>css/page-nav.css" rel="stylesheet" >
	<link href="<?=LAYOUT?>css/images.css" rel="stylesheet" >
	<link href="<?=LAYOUT?>css/blog.css" rel="stylesheet" >

	<?php include_once('htm_css.php'); ?>

</head>
<body>	

	<?=ANALYTICS?>
	
	<?php include_once('htm_modal.php'); ?>
	
	<?php include_once('htm_topo.php'); ?>

	<?php include_once('htm_banners.php'); ?>
	
	<div id="corpo"  style="position: relative; width: 100%; padding-top:70px;" >

		<div class="container">
			<div class="row">

				<div class="col-xs-12 col-sm-8 col-md-8" >
					
					<div>
						<?php
						
						if($numitems == 0){
							
							echo "<div class='blog_nenhumresultado' >Nenhum resultado encontrado!</div>";
							
						} else {

							foreach ($noticias as $key => $value) {
								
								$endereco_not = $value['endereco'];

							//titulo sempre aparece
								echo "
								<h2 class='blog_lista_titulo' >
								<a href='$endereco_not' class='blog_lista_titulo' >".$value['titulo']."</a>
								</h2>
								";

								$dia = "<li><i class='fa fa-aw fa-calendar-o' ></i> ".$value['data']."</li>";
								
							//meta abaixo do titulo
								echo "
								<ul class='blog_lista_meta' >							 
								$dia
								<li><i class='fa fa-folder-open' ></i> ".$value['categoria']."</li>
								";
								if($value['autor']){
									echo "<li><i class='fa fa-user' ></i> ".$value['autor']."</li>";
								}
								echo "
								</ul>
								";

							//mostra imagem se tiver imagem													
								if($value['imagem']){

									echo "
									<div class='pi-img-w pi-img-round-corners pi-img-shadow-light pi-margin-bottom-20' >
									<a href='$endereco_not' >

									<div class='blog_imagem_principal' style='background-image:url(".$value['imagem'].");' ></div>
									
									<span class='pi-img-overlay pi-no-padding pi-img-overlay-dark' >
									<span class='pi-caption-centered' >
									<span>
									<span class='pi-caption-icon pi-caption-scale icon-plus' style='font-size:20px; padding-top:1px; background:rgba(0,0,0,0.7);' >
									<i class='fa fa-plus' ></i>
									</span>
									</span>
									</span>
									</span>

									</a>
									</div>
									";

								}							

								echo "
								<div class='blog_lista_previa'>
								".$value['previa']."
								</div>
								";
								
							//botao de ler mais e separador
								echo "
								<div><a class='botao_padrao hvr-float-shadow' href='$endereco_not' >Leia mais</a></div>
								<div style='padding-top:20px; margin-bottom:25px;'><hr></div>
								";

							}
						}

						?>
					</div>
					
					<div class="pi-pagenav" style="padding-top:10px; margin-bottom:30px; " >
						<?=$paginacao?>
					</div>
					
				</div>

				<div class="col-xs-12 col-sm-4 col-md-4" >
					<div class="blog_divisao_lateral" >
						<?php include_once('htm_blog.lateral.php'); ?>
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

<script src="<?=LAYOUT?>js/responsiveslides.min.js"></script>
<script src="<?=LAYOUT?>js/geral.js"></script>

<script type="text/javascript">
	$(window).load(function() {

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