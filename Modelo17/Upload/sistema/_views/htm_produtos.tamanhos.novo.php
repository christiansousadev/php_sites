<?php require_once('_system/bloqueia_view.php'); ?>
<form action="<?=$_base['objeto']?>tamanhos_novo_grv" class="form-horizontal" method="post" >
  
  <fieldset>
    
    <div class="form-group">
     <label class="col-md-12" >Nome</label>
     <div class="col-md-12">
      <input name="titulo" type="text" class="form-control" >
    </div>
  </div>
  
</fieldset>

<button type="submit" class="btn btn-primary">Salvar</button>

</form>