<?php if(!isset($_base['libera_views'])){ header("HTTP/1.0 404 Not Found"); exit; }

// echo "<pre>"; print_r($conteudo_sessao['cores']['detalhes']); echo "</pre>";
$cores = $conteudo_sessao['cores']['lista'];
$conteudo_config = $conteudo_sessao['data_grupo'];
$classes_css = str_replace(".", "", $conteudo_config->classes);
$classes_css_img = str_replace(".", "", $conteudo_config->classes_img);

$paginacao = $conteudo_sessao['paginacao'];
$imagens_fundo = $conteudo_sessao['imagens_fundo'];
$lista_garagem = $conteudo_sessao['lista'];

$garagem_valor_max_selecionado = $conteudo_sessao['valor_max'];
$garagem_valor_max_selecionado_tratado = $conteudo_sessao['valor_max_tratado'];
$garagem_valor_max_selecionado_tratado_busca =  $conteudo_sessao['valor_max_tratado_busca'];

$garagem_valor_min_selecionado =  $conteudo_sessao['valor_min'];
$garagem_valor_min_selecionado_tratado =  $conteudo_sessao['valor_min_tratado'];
$garagem_valor_min_selecionado_tratado_busca = $conteudo_sessao['valor_min_tratado_busca'];

$link_ver_mais_garagem = DOMINIO.$conteudo_sessao['data_grupo']->busca_pagina."/";
if($conteudo_sessao['data_grupo']->categoria){
	$link_ver_mais_garagem = DOMINIO.$conteudo_sessao['data_grupo']->busca_pagina."/inicial/gara_cat/".$conteudo_sessao['data_grupo']->categoria;
}

?> 

<div id="section-garagem-<?=$conteudo_id?>" class="container-fluid animate-effect" style="background-color: <?=$cores[236]?>; font-family: <?=$conteudo_config->font_family?> !important; padding-left: 0px; padding-right:0px;">
	
	<?php if($conteudo_config->mostrar_titulo == 1){ ?>
		
		<div class='row' >
			<div class='col-xs-12 col-sm-12 col-md-12' >
				<div style="margin-top:-10px; margin-bottom:30px;">
					<h2 class="titulo_padrao" style="color:<?=$cores[237]?> !important; border-color:<?=$cores[237]?> !important; " ><?=$conteudo_config->titulo?></h2>
					<div class="titulo_padrao_linha" style="color:<?=$cores[237]?>; " ></div> 
				</div>
			</div>
		</div>
		
	<?php } ?>
	
	
	<?php
	
	if( $conteudo_config->tipo == 0 ){
		
		?>
		
		<style type="text/css">
			#slideshow_<?=$conteudo_id?> {

			}
			.slideshow_<?=$conteudo_id?> {
				position: absolute;
				top: 0px;
				left: 0px;
				width: 100%;
				height: 100%;
				z-index: 1;
			}
			#slideshow_<?=$conteudo_id?> DIV{
				position: absolute;
				left: 0px;
				top: 0px;
				width: 100%;
				height: 100%;
				background-size: cover;
				background-repeat: no-repeat;
				background-position: center;
				z-index:8;
			}
			#slideshow_<?=$conteudo_id?> DIV.active{
				z-index:10;
				opacity:1.0;
			}
			#slideshow_<?=$conteudo_id?> DIV.last-active {
				z-index:9;
			}

			.slogan {
				margin-top:100px;
			}

			#garagem_busca_<?=$conteudo_id?> {
				position: absolute;
				top:13%;
				left: 0px;
				width: 100%;
				height: auto;
				z-index: 999;
				text-align: center;
			}

			.vericulos_busca_input{
				display: inline-block;
				width:50%;
				border: 0px;
				height: 50px;
				border-radius:4px 0 0 4px;
				background-color: <?=$cores[260]?>;
				color: <?=$cores[263]?>;
				margin-top: 15px; 
			}

			.vericulos_busca_botao {
				margin-top: 15px;
				vertical-align: top;
				display: inline-block;
				width:15%;
				background-color: <?=$cores[264]?>;
				color: <?=$cores[265]?>;
				border: 0px;
				border-radius:0 4px 4px 0;
				height: 50px;
				margin-left: -5px;
			}
			.vericulos_busca_botao:hover { 
				background-color: <?=$cores[264]?>;
				color: <?=$cores[265]?>;
				border: 0px;
			}


			@media (max-width: 990px){

				#slideshow_<?=$conteudo_id?> DIV{ 
					background-position: left;
				}

				.vericulos_busca_input{
					width:60%;
				}
				.vericulos_busca_botao {
					width:22%;
				}

			}

			@media (max-width: 770px){

				.vericulos_busca_input{
					width:65%;
				}
				.vericulos_busca_botao {
					width:30%;
				}

				.slogan {
					margin-top:40px;
					font-size: 28px !important;
				}
				.slogan p{
					font-size: 28px !important;
				}
				.slogan span{
					font-size: 28px !important;
				}
			}

		</style>

		<div class="sessao_slideshow" style="font-family:<?=$conteudo_config->font_family?> !important;" >


			<div id="slideshow_<?=$conteudo_id?>" class="slideshow slideshow_resp" >
				<?php

				$n = 0;
				foreach($imagens_fundo as $key => $value){

					if($n == 0){ $active = "class='active';"; } else { $active = ''; }

					echo "<div style='background-image:url(".$value['imagem'].");' $active ></div>";

					$n++;
				}

				?>
			</div>



			<div id="garagem_busca_<?=$conteudo_id?>" >

				<div class="slogan" ><?=$conteudo_config->slogan?></div>

				<div class="garagem_busca_quadro" >

					<div id="busca_gara_refencia_<?=$conteudo_id?>" >
						<form name="form_busca_referencia" id="form_busca_referencia" action="<?=DOMINIO?><?=$controller?>/garagem_busca_ref" method="post" >

							<input name="busca" class="form-control vericulos_busca_input" placeholder="Digite o que procura" >
							<button class="btn btn-default vericulos_busca_botao" type="button" onClick="form_busca_referencia.submit();" ><i class="fa fa-search" aria-hidden="true"></i> BUSCAR</button>

							<input type="hidden" name="grupo_pagina" value="<?=$conteudo_config->id?>" >

							<div style="clear:both;" ></div> 

						</form>
					</div>

				</div>

			</div>


		</div>

		<?php
	}

	?>



	<?php

	if( $conteudo_config->tipo == 1 ){

		$garagem_tipo_selecionada = $conteudo_sessao['tipo_selecionada'];
		$garagem_categoria_selecionada = $conteudo_sessao['categoria_selecionada'];
		$garagem_marca_selecionada = $conteudo_sessao['marca_selecionada'];
		$garagem_modelo_selecionada = $conteudo_sessao['modelo_selecionada'];
		$garagem_combustivel_selecionada = $conteudo_sessao['combustivel_selecionada'];
		$garagem_transmissao_selecionada = $conteudo_sessao['transmissao_selecionada'];
		$garagem_cor_selecionada = $conteudo_sessao['cor_selecionada'];
		$garagem_motor_selecionada = $conteudo_sessao['motor_selecionada'];

		$garagem_ano_fab_selecionada = $conteudo_sessao['ano_fab_selecionada'];
		$garagem_ano_mod_selecionada = $conteudo_sessao['ano_mod_selecionada'];

		$garagem_categorias = $conteudo_sessao['categorias'];
		$garagem_marcas = $conteudo_sessao['marcas'];
		$garagem_modelos = $conteudo_sessao['modelos'];
		$garagem_combustiveis = $conteudo_sessao['combustiveis'];
		$garagem_cambios = $conteudo_sessao['cambios'];
		$garagem_coresveiculo = $conteudo_sessao['coresveiculo'];
		$garagem_motores = $conteudo_sessao['motores']; 

		$garagem_valor_min_selecionado = $conteudo_sessao['valor_min'];
		$garagem_valor_max_selecionado = $conteudo_sessao['valor_max'];							 

		$garagem_ordem_selecionado = $conteudo_sessao['ordem_selecionado'];

		?>

		<style type="text/css"> 

			.garagem_lista_normal_<?=$conteudo_id?>{
				position: relative;
				width: 100%;
				height: auto;
				<?php if($conteudo_config->mostrar_titulo == 0){ ?>
					margin-top: 50px;
				<?php } ?>
			}

			.garagem_lista_normal_<?=$conteudo_id?> .veiculo_quadro{

			}

			.garagem_lista_normal_<?=$conteudo_id?> .veiculo_titulo{

			}

			.garagem_lista_normal_<?=$conteudo_id?> .veiculo_valor{

			}

			.garagem_lista_normal_<?=$conteudo_id?> .pagination li a, .pagination li span{
				background-color: <?=$cores[267]?> !important;
				color: <?=$cores[268]?> !important;
				border-radius:3px !important;
			}
			.garagem_lista_normal_<?=$conteudo_id?> .pi-pagenav li .active{
				background-color: <?=$cores[269]?> !important;
				color: <?=$cores[270]?> !important;
				border-radius:3px !important;
			}


			.garagem_lista_carrossel_<?=$conteudo_id?>{
				position: relative;
				width: 96%;
				height: auto;
				margin-left:2%;
				margin-right:2%; 
				padding-bottom:1px;
			}
			.garagem_destaques_<?=$conteudo_id?>{
				padding-bottom: 100px;
			}
			.garagem_lista_carrossel_<?=$conteudo_id?> .veiculo_quadro{				 
				border-radius:16px; 
			}

			.garagem_lista_carrossel_<?=$conteudo_id?> .veiculo_imagem_div{
				height: 220px;
				margin-bottom:10px;
			}
			.garagem_lista_carrossel_<?=$conteudo_id?> .veiculo_imagem{
				height: 210px;
			}

			.garagem_lista_carrossel_<?=$conteudo_id?> .veiculo_titulo{				 
				font-size: 16px;
				font-weight: bold;
				display: block;
				width: 100%;
				float: none;
				padding-bottom: 0px;
				padding-top:0px;
				text-align: center;
				color: <?=$cores[237]?> !important;
			}

			.garagem_lista_carrossel_<?=$conteudo_id?> .veiculo_endereco{
				display: block;
				width: 100%;
				float: none;
				font-size: 12px;
				padding-top: 5px;
			}
			
			.garagem_lista_carrossel_<?=$conteudo_id?> .veiculo_valor2 {
				background-color: #000!important;
				color: #fff !important;				 
				position: absolute;
				top: 165px;
				right:25px;
				font-size: 14px;
				font-weight: 500;
				text-transform: uppercase;
				border-radius:18px;
				padding-left:18px;
				padding-right:15px;
				padding-top:6px;
				padding-bottom:6px;
				z-index: 99999;
			} 

			.garagem_lista_carrossel_<?=$conteudo_id?> .veiculo_bt_det { 
				color: #FFF !important;				 
				position: absolute;
				top:0px;
				right:15px;
				font-size:30px;
				font-weight: 500;
				text-transform: uppercase;
				border-radius:0px 16px 0px 26px;
				padding-left:15px;
				padding-right:10px;
				padding-top:4px;
				padding-bottom:8px;
				line-height:22px;
				z-index: 99999;
				cursor: pointer;
				background-color:#000000;
				background-image: linear-gradient(to bottom, transparent, #000000);
			} 

			.garagem_lista_carrossel_<?=$conteudo_id?> .item { 

			}

			.garagem_lista_carrossel_<?=$conteudo_id?> .owl-prev{
				top:76% !important;
				left:15px !important;
			}
			.garagem_lista_carrossel_<?=$conteudo_id?> .owl-next{
				top:76% !important;
				right:15px !important;
			}

			.carrosel_menu{
				display: inline-block;
				margin-left: 10px;
				margin-right: 10px;
				margin-bottom: 20px;
				text-align: center;
				font-size: 15px;
				font-weight: 500;
				cursor: pointer; 
			}



			.form-check {
				display: block;
				position: relative;
				padding-left: 35px;
				margin-bottom: 0px;
				cursor: pointer;
				font-size: 22px;
				-webkit-user-select: none;
				-moz-user-select: none;
				-ms-user-select: none;
				user-select: none;
			}
			.form-check span{
				font-size: 15px;
				font-weight: 500;
				padding-left: 20px;
				display: block;
				margin-top: 5px;
			}

			/* Hide the browser's default checkbox */
			.form-check input {
				position: absolute;
				opacity: 0;
				cursor: pointer;
				height: 0;
				width: 0;
			}

			/* Create a custom checkbox */
			.checkmark {
				position: absolute;
				top: 0;
				left: 0;
				height: 22px;
				width: 22px;
				background-color: #eee;
				border-radius: 50%;
			}

			/* On mouse-over, add a grey background color */
			.form-check:hover input ~ .checkmark {
				background-color: #ccc;
			}

			/* When the checkbox is checked, add a blue background */
			.form-check input:checked ~ .checkmark {
				background-color: #2196F3;
			}

			/* Create the checkmark/indicator (hidden when not checked) */
			.checkmark:after {
				content: "";
				position: absolute;
				display: none;
			}

			/* Show the checkmark when checked */
			.form-check input:checked ~ .checkmark:after {
				display: block;
			}

			/* Style the checkmark/indicator */
			.form-check .checkmark:after {
				left: 9px;
				top: 5px;
				width: 5px;
				height: 10px;
				border: solid white;
				border-width: 0 3px 3px 0;
				-webkit-transform: rotate(45deg);
				-ms-transform: rotate(45deg);
				transform: rotate(45deg);
			}

			.form-check span{
				font-size: 15px;
				font-weight: 500;
				padding-top:5px;
				padding-left: 0px;
			}

			.radiobtn {
				position: absolute;
				top: 0;
				left: 0;
				height: 25px;
				width: 25px;
				background-color: #eee;
				border-radius: 50%;
			}


			.filtro_item_div{
				margin-top: 20px;
			}

			.garagem_filtros_botao_resp{
				display: none;
			}


			.garagem_lista_carrossel_<?=$conteudo_id?>{
				position: relative;
				width: 96%;
				height: auto;
				margin-left:2%;
				margin-right:2%; 
				padding-bottom:1px;
			}
			.garagem_destaques_<?=$conteudo_id?>{
				padding-bottom: 100px;
			}
			.garagem_lista_carrossel_<?=$conteudo_id?> .veiculo_quadro{				 
				border-radius:10px; 
			}

			.garagem_lista_carrossel_<?=$conteudo_id?> .veiculo_imagem_div{
				height: 220px;
				margin-bottom:10px;
			}
			.garagem_lista_carrossel_<?=$conteudo_id?> .veiculo_imagem{
				height: 210px;
			}

			.garagem_lista_carrossel_<?=$conteudo_id?> .veiculo_titulo{				 
				font-size: 16px;
				font-weight: 500;
				display: block;
				width: 100%;
				float: none;
				padding-bottom:5px;
				padding-top:0px;
				text-align: left;
				color: <?=$cores[237]?> !important;
				margin-left: 5%;
				margin-right: 5%;
			}

			.garagem_lista_carrossel_<?=$conteudo_id?> .veiculo_endereco{
				display: block;
				width: 100%;
				float: none;
				font-size: 12px;
				padding-top: 5px;
			}
			
			.garagem_lista_carrossel_<?=$conteudo_id?> .veiculo_valor2 {
				background-color: #000!important;
				color: #fff !important;				 
				position: absolute;
				top: 165px;
				right: 15px;
				font-size: 14px;
				font-weight: 500;
				text-transform: uppercase;
				border-radius:18px;
				padding-left:18px;
				padding-right:15px;
				padding-top:6px;
				padding-bottom:6px;
				z-index: 99999;
			} 

			.garagem_lista_carrossel_<?=$conteudo_id?> .veiculo_bt_det { 
				color: #FFF !important;				 
				position: absolute;
				top:0px;
				right:0px;
				font-size:30px;
				font-weight: 500;
				text-transform: uppercase;
				border-radius:0px 16px 0px 26px;
				padding-left:15px;
				padding-right:10px;
				padding-top:4px;
				padding-bottom:8px;
				line-height:22px;
				z-index: 99999;
				cursor: pointer;
				background-color:#000000;
				background-image: linear-gradient(to bottom, transparent, #000000);
			} 

			.garagem_lista_carrossel_<?=$conteudo_id?> .item { 

			}

			.garagem_lista_carrossel_<?=$conteudo_id?> .owl-prev{
				top:76% !important;
				left:15px !important;
			}
			.garagem_lista_carrossel_<?=$conteudo_id?> .owl-next{
				top:76% !important;
				right:15px !important;
			}

			.carrosel_menu{
				display: inline-block;
				margin-left: 10px;
				margin-right: 10px;
				margin-bottom: 20px;
				text-align: center;
				font-size: 16px;
				font-weight: 500;
				cursor: pointer; 
			}

			.veiculo_quadro2{
				height: 370px;
				margin-top:25px;
			}
			.veiculos_lista_itens{
				display: inline-block;
				width: 40%;
				margin-left: 5%;
				font-size: 15px;
				margin-top:10px;
			}
			.veiculos_lista_itens i{
				color:#d50e0b;
			}

			.veiculo_valor3{
				font-size: 22px;
				font-weight: bold;
				margin-left: 5%;
				margin-top: 15px;
			}
			.veiculo_valor3 span{
				font-size: 22px;
				font-weight: normal;
			}

			a.veiculo_vermais2{
				color: #fff;
				border-color: #d50e0b;
				border-radius:4px;
				background: #d50e0b;
				font-size:16px;
				display:block;
				position: absolute;
				bottom: 10px; right:28px;
				padding-top:5px;
				padding-bottom:5px;
				padding-left: 10px;
				padding-right: 10px;
			}

			.garagem_bt_filtro_div{
				display: none;
				margin-top: 15px;
				margin-bottom: 15px;
			}
			.garagem_bt_filtro{
				width: 100%;
				border: 0px;
				border-radius: 4px;
				font-size:14px;
				text-align: center;
				font-weight: bold;
				padding:10px;
				color: #fff;
				background-color: #000;
			}



			@media (max-width: 990px){

				#garagem_filtros_div{
					display: none;
				}
				.garagem_bt_filtro_div{
					display: block;
				}	


			}


			@media (max-width: 770px){


				.garagem_lista_carrossel_<?=$conteudo_id?> .veiculo_titulo{
					padding-top:0px;
					font-size: 15px;
					font-weight: bold;
				}

				.garagem_lista_carrossel_<?=$conteudo_id?> .garagem_lista_itens{
					padding-left:1px !important;
					padding-right:1px !important;
					font-size:11px !important; 
				} 
				.garagem_lista_carrossel_<?=$conteudo_id?> .garagem_lista_itens img{  
					width: 22px !important; 
				}
				.garagem_lista_carrossel_<?=$conteudo_id?> .garagem_lista_itens_tit{
					font-size:10px !important; 
					margin-top: 2px !important;
				}
				.garagem_lista_carrossel_<?=$conteudo_id?> .veiculo_endereco{ 
					font-size: 11px; 
				}

				.carrosel_menu{
					font-size: 14px;
					margin-left:0px;
					margin-right:0px;
					display: block;
					margin-top:0px;
					padding-top: 0px;
					padding-bottom: 5px;
					margin-bottom: 0px;

				}

			}


		</style>

		<div class="garagem_lista_carrossel_<?=$conteudo_id?>" >
			<div class="garagem_destaques_<?=$conteudo_id?> garagem_lista_normal_<?=$conteudo_id?>" > 

				<div class="row" >
					<div class='col-xs-12 col-sm-4 col-md-3' >

						<div class="garagem_bt_filtro_div">
							<button class="garagem_bt_filtro" type="button" onclick="garagem_filtros()" >FILTROS</button>
						</div>

						<div class="garagem_filtros" id="garagem_filtros_div">

							<?php


							$filtro_url = DOMINIO.$controller.'/inicial';

							if($garagem_categoria_selecionada){
								$filtro_url .= '/gara_cat/'.$garagem_categoria_selecionada;
							}
							if($garagem_marca_selecionada){
								$filtro_url .= '/gara_marca/'.$garagem_marca_selecionada;
							}
							if($garagem_modelo_selecionada){
								$filtro_url .= '/gara_modelo/'.$garagem_modelo_selecionada;
							}
							if($garagem_combustivel_selecionada){
								$filtro_url .= '/gara_combustivel/'.$garagem_combustivel_selecionada;
							}
							if($garagem_transmissao_selecionada){
								$filtro_url .= '/gara_transmissao/'.$garagem_transmissao_selecionada;
							}
							if($garagem_cor_selecionada){
								$filtro_url .= '/gara_cor/'.$garagem_cor_selecionada;
							}
							if($garagem_motor_selecionada){
								$filtro_url .= '/gara_motor/'.$garagem_motor_selecionada;
							}
							if($garagem_tipo_selecionada){
								$filtro_url .= '/gara_tipo/'.$garagem_tipo_selecionada;
							}
							if($garagem_ano_fab_selecionada){
								$filtro_url .= '/gara_ano_fab/'.$garagem_ano_fab_selecionada;
							}
							if($garagem_ano_mod_selecionada){
								$filtro_url .= '/gara_ano_mod/'.$garagem_ano_mod_selecionada;
							}
							if($garagem_valor_min_selecionado){
								$filtro_url .= '/gara_val_min/'.$garagem_valor_min_selecionado;
							}
							if($garagem_valor_max_selecionado){
								$filtro_url .= '/gara_val_max/'.$garagem_valor_max_selecionado;
							}

							$filtro_url_item = $filtro_url;

							?>					 

							<div class="filtro_item_div">

								<h4>FILTRAR POR</h4>

								<label class='form-check'> 
									<span >Novos</span>									 
									<input type='radio' name='tipo' id='tipo' value='novo' <?php if($garagem_tipo_selecionada == 'novo'){ echo "checked=''"; } ?> onClick="window.location='<?=$filtro_url_item?>/gara_tipo/novo'" > 
									<span class='checkmark' ></span>
								</label>

								<label class='form-check'> 
									<span >Seminovos</span>									 
									<input type='radio' name='tipo' id='tipo' value='usado' <?php if($garagem_tipo_selecionada == 'usado'){ echo "checked=''"; } ?> onClick="window.location='<?=$filtro_url_item?>/gara_tipo/usado'" > 
									<span class='checkmark' ></span>
								</label>

							</div>


							<div class="filtro_item_div">

								<h4>TIPO DE VEÍCULO</h4>

								<?php

								foreach ($garagem_categorias as $key_filtros => $value_filtros) {

									if($garagem_categoria_selecionada == $value_filtros['codigo']){
										$selectedddd = "checked=''";
									} else {
										$selectedddd = "";
									}
									
									echo "
									<label class='form-check'> 
									<span >".$value_filtros['titulo']."</span>									 
									<input type='radio' name='categoria' id='categoria' value='".$value_filtros['codigo']."' ".$selectedddd." onClick=\"window.location='".$filtro_url_item."/gara_cat/".$value_filtros['codigo']."'\" > 
									<span class='checkmark' ></span>
									</label>
									";
								}

								?>

							</div>


							<div class="filtro_item_div">

								<h4>MARCA</h4>

								<select class="select2" name="gara_marca" onchange="window.location='<?=$filtro_url_item?>/gara_marca/'+this.value" >
									<option value='0' selected='' ></option>
									<?php

									foreach ($garagem_marcas as $key_filtros => $value_filtros) {

										if($garagem_marca_selecionada == $value_filtros['codigo']){
											$selectedddd = "selected=''";
										} else {
											$selectedddd = "";
										}

										echo "
										<option value='".$value_filtros['codigo']."' ".$selectedddd." >".$value_filtros['titulo']."</option>
										";
									}

									?>
								</select>

							</div>


							<div class="filtro_item_div">

								<h4>MODELO</h4>

								<select class="select2" name="gara_modelo" onchange="window.location='<?=$filtro_url_item?>/gara_modelo/'+this.value" >
									<option value='0' selected='' ></option>

									<?php

									foreach ($garagem_modelos as $key_filtros => $value_filtros) {

										if($garagem_modelo_selecionada == $value_filtros['codigo']){
											$selectedddd = "selected=''";
										} else {
											$selectedddd = "";
										}

										echo "
										<option value='".$value_filtros['codigo']."' ".$selectedddd." >".$value_filtros['titulo']."</option>
										";
									}

									?>
								</select>

							</div>


							<div class="filtro_item_div">
								<h4>ANO</h4>

								<div class="row">

									<div class="col-md-6">
										<label>FAB.</label>
										<select class="select2" name="ano_fab" onchange="window.location='<?=$filtro_url_item?>/gara_ano_fab/'+this.value" >
											<option value='0' selected='' ></option>
											<?php

											$anomax = date('Y')+1;

											for ($i=2009; $i <= $anomax; $i++) { 
												
												if($garagem_ano_fab_selecionada){
													if($garagem_ano_fab_selecionada == $i){
														$selected = "selected=''";
													} else {
														$selected = "";
													}
												} else {
													$selected = "";
												}
												
												echo "<option value='".$i."' $selected >".$i."</option>";
											}

											?>
										</select>
									</div>
									<div class="col-md-6">
										<label>MOD.</label>
										<select class="select2" name="ano_mod" onchange="window.location='<?=$filtro_url_item?>/gara_ano_mod/'+this.value" >
											<option value='0' selected='' ></option>
											<?php

											$anomax = date('Y')+1;

											for ($i=2009; $i <= $anomax; $i++) { 
												
												if($garagem_ano_mod_selecionada){
													if($garagem_ano_mod_selecionada == $i){
														$selected = "selected=''";
													} else {
														$selected = "";
													}
												} else {
													$selected = "";
												}

												echo "<option value='".$i."' $selected >".$i."</option>";
											}

											?>
										</select> 

									</div>

								</div>

							</div>


							<div class="filtro_item_div">
								<h4>PREÇO</h4>

								<div class="row">

									<div class="col-md-6">
										<label>DE</label>
										<select class="custom-select select2" name="garagem_precoMinimo" id="garagem_precoMinimo" onchange="garagem_filtrar_preco('<?=$filtro_url_item?>');" >
											<option value="0"></option>
											<option value="20000" <?php if($garagem_valor_min_selecionado == 20000){ echo " selected='' "; } ?> >R$ 20 mil</option>
											<option value="40000" <?php if($garagem_valor_min_selecionado == 40000){ echo " selected='' "; } ?> >R$ 40 mil</option>
											<option value="50000" <?php if($garagem_valor_min_selecionado == 50000){ echo " selected='' "; } ?> >R$ 50 mil</option>
											<option value="60000" <?php if($garagem_valor_min_selecionado == 60000){ echo " selected='' "; } ?> >R$ 60 mil</option>
											<option value="70000" <?php if($garagem_valor_min_selecionado == 70000){ echo " selected='' "; } ?> >R$ 70 mil</option>
											<option value="80000" <?php if($garagem_valor_min_selecionado == 80000){ echo " selected='' "; } ?> >R$ 80 mil</option>
											<option value="90000" <?php if($garagem_valor_min_selecionado == 90000){ echo " selected='' "; } ?> >R$ 90 mil</option>
											<option value="100000" <?php if($garagem_valor_min_selecionado == 100000){ echo " selected='' "; } ?> >R$ 100 mil</option>
											<option value="125000" <?php if($garagem_valor_min_selecionado == 125000){ echo " selected='' "; } ?> >R$ 125 mil</option>
											<option value="150000" <?php if($garagem_valor_min_selecionado == 150000){ echo " selected='' "; } ?> >R$ 150 mil</option>
											<option value="175000" <?php if($garagem_valor_min_selecionado == 175000){ echo " selected='' "; } ?> >R$ 175 mil</option>
											<option value="200000" <?php if($garagem_valor_min_selecionado == 200000){ echo " selected='' "; } ?> >R$ 200 mil</option>
											<option value="225000" <?php if($garagem_valor_min_selecionado == 225000){ echo " selected='' "; } ?> >R$ 225 mil ou mais</option>
										</select>

									</div>

									<div class="col-md-6">
										<label>ATÉ</label>
										<select class="custom-select select2" name="garagem_precoMaximo" id="garagem_precoMaximo" onchange="garagem_filtrar_preco('<?=$filtro_url_item?>');" >
											<option value="0"></option>
											<option value="40000" <?php if($garagem_valor_max_selecionado == 40000){ echo " selected='' "; } ?> >R$ 40 mil</option>
											<option value="50000" <?php if($garagem_valor_max_selecionado == 50000){ echo " selected='' "; } ?>>R$ 50 mil</option>
											<option value="60000" <?php if($garagem_valor_max_selecionado == 60000){ echo " selected='' "; } ?>>R$ 60 mil</option>
											<option value="70000" <?php if($garagem_valor_max_selecionado == 70000){ echo " selected='' "; } ?>>R$ 70 mil</option>
											<option value="80000" <?php if($garagem_valor_max_selecionado == 80000){ echo " selected='' "; } ?>>R$ 80 mil</option>
											<option value="90000" <?php if($garagem_valor_max_selecionado == 90000){ echo " selected='' "; } ?>>R$ 90 mil</option>
											<option value="100000" <?php if($garagem_valor_max_selecionado == 100000){ echo " selected='' "; } ?>>R$ 100 mil</option>
											<option value="125000" <?php if($garagem_valor_max_selecionado == 125000){ echo " selected='' "; } ?>>R$ 125 mil</option>
											<option value="150000" <?php if($garagem_valor_max_selecionado == 150000){ echo " selected='' "; } ?>>R$ 150 mil</option>
											<option value="175000" <?php if($garagem_valor_max_selecionado == 175000){ echo " selected='' "; } ?>>R$ 175 mil</option>
											<option value="200000" <?php if($garagem_valor_max_selecionado == 200000){ echo " selected='' "; } ?>>R$ 200 mil</option>
											<option value="225000" <?php if($garagem_valor_max_selecionado == 225000){ echo " selected='' "; } ?>>R$ 225 mil ou mais</option>
										</select>

									</div>
								</div>


							</div>


							<div class="filtro_item_div">
								<h4>COR</h4>

								<select class="select2" name="gara_cor" onchange="window.location='<?=$filtro_url_item?>/gara_cor/'+this.value" >
									<option value='0' selected='' ></option>

									<?php

									foreach ($garagem_coresveiculo as $key_filtros => $value_filtros) {

										if($garagem_cor_selecionada == $value_filtros['codigo']){
											$selectedddd = "selected=''";
										} else {
											$selectedddd = "";
										}

										echo "
										<option value='".$value_filtros['codigo']."' ".$selectedddd." >".$value_filtros['titulo']."</option>
										";
									}

									?>
								</select>

							</div>


							<div class="filtro_item_div">
								<h4>CÂMBIO</h4>

								<?php

								foreach ($garagem_cambios as $key_filtros => $value_filtros) {

									if($garagem_transmissao_selecionada == $value_filtros['codigo']){
										$selectedddd = "checked=''";
									} else {
										$selectedddd = "";
									}

									echo "
									<label class='form-check'> 
									<span >".$value_filtros['titulo']."</span>									 
									<input type='radio' name='cambio' id='cambio' value='".$value_filtros['codigo']."' ".$selectedddd." onClick=\"window.location='".$filtro_url_item."/gara_transmissao/".$value_filtros['codigo']."'\"  > 
									<span class='checkmark' ></span>
									</label>
									";
								}

								?>

							</div>


							<div class="filtro_item_div">
								<h4>COMBUSTÍVEL</h4>

								<?php

								foreach ($garagem_combustiveis as $key_filtros => $value_filtros) {

									if($garagem_combustivel_selecionada == $value_filtros['codigo']){
										$selectedddd = "checked=''";
									} else {
										$selectedddd = "";
									}

									echo "
									<label class='form-check'> 
									<span >".$value_filtros['titulo']."</span>									 
									<input type='radio' name='combustivel' id='combustivel' value='".$value_filtros['codigo']."' ".$selectedddd." onClick=\"window.location='".$filtro_url_item."/gara_combustivel/".$value_filtros['codigo']."'\"  > 
									<span class='checkmark' ></span>
									</label>
									";
								}

								?>

							</div>


							<div class="filtro_item_div">
								<h4>MOTOR</h4>

								<select class="select2" name="gara_motor" onchange="window.location='<?=$filtro_url_item?>/gara_motor/'+this.value" >
									<option value='0' selected='' ></option>									
									<?php
									
									foreach ($garagem_motores as $key_filtros => $value_filtros) {

										if($garagem_motor_selecionada == $value_filtros['codigo']){
											$selectedddd = "selected=''";
										} else {
											$selectedddd = "";
										}

										echo "
										<option value='".$value_filtros['codigo']."' ".$selectedddd." >".$value_filtros['titulo']."</option>
										";
									}

									?>
								</select> 
							</div>

							<div class="filtro_item_div">

								<h4>ORDEM</h4>

								<select class="select2" name="gara_ordem" onchange="window.location='<?=$filtro_url_item?>/gara_ordem/'+this.value" >
									<option value='0' <?php if($garagem_ordem_selecionado == 0){ echo "selected"; } ?> >Ordenar por mais recentes </option>
									<option value='1' <?php if($garagem_ordem_selecionado == 1){ echo "selected"; } ?> >Ordenar por nome </option>
									<option value='2' <?php if($garagem_ordem_selecionado == 2){ echo "selected"; } ?> >Ordenar por maior preço </option>
									<option value='3' <?php if($garagem_ordem_selecionado == 3){ echo "selected"; } ?> >Ordenar por menor preço </option>

								</select>

							</div>


						</div>


					</div>
					<div class='col-xs-12 col-sm-8 col-md-9' >

						<?php

						$itens_listados = 1;
						$n_row = 1;
						$total_listados = 0;

						foreach ($lista_garagem as $key_garagem => $value) {

							if( ($itens_listados <= $conteudo_config->max_itens) OR ($conteudo_config->max_itens == 0) ){

								if($n_row == 1){ echo "<div class='row' >"; }

								if($conteudo_config->itens_por_linha == 1){
									echo "<div class='col-xs-12 col-sm-12 col-md-12' >";
								}
								if($conteudo_config->itens_por_linha == 2){
									echo "<div class='col-xs-12 col-sm-6 col-md-6' >";
								}
								if($conteudo_config->itens_por_linha == 3){
									echo "<div class='col-xs-12 col-sm-4 col-md-4' >";
								}
								if($conteudo_config->itens_por_linha == 4){
									echo "<div class='col-xs-12 col-sm-3 col-md-3' >";
								}

								// $endereco_gara = DOMINIO.$controller.'/veiculo_detalhes/id/'.$value['codigo'];
								$endereco_gara = DOMINIO.$controller.'/veiculo_detalhes/id/'.$value['codigo'].'/item/'.$value['tituloparaurl'];

								if($value['valor'] == '0,00'){
								// $valor_final_gara = "<div class='veiculo_valor' style='font-weight:400;'>Consulte!</div>";
									$valor_final_gara = "";
								} else {
									$valor_final_gara = "<div class='veiculo_valor3' >R$ ".$value['valor']."</div>";
								}

								echo " 
								<div class='veiculo_quadro veiculo_quadro2 $classes_css' >

								<div class='veiculo_imagem_div'>
								<div class='veiculo_imagem ".$classes_css_img."' style='background-image:url(".$value['imagem'].");' >
								<a href='".$endereco_gara."'><img src='".LAYOUT."img/transp.png' style='width:100%; height:100%;'></a>
								</div>
								</div>

								<div class='veiculo_titulo' onClick=\"window.location='".$endereco_gara."';\" >".$value['titulo']."</div>

								<div style='text-align:left;' >
								";

								if($value['ano_fab']){
									echo "
									<span class='veiculos_lista_itens'>
									<i class='fas fa-calendar-alt'></i>
									".$value['ano_fab']."/".$value['ano_mod']."
									</span>
									";
								}

								if($value['combustivel']){
									echo "
									<span class='veiculos_lista_itens'>
									<i class='fas fa-gas-pump'></i>
									".$value['combustivel']."
									</span>
									";
								}

								if($value['km']){
									echo "
									<span class='veiculos_lista_itens'>
									<i class='fas fa-tachometer-alt'></i>
									".$value['km']." Km
									</span>
									";
								}

								echo "
								</div>

								".$valor_final_gara."


								<a alt='Ver detalhes' href='".$endereco_gara."' class='veiculo_vermais2'><i class='fas fa-arrow-right'></i></a>

								</div>
								</div> 
								";

								$total_listados++;

								if($n_row == $conteudo_config->itens_por_linha){ echo "</div>"; $n_row = 1; } else { $n_row++; }

							}

							$itens_listados++;
						}
						if($n_row != 1){ echo "</div>"; }



						if($total_listados == 0){

							?>

							<div class="row">
								<div class="col-xs-12 col-sm-12 col-md-12" >
									<div style="text-align:center; padding-top:150px; padding-bottom:60px; font-size: 18px; color:<?=$cores[237]?>; " >
										Nenhum resultado encontrado!
									</div>
								</div>
							</div>

							<?php
						}

						?>


						<?php

						if( ($itens_listados < $conteudo_config->max_itens) OR ($conteudo_config->max_itens == 0) ){
							?> 	

							<div class="row">
								<div class="col-xs-12 col-sm-12 col-md-12" >
									<div class="pi-pagenav" style="padding-top:10px; margin-bottom:30px; " >
										<?=$paginacao?>
									</div>
								</div>
							</div>

							<?php
						}

						?>

					</div>					
				</div>

			</div>
		</div>

		<?php
	}

	?>



	<?php

	if( $conteudo_config->tipo == 2){

		?>

		<style type="text/css">

			.garagem_lista_carrossel_<?=$conteudo_id?>{
				position: relative;
				width: 96%;
				height: auto;
				margin-left:2%;
				margin-right:2%; 
				padding-bottom:1px;
			}
			.garagem_destaques_<?=$conteudo_id?>{
				padding-bottom: 100px;
			}
			.garagem_lista_carrossel_<?=$conteudo_id?> .veiculo_quadro{				 
				border-radius:16px; 
			}

			.garagem_lista_carrossel_<?=$conteudo_id?> .veiculo_imagem_div{
				height: 220px;
				margin-bottom:10px;
			}
			.garagem_lista_carrossel_<?=$conteudo_id?> .veiculo_imagem{
				height: 210px;
			}

			.garagem_lista_carrossel_<?=$conteudo_id?> .veiculo_titulo{				 
				font-size: 16px;
				font-weight: bold;
				display: block;
				width: 100%;
				float: none;
				padding-bottom: 0px;
				padding-top:0px;
				text-align: center;
				color: <?=$cores[237]?> !important;
			}

			.garagem_lista_carrossel_<?=$conteudo_id?> .veiculo_endereco{
				display: block;
				width: 100%;
				float: none;
				font-size: 12px;
				padding-top: 5px;
			}

			.garagem_lista_carrossel_<?=$conteudo_id?> .veiculo_valor2 {
				background-color: #000!important;
				color: #fff !important;				 
				position: absolute;
				top: 165px;
				right: 15px;
				font-size: 14px;
				font-weight: 500;
				text-transform: uppercase;
				border-radius:18px;
				padding-left:18px;
				padding-right:15px;
				padding-top:6px;
				padding-bottom:6px;
				z-index: 99999;
			} 

			.garagem_lista_carrossel_<?=$conteudo_id?> .veiculo_bt_det { 
				color: #FFF !important;				 
				position: absolute;
				top:0px;
				right:0px;
				font-size:30px;
				font-weight: 500;
				text-transform: uppercase;
				border-radius:0px 16px 0px 26px;
				padding-left:15px;
				padding-right:10px;
				padding-top:4px;
				padding-bottom:8px;
				line-height:22px;
				z-index: 99999;
				cursor: pointer;
				background-color:#000000;
				background-image: linear-gradient(to bottom, transparent, #000000);
			} 

			.garagem_lista_carrossel_<?=$conteudo_id?> .item { 

			}

			.garagem_lista_carrossel_<?=$conteudo_id?> .owl-prev{
				top:76% !important;
				left:15px !important;
			}
			.garagem_lista_carrossel_<?=$conteudo_id?> .owl-next{
				top:76% !important;
				right:15px !important;
			}

			.carrosel_menu{
				display: inline-block;
				margin-left: 10px;
				margin-right: 10px;
				margin-bottom: 20px;
				text-align: center;
				font-size: 15px;
				font-weight: 500;
				cursor: pointer; 
			}

			@media (max-width: 770px){			 

				.garagem_lista_carrossel_<?=$conteudo_id?> .veiculo_titulo{
					padding-top:0px;
					font-size: 15px;
					font-weight: bold;
				}

				.garagem_lista_carrossel_<?=$conteudo_id?> .garagem_lista_itens{
					padding-left:1px !important;
					padding-right:1px !important;
					font-size:11px !important; 
				} 
				.garagem_lista_carrossel_<?=$conteudo_id?> .garagem_lista_itens img{  
					width: 22px !important; 
				}
				.garagem_lista_carrossel_<?=$conteudo_id?> .garagem_lista_itens_tit{
					font-size:10px !important; 
					margin-top: 2px !important;
				}
				.garagem_lista_carrossel_<?=$conteudo_id?> .veiculo_endereco{ 
					font-size: 11px; 
				}

				.carrosel_menu{
					font-size: 14px;
					margin-left:0px;
					margin-right:0px;
					display: block;
					margin-top:0px;
					padding-top: 0px;
					padding-bottom: 5px;
					margin-bottom: 0px;

				}

			}

		</style>

		<div class="garagem_lista_carrossel_<?=$conteudo_id?>" >	

			<div class="owl-carousel garagem_destaques_<?=$conteudo_id?>" >

				<?php

				foreach($lista_garagem as $key => $value) {

					// $endereco_gara = DOMINIO.$controller.'/veiculo_detalhes/id/'.$value['codigo'];
					$endereco_gara = DOMINIO.$controller.'/veiculo_detalhes/id/'.$value['codigo'].'/item/'.$value['tituloparaurl'];
					
					if($value['valor'] == '0,00'){
								// $valor_final_gara = "<div class='veiculo_valor' style='font-weight:400;'>Consulte!</div>";
						$valor_final_gara = "";
					} else {
						$valor_final_gara = "<div class='veiculo_valor2' >R$ ".$value['valor']."</div>";
					}
					
					$categoria = $value['categoria_titulo'];

					echo "
					<div class='item' >
					<div class='veiculo_quadro $classes_css' >

					<div class='veiculo_imagem_div'>
					<div class='veiculo_bt_det'  onClick=\"window.location='".$endereco_gara."';\" >+</div>
					".$valor_final_gara."
					<div class='veiculo_imagem ".$classes_css_img."' style='background-image:url(".$value['imagem'].");' >
					<a href='".$endereco_gara."'><img src='".LAYOUT."img/transp.png' style='width:100%; height:100%;'></a>
					</div>
					</div>

					<div class='veiculo_titulo' onClick=\"window.location='".$endereco_gara."';\" >".$value['titulo']."</div>

					</div>
					</div>
					";

				}

				?> 
			</div>

		</div>

		<div style="position: absolute; bottom:45px; text-align: center; z-index: 9999; width: 70%; left: 15%;">
			<div class="carrosel_menu" onclick="window.location='<?=$veiculos?>';" ><i class="fas fa-search" style="color:#000000 !important;"></i> Ver Todos os Veículos</div> 
		</div>

		<?php
	}

	?>



	<?php

	if( $conteudo_config->tipo == 3){

		?>

		<style type="text/css">

			.garagem_lista_carrossel_<?=$conteudo_id?>{
				position: relative;
				width: 96%;
				height: auto;
				margin-left:2%;
				margin-right:2%; 
				padding-bottom:1px;
			}
			.garagem_destaques_<?=$conteudo_id?>{
				padding-bottom: 100px;
			}
			.garagem_lista_carrossel_<?=$conteudo_id?> .veiculo_quadro{				 
				border-radius:10px; 
			}

			.garagem_lista_carrossel_<?=$conteudo_id?> .veiculo_imagem_div{
				height: 220px;
				margin-bottom:10px;
			}
			.garagem_lista_carrossel_<?=$conteudo_id?> .veiculo_imagem{
				height: 210px;
			}

			.garagem_lista_carrossel_<?=$conteudo_id?> .veiculo_titulo{				 
				font-size: 16px;
				font-weight: bold;
				display: block;
				width: 100%;
				float: none;
				padding-bottom:5px;
				padding-top:0px;
				text-align: left;
				color: <?=$cores[237]?> !important;
				margin-left: 5%;
				margin-right: 5%;
			}

			.garagem_lista_carrossel_<?=$conteudo_id?> .veiculo_endereco{
				display: block;
				width: 100%;
				float: none;
				font-size: 12px;
				padding-top: 5px;
			}

			.garagem_lista_carrossel_<?=$conteudo_id?> .veiculo_valor2 {
				background-color: #000!important;
				color: #fff !important;				 
				position: absolute;
				top: 165px;
				right: 15px;
				font-size: 14px;
				font-weight: 500;
				text-transform: uppercase;
				border-radius:18px;
				padding-left:18px;
				padding-right:15px;
				padding-top:6px;
				padding-bottom:6px;
				z-index: 99999;
			} 

			.garagem_lista_carrossel_<?=$conteudo_id?> .veiculo_bt_det { 
				color: #FFF !important;				 
				position: absolute;
				top:0px;
				right:0px;
				font-size:30px;
				font-weight: 500;
				text-transform: uppercase;
				border-radius:0px 16px 0px 26px;
				padding-left:15px;
				padding-right:10px;
				padding-top:4px;
				padding-bottom:8px;
				line-height:22px;
				z-index: 99999;
				cursor: pointer;
				background-color:#000000;
				background-image: linear-gradient(to bottom, transparent, #000000);
			} 

			.garagem_lista_carrossel_<?=$conteudo_id?> .item { 

			}

			.garagem_lista_carrossel_<?=$conteudo_id?> .owl-prev{
				top:76% !important;
				left:15px !important;
			}
			.garagem_lista_carrossel_<?=$conteudo_id?> .owl-next{
				top:76% !important;
				right:15px !important;
			}

			.carrosel_menu{
				display: inline-block;
				margin-left: 10px;
				margin-right: 10px;
				margin-bottom: 20px;
				text-align: center;
				font-size: 16px;
				font-weight: 500;
				cursor: pointer; 
			}

			.veiculo_quadro2{
				height: 370px;
				margin-top: 25px;
			}
			.veiculos_lista_itens{
				display: inline-block;
				width: 40%;
				margin-left: 5%;
				font-size: 15px;
				margin-top:10px;
			}
			.veiculos_lista_itens i{
				color:#d50e0b;
			}

			.veiculo_valor3{
				font-size: 18px;
				font-weight: bold;
				margin-left: 5%;
				margin-top: 15px;
			}
			.veiculo_valor3 span{
				font-size: 14px;
				font-weight: normal;
			}

			a.veiculo_vermais{
				color: #fff;
				border-color: #333;
				border-radius:4px;
				background: #333;
				font-size:16px;
				display:block;
				position: absolute;
				bottom: 10px; right: 15px;
				padding-top:5px;
				padding-bottom:5px;
				padding-left: 10px;
				padding-right: 10px;
			}

			@media (max-width: 770px){			 

				.garagem_lista_carrossel_<?=$conteudo_id?> .veiculo_titulo{
					padding-top:0px;
					font-size: 15px;
					font-weight: bold;
				}

				.garagem_lista_carrossel_<?=$conteudo_id?> .veiculo_endereco{ 
					font-size: 11px; 
				}

				.carrosel_menu{
					font-size: 14px;
					margin-left:0px;
					margin-right:0px;
					display: block;
					margin-top:0px;
					padding-top: 0px;
					padding-bottom: 5px;
					margin-bottom: 0px;

				}

			}

		</style>

		<div class="garagem_lista_carrossel_<?=$conteudo_id?>" >	

			<div class="owl-carousel garagem_destaques_<?=$conteudo_id?>" >

				<?php

				foreach($lista_garagem as $key => $value) {
					
					$endereco_gara = DOMINIO.$controller.'/veiculo_detalhes/id/'.$value['codigo'].'/item/'.$value['tituloparaurl'];
					// $endereco_gara = DOMINIO.$controller.'/veiculo_detalhes/id/'.$value['codigo'];

					if($value['valor'] == '0,00'){
								// $valor_final_gara = "<div class='veiculo_valor' style='font-weight:400;'>Consulte!</div>";
						$valor_final_gara = "";
					} else {
						$valor_final_gara = "<div class='veiculo_valor3' ><span>R$</span> ".$value['valor']."</div>";
					}

					
					echo "
					<div class='item' >
					<div class='veiculo_quadro veiculo_quadro2 $classes_css' >

					<div class='veiculo_imagem_div'>
					<div class='veiculo_imagem ".$classes_css_img."' style='background-image:url(".$value['imagem'].");' >
					<a href='".$endereco_gara."'><img src='".LAYOUT."img/transp.png' style='width:100%; height:100%;'></a>
					</div>
					</div>

					<div class='veiculo_titulo' onClick=\"window.location='".$endereco_gara."';\" >".$value['titulo']."</div>

					<div style='text-align:left;' >
					";

					if($value['ano_fab']){
						echo "
						<span class='veiculos_lista_itens'>
						<i class='fas fa-calendar-alt'></i>
						".$value['ano_fab']."/".$value['ano_mod']."
						</span>
						";
					}

					if($value['combustivel']){
						echo "
						<span class='veiculos_lista_itens'>
						<i class='fas fa-gas-pump'></i>
						".$value['combustivel']."
						</span>
						";
					}

					if($value['km']){
						echo "
						<span class='veiculos_lista_itens'>
						<i class='fas fa-tachometer-alt'></i>
						".$value['km']." Km
						</span>
						";
					}

					echo "
					</div>

					".$valor_final_gara."


					<a alt='Ver detalhes' href='".$endereco_gara."' class='veiculo_vermais'><i class='fas fa-arrow-right'></i></a>

					</div>
					</div>
					";

				}

				?> 
			</div>

		</div>

		<div style="position: absolute; bottom:45px; text-align: center; z-index: 9999; width: 70%; left: 15%;">
			<div class="carrosel_menu" onclick="window.location='<?=$link_ver_mais_garagem?>';" ><i class="fas fa-search" style="color:#000000 !important;"></i> Ver Todos os Veículos</div> 
		</div>

		<?php
	}

	?>


</div>