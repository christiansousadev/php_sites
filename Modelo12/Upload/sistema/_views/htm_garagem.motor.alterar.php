<?php include_once('base.php'); ?>

<form action="<?=$_base['objeto']?>motor_alterar_grv" class="form-horizontal" method="post" >
	
	<fieldset>

		<div class="form-group">
			<label class="col-md-12" >Titulo</label>
			<div class="col-md-12">
				<input name="titulo" type="text" class="form-control" value="<?=$data->titulo?>" >
			</div>
		</div>

	</fieldset>
	
	<button type="submit" class="btn btn-primary">Salvar</button>
	<input type="hidden" name="codigo" value="<?=$data->codigo?>">
</form>

<script src="<?=LAYOUT?>js/ajuda.js"></script>