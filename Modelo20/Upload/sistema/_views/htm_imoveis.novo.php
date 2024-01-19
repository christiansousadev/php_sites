<?php if(!isset($_base['libera_views'])){ header("HTTP/1.0 404 Not Found"); exit; } ?>

<form action="<?=$_base['objeto']?>novo_grv" class="form-horizontal" method="post" enctype="multipart/form-data" >
	
	<fieldset>
		
		<div class="form-group">
			<label class="col-md-12" >Titulo do imóvel</label>
			<div class="col-md-12">
				<input name="titulo" type="text" class="form-control" >
			</div>
		</div>
		
		<div class="form-group">
			<label class="col-md-12">*Categoria</label>
			<div class="col-md-12">
				<select class="form-control select2" name="categoria" >
					<option value="0" >Todas</option>
					<?php

					foreach ($categorias as $key => $value) {

						if($value['selected']){
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
		
	</fieldset>
	
	<button type="submit" class="btn btn-primary">Salvar</button>
	
</form>