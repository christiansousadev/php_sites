<?php include_once('base.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <title><?=$_titulo?> - <?=TITULO_VIEW?></title>
  <link rel="icon" href="<?=FAVICON?>" type="image/x-icon" />
  
  <link rel="stylesheet" href="<?=LAYOUT?>bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
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
  <link rel="stylesheet" href="<?=LAYOUT?>api/bootstrap-fileupload/bootstrap-fileupload.min.css" />
  
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

      <section class="content">
        <div class="row">
          <div class="col-xs-12">



            <section class="panel">

              <div class="panel-body">

                <div><strong>Depoimento de:</strong> <?=$data->nome?></div>

                <hr>

                <?php if($data->imagem){ ?>

                  <div>
                    <img src="<?=PASTA_CLIENTE?>img_depoimentos/<?=$data->imagem?>" style="border:0px; max-width:300px;" >
                  </div>

                  <hr>

                  <div>

                    <button type="button" class="btn btn-primary" onClick="confirma('<?=$_base['objeto']?>apagar_imagem/id/<?=$data->id?>');"  >Apagar Imagem</button>

                    <button type="button" class="btn btn-default" onClick="window.location='<?=$_base['objeto']?>';">Voltar</button>

                  </div>

                <?php } else { ?>

                  <form action="<?=$_base['objeto']?>alterar_imagem" class="form-horizontal" method="post" enctype="multipart/form-data" >

                    <fieldset>
                      <div class="form-group">
                        <label class="col-md-12">Arquivo da imagem</label>
                        <div class="col-md-7">
                          <div class="fileupload fileupload-new" data-provides="fileupload">
                            <div class="input-append">
                              <div class="uneditable-input">
                                <i class="fa fa-file fileupload-exists"></i>
                                <span class="fileupload-preview"></span>
                              </div>
                              <span class="btn btn-default btn-file">
                                <span class="fileupload-exists">Alterar</span>
                                <span class="fileupload-new">Procurar arquivo</span>
                                <input type="file" name="arquivo" />
                                <input type="hidden" name="id" value="<?=$data->id?>"/>
                              </span>
                              <a href="#" class="btn btn-default fileupload-exists" data-dismiss="fileupload">Remover</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </fieldset>

                    <div>

                      <button type="submit" class="btn btn-primary">Enviar</button>

                      <button type="button" class="btn btn-default" onClick="window.location='<?=$_base['objeto']?>';">Voltar</button>

                    </div>

                  </form>

                <?php } ?>

              </div>

            </section>



          </div>
        </div>
      </section>



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
  <script src="<?=LAYOUT?>plugins/slimScroll/jquery.slimscroll.min.js"></script>
  <script src="<?=LAYOUT?>plugins/iCheck/icheck.min.js"></script>
  <script src="<?=LAYOUT?>plugins/fastclick/fastclick.js"></script>
  <script src="<?=LAYOUT?>api/bootstrap-fileupload/bootstrap-fileupload.min.js"></script>
  <script src="<?=LAYOUT?>dist/js/app.min.js"></script>
  <script src="<?=LAYOUT?>dist/js/demo.js"></script>
  <script>function dominio(){ return '<?=DOMINIO?>'; }</script>
  <script src="<?=LAYOUT?>js/funcoes.js"></script>
  <script src="<?=LAYOUT?>js/ajuda.js"></script> 
</body>
</html>