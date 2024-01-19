<?php if(!isset($_base['libera_views'])){ header("HTTP/1.0 404 Not Found"); exit; }

// echo "<pre>"; print_r($conteudo_sessao['cores']['detalhes']); echo "</pre>";
$cores = $conteudo_sessao['cores']['lista'];
$conteudo_config = $conteudo_sessao['data_grupo'];
$classes_css = str_replace(".", "", $conteudo_config->classes);
$classes_css_img = str_replace(".", "", $conteudo_config->classes_img);

$paginacao = $conteudo_sessao['paginacao'];
$imagens_fundo = $conteudo_sessao['imagens_fundo'];
$lista_imoveis = $conteudo_sessao['lista'];

$imoveis_categoria_selecionada = $conteudo_sessao['categoria_selecionada'];
$imoveis_categorias = $conteudo_sessao['categorias'];

$imoveis_tipos = $conteudo_sessao['tipos'];
$imoveis_tipo_selecionado = $conteudo_sessao['tipo_selecionado'];

$imoveis_cidades = $conteudo_sessao['cidades'];
$imoveis_cidade_selecionada = $conteudo_sessao['cidade_selecionada'];
$imoveis_cidade_base = $conteudo_sessao['cidade_base'];


$imoveis_dorm_selecionado = $conteudo_sessao['dormitorios_selecionado'];
$imoveis_suites_selecionado = $conteudo_sessao['suites_selecionado'];
$imoveis_garagens_selecionado = $conteudo_sessao['garagens_selecionado'];
$imoveis_ordem_selecionada = $conteudo_sessao['ordem_selecionado'];

$imoveis_valor_max_selecionado = $conteudo_sessao['valor_max'];
$imoveis_valor_max_selecionado_tratado = $conteudo_sessao['valor_max_tratado'];
$imoveis_valor_max_selecionado_tratado_busca =  $conteudo_sessao['valor_max_tratado_busca'];

$imoveis_valor_min_selecionado =  $conteudo_sessao['valor_min'];
$imoveis_valor_min_selecionado_tratado =  $conteudo_sessao['valor_min_tratado'];
$imoveis_valor_min_selecionado_tratado_busca = $conteudo_sessao['valor_min_tratado_busca'];


$link_ver_mais_imoveis = DOMINIO.$conteudo_sessao['data_grupo']->busca_pagina."/";
if($conteudo_sessao['data_grupo']->categoria){
	$link_ver_mais_imoveis = DOMINIO.$conteudo_sessao['data_grupo']->busca_pagina."/inicial/imo_cat/".$conteudo_sessao['data_grupo']->categoria;
}

?> 

