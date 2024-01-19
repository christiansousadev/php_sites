<?php include_once('base.php'); ?>

<form action="<?=$_base['objeto']?>nova_resposta_grv" class="form-horizontal" method="post">
  
  <fieldset>
    
    <div class="form-group">
      <label class="col-md-12" >Resposta</label>
      <div class="col-md-12">
        <input name="resposta" type="text" class="form-control" >
      </div>
    </div>

  </fieldset>

  <div>
    <button type="submit" class="btn btn-primary">Salvar</button>
    <input type="hidden" name="codigo" value="<?=$codigo?>">
  </div>
  
</form>