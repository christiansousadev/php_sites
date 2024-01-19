<?php require_once('_system/bloqueia_view.php'); ?>
<!DOCTYPE html>
<html>
<head>

	<meta http-equiv="Content-Type" charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

	<title>Orçamento - <?=$_base['titulo_pagina']?></title>
	<link rel="shortcut icon" href="<?=$_base['favicon'];?>">

	<meta name="description" content="Orçamento - <?=$_base['descricao']?>" />
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
				<h2 class="titulos" >Orçamento <img src="<?=LAYOUT?>img/titulo_ico.png"></h2>
			</div>
		</div>

		
		<div class="row" >

			<div class="col-md-5 col-sm-12">
				<div class="orcamento_txt1">DADOS PESSOAIS</div>
			</div>
			<div class="col-md-7 col-sm-12">
				<div class="orcamento_txt2">Após enviar o orçamento entraremos em contato.</div>
			</div>

		</div>

		<div class="row" >

			<div class="col-md-6 col-sm-12">
				<div class="form-group">
					<input type="text" class="form-control form_orcamento" name="nome" placeholder="NOME COMPLETO" required="required" onblur="atualizacampo('nome', this.value);" value="<?=$nome?>" />
				</div>
			</div>
			<div class="col-md-3 col-sm-12">
				<div class="form-group">
					<input type="text" class="form-control form_orcamento" name="fone" placeholder="TELEFONE" required="required" onblur="atualizacampo('fone', this.value);" value="<?=$fone?>" onkeypress="Mascara(this,telefone)" onKeyDown="Mascara(this,telefone)" maxlength="15" />
				</div>
			</div>
			<div class="col-md-3 col-sm-12">
				<div class="form-group">
					<input type="text" class="form-control form_orcamento" name="celular" placeholder="CELULAR" required="required" onblur="atualizacampo('celular', this.value);" value="<?=$celular?>" onkeypress="Mascara(this,telefone)" onKeyDown="Mascara(this,telefone)" maxlength="15" />
				</div>
			</div>

		</div>

		<div class="row" >

			<div class="col-md-4 col-sm-12">
				<div class="form-group">
					<input type="text" class="form-control form_orcamento" name="email" placeholder="E-MAIL" required="required" onblur="atualizacampo('email', this.value);" value="<?=$email?>" />
				</div>
			</div>
			<div class="col-md-4 col-sm-12">
				<div class="form-group">
					<input type="text" class="form-control form_orcamento" name="endereco" placeholder="ENDEREÇO" required="required" onblur="atualizacampo('endereco', this.value);" value="<?=$endereco?>" />
				</div>
			</div>
			<div class="col-md-1 col-sm-12">
				<div class="form-group">
					<input type="text" class="form-control form_orcamento" name="numero" placeholder="Nº" required="required" onblur="atualizacampo('numero', this.value);" value="<?=$numero?>" />
				</div>
			</div>
			<div class="col-md-3 col-sm-12">
				<div class="form-group">
					<input type="text" class="form-control form_orcamento" name="bairro" placeholder="BAIRRO" required="required" onblur="atualizacampo('bairro', this.value);" value="<?=$bairro?>" />
				</div>
			</div>

		</div>

		<div class="row" >
			<div class="col-md-3 col-sm-12">
				<div class="form-group">
					<input type="text" class="form-control form_orcamento" name="cep" placeholder="CEP" required="required" onkeypress="Mascara(this,ceppp)" onKeyDown="Mascara(this,ceppp)" size="9" maxlength="9" onblur="atualizacampo('cep', this.value);" value="<?=$cep?>" />
				</div>
			</div>
			<div class="col-md-5 col-sm-12">
				<div class="form-group">
					<input type="text" class="form-control form_orcamento" name="cidade" placeholder="CIDADE" required="required" onblur="atualizacampo('cidade', this.value);" value="<?=$cidade?>" />
				</div>
			</div>

			<div class="col-md-4 col-sm-12">
				<div class="form-group">
					<input type="text" class="form-control form_orcamento" name="metragem" placeholder="METRAGEM" required="required" onblur="atualizacampo('metragem', this.value);" value="<?=$metragem?>" />
				</div>
			</div>

		</div>

		<div class="row" >


			<div class="col-md-9 col-sm-12">
				
				<div class="features_items"  style="margin-top:50px;">
					<?php

					$i = 1;
					$row = 1;
					foreach ($produtos as $key => $value) {

						if($row == 1){ echo "<div class='row' >"; }

						echo "
						<div class='col-xs-12 col-sm-12 col-md-4' >
						<div class='produtos_inicial_item' >
						<div class='produtos_inicial_img_div'>
						<img src='".$value['imagem']."' style='width:200px;'>
						</div>
						<div class='produtos_inicial_titulo'><a>".$value['titulo']."</a></div>
						<div class='produtos_inicial_previa'>".$value['previa']."</div>
						<div id='acao_".$value['codigo']."' >
						";

						if(!$value['sel']){
							echo "<div class='botao_orcamento_add' ><a onclick=\"adicionar('".$value['codigo']."');\" >adicionar</a></div>";
						} else {
							echo "<div class='botao_orcamento_remover'><a onclick=\"remover('".$value['codigo']."');\" >remover</a></div>";
						}

						echo "
						</div>
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

								$endereco = DOMINIO."orcamento/inicial/categoria/".$value2['codigo'];

								$filhos .= "
								<li class='subcategoria'><a href='$endereco' class='categoria_link' $selecionado >
								<span><img src='".LAYOUT."img/produtos_seta.png'></span>
								".$value2['titulo']."</a>
								</li>
								";

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

								echo "
								<div id='catepai_".$value['id']."' class='panel-collapse' >
								<div class='panel-body' >
								<ul>";
								echo "$filhos";
								echo "</ul></div></div>";

							} else {

								$endereco = DOMINIO."orcamento/inicial/categoria/".$value['codigo'];

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

		</div>

		<div class="row" >
			
			<div class="col-md-12 col-sm-12">

				<div style="margin-top:30px; text-align: center;">
					<button type="botton" class="quemsomos_inicial_botao" onclick="enviar_orcamento();">ENVIAR ORÇAMENTO</button>
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

<script type="text/javascript"> 
	
	function atualizacampo(campo, valor){

		$.post('<?=DOMINIO?>orcamento/salva_form', { campo:campo, valor:valor },function(data){
			
		});

	}

	function adicionar(codigo){ 
		$.post('<?=DOMINIO?>orcamento/adicionar/codigo/'+codigo, { codigo:codigo },function(data){
			if(data){
				$('#acao_'+codigo).html("<div class='botao_orcamento_remover' ><a onclick=\"remover('"+codigo+"');\" >remover</a></div>");
			}
		});
	}

	function remover(codigo){
		$.post('<?=DOMINIO?>orcamento/remover/codigo/'+codigo, { codigo:codigo },function(data){
			if(data){
				$('#acao_'+codigo).html("<div class='botao_orcamento_add' ><a onclick=\"adicionar('"+codigo+"');\" >adicionar</a></div>");
			}
		});
	}

	function enviar_orcamento(){
		window.location='<?=DOMINIO?>orcamento/enviar';
	}

	$(window).load(function() {

		var target_offset = $("#corpo").offset();
		var target_top = target_offset.top;
		$('html, body').animate({ scrollTop: target_top }, 500);
		
	});

</script>