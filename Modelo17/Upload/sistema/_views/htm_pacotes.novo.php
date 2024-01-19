<?php require_once('_system/bloqueia_view.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" href="<?=FAVICON?>" type="image/x-icon" />
  <title><?=$_titulo?> - <?=TITULO_VIEW?></title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?=LAYOUT?>bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?=LAYOUT?>font-awesome-4.6.2/css/font-awesome.min.css">
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
  <link rel="stylesheet" href="<?=LAYOUT?>css/css.css">

</head>
<body class="hold-transition skin-blue <?php if($_base['menu_fechado'] == 1){ echo "sidebar-collapse"; } ?> sidebar-mini">
  <div class="wrapper">

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
                  <form action="<?=$_base['objeto']?>novo_grv" class="form-horizontal" method="post">

                    <fieldset>

                      <div class="form-group">
                        <label class="col-md-12" >Titulo</label>
                        <div class="col-md-12">
                          <input name="titulo" type="text" class="form-control" >
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label class="col-md-12" >Valor R$</label>
                        <div class="col-md-3">
                          <input name="valor" type="text" class="form-control" onkeypress="Mascara(this,MaskMonetario)" onKeyDown="Mascara(this,MaskMonetario)" >
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="col-md-12" >Saída</label>
                        <div class="col-md-12">
                          <input name="saida" type="text" class="form-control" >
                        </div>
                      </div>

                      <hr>

                      <div style="padding-bottom:20px;"><strong>GRUPOS</strong></div>

                      <div class="form-group">
                        <div class="col-md-12">
                          <?php

                          function gera_lista_grupo($lista, $espaco){

                            foreach ($lista as $key => $value) {

                              if($value['selected']){
                                $check = "checked";
                              } else {
                                $check = "";
                              }

                              echo "
                              <div style='margin-left:".$espaco."px;' >
                              <div class='checkbox-custom' >
                              <input type='checkbox' id='grupo_".$value['id']."' name='grupo_".$value['id']."' $check value='1' >
                              <label for='grupo_".$value['id']."' >".$value['titulo']."</label>
                              </div>
                              </div>
                              ";

                              if(count($value['filhos']) > 0){
                                gera_lista_grupo($value['filhos'], $espaco+15);
                              }

                            }

                          }
                          gera_lista_grupo($lista_grupos, 0);

                          ?>
                        </div>
                      </div>

                      <hr>

                      <div style="padding-bottom:20px;"><strong>DESTINOS (ROTAS)</strong></div>

                      <?php

                      for ($i=1; $i < 30; $i++) { 

                        if($i != 1){
                          $display = " display:none; ";
                        } else {
                          $display = "";
                        }

                        $proximo_id = $i+1;

                        echo '  
                        <div id="div_destino_'.$i.'" class="form-group" style="text-align:left; '.$display.' " >
                        <label class="col-md-12" >Destino '.$i.'</label>
                        <div class="col-md-8">
                        <input name="destino_'.$i.'" id="destino_'.$i.'" type="text" class="form-control" >
                        </div>
                        <div class="col-md-4">
                          <button type="button" class="btn btn-primary" onClick="add_destino(\'#div_destino_'.$proximo_id.'\')" >+</button>
                          ';
                          
                          if($i != 1){

                            echo '
                            <button type="button" class="btn btn-default" onClick="esconde_destino(\''.$i.'\')" >-</button>
                            ';
                            
                          }

                        echo '
                        </div>
                        </div>
                        ';

                      }

                      ?>

                      <hr>

                      <div class="form-group">
                        <label class="col-md-12">Descrição</label>
                        <div class="col-md-12">
                          <textarea class="ckeditor" id="conteudo" name="conteudo" rows="10" ></textarea>
                        </div>
                      </div>

                    </fieldset>

                    <div>
                      <button type="submit" class="btn btn-primary">Salvar</button>
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
    <script src="<?=LAYOUT?>ckeditor412/ckeditor.js"></script>
    <script src="<?=LAYOUT?>dist/js/app.min.js"></script>
    <script src="<?=LAYOUT?>dist/js/demo.js"></script>

    <script>
      $(function(){

        $(".select2").select2();

        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue'
        });

      });

      function mostra_esconde_destino(id){
        $(id).toggle();
      }
      function add_destino(id){
        $(id).show();
      }
      function esconde_destino(id){
        $("#destino_"+id).val("");
        $("#div_destino_"+id).hide();
      }
      
    </script>

    <script>function dominio(){ return '<?=DOMINIO?>'; }</script>
    <script src="<?=LAYOUT?>js/funcoes.js"></script>

  </body>
  </html>