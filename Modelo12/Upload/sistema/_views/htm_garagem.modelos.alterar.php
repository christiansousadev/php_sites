<?php include_once('base.php'); ?>

<form action="<?=$_base['objeto']?>modelos_alterar_grv" class="form-horizontal" method="post" >
	
	<fieldset>

		<div class="form-group">
			<label class="col-md-12">Marca</label>
			<div class="col-md-12">
				<select name="marca" class="form-control select2" style="width: 100%;" >
					<?php
					foreach ($marcas as $key => $value) {

						if($data->marca == $value['codigo']){
							$selected = " selected='' "; 
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
				<input name="titulo" type="text" class="form-control" value="<?=$data->titulo?>" >
			</div>
		</div>

	</fieldset>
	
	<button type="submit" class="btn btn-primary">Salvar</button>
	<input type="hidden" name="codigo" value="<?=$data->codigo?>">
</form>

<script src="<?=LAYOUT?>js/ajuda.js"></script>