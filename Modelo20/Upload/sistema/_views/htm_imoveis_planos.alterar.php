<?php include_once('base.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" href="<?=FAVICON?>" type="image/x-icon" />
  <title><?=$_titulo?> - <?=TITULO_VIEW?></title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?=LAYOUT?>bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <link rel="stylesheet" href="<?=LAYOUT?>api/jquery-ui/css/ui-lightness/jquery-ui-1.10.4.custom.css" />
  <link rel="stylesheet" href="<?=LAYOUT?>plugins/datatables/dataTables.bootstrap.css">   
  <link rel="stylesheet" href="<?=LAYOUT?>plugins/daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="<?=LAYOUT?>plugins/datepicker/datepicker3.css">
  <link rel="stylesheet" href="<?=LAYOUT?>plugins/iCheck/all.css">
  <link rel="stylesheet" href="<?=LAYOUT?>plugins/colorpicker/bootstrap-colorpicker.min.css">
  <link rel="stylesheet" href="<?=LAYOUT?>plugins/timepicker/bootstrap-timepicker.min.css">
  <link rel="stylesheet" href="<?=LAYOUT?>plugins/select2/select2.min.css">
  <link rel="stylesheet" href="<?=LAYOUT?>dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="<?=LAYOUT?>dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="<?=LAYOUT?>plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <link rel="stylesheet" href="<?=LAYOUT?>api/uploadfy/css/uploadify.css" type="text/css" />
  <link rel="stylesheet" href="<?=LAYOUT?>api/bootstrap-fileupload/bootstrap-fileupload.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">

  <?php include_once('css.php'); ?>
  
</head>
<body class="hold-transition skin-blue <?php if($_base['menu_fechado'] == 1){ echo "sidebar-collapse"; } ?> sidebar-mini">

  <div class="wrapper">

    <?php require_once('htm_modal.php'); ?>

    <?php require_once('htm_topo.php'); ?>

    <?php require_once('htm_menu.php'); ?>

    <div class="content-wrapper">

      <section class="content-header">
        <h1>
          <?=$_titulo?>
          <small><?=$_subtitulo?></small>
        </h1>
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="row">        	
          <div class="col-xs-12">

            <div class="nav-tabs-custom">

              <ul class="nav nav-tabs">

                <li <?php if($aba_selecionada == "dados"){ echo "class='active'"; } ?> >
                  <a href="#dados" data-toggle="tab">Dados</a>
                </li>

              </ul>
              
              <div class="tab-content" >


                <div id="dados" class="tab-pane <?php if($aba_selecionada == "dados"){ echo "active"; } ?>" >
                  <form action="<?=$_base['objeto']?>alterar_grv" class="form-horizontal" method="post">  						

                    <fieldset>

                      <div class="form-group">
                        <label class="col-md-12" >*Titulo</label>
                        <div class="col-md-6">
                          <input name="titulo" type="text" class="form-control" value="<?=$data->titulo?>" >
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="col-md-12" >Valor R$</label>
                        <div class="col-md-6">
                          <input name="valor" type="text" class="form-control" value="<?=$valor?>" onkeypress="Mascara(this,MaskMonetario)" onKeyDown="Mascara(this,MaskMonetario)" >
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="col-md-12" >Limite</label>
                        <div class="col-md-6">
                          <input name="limite" type="number" class="form-control" value="<?=$data->limite?>"  >
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="col-md-12">Periodo Meses</label>
                        <div class="col-md-6">
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
                        <div class="col-md-6">
                           <input name="dias" type="number" class="form-control" value="<?=$data->dias?>"  >
                        </div>
                      </div>

                    </fieldset>

                    <div>
                     <button type="submit" class="btn btn-primary">Salvar</button>
                     <input type="hidden" name="codigo" value="<?=$data->codigo?>" >
                     <button type="button" class="btn btn-default" onClick="window.location='<?=$_base['objeto']?>';" >Voltar</button>
                   </div>

                 </form>
               </div>

             </div>

           </div>
         </div>
         <!-- /.row -->
       </section>
       <!-- /.content -->

     </div>
     <!-- /.content-wrapper -->
     <?php require_once('htm_rodape.php'); ?>

   </div>
   <!-- ./wrapper -->

   <script src="<?=LAYOUT?>plugins/jQuery/jquery-2.2.3.min.js"></script>
   <script src="<?=LAYOUT?>bootstrap/js/bootstrap.min.js"></script>
   <script src="<?=LAYOUT?>plugins/select2/select2.full.min.js"></script>
   <script src="<?=LAYOUT?>plugins/input-mask/jquery.inputmask.js"></script>
   <script src="<?=LAYOUT?>plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
   <script src="<?=LAYOUT?>plugins/input-mask/jquery.inputmask.extensions.js"></script>
   <script src="<?=LAYOUT?>plugins/daterangepicker/daterangepicker.js"></script>
   <script src="<?=LAYOUT?>plugins/datepicker/bootstrap-datepicker.js"></script>
   <script src="<?=LAYOUT?>plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
   <script src="<?=LAYOUT?>plugins/timepicker/bootstrap-timepicker.min.js"></script>
   <script src="<?=LAYOUT?>plugins/slimScroll/jquery.slimscroll.min.js"></script>
   <script src="<?=LAYOUT?>plugins/iCheck/icheck.min.js"></script>
   <script src="<?=LAYOUT?>plugins/fastclick/fastclick.js"></script> 
   <script src="<?=LAYOUT?>api/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
   <script src="<?=LAYOUT?>api/bootstrap-fileupload/bootstrap-fileupload.min.js"></script>
   <script src="<?=LAYOUT?>js/canvas-to-blob.min.js"></script>
   <script src="<?=LAYOUT?>dist/js/app.min.js"></script>
   <script src="<?=LAYOUT?>dist/js/demo.js"></script> 
   <script src="<?=LAYOUT?>js/funcoes.js"></script>
   <script>function dominio(){ return '<?=DOMINIO?>'; }</script>

   <script>
    $(document).ready(function() {

      $(".select2").select2();

    });

  </script>

</body>
</html>