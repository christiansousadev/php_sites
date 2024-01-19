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
			<label class="col-md-12" >Itens por linha</label>
			<div class="col-md-12">
				<select name="itens_por_linha" class="form-control select2" style="width: 100%;" >
					<option value='2' <?php if($data->itens_por_linha == 2){ echo " selected='' "; } ?> >2</option>
					<option value='3' <?php if($data->itens_por_linha == 3){ echo " selected='' "; } ?> >3</option>
					<option value='4' <?php if($data->itens_por_linha == 4){ echo " selected='' "; } ?> >4</option>
				</select>
			</div>
		</div>

		<div class="form-group">
			<label class="col-md-12">Descrição (opcional)</label>
			<div class="col-md-12">
				<textarea class="form-control" name="descricao" rows="5" ><?=$data->descricao?></textarea>
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