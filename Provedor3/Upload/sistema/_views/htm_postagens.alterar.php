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
  <link rel="stylesheet" href="<?=LAYOUT?>api/bootstrap-fileupload/bootstrap-fileupload.min.css"/>
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">

  <?php include_once('css.php'); ?>
  
</head>
<body class="hold-transition skin-blue <?php if($_base['menu_fechado'] == 1){ echo "sidebar-collapse"; } ?> sidebar-mini" >

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

            <div class="nav-tabs-custom">

              <ul class="nav nav-tabs">

                <li <?php if($aba_selecionada == "dados"){ echo "class='active'"; } ?> >
                  <a href="#dados" data-toggle="tab">Dados</a>
                </li>
                <li <?php if($aba_selecionada == "imagem"){ echo "class='active'"; } ?> onClick="carrega_envio_imagens();" >
                  <a href="#imagem" data-toggle="tab">Imagens</a>
                </li>
                <li <?php if($aba_selecionada == "destaques"){ echo "class='active'"; } ?> >
                  <a href="#destaques" data-toggle="tab">Destaque</a>
                </li>
                
              </ul>
              
              <div class="tab-content" >

                <div id="dados" class="tab-pane <?php if($aba_selecionada == "dados"){ echo "active"; } ?>" >
                  <form action="<?=$_base['objeto']?>alterar_grv" class="form-horizontal" method="post">  						

                    <fieldset>

                      <div class="form-group">
                        <label class="col-md-12" >Titulo</label>
                        <div class="col-md-6">
                          <input name="titulo" type="text" class="form-control" value="<?=$data->titulo?>" >
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="col-md-12" >URL Amigável <?=ajuda('A url amigável é usada para o endereço da postagem no site, isso ajuda que seu site seja encontrado mais facilmente nos mecanismos de busca como Google, Yahoo, Bing entre outros, o endereço é gerado automaticamente no cadastro da postagem, mas pode ser alterado aqui se achar necessário, lembrando que a url deve unica e exclusiva para cada postagem.')?></label>
                        <div class="col-md-12">
                          <input name="amigavel" type="text" class="form-control" value="<?=$data->amigavel?>" >
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label class="col-md-12">Autor <?=ajuda('É possível destacar o autor da postagem, <a href="'.DOMINIO.'postagens/autores" >clique aqui</a> para criar e editar autores.')?></label>
                        <div class="col-md-6">
                          <select name="autor" class="form-control select2" style="width: 100%;" >
                            <option value="" selected="" >Nenhum</option>
                            <?php
                            foreach ($autores as $key => $value) {

                              if($value['codigo'] == $data->autor){
                                $selected = " selected='' ";
                              } else {
                                $selected = "";
                              }

                              echo "<option value='".$value['codigo']."' $selected >".$value['nome']."</option>";
                            }
                            ?>
                          </select>
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label class="col-md-12">Categoria</label>
                        <div class="col-md-6">
                          <select name="categoria" class="form-control select2" style="width: 100%;" >
                            <?php
                            foreach ($categorias as $key => $value) {

                              if($value['codigo'] == $data->categoria){
                                $selected = " selected='' ";
                              } else {
                                $selected = "";
                              }

                              echo "<option value='".$value['codigo']."' ".$selected.">".$value['titulo']."</option>";

                            }
                            ?>
                          </select>
                        </div>
                      </div>
                      
                      <div class="form-group">                        
                        <label class="col-md-12">Data/Hora <?=ajuda('É possível adicionar uma postagens com data e hora anterior a data e hora atual, selecione a data que desejar.')?></label>
                        <div class="col-md-2">
                          <div class="input-group">
                            <span class="input-group-addon">
                              <i class="fa fa-calendar"></i>
                            </span>
                            <input type="text" class="form-control datepicker" value="<?=$dia?>/<?=$mes?>/<?=$ano?>" name="dia" >
                          </div>
                        </div>
                        <div class="col-md-2">
                          <div class="bootstrap-timepicker"> 
                            <div class="input-group">
                              <input type="text" class="form-control timepicker" name="hora" value="<?=$hora?>:<?=$minuto?>">
                              <div class="input-group-addon">
                                <i class="fa fa-clock-o"></i>
                              </div>
                            </div> 
                          </div>
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label class="col-md-12">Prévia <?=ajuda('A prévia é o resumo da postagem.')?></label>
                        <div class="col-md-6">
                          <textarea class="form-control" name="previa" rows="5" ><?=$data->previa?></textarea>
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label class="col-md-12">Conteúdo <?=ajuda('No conteudo da postagem é possivel adicionar trechos em html e também imagens, porem é recomendado deixar as imagens para a próxima etapa.')?></label>
                        <div class="col-md-12">
                          <textarea name="conteudo" class="summernote" ><?=$data->conteudo?></textarea>
                        </div>
                      </div>
                      
                    </fieldset>

                    <div>
                      <button type="submit" class="btn btn-primary">Salvar</button>
                      <input type="hidden" name="codigo" value="<?=$data->codigo?>" >
                      <button type="button" class="btn btn-default" onClick="window.location='<?=$_base['objeto']?>inicial/categoria/<?=$data->categoria?>';" >Voltar</button>
                    </div>

                  </form>
                </div>

                <div id="imagem" class="tab-pane <?php if($aba_selecionada == "imagem"){ echo "active"; } ?>" >

                  <button type="button" class="btn btn-primary" onClick="modal('<?=$_base['objeto']?>upload/codigo/<?=$data->codigo?>', 'Enviar Imagens');" >Carregar Imagens</button>

                  <hr>

                  <div style="font-size: 15px; padding-bottom: 20px; text-align: center;">Arraste as imagens para ordenar.</div>

                  <div style="text-align:center;">
                    <ul id="sortable_imagem" >
                      <?php

                      $n = 0;
                      foreach ($imagens as $key => $value) {

                        echo "
                        <li id='item_".$value['id']."' >

                        <div class='quadro_img' style='background-image:url(".$value['imagem_p']."); '></div>
                        <div style='padding-top:5px; text-align:center;'>
                        <button class='btn btn-default' onClick=\"modal('".$_base['objeto']."legenda/id/".$value['id']."/codigo/$data->codigo', 'Alterar Legenda');\" title='Editar legenda' ><i class='fas fa-edit'></i></button>
                        <button class='btn btn-default' onClick=\"confirma_apagar('".$_base['objeto']."apagar_imagem/codigo/$data->codigo/id/".$value['id']."');\" title='Remover imagem' ><i class='fas fa-trash-alt'></i></button>
                        </div>

                        </li>
                        ";

                        $n++;
                      }

                      ?>
                    </ul>
                  </div>

                  <?php if($n == 0){ ?>

                    <div style="text-align:center; padding-top:100px; padding-bottom:100px;">Nenhuma imagem adicionada!</div>

                  <?php } ?>

                  <div>
                    <button type="button" class="btn btn-default" onClick="window.location='<?=$_base['objeto']?>inicial/categoria/<?=$data->categoria?>';" >Voltar</button>
                  </div>

                </div>


                <div id="destaques" class="tab-pane <?php if($aba_selecionada == "destaques"){ echo "active"; } ?>" >
                  <form action="<?=$_base['objeto']?>alterar_destaques" class="form-horizontal" method="post">   

                    <div>
                      <button type="button" class="btn btn-default" onClick="window.location='<?=$_base['objeto']?>grupos';" >Alterar Grupos/Páginas</button>
                    </div>

                    <hr>

                    <div style="font-size:15px; padding-bottom:20px; ">Marque em quais destaques este item vai aparecer.</div>

                    <div>
                      <?php 

                      foreach ($grupos_marcados as $key => $value) {

                        if($value['checked']){
                          $checked = "checked";
                        } else {
                          $checked = "";
                        }

                        echo '
                        <div style="margin-top:5px; " >
                        <div>
                        <input type="checkbox" class="marcar" '.$checked.' id="grupo_'.$value['id'].'" name="grupo_'.$value['id'].'"  value="1" >
                        <label for="grupo_'.$value['id'].'">'.$value['titulo'].'</label>
                        </div>
                        </div>
                        ';

                      }                     

                      ?>
                    </div>

                    <hr>

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
    <script src="<?=LAYOUT?>dist/js/app.min.js"></script>
    <script src="<?=LAYOUT?>dist/js/demo.js"></script> 
    <script src="<?=LAYOUT?>js/funcoes.js"></script>
    <script>
      $(document).ready(function() {

        $(".select2").select2();

        $('.datepicker').datepicker({
          autoclose: true,
          format: 'dd/mm/yyyy'
        });

        $('.timepicker').timepicker({
          showInputs: false,
          showMeridian: false
        });

        $( "#sortable_imagem" ).sortable({
          update: function(event, ui){
            var postData = $(this).sortable('serialize');
            console.log(postData);

            $.post('<?=$_base['objeto']?>ordenar_imagem', {list: postData, codigo: '<?=$data->codigo?>'}, function(o){
              console.log(o);
            }, 'json');
          }
        });

        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue'
        });


      });
    </script>
    <script>function dominio(){ return '<?=DOMINIO?>'; }</script>
    <script src="<?=LAYOUT?>js/ajuda.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

    <?php include_once('js_summernote.php'); ?>

  </body>
  </html>