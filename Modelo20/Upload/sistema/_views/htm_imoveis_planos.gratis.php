<?php include_once('base.php'); ?> 

<form action="<?=$_base['objeto']?>gratis_grv" class="form-horizontal" method="post">  						

  <fieldset>

    <div class="form-group">
      <label class="col-md-12" >Limite (para desativar o periodo gratuito deixe este campo com 0)</label>
      <div class="col-md-12">
        <input name="limite" type="number" class="form-control" value="<?=$data->limite?>"  >
      </div>
    </div>

    <div class="form-group">
      <label class="col-md-12">Periodo Meses</label>
      <div class="col-md-12">
        <select name="meses" class="form-control select2" style="width: 100%;" >
          <option value='0' <?php if($data->meses == 0){ echo "selected=''"; } ?> >0</option>
          <option value='1' <?php if($data->meses == 1){ echo "selected=''"; } ?> >1</option>
          <option value='2' <?php if($data->meses == 2){ echo "selected=''"; } ?> >2</option>
          <option value='3' <?php if($data->meses == 3){ echo "selected=''"; } ?> >3</option>
          <option value='4' <?php if($data->meses == 4){ echo "selected=''"; } ?> >4</option>
          <option value='5' <?php if($data->meses == 5){ echo "selected=''"; } ?> >5</option>
          <option value='6' <?php if($data->meses == 6){ echo "selected=''"; } ?> >6</option>
          <option value='7' <?php if($data->meses == 7){ echo "selected=''"; } ?> >7</option>
          <option value='8' <?php if($data->meses == 8){ echo "selected=''"; } ?> >8</option>
          <option value='9' <?php if($data->meses == 9){ echo "selected=''"; } ?> >9</option>
          <option value='10' <?php if($data->meses == 10){ echo "selected=''"; } ?> >10</option>
          <option value='11' <?php if($data->meses == 11){ echo "selected=''"; } ?> >11</option>
          <option value='12' <?php if($data->meses == 12){ echo "selected=''"; } ?> >12</option>
        </select>
      </div>
    </div>

    <div class="form-group">
      <label class="col-md-12">Periodo Dias (para utilizar dias é preciso deixar 0 para meses)</label>
      <div class="col-md-12">
       <input name="dias" type="number" class="form-control" value="<?=$data->dias?>"  >
     </div>
   </div>

 </fieldset>

 <div>
   <button type="submit" class="btn btn-primary">Salvar</button>  
 </div>

</form>