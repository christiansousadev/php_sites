<?php include_once('base.php'); ?>



<div class="nav-tabs-custom">

	<ul class="nav nav-tabs">

		<li class="active" >
			<a href="#dados" data-toggle="tab">Dados</a>
		</li>
		<li>
			<a href="#imagem" data-toggle="tab">Imagem de fundo</a>
		</li>
		<li>
			<a href="#cores" data-toggle="tab">Cores</a>
		</li>

	</ul>

	<div class="tab-content" >		

		<div id="dados" class="tab-pane active" >

			<form action="<?=$_base['objeto']?>grupos_alterar_grv" class="form-horizontal" method="post" >

				<fieldset>

					<div class="form-group">
						<label class="col-md-12" >Fonte Padrão</label>
						<div class="col-md-12">
							<select name="fonte" class="form-control select2" style="width: 100%;" >
								<?php
								
								foreach ($fontes as $key => $value) {

									if($value['codigo'] == $data->font){
										$selected = " selected=''; ";
									} else {
										$selected = "";              
									}

									echo "<option value='".$value['codigo']."' $selected >".$value['titulo']."</option>";

								}

								?>
							</select>
						</div>
					</div>

					<div class="form-group">
						<label class="col-md-12" >Titulo</label>
						<div class="col-md-12">
							<textarea name="titulo" class="summernote" ><?=$data->titulo?></textarea>
						</div>
					</div>

					<div class="form-group">
						<label class="col-md-12" >Mostrar titulo</label>
						<div class="col-md-12">
							<select name="mostrar_titulo" class="form-control select2" style="width: 100%;" >
								<option value='1' <?php if($data->mostrar_titulo == 1){ echo " selected='' "; } ?> >Sim</option>
								<option value='0' <?php if($data->mostrar_titulo == 0){ echo " selected='' "; } ?> >Não</option> 
							</select>
						</div>
					</div> 

					<div class="form-group">
						<label class="col-md-12" >Tipo</label>
						<div class="col-md-12">
							<select name="tipo" class="form-control select2" style="width: 100%;" >
								<option value='0' <?php if($data->tipo == 0){ echo " selected='' "; } ?> >Busca</option>
								<option value='1' <?php if($data->tipo == 1){ echo " selected='' "; } ?> >Lista 1</option>
								<option value='4' <?php if($data->tipo == 4){ echo " selected='' "; } ?> >Lista 2</option>
								<option value='2' <?php if($data->tipo == 2){ echo " selected='' "; } ?> >Carrossel 1</option>
								<option value='3' <?php if($data->tipo == 3){ echo " selected='' "; } ?> >Carrossel 2</option>
							</select>
						</div>
					</div>

					<div class="form-group">
						<label class="col-md-12" >Itens por linha</label>
						<div class="col-md-12">
							<select name="itens_por_linha" class="form-control select2" style="width: 100%;" >
								<option value='1' <?php if($data->itens_por_linha == 1){ echo " selected='' "; } ?> >1</option>
								<option value='2' <?php if($data->itens_por_linha == 2){ echo " selected='' "; } ?> >2</option>
								<option value='3' <?php if($data->itens_por_linha == 3){ echo " selected='' "; } ?> >3</option>
								<option value='4' <?php if($data->itens_por_linha == 4){ echo " selected='' "; } ?> >4</option>
							</select>
						</div>
					</div>

					<div class="form-group">
						<label class="col-md-12" >Itens por página</label>
						<div class="col-md-12">
							<input name="itens_por_pagina" type="text" class="form-control" value="<?=$data->itens_por_pagina?>" onkeypress="Mascara(this,Integer)" onKeyDown="Mascara(this,Integer)" >
						</div>
					</div>

					<div class="form-group">
						<label class="col-md-12" >Limite de Itens</label>
						<div class="col-md-12">
							<input name="max_itens" type="text" class="form-control" value="<?=$data->max_itens?>" onkeypress="Mascara(this,Integer)" onKeyDown="Mascara(this,Integer)" >
						</div>
					</div>

					<div class="form-group">
						<label class="col-md-12" >Categoria</label>
						<div class="col-md-12">
							<select name="categoria" class="form-control select2" style="width: 100%;" >
								<option value='0' <?php if($data->categoria == 0){ echo " selected='' "; } ?> >Todas as categorias</option>
								<?php

								foreach ($categorias as $key => $value) {

									if($data->categoria == $value['codigo']){ $selected = " selected='' "; } else { $selected = ""; }

									echo "
									<option value='".$value['codigo']."' ".$selected." >".$value['titulo']."</option> 
									";

								}

								?>
							</select>
						</div>
					</div>

					<div class="form-group">
						<label class="col-md-12" >Página destino da busca</label>
						<div class="col-md-12">
							<select name="busca_pagina" class="form-control select2" style="width: 100%;" >
								<?php

								foreach ($destinos as $key => $value) {

									if($data->busca_pagina == $value['chave']){ $selected = " selected='' "; } else { $selected = ""; }

									echo "
									<option value='".$value['chave']."' ".$selected." >".$value['titulo']."</option> 
									";

								}

								?>
							</select>
						</div>
					</div> 

					<div class="form-group">
						<label class="col-md-12" >Slogan</label>
						<div class="col-md-12">
							<textarea name="slogan" class="summernote" ><?=$data->slogan?></textarea>
						</div>
					</div>

					<hr>

					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label class="col-md-12" >Classes Css</label>  
								<select name="lista_css[]"  class="js-select2" multiple="multiple" >
									<?php

									$lista_selecionada = explode(' ', $data->classes);
									foreach ($lista_css as $key => $value) {

										$consulta = '.'.$value['classe'];
										if(in_array($consulta, $lista_selecionada)){
											$selected = " selected='' ";
										} else {
											$selected = "";
										}

										echo "
										<option value='.".$value['classe']."' data-badge='' $selected >".$value['titulo']."</option>
										";
									}
									?>
								</select> 

							</div>
						</div> 
					</div>	

					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label class="col-md-12" >Classes Css Imagens</label>  
								<select name="lista_css_img[]"  class="js-select2" multiple="multiple" >
									<?php
									
									$lista_selecionada = explode(' ', $data->classes_img);
									foreach ($lista_css as $key => $value) {
										
										$consulta = '.'.$value['classe'];
										if(in_array($consulta, $lista_selecionada)){
											$selected = " selected='' ";
										} else {
											$selected = "";
										}

										echo "
										<option value='.".$value['classe']."' data-badge='' $selected >".$value['titulo']."</option>
										";
									}
									?>
								</select> 

							</div>
						</div> 
					</div>
					
				</fieldset>

				<button type="submit" class="btn btn-primary">Salvar</button>
				<input name="codigo" type="hidden" value="<?=$data->codigo?>" >
				
			</form>

		</div>


		<div id="imagem" class="tab-pane" >			 

			<form action="<?=$_base['objeto']?>grupos_imagem/codigo/<?=$data->codigo?>" method="post" enctype="multipart/form-data">

				<fieldset> 
					<label>Arquivo</label> 
					<div class="fileupload fileupload-new" data-provides="fileupload">
						<div class="input-append">
							<div class="uneditable-input">
								<i class="fa fa-file fileupload-exists"></i>
								<span class="fileupload-preview"></span>
							</div>
							<span class="btn btn-default btn-file">
								<span class="fileupload-exists">Alterar</span>
								<span class="fileupload-new">Procurar arquivo</span>
								<input type="file" name="arquivo" />
							</span>
							<a href="#" class="btn btn-default fileupload-exists" data-dismiss="fileupload">Remover</a>
						</div>
					</div>
				</fieldset>

				<div style="text-align:left; padding-top:10px;">
					<button type="submit" class="btn btn-primary">Enviar</button>
				</div>

			</form>

			<hr>

			<div style="text-align:center;">
				<?php

				$n = 0;
				foreach ($imagens as $key => $value) {
					
					echo "
					<div style='display:inline-block; margin:10px; text-align:center;' >
					<div class='quadro_img' style='cursor:auto; background-image:url(".PASTA_CLIENTE.'img_imoveis_grupos/'.$value['imagem']."); '></div>
					<div style='padding-top:5px; text-align:center;'>                         
					<button class='btn btn-default fa fa-times-circle' onClick=\"confirma_apagar('".$_base['objeto']."grupos_imagem_apagar/id/".$value['id']."');\" title='Remover imagem' ></button>
					</div>
					</div>
					";
					
					$n++;
				}
				
				?>
			</div>
			
			<?php if($n == 0){ ?>

				<div style="text-align:center; padding-top:100px; padding-bottom:100px;">Nenhuma imagem adicionada!</div>

			<?php } ?>

		</div> 


		<div id="cores" class="tab-pane" >
			
			<form action="<?=$_base['objeto']?>grupos_alterar_cores_grv" class="form-horizontal" method="post" >

				<fieldset>

					<?php

					foreach ($cores as $key => $value) {

						echo "
						<div class='form-group' >
						<label class='col-md-12' >Cor: ".$value['titulo']."</label>
						<div class='col-md-8'>
						<input name='cor_".$value['id']."' type='text' class='form-control my-colorpicker1' value='".$value['cor']."' autocomplete='off' >
						</div>
						</div>
						";

					}
					?>

				</fieldset>

				<button type="submit" class="btn btn-primary">Salvar</button>
				<input name="codigo" type="hidden" value="<?=$data->codigo?>" >
			</form>

		</div>


	</div>

</div> 

<script>
	$(document).ready(function() {				 

		$(".my-colorpicker1").colorpicker();

	});
</script>

<?php include_once('js_summernote.php'); ?>

<script type="text/javascript">
	
	(function($) {
		
		"use strict";

		$(".select2").select2();

		$(".js-select2").select2({
			closeOnSelect : false,
			placeholder : "Clique e selecione a classe",
			allowHtml: true,
			allowClear: true,
			tags: true
		});

		$('.icons_select2').select2({
			width: "100%",
			templateSelection: iformat,
			templateResult: iformat,
			allowHtml: true,
			placeholder: "Clique e selecione a classe",
			dropdownParent: $( '.select-icon' ),
			allowClear: true,
			multiple: false
		});

		function iformat(icon, badge,) {
			var originalOption = icon.element;
			var originalOptionBadge = $(originalOption).data('badge');
			
			return $('<span><i class="fa ' + $(originalOption).data('icon') + '"></i> ' + icon.text + '<span class="badge">' + originalOptionBadge + '</span></span>');
		}

	})(jQuery);

</script>