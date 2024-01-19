<?php include_once('base.php'); ?>

<form action="<?=$_base['objeto']?>grupos_novo_grv" class="form-horizontal" method="post" >

	<fieldset>

		<div class="form-group">
			<label class="col-md-12" >Titulo</label>
			<div class="col-md-12">
				<input name="titulo" type="text" class="form-control" >
			</div>
		</div>

		<div class="form-group">
			<label class="col-md-12">Formato</label>
			<div class="col-md-12">
				<select name="formato" class="form-control select2" style="width: 100%;" >
					<option value='albuns' >Mostrar albuns</option>
					<option value='categorias' >Mostrar categorias</option>
					<option value='imagens' >Mostrar imagens aleatórias</option>
				</select>
			</div>
		</div>

		<div class="form-group">
			<label class="col-md-12">Ordem</label>
			<div class="col-md-12">
				<select name="ordem" class="form-control select2" style="width: 100%;" >
					<option value='desc' >Criação</option>
					<option value='titulo' >Alfabética</option>
					<option value='aleatorio' >Aleatórias</option>
				</select>
			</div>
		</div>

	</fieldset>

	<button type="submit" class="btn btn-primary">Salvar</button>

</form>

<script>
  $(document).ready(function() {

    $(".select2").select2();
    
  });
</script>