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
			<label class="col-md-12" >Mostrar categorias</label>
			<div class="col-md-12">
				<select name="mostrar_categorias" class="form-control select2" style="width: 100%;" >
					<option value='1' <?php if($data->mostrar_categorias == 1){ echo " selected='' "; } ?> >Sim</option>
					<option value='0' <?php if($data->mostrar_categorias == 0){ echo " selected='' "; } ?> >Não</option> 
				</select>
			</div>
		</div>
		
		<div class="form-group">
			<label class="col-md-12" >Posição categorias</label>
			<div class="col-md-12">
				<select name="tipo_menu" class="form-control select2" style="width: 100%;" >
					<option value='0' <?php if($data->tipo_menu == 0){ echo " selected='' "; } ?> >Lateral</option>
					<option value='1' <?php if($data->tipo_menu == 1){ echo " selected='' "; } ?> >Topo</option> 
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
			<label class="col-md-12">Formato</label>
			<div class="col-md-12">
				<select name="formato" class="form-control select2" style="width: 100%;" >
					<option value='albuns' <?php if($data->formato == 'albuns'){ echo "selected=''"; } ?> >Mostrar albuns</option>
					<option value='imagens' <?php if($data->formato == 'imagens'){ echo "selected=''"; } ?> >Mostrar imagens aleatórias</option>
				</select>
			</div>
		</div>

		<div class="form-group">
			<label class="col-md-12">Ordem</label>
			<div class="col-md-12">
				<select name="ordem" class="form-control select2" style="width: 100%;" >
					<option value='desc' <?php if($data->ordem == 'desc'){ echo "selected=''"; } ?> >Criação</option>
					<option value='titulo' <?php if($data->ordem == 'titulo'){ echo "selected=''"; } ?> >Alfabética</option>
					<option value='aleatorio' <?php if($data->ordem == 'aleatorio'){ echo "selected=''"; } ?> >Aleatórias</option>
				</select>
			</div>
		</div>

		<div class="form-group">
			<label class="col-md-12" >Limite de Itens (0 para ilimitado)</label>
			<div class="col-md-12">
				<input name="max_itens" type="text" class="form-control" value="<?=$data->max_itens?>" onkeypress="Mascara(this,Integer)" onKeyDown="Mascara(this,Integer)" >
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