<div id="section-imoveis-<?=$conteudo_id?>" class="container-fluid animate-effect" style="background-color: <?=$cores[123]?>; font-family: <?=$conteudo_config->font_family?> !important; ">
	

	<?php if($conteudo_config->mostrar_titulo == 1){ ?>

		<div class='row' >
			<div class='col-xs-12 col-sm-12 col-md-12' >
				<div style="margin-top:80px; margin-bottom:30px;">
					<h2 class="titulo_padrao" style="color:<?=$cores[124]?> !important; border-color:<?=$cores[124]?> !important; " ><?=$conteudo_config->titulo?></h2>
					<div class="titulo_padrao_linha" style="color:<?=$cores[124]?>; " ></div> 
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
				color: <?=$cores[146]?>;
			}

			#imoveis_busca_<?=$conteudo_id?> {
				position: absolute;
				top:13%;
				left: 0px;
				width: 100%;
				height: auto;
				z-index: 999;
				text-align: center;
			}

			#imoveis_busca_<?=$conteudo_id?> .select2-container .select2-selection--single{
				height: 50px !important;
			}
			#imoveis_busca_<?=$conteudo_id?> .esq .select2-container .select2-selection--single  {
				border-radius: 5px 0px 0px 5px !important;
			}
			#imoveis_busca_<?=$conteudo_id?> .select2-container--default .select2-selection--single .select2-selection__rendered{
				line-height: 43px;
			}
			#imoveis_busca_<?=$conteudo_id?> .select2-container--default .select2-selection--single .select2-selection__arrow{
				height: 43px !important;
			}

			.ui-draggable, .ui-droppable {
				background-position: top;
			}

			#imov_amount_comprar_<?=$conteudo_id?>{
				background-color: transparent !important;
				color:<?=$cores[150]?>;
				border:0px;
				width: 100%;
				margin-bottom: 10px;
				font-weight: 500;
			}
			#imov_amount_alugar_<?=$conteudo_id?>{
				background-color: transparent !important;
				color:<?=$cores[150]?>;
				border:0px;
				width: 100%;
				margin-bottom: 10px;
				font-weight: 500;
			}

			#busca_imo_normal_<?=$conteudo_id?>{
				width: 100%;
			}

			#busca_imo_detalhada_<?=$conteudo_id?>{
				text-align: left;
			}

			#busca_imo_detalhada_<?=$conteudo_id?> .select2{
				width: 100% !important;
			}
			#busca_imo_normal_<?=$conteudo_id?> .select2{
				width: 100%;
			}

			#busca_imo_detalhada_<?=$conteudo_id?> .select2-container .select2-selection--single{
				height: 40px !important;
			}
			#busca_imo_detalhada_<?=$conteudo_id?> .esq .select2-container .select2-selection--single  {
				border-radius: 5px 0px 0px 5px !important;
			}
			#busca_imo_detalhada_<?=$conteudo_id?> .select2-container--default .select2-selection--single .select2-selection__rendered{
				line-height: 33px;
			}
			#busca_imo_detalhada_<?=$conteudo_id?> .select2-container--default .select2-selection--single .select2-selection__arrow{
				height: 33px !important;
			}

			#imoveis_busca_<?=$conteudo_id?> .tab-pane{
				padding: 25px 25px 25px 25px;
				background-color: <?=$cores[147]?>;
				border: 0px;
				border-radius: 0px 6px 6px 6px;
			}
			#imoveis_busca_<?=$conteudo_id?> .nav-tabs {
				border:0px;
			}
			#imoveis_busca_<?=$conteudo_id?> .nav-tabs>li {
				margin-bottom: 0px;
				margin-right: 1px;
			} 
			#imoveis_busca_<?=$conteudo_id?> .nav-tabs>li>a {
				background-color: <?=$cores[148]?>;
				border: 0px;
				color: <?=$cores[149]?>;
				font-size: 16px;
			}
			#imoveis_busca_<?=$conteudo_id?> .nav-tabs>li>a:hover {
				background-color: <?=$cores[147]?>;
			}
			#imoveis_busca_<?=$conteudo_id?> .nav-tabs>li.active>a, .nav-tabs>li.active>a:hover, .nav-tabs>li.active>a:focus {
				background-color: <?=$cores[147]?>;
				border: 0px;
				color: <?=$cores[149]?>;
				font-size: 16px;
			}

			#imoveis_busca_<?=$conteudo_id?> .filtros_campo_txt{
				color: <?=$cores[150]?>;
				text-align: left;
				padding-bottom: 5px;
				margin-top: 10px;
			}

			.filtros_div4{
				margin-top: 20px;
			}
			.imoveis_botaozao {
				width:25%;
				background-color: <?=$cores[151]?>;
				color: <?=$cores[152]?>;
				border:1px solid <?=$cores[153]?>;
				border-left: 2px solid <?=$cores[153]?>;
				border-radius: 0px 4px 4px 0px;
				height: 50px;
			}
			.imoveis_botaozao:hover { 
				border:1px solid <?=$cores[153]?>;
				background-color: <?=$cores[151]?>;
				color: <?=$cores[152]?>;
			}

			.imoveis_botaozao2 {
				width:25%;
				background-color: <?=$cores[151]?>;
				color: <?=$cores[152]?>;
				border:1px solid <?=$cores[153]?>; 
				border-radius: 4px !important;
				height: 55px;
			}
			.imoveis_botaozao2:hover { 
				border:1px solid <?=$cores[153]?>;
				background-color: <?=$cores[151]?>;
				color: <?=$cores[152]?>;
			}

			.form_referencia{
				border: 0px;
				background: #FFF;
				padding-left: 20px;
				height: 50px;
				font-size: 15px;
				text-align: left;
				border-radius:4px 0 0 4px;
			}

			.select2-container .select2-selection--single{
				border-radius:4px !important;
			}

			@media (max-width: 990px){

				.imoveis_busca_campo_div{
					width: 100%;
					margin-top: 10px;
					border-radius: 4px !important;
				}
				.imoveis_busca_campo_div .esq{
					border-radius: 4px !important;
				}
				#imoveis_busca_<?=$conteudo_id?> .esq .select2-container .select2-selection--single{
					border-radius: 4px !important;
				}
				.select2-container .select2-selection--single{
					border-radius: 4px !important;
				}
				.imoveis_busca_quadro .dir .btn{
					border-radius: 4px !important;
				}
				#imoveis_busca_<?=$conteudo_id?> .nav-tabs>li.active>a, .nav-tabs>li.active>a:hover, .nav-tabs>li.active>a:focus{
					font-size: 12px;
				}
				#imoveis_busca_<?=$conteudo_id?> .nav-tabs>li>a{
					font-size: 12px;
				}
				.imoveis_busca_quadro{
					width: 90%;
				}
				.filtros_campo_txt{
					font-size: 12px;
				}
				.sessao_slideshow{
					height:990px;
				} 
				
				#slideshow_<?=$conteudo_id?> DIV{ 
					background-position: left;
				}
				
			}
			
			@media (max-width: 770px){
				#imoveis_busca_<?=$conteudo_id?> {
					top:10% !important;
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
			
			
			
			<div id="imoveis_busca_<?=$conteudo_id?>" >
				
				<div class="slogan" style="font-size: 48px; line-height:48px; font-family: 'Kastelov Intelo Bold'; text-align: center;" >Conectando pessoas<br>aos melhores <span id="frasetrocando"></span></div>

				<div class="imoveis_busca_quadro" >

					<ul class="nav nav-tabs">
						<li <?php if( (!$imo_tipo_busca) OR ($imo_tipo_busca == 1) ){ echo 'class="active"'; } ?> >
							<a href="#busca_imo_normal_<?=$conteudo_id?>" data-toggle="tab">Busca Rápida</a>
						</li>
						<li <?php if( $imo_tipo_busca == 2 ){ echo 'class="active"'; } ?> >
							<a href="#busca_imo_refencia_<?=$conteudo_id?>" data-toggle="tab">Busca por Ref.</a>
						</li>
						<li <?php if( $imo_tipo_busca == 3 ){ echo 'class="active"'; } ?> >
							<a href="#busca_imo_detalhada_<?=$conteudo_id?>" data-toggle="tab" >Busca Detalhada</a>
						</li>
					</ul>

					<div class="tab-content" >

						<div id="busca_imo_normal_<?=$conteudo_id?>" class="tab-pane <?php if( (!$imo_tipo_busca) OR ($imo_tipo_busca == 1) ){ echo 'active'; } ?>" style="text-align: left;" >

							<form name="form_imoveis_busca" action="<?=DOMINIO?><?=$controller?>/imoveis_busca_simp" method="post" >

								<div class="imoveis_busca_campo_div esq" >
									<select class="select2" name="categoria" >
										<option value='0' <?php if($imoveis_categoria_selecionada == 0){ echo "selected=''"; } ?> >Comprar ou Alugar?</option>

										<?php

										foreach ($imoveis_categorias as $key => $value) {

											if($imoveis_categoria_selecionada == $value['codigo']){ $selected = "selected=''"; } else { $selected = ""; }

											echo "<option value='".$value['codigo']."' $selected >".$value['titulo']."</option>";

										}

										?>
									</select>
								</div>

								<div class="imoveis_busca_campo_div" >
									<select class="select2" name="tipo" >

										<option value='0' <?php if( ($imoveis_tipo_selecionado == 0) OR (!$imoveis_tipo_selecionado) ){ echo "selected"; } ?> >Tipo de Imóvel</option>

										<?php
										foreach ($imoveis_tipos as $key => $value) {

											if($value['codigo'] == $imoveis_tipo_selecionado){ $selected = "selected"; } else { $selected = ""; }

											echo "<option value='".$value['codigo']."' $selected >".$value['titulo']."</option>";

										}

										?>
									</select>
								</div>

								<div class="imoveis_busca_campo_div" >
									<select class="select2" name="cidade" onChange="carrega_bairros_<?=$conteudo_id?>(this.value);" >
										
										<option value='0' <?php if(!$imoveis_cidade_selecionada){ echo "selected"; } ?> >Cidade</option>

										<?php

										foreach ($imoveis_cidades as $key => $value) {

											if(!$imoveis_cidade_selecionada){
												// if($value['codigo'] == $imoveis_cidade_base){ $selected = "selected"; } else { $selected = ""; }
												$selected = ""; 
											} else {
												if($value['codigo'] == $imoveis_cidade_selecionada){ $selected = "selected"; } else { $selected = ""; }
											}

											echo "<option value='".$value['codigo']."' $selected >".$value['cidade']." - ".$value['estado']."</option>";

										}

										?>
									</select>
								</div>

								<div class="imoveis_busca_campo_div" >
									<div id="bairros_lista_<?=$conteudo_id?>" style="width: 100%;">

									</div>
								</div>

								<div class="imoveis_busca_campo_div dir" >
									<span class="input-group-btn" >
										<button class="btn btn-default imoveis_botaozao" type="button" onClick="form_imoveis_busca.submit();" > <i class="fa fa-search" aria-hidden="true"></i> Buscar</button>
										<input type="hidden" name="grupo_pagina" value="<?=$conteudo_config->id?>" >
									</span>
								</div>

								<div style="clear:both;"></div>

							</form>  
						</div>


						<div id="busca_imo_refencia_<?=$conteudo_id?>" class="tab-pane <?php if( $imo_tipo_busca == 2 ){ echo 'active'; } ?>" >
							<form name="form_busca_referencia" id="form_busca_referencia" action="<?=DOMINIO?><?=$controller?>/imoveis_busca_ref" method="post" >

								<div class="imoveis_busca_campo_div2"  >
									<input name="referencia" id="campo_ref" class="form-control form_referencia" placeholder="Digite o código do imóvel" > 
								</div>

								<div class="imoveis_busca_campo_div3 dir" >
									<span class="input-group-btn" >
										<button class="btn btn-default imoveis_botaozao" type="button" onClick="form_busca_referencia.submit();" > <i class="fa fa-search" aria-hidden="true"></i> Buscar</button>
										<input type="hidden" name="grupo_pagina" value="<?=$conteudo_config->id?>" >
									</span>
								</div>

								<div style="clear:both;" ></div> 

							</form>
						</div>


						<div id="busca_imo_detalhada_<?=$conteudo_id?>" class="tab-pane <?php if( $imo_tipo_busca == 3 ){ echo 'active'; } ?>" >
							<form name="form_detalhada" id="form_detalhada" action="<?=DOMINIO?><?=$controller?>/imoveis_busca_det" method="post" >


								<div class="row">

									<div class='col-xs-6 col-sm-4 col-md-4'>
										<div class="filtros_div3" >
											<div class="filtros_campo_txt" >Alugar ou Comprar?</div>
											<div>
												<select class="select2" name="categoria" onChange="troca_faixa_preco_<?=$conteudo_id?>(this.value);" style="width: 100%;" > 
													<option value='0' <?php if($imoveis_categoria_selecionada == 0){ echo "selected=''"; } ?> >Categoria</option>

													<?php

													foreach ($imoveis_categorias as $key => $value) {

														if($imoveis_categoria_selecionada == $value['codigo']){ $selected = "selected=''"; } else { $selected = ""; }

														echo "<option value='".$value['codigo']."' $selected >".$value['titulo']."</option>";

													}

													?>
												</select>
											</div>
										</div>
									</div>

									<div class='col-xs-6 col-sm-4 col-md-4'>
										<div class="filtros_div3" >
											<div class="filtros_campo_txt" >Tipo de Imóvel</div>
											<div>
												<select class="select2" name="tipo" >

													<option value='0' <?php if( ($imoveis_tipo_selecionado == 0) OR (!$imoveis_tipo_selecionado) ){ echo "selected"; } ?> >Tipo</option>

													<?php
													foreach ($imoveis_tipos as $key => $value) {

														if($value['codigo'] == $imoveis_tipo_selecionado){ $selected = "selected"; } else { $selected = ""; }

														echo "<option value='".$value['codigo']."' $selected >".$value['titulo']."</option>";

													}

													?>
												</select>
											</div>
										</div>
									</div>

									<div class='col-xs-12 col-sm-4 col-md-4'>
										<div class="filtros_div3" >
											<div class="filtros_campo_txt" >Cidade</div>
											<div>
												<select class="select2" name="cidade" onChange="carrega_bairros_det_<?=$conteudo_id?>(this.value);" >

													<option value='0' <?php if(!$imoveis_cidade_selecionada){ echo "selected"; } ?> >Todas</option>

													<?php

													foreach ($imoveis_cidades as $key => $value) {

														if(!$imoveis_cidade_selecionada){
															// if($value['codigo'] == $imoveis_cidade_base){ $selected = "selected"; } else { $selected = ""; }
															$selected = ""; 

														} else {
															if($value['codigo'] == $imoveis_cidade_selecionada){ $selected = "selected"; } else { $selected = ""; }
														}

														echo "<option value='".$value['codigo']."' $selected >".$value['cidade']." - ".$value['estado']."</option>";

													}

													?>
												</select>
											</div>
										</div>
									</div>

								</div>

								<div class="row">

									<div class='col-xs-6 col-sm-5 col-md-5'>                            
										<div class="filtros_div3" >
											<div class="filtros_campo_txt" >Bairro</div>
											<div id="bairros_lista_det_<?=$conteudo_id?>" >
											</div>
										</div>
									</div>

									<div class='col-xs-6 col-sm-3 col-md-3'>
										<div class="filtros_div3" >
											<div class="filtros_campo_txt" >Dormitórios</div>
											<div>
												<select class="select2" name="dormitorios" >
													<option value='0' <?php if($imoveis_dorm_selecionado == 0){ echo "selected"; } ?> >Todos</option>
													<option value='1' <?php if($imoveis_dorm_selecionado == 1){ echo "selected"; } ?> >1</option>
													<option value='2' <?php if($imoveis_dorm_selecionado == 2){ echo "selected"; } ?> >2</option>
													<option value='3' <?php if($imoveis_dorm_selecionado == 3){ echo "selected"; } ?> >3</option>
													<option value='4' <?php if($imoveis_dorm_selecionado >= 4){ echo "selected"; } ?> >4 ou +</option>
												</select>
											</div>
										</div>
									</div>

									<div class='col-xs-6 col-sm-2 col-md-2'>
										<div class="filtros_div3" >
											<div class="filtros_campo_txt" >Suítes</div>
											<div>
												<select class="select2" name="suites" >
													<option value='0' <?php if($imoveis_suites_selecionado == 0){ echo "selected"; } ?> >Todos</option>
													<option value='1' <?php if($imoveis_suites_selecionado == 1){ echo "selected"; } ?> >1</option>
													<option value='2' <?php if($imoveis_suites_selecionado == 2){ echo "selected"; } ?> >2</option>
													<option value='3' <?php if($imoveis_suites_selecionado == 3){ echo "selected"; } ?> >3</option>
													<option value='4' <?php if($imoveis_suites_selecionado >= 4){ echo "selected"; } ?> >4 ou +</option>
												</select>
											</div>
										</div>
									</div>

									<div class='col-xs-6 col-sm-2 col-md-2'>
										<div class="filtros_div3" >
											<div class="filtros_campo_txt" >Garagem</div>
											<div>
												<select class="select2" name="garagem" >
													<option value='0' <?php if($imoveis_garagens_selecionado == 0){ echo "selected"; } ?> >Todos</option>
													<option value='1' <?php if($imoveis_garagens_selecionado == 1){ echo "selected"; } ?> >1</option>
													<option value='2' <?php if($imoveis_garagens_selecionado == 2){ echo "selected"; } ?> >2</option>
													<option value='3' <?php if($imoveis_garagens_selecionado == 3){ echo "selected"; } ?> >3</option>
													<option value='4' <?php if($imoveis_garagens_selecionado >= 4){ echo "selected"; } ?> >4 ou +</option>
												</select>
											</div>
										</div>
									</div>

								</div>


								<div class="row">

									<div class='col-xs-6 col-sm-4 col-md-4'>
										<div class="filtros_div3" >

											<div class="filtros_campo_txt" >Faixa de Preço</div> 											

											<div id="preco_alugar_<?=$conteudo_id?>" <?php if($imoveis_categoria_selecionada != '5280'){ echo "style='display:none;'"; } ?> >

												<input type="text" id="imov_amount_alugar_<?=$conteudo_id?>" readonly >
												<div id="slider-range_alugar_<?=$conteudo_id?>"></div>
												<input type="hidden" id="alugar_valor_min_<?=$conteudo_id?>" name="alugar_valor_min" value="<?=$imo_alugar_valor_min?>" >
												<input type="hidden" id="alugar_valor_max_<?=$conteudo_id?>" name="alugar_valor_max" value="<?=$imo_alugar_valor_max?>" >

											</div>

											<div id="preco_comprar_<?=$conteudo_id?>" <?php if($imoveis_categoria_selecionada == '5280'){ echo "style='display:none;'"; } ?> >
												
												<input type="text" id="imov_amount_comprar_<?=$conteudo_id?>" readonly >
												<div id="slider-range_comprar_<?=$conteudo_id?>"></div>
												<input type="hidden" id="comprar_valor_min_<?=$conteudo_id?>" name="comprar_valor_min" value="<?=$imo_comprar_valor_min?>">
												<input type="hidden" id="comprar_valor_max_<?=$conteudo_id?>" name="comprar_valor_max" value="<?=$imo_comprar_valor_max?>"  >

											</div>

										</div>
									</div>

									<div class='col-xs-6 col-sm-4 col-md-4'>
										<div class="filtros_div3" >
											<div class="filtros_campo_txt" >Ordenar Por</div>
											<div>
												<select class="select2" name="ordem" >
													<option value='0' <?php if($imoveis_ordem_selecionada == 0){ echo "selected"; } ?> >Mais Recentes</option>
													<option value='1' <?php if($imoveis_ordem_selecionada == 1){ echo "selected"; } ?> >Mais Antigos</option>
													<option value='2' <?php if($imoveis_ordem_selecionada == 2){ echo "selected"; } ?> >Maior Valor</option>
													<option value='3' <?php if($imoveis_ordem_selecionada == 3){ echo "selected"; } ?> >Menor Valor</option>
												</select>
											</div>
										</div>
									</div>
									
									<div class='col-xs-12 col-sm-4 col-md-4'>
										<div class="filtros_div4" >
											<button class="btn btn-default imoveis_botaozao2" type="button" onClick="form_detalhada.submit();" > <i class="fa fa-search" aria-hidden="true"></i> Buscar </button>
											<input type="hidden" name="grupo_pagina" value="<?=$conteudo_config->id?>" >
										</div>
									</div>

								</div>

							</form>
						</div>

					</div> 

				</div>

			</div>



		</div>

		<?php
	}

	?>



	<?php

	if( $conteudo_config->tipo == 1 ){

		?>

		<style type="text/css"> 
			
			.imoveis_lista_normal_<?=$conteudo_id?>{
				position: relative;
				width: 100%;
				height: auto;
				<?php if($conteudo_config->mostrar_titulo == 0){ ?>
					margin-top: 50px;
				<?php } ?>
			}

			.imoveis_lista_normal_<?=$conteudo_id?> .imovel_quadro{
				border-color:<?=$cores[125]?> !important;
				background-color: <?=$cores[126]?> !important;
				color: <?=$cores[130]?> !important;
				border-radius:2px;
			}
			.imoveis_lista_normal_<?=$conteudo_id?> .imovel_titulo{
				color: <?=$cores[127]?> !important;
			}

			.imoveis_lista_normal_<?=$conteudo_id?> .imovel_valor{
				background-color: <?=$cores[128]?> !important;
				color: <?=$cores[129]?> !important;
			}
			.imoveis_lista_normal_<?=$conteudo_id?> .imoveis_lista_itens{
				background-color: <?=$cores[131]?> !important;
				color: <?=$cores[132]?> !important;
				border-color:<?=$cores[133]?> !important;
				border-radius:2px;
			}

			.imoveis_lista_normal_<?=$conteudo_id?> .imoveis_lista_itens i{ 
				color: <?=$cores[132]?> !important; 
			}

			.imoveis_lista_normal_<?=$conteudo_id?> .pagination li a, .pagination li span{
				background-color: <?=$cores[154]?> !important;
				color: <?=$cores[155]?> !important;
				border-radius:3px !important;
			}
			.imoveis_lista_normal_<?=$conteudo_id?> .pi-pagenav li .active{
				background-color: <?=$cores[156]?> !important;
				color: <?=$cores[157]?> !important;
				border-radius:3px !important;
			}

			
			@media (max-width: 990px){


			}

		</style>
		
		<div class="imoveis_lista_normal_<?=$conteudo_id?>" >

			<?php

			$itens_listados = 1;
			$n_row = 1;
			$total_listados = 0;

			foreach ($lista_imoveis as $key => $value) {

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

					$endereco_imo = DOMINIO.$controller.'/imoveis_detalhes/id/'.$value['codigo'];

					if($value['valor'] == '0,00'){
							// $valor_final_imo = "<div class='imovel_valor' style='font-weight:400;'>Consulte!</div>";
						$valor_final_imo = "";
					} else {
						$valor_final_imo = "<div class='imovel_valor' >R$ ".$value['valor']."</div>";
					}

					echo "
					<div class='imovel_quadro' >

					<div class='imovel_titulo' onClick=\"window.location='".$endereco_imo."';\" >".$value['titulo']."</div>

					<div class='imovel_imagem_div'>
					".$valor_final_imo."
					<div class='imovel_imagem ".$classes_css_img." hvr-grow' style='background-image:url(".$value['imagem'].");' >
					<a href='".$endereco_imo."'><img src='".LAYOUT."img/transp.png' style='width:100%; height:100%;'></a>
					</div>
					</div>

					<div class='imovel_endereco' >
					<div>".$value['bairro']."</div>
					<div>".$value['cidade']." - ".$value['uf']."</div>
					</div>

					<div style='margin-left:10px; margin-right:10px; text-align:left;' >
					";

					if($value['area_total']){
						echo "
						<span class='imoveis_lista_itens'>
						<i class='fas fa-ruler-horizontal'></i>
						".$value['area_total']."
						</span>
						";
					}

					if($value['quartos']){
						echo "
						<span class='imoveis_lista_itens'>
						<i class='fas fa-bed'></i>
						".$value['quartos']."
						</span>
						";
					}

					if($value['garagem']){
						echo "
						<span class='imoveis_lista_itens'>
						<i class='fas fa-car'></i>
						".$value['garagem']."
						</span>
						";
					}

					echo "
					</div>

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
						<div style="text-align:center; padding-top:60px; padding-bottom:60px; font-size: 15px; color:<?=$cores[124]?>; " >
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

		<?php
	}

	?>



	<?php
	
	if( $conteudo_config->tipo == 4 ){
		
		?>

		
		
		<style type="text/css">

			.imoveis_lista_normal2_<?=$conteudo_id?>{
				position: relative;
				width: 96%;
				height: auto;
				margin-left:2%;
				margin-right:2%; 
				padding-bottom:50px;
				padding-top: 70px;
			}
			.imoveis_destaques_<?=$conteudo_id?>{
				padding-bottom: 100px;
			}
			.imoveis_lista_normal2_<?=$conteudo_id?> .imovel_quadro{
				position: relative;

				border-color:<?=$cores[125]?> !important;
				background-color: <?=$cores[126]?> !important;
				color: <?=$cores[130]?> !important;
				border-radius:16px;
				height: 340px;
				margin-bottom:30px;
			}

			.imoveis_lista_normal2_<?=$conteudo_id?> .imovel_imagem_div{
				height: 220px;
				margin-bottom:10px;
			}
			.imoveis_lista_normal2_<?=$conteudo_id?> .imovel_imagem{
				height: 210px;
			}

			.imoveis_lista_normal2_<?=$conteudo_id?> .imovel_titulo{
				color: <?=$cores[127]?> !important;
				font-size: 15px;
				font-weight: bold;
				display: block;
				width: 100%;
				float: none;
				padding-bottom: 0px;
				padding-top:0px;
			}

			.imoveis_lista_normal2_<?=$conteudo_id?> .imovel_endereco{
				display: block;
				width: 100%;
				float: none;
				font-size: 12px;
				padding-top: 5px;
			}


			.imoveis_lista_normal2_<?=$conteudo_id?> .imoveis_lista_itens{
				background-color:transparent !important;
				color: <?=$cores[127]?> !important;
				border:none;
				padding-left:2px;
				padding-right:2px;
				font-size:13px;
				text-align: center !important;
				display: inline-block;
			}

			.imoveis_lista_normal2_<?=$conteudo_id?> .imoveis_lista_itens i{ 
				color: <?=$cores[127]?> !important; 
			}
			.imoveis_lista_normal2_<?=$conteudo_id?> .imoveis_lista_itens img{ 
				color: #0091F8 !important; 
				padding:0px;
				width: 23px;
				display: inline-block;
				fill:#0091F8 !important;
			}
			.imoveis_lista_normal2_<?=$conteudo_id?> .imoveis_lista_itens_tit{ 
				color: #0091F8 !important;
				font-size:10px;
				display: block;
				text-align: center !important;
				margin-top: 2px;
			}


			.imoveis_lista_normal2_<?=$conteudo_id?> .imovel_categoria {
				background-color: <?=$cores[128]?> !important;
				color: <?=$cores[129]?> !important;				 
				position: absolute;
				top: 15px;
				left: 15px;
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
			.imoveis_lista_normal2_<?=$conteudo_id?> .imovel_valor2 {
				background-color: <?=$cores[128]?> !important;
				color: <?=$cores[129]?> !important;				 
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

			.imoveis_lista_normal2_<?=$conteudo_id?> .imovel_bt_det { 
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
				background-color:#076EB9;
				background-image: linear-gradient(to bottom, transparent, #0091F8);
			} 
			
			.imoveis_lista_normal2_<?=$conteudo_id?> .item { 

			}

			.imoveis_lista_normal2_<?=$conteudo_id?> .owl-prev{
				top:76% !important;
				left:15px !important;
			}
			.imoveis_lista_normal2_<?=$conteudo_id?> .owl-next{
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

			@media (max-width: 1200px){		

				.imoveis_lista_normal2_<?=$conteudo_id?> .imovel_titulo{
					padding-top:3px;
					font-size: 14px;
				}
				.imoveis_lista_normal2_895 .imoveis_lista_itens img{
					width: 14px;
				}
				.imoveis_lista_normal2_895 .imoveis_lista_itens{
					font-size: 11px;
				}
				.imoveis_lista_normal2_895 .imoveis_lista_itens_tit{
					font-size: 9px;
				}
				.imoveis_lista_normal2_895 .imovel_endereco{
					font-size: 10px;
				}

				.imoveis_lista_normal2_895 .imovel_quadro{
					height: 380px;
				}
			}

			@media (max-width: 990px){		

				.imoveis_lista_normal2_<?=$conteudo_id?> .imovel_titulo{
					padding-top:3px;
					font-size: 12px;
				}
				.imoveis_lista_normal2_895 .imoveis_lista_itens img{
					width: 12px;
				}
				.imoveis_lista_normal2_895 .imoveis_lista_itens{
					font-size: 10px;
				}
				.imoveis_lista_normal2_895 .imoveis_lista_itens_tit{
					font-size: 8px;
				}
			}
			@media (max-width: 770px){			 

				.imoveis_lista_normal2_<?=$conteudo_id?> .imovel_titulo{
					padding-top:3px;
					font-size: 15px;
					font-weight: bold;
				}

				.imoveis_lista_normal2_<?=$conteudo_id?> .imoveis_lista_itens{
					padding-left:1px !important;
					padding-right:1px !important;
					font-size:11px !important; 
				} 
				.imoveis_lista_normal2_<?=$conteudo_id?> .imoveis_lista_itens img{  
					width: 22px !important; 
				}
				.imoveis_lista_normal2_<?=$conteudo_id?> .imoveis_lista_itens_tit{
					font-size:10px !important; 
					margin-top: 2px !important;
				}
				.imoveis_lista_normal2_<?=$conteudo_id?> .imovel_endereco{ 
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
		

		<div class="imoveis_lista_normal2_<?=$conteudo_id?>" >

			<?php

			$itens_listados = 1;
			$n_row = 1;
			$total_listados = 0;

			foreach ($lista_imoveis as $key => $value) {

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


					$endereco_imo = DOMINIO.$controller.'/imoveis_detalhes/id/'.$value['codigo'];

					if($value['valor'] == '0,00'){
								// $valor_final_imo = "<div class='imovel_valor' style='font-weight:400;'>Consulte!</div>";
						$valor_final_imo = "";
					} else {
						$valor_final_imo = "<div class='imovel_valor2' >R$ ".$value['valor']."</div>";
					}

					$categoria = $value['categoria_titulo'];

					echo " 
					<div class='imovel_quadro' >
					<div class='imovel_imagem_div'>
					<div class='imovel_categoria'>".$categoria."</div>
					<div class='imovel_bt_det'  onClick=\"window.location='".$endereco_imo."';\" >+</div>
					".$valor_final_imo."
					<div class='imovel_imagem ".$classes_css_img." ' style='background-image:url(".$value['imagem'].");' >
					<a href='".$endereco_imo."'><img src='".LAYOUT."img/transp.png' style='width:100%; height:100%;'></a>
					</div>
					</div>

					<div class='row' >
					<div class='col-xs-5 col-sm-5 col-md-5' >

					<div class='imovel_titulo' onClick=\"window.location='".$endereco_imo."';\" >".$value['titulo']."</div>

					<div class='imovel_endereco' >
					<div>".$value['bairro']."</div>
					<div>".$value['cidade']." - ".$value['uf']."</div>
					</div>

					</div>
					<div class='col-xs-7 col-sm-7 col-md-7' >	

					<div style='margin-right:15px; text-align:right;' >
					";

					if($value['area_total']){
						echo "
						<span class='imoveis_lista_itens'>
						<img src='".LAYOUT."img/icos_imo/ico_areat.svg'  >
						<span class='imoveis_lista_itens_tit'>Área total</span>
						".$value['area_total']."
						</span>
						";
					}

					if($value['quartos']){
						echo "
						<span class='imoveis_lista_itens'>
						<img src='".LAYOUT."img/icos_imo/ico_quart.svg' >
						<span class='imoveis_lista_itens_tit'>Dormit.</span>
						".$value['quartos']."
						</span>
						";
					}

					if($value['garagem']){
						echo "
						<span class='imoveis_lista_itens'>
						<img src='".LAYOUT."img/icos_imo/ico_garagem.svg' >
						<span class='imoveis_lista_itens_tit'>Vagas</span>
						".$value['garagem']."
						</span>
						";
					}

					echo "
					</div>
					</div>
					</div>
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
						<div style="text-align:center; padding-top:60px; padding-bottom:60px; font-size: 15px; color:<?=$cores[124]?>; " >
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


		<?php
	}

	?>



	<?php

	if( $conteudo_config->tipo == 2 ){

		?>

		<style type="text/css"> 

			.imoveis_lista_carrossel_<?=$conteudo_id?>{
				position: relative;
				width: 100%;
				height: auto;
			}
			.imoveis_lista_carrossel_<?=$conteudo_id?> .imovel_quadro{
				border-color:<?=$cores[125]?> !important;
				background-color: <?=$cores[126]?> !important;
				color: <?=$cores[130]?> !important;
				border-radius:2px;
			}
			.imoveis_lista_carrossel_<?=$conteudo_id?> .imovel_titulo{
				color: <?=$cores[127]?> !important;
			}

			.imoveis_lista_carrossel_<?=$conteudo_id?> .imovel_valor{
				background-color: <?=$cores[128]?> !important;
				color: <?=$cores[129]?> !important;
			}
			.imoveis_lista_carrossel_<?=$conteudo_id?> .imoveis_lista_itens{
				background-color: <?=$cores[131]?> !important;
				color: <?=$cores[132]?> !important;
				border-color:<?=$cores[133]?> !important;
				border-radius:2px;
			}

			.imoveis_lista_carrossel_<?=$conteudo_id?> .imoveis_lista_itens i{ 
				color: <?=$cores[132]?> !important; 
			}		 


			@media (max-width: 990px){


			}

		</style>

		<div class="imoveis_lista_carrossel_<?=$conteudo_id?>" >

			<div class='row' >
				<div class='col-xs-12 col-sm-12 col-md-12' >					

					<div id="imoveis_destaques_<?=$conteudo_id?>" >

						<?php

						foreach($lista_imoveis as $key => $value) {

							$endereco_imo = DOMINIO.$controller.'/imoveis_detalhes/id/'.$value['codigo'];

							if($value['valor'] == '0,00'){
								// $valor_final_imo = "<div class='imovel_valor' style='font-weight:400;'>Consulte!</div>";
								$valor_final_imo = "";
							} else {
								$valor_final_imo = "<div class='imovel_valor' >R$ ".$value['valor']."</div>";
							}

							echo "
							<div>
							<div class='imovel_quadro' >

							<div class='imovel_titulo' onClick=\"window.location='".$endereco_imo."';\" >".$value['titulo']."</div>

							<div class='imovel_imagem_div'>
							".$valor_final_imo."
							<div class='imovel_imagem ".$classes_css_img." hvr-grow' style='background-image:url(".$value['imagem'].");' >
							<a href='".$endereco_imo."'><img src='".LAYOUT."img/transp.png' style='width:100%; height:100%;'></a>
							</div>
							</div>

							<div class='imovel_endereco' >
							<div>".$value['bairro']."</div>
							<div>".$value['cidade']." - ".$value['uf']."</div>
							</div>

							<div style='margin-left:10px; margin-right:10px; text-align:left;' >
							";

							if($value['area_total']){
								echo "
								<span class='imoveis_lista_itens'>
								<i class='fas fa-ruler-horizontal'></i>
								".$value['area_total']."
								</span>
								";
							}

							if($value['quartos']){
								echo "
								<span class='imoveis_lista_itens'>
								<i class='fas fa-bed'></i>
								".$value['quartos']."
								</span>
								";
							}

							if($value['garagem']){
								echo "
								<span class='imoveis_lista_itens'>
								<i class='fas fa-car'></i>
								".$value['garagem']."
								</span>
								";
							}

							echo "
							</div>

							</div>
							</div>
							";

						}

						?>
					</div>		 


				</div>
			</div>
		</div>

		<?php
	}


	if( $conteudo_config->tipo == 3 ){

		?>

		<style type="text/css">

			.imoveis_lista_carrossel_<?=$conteudo_id?>{
				position: relative;
				width: 96%;
				height: auto;
				margin-left:2%;
				margin-right:2%; 
				padding-bottom:1px;
			}
			.imoveis_destaques_<?=$conteudo_id?>{
				padding-bottom: 100px;
			}
			.imoveis_lista_carrossel_<?=$conteudo_id?> .imovel_quadro{
				border-color:<?=$cores[125]?> !important;
				background-color: <?=$cores[126]?> !important;
				color: <?=$cores[130]?> !important;
				border-radius:16px;
				height: 330px;
			}

			.imoveis_lista_carrossel_<?=$conteudo_id?> .imovel_imagem_div{
				height: 220px;
				margin-bottom:10px;
			}
			.imoveis_lista_carrossel_<?=$conteudo_id?> .imovel_imagem{
				height: 210px;
			}

			.imoveis_lista_carrossel_<?=$conteudo_id?> .imovel_titulo{
				color: <?=$cores[127]?> !important;
				font-size: 15px;
				font-weight: bold;
				display: block;
				width: 100%;
				float: none;
				padding-bottom: 0px;
				padding-top:0px;
			}

			.imoveis_lista_carrossel_<?=$conteudo_id?> .imovel_endereco{
				display: block;
				width: 100%;
				float: none;
				font-size: 12px;
				padding-top: 5px;
			}


			.imoveis_lista_carrossel_<?=$conteudo_id?> .imoveis_lista_itens{
				background-color:transparent !important;
				color: <?=$cores[127]?> !important;
				border:none;
				padding-left:2px;
				padding-right:2px;
				font-size:13px;
				text-align: center !important;
				display: inline-block;
			}

			.imoveis_lista_carrossel_<?=$conteudo_id?> .imoveis_lista_itens i{ 
				color: <?=$cores[127]?> !important; 
			}
			.imoveis_lista_carrossel_<?=$conteudo_id?> .imoveis_lista_itens img{ 
				color: #0091F8 !important; 
				padding:0px;
				width: 23px;
				display: inline-block;
				fill:#0091F8 !important;
			}
			.imoveis_lista_carrossel_<?=$conteudo_id?> .imoveis_lista_itens_tit{ 
				color: #0091F8 !important;
				font-size:10px;
				display: block;
				text-align: center !important;
				margin-top: 2px;
			}


			.imoveis_lista_carrossel_<?=$conteudo_id?> .imovel_categoria {
				background-color: <?=$cores[128]?> !important;
				color: <?=$cores[129]?> !important;				 
				position: absolute;
				top: 15px;
				left: 15px;
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
			.imoveis_lista_carrossel_<?=$conteudo_id?> .imovel_valor2 {
				background-color: <?=$cores[128]?> !important;
				color: <?=$cores[129]?> !important;				 
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

			.imoveis_lista_carrossel_<?=$conteudo_id?> .imovel_bt_det { 
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
				background-color:#076EB9;
				background-image: linear-gradient(to bottom, transparent, #0091F8);
			} 

			.imoveis_lista_carrossel_<?=$conteudo_id?> .item { 

			}

			.imoveis_lista_carrossel_<?=$conteudo_id?> .owl-prev{
				top:76% !important;
				left:15px !important;
			}
			.imoveis_lista_carrossel_<?=$conteudo_id?> .owl-next{
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

				.imoveis_lista_carrossel_<?=$conteudo_id?> .imovel_titulo{
					padding-top:3px;
					font-size: 15px;
					font-weight: bold;
				}

				.imoveis_lista_carrossel_<?=$conteudo_id?> .imoveis_lista_itens{
					padding-left:1px !important;
					padding-right:1px !important;
					font-size:11px !important; 
				} 
				.imoveis_lista_carrossel_<?=$conteudo_id?> .imoveis_lista_itens img{  
					width: 22px !important; 
				}
				.imoveis_lista_carrossel_<?=$conteudo_id?> .imoveis_lista_itens_tit{
					font-size:10px !important; 
					margin-top: 2px !important;
				}
				.imoveis_lista_carrossel_<?=$conteudo_id?> .imovel_endereco{ 
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

		<div class="imoveis_lista_carrossel_<?=$conteudo_id?>" >	

			<div class="owl-carousel imoveis_destaques_<?=$conteudo_id?>" >

				<?php

				foreach($lista_imoveis as $key => $value) {

					$endereco_imo = DOMINIO.$controller.'/imoveis_detalhes/id/'.$value['codigo'];

					if($value['valor'] == '0,00'){
								// $valor_final_imo = "<div class='imovel_valor' style='font-weight:400;'>Consulte!</div>";
						$valor_final_imo = "";
					} else {
						$valor_final_imo = "<div class='imovel_valor2' >R$ ".$value['valor']."</div>";
					}

					$categoria = $value['categoria_titulo'];

					echo "
					<div class='item' >
					<div class='imovel_quadro' >
					<div class='imovel_imagem_div'>
					<div class='imovel_categoria'>".$categoria."</div>
					<div class='imovel_bt_det'  onClick=\"window.location='".$endereco_imo."';\" >+</div>
					".$valor_final_imo."
					<div class='imovel_imagem ".$classes_css_img."' style='background-image:url(".$value['imagem'].");' >
					<a href='".$endereco_imo."'><img src='".LAYOUT."img/transp.png' style='width:100%; height:100%;'></a>
					</div>
					</div>

					<div class='row' >
					<div class='col-xs-5 col-sm-5 col-md-6' >

					<div class='imovel_titulo' onClick=\"window.location='".$endereco_imo."';\" >".$value['titulo']."</div>

					<div class='imovel_endereco' >
					<div>".$value['bairro']."</div>
					<div>".$value['cidade']." - ".$value['uf']."</div>
					</div>

					</div>
					<div class='col-xs-7 col-sm-7 col-md-6' >	

					<div style='margin-right:15px; text-align:right;' >
					";

					if($value['area_total']){
						echo "
						<span class='imoveis_lista_itens'>
						<img src='".LAYOUT."img/icos_imo/ico_areat.svg'  >
						<span class='imoveis_lista_itens_tit'>Área total</span>
						".$value['area_total']."
						</span>
						";
					}

					if($value['quartos']){
						echo "
						<span class='imoveis_lista_itens'>
						<img src='".LAYOUT."img/icos_imo/ico_quart.svg' >
						<span class='imoveis_lista_itens_tit'>Dormit.</span>
						".$value['quartos']."
						</span>
						";
					}

					if($value['garagem']){
						echo "
						<span class='imoveis_lista_itens'>
						<img src='".LAYOUT."img/icos_imo/ico_garagem.svg' >
						<span class='imoveis_lista_itens_tit'>Vagas</span>
						".$value['garagem']."
						</span>
						";
					}

					echo "
					</div>
					</div>
					</div>
					</div>
					</div>
					";

				}

				?> 
			</div>

		</div>

		<div style="position: absolute; bottom:60px; text-align: center; z-index: 9999; width: 70%; left: 15%;">
			<div class="carrosel_menu" onclick="window.location='<?=$link_ver_mais_imoveis?>';" ><i class="fas fa-search" style="color:#076EB9 !important;"></i> Ver Todos os Imóveis</div>
			<div class="carrosel_menu" onclick="window.location='<?=DOMINIO?><?=$controller?>/imoveis_favoritos';" ><i class="fas fa-heart" style="color:red !important;"></i> Imóveis Favoritos</div>
		</div>

		<?php
	}

	?>

</div>

<script type="text/javascript">

	var texto_id = 1;
	var texto = "negócios";
	var result;

	var count = 0;
	function digitar() {
		result = document.getElementById("frasetrocando");
		window.setTimeout(function() { inserir(texto[count]) }, 150);
	}

	function inserir(letra) {
		result.innerHTML += letra;
		count++;
		if(count < texto.length){
			window.setTimeout(function() { inserir(texto[count]) }, 150);
		} else {
			texto_id++;
			if(texto_id >= 5){
				texto_id = 1;
			}
			troca_texto(texto_id);
		}
	}

	function troca_texto(id){

		window.setTimeout(function() { 
			
			result.innerHTML = '';
			count = 0;
			
			if(id == 1){
				texto = "negócios";
			}
			if(id == 2){
				texto = "imóveis";
			}
			if(id == 3){
				texto = "terrenos";
			}
			if(id == 4){
				texto = "apartamentos";
			} 
			digitar();

		}, 4000);
	}

	window.onload = digitar;




</script>