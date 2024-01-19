<?php include_once('base.php'); ?>

<form action="<?=$_base['objeto']?>grupos_alterar_grv" class="form-horizontal" method="post" >
	
	<fieldset>

		<div class="form-group">
			<label class="col-md-12" >Titulo</label>
			<div class="col-md-12">
				<input name="titulo" type="text" class="form-control" value="<?=$data->titulo?>" >
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
			<label class="col-md-12" >Formato</label>
			<div class="col-md-12">
				<select name="formato" class="form-control select2" style="width: 100%;" >
					<option value='1' <?php if($data->formato == 1){ echo " selected='' "; } ?> >Formato 1</option>
					<option value='2' <?php if($data->formato == 2){ echo " selected='' "; } ?> >Formato 2</option>
					<option value='3' <?php if($data->formato == 3){ echo " selected='' "; } ?> >Formato 3</option>
				</select>
			</div>
		</div>
		
		<div class="form-group">
			<label class="col-md-12" >Mostrar categorias na lateral</label>
			<div class="col-md-12">
				<select name="mostrar_categorias" class="form-control select2" style="width: 100%;" >
					<option value='1' <?php if($data->mostrar_categorias == 1){ echo " selected='' "; } ?> >Sim na esquerda</option>
					<option value='2' <?php if($data->mostrar_categorias == 2){ echo " selected='' "; } ?> >Sim na direita</option>
					<option value='0' <?php if($data->mostrar_categorias == 0){ echo " selected='' "; } ?> >Não</option> 
				</select>
			</div>
		</div>

		<div class="form-group">
			<label class="col-md-12" >Mostrar banners na lateral</label>
			<div class="col-md-12">
				<select name="mostrar_banners" class="form-control select2" style="width: 100%;" >
					<option value='1' <?php if($data->mostrar_banners == 1){ echo " selected='' "; } ?> >Sim na esquerda</option>
					<option value='2' <?php if($data->mostrar_banners == 2){ echo " selected='' "; } ?> >Sim na direita</option>
					<option value='3' <?php if($data->mostrar_banners == 3){ echo " selected='' "; } ?> >Sim nos dois lados</option>
					<option value='0' <?php if($data->mostrar_banners == 0){ echo " selected='' "; } ?> >Não</option> 
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
			<label class="col-md-12" >Limite de Itens (0 para ilimitado)</label>
			<div class="col-md-12">
				<input name="max_itens" type="text" class="form-control" value="<?=$data->max_itens?>" onkeypress="Mascara(this,Integer)" onKeyDown="Mascara(this,Integer)" >
			</div>
		</div>
		
		<div class="form-group">
			<label class="col-md-12" >Destaques</label>
			<div class="col-md-12">
				<select name="marcados" class="form-control select2" style="width: 100%;" >
					<option value='1' <?php if($data->marcados == 1){ echo " selected='' "; } ?> >Apenas destaques</option>
					<option value='0' <?php if($data->marcados == 0){ echo " selected='' "; } ?> >Todas as postagens</option> 
				</select>
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

<script>
	$(function () {

		$(".select2").select2();

		$(".my-colorpicker1").colorpicker();
		
	});
</script>