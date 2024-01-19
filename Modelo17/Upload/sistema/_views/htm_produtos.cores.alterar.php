<?php require_once('_system/bloqueia_view.php'); ?>
<form action="<?=$_base['objeto']?>cores_alterar_grv" class="form-horizontal" method="post" >
	
	<fieldset>
		
		<div class="form-group">
			<label class="col-md-12" >Nome</label>
			<div class="col-md-12">
				<input name="titulo" type="text" class="form-control" value="<?=$data->titulo?>" >
			</div>
		</div>
		
		<div class="form-group">
			<label class="col-md-12" >Cor</label>
			<div class="col-md-12">
				<input name="cor" type="text" class="form-control my-colorpicker1" value="<?=$data->cor?>">
			</div>
		</div>
		
	</fieldset>
	
	<button type="submit" class="btn btn-primary">Salvar</button>
	<input name="codigo" type="hidden" value="<?=$data->codigo?>" >
	
</form>

<script>
	$(function(){
		$(".my-colorpicker1").colorpicker();
	});
</script>