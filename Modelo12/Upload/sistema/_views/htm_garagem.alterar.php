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
                <li <?php if($aba_selecionada == "opcionais"){ echo "class='active'"; } ?> >
                  <a href="#opcionais" data-toggle="tab">Opcionais</a>
                </li>
                
              </ul>
              
              <div class="tab-content" >


                <div id="dados" class="tab-pane <?php if($aba_selecionada == "dados"){ echo "active"; } ?>" >
                  <form action="<?=$_base['objeto']?>alterar_grv" class="form-horizontal" method="post">  						

                    <fieldset>

                      <div class="row">
                        <div class="col-xs-2">

                          <div class="form-group">
                            <label class="col-md-12" >Ref.</label>
                            <div class="col-md-12">
                              <input name="ref" type="text" class="form-control" value="<?=$data->ref?>" >
                            </div>
                          </div>

                        </div>

                        <div class="col-xs-4">

                          <div class="form-group">
                            <label class="col-md-12" >Titulo</label>
                            <div class="col-md-12">
                              <input name="titulo" type="text" class="form-control" value="<?=$data->titulo?>" >
                            </div>
                          </div>

                        </div>
                        <div class="col-xs-3">

                          <div class="form-group">
                            <label class="col-md-12">Tipo</label>
                            <div class="col-md-12">
                              <select name="tipo" class="form-control select2" style="width: 100%;" >
                                <option value='' <?php if($data->tipo == ''){ echo " selected='' "; } ?> >Selecione</option>
                                <option value='novo' <?php if($data->tipo == 'novo'){ echo " selected='' "; } ?> >Novo</option>
                                <option value='usado' <?php if($data->tipo == 'usado'){ echo " selected='' "; } ?> >Usado/Seminovo</option>
                              </select>
                            </div>
                          </div>

                        </div>
                        <div class="col-xs-3">

                          <div class="form-group">
                            <label class="col-md-12">Categoria</label>
                            <div class="col-md-12">
                              <select name="categoria" class="form-control select2" style="width: 100%;" >
                                <option value='' >Selecione</option>
                                <?php
                                foreach ($categorias as $key => $value) {

                                  if($data->categoria_cod == $value['codigo']){
                                    $select = " selected='' ";
                                  } else {
                                    $select = "";
                                  }

                                  echo "<option value='".$value['codigo']."' $select >".$value['titulo']."</option>";
                                }
                                ?>
                              </select>
                            </div>
                          </div>

                        </div>
                      </div>

                      <div class="row">
                        <div class="col-xs-4">

                          <div class="form-group">
                            <label class="col-md-12">Marca</label>
                            <div class="col-md-12">
                              <select name="marca" class="form-control select2" style="width: 100%;" onchange="carrega_modelos(this.value)" >
                                <option value='' >Selecione</option>
                                <?php
                                foreach ($marcas as $key => $value) {

                                  if($data->marca_cod == $value['codigo']){
                                    $select = " selected='' ";
                                  } else {
                                    $select = "";
                                  }
                                  
                                  echo "<option value='".$value['codigo']."' $select >".$value['titulo']."</option>";
                                }
                                ?>
                              </select>
                            </div>
                          </div>

                        </div>
                        <div class="col-xs-4">

                          <div class="form-group">
                            <label class="col-md-12">Modelo</label>
                            <div class="col-md-12" id="modelos_div" >
                              <select name="marca" class="form-control select2" style="width: 100%;" >
                                <option value='' >Selecione</option>
                              </select>
                            </div>
                          </div>

                        </div>

                        <div class="col-xs-4">

                          <div class="form-group">
                            <label class="col-md-12">Destaque <?=ajuda('Opcional, selecione caso queria dar destaque na pagina inicial.')?></label>
                            <div class="col-md-12">
                              <select name="destaque" class="form-control select2" style="width: 100%;" >
                                <option value="0" <?php if($data->destaque != 1){ echo "selected"; } ?> >Não</option>
                                <option value="1" <?php if($data->destaque == 1){ echo "selected"; } ?> >Sim</option>
                              </select>
                            </div>
                          </div>

                        </div>

                      </div>

                      <div class="row">

                        <div class="col-xs-3">

                          <div class="form-group">
                            <label class="col-md-12" >Valor R$</label>
                            <div class="col-md-12">
                              <input name="valor" type="text" class="form-control" value="<?=$valor?>" onkeypress="Mascara(this,MaskMonetario)" onKeyDown="Mascara(this,MaskMonetario)" >
                            </div>
                          </div>

                        </div>

                        <div class="col-xs-2">

                          <div class="form-group">
                            <label class="col-md-12" >Ano Fab.</label>
                            <div class="col-md-12">
                              <input name="ano_fab" type="text" class="form-control" value="<?=$data->ano_fab?>" >
                            </div>
                          </div>

                        </div>
                        <div class="col-xs-2">

                          <div class="form-group">
                            <label class="col-md-12" >Ano Modelo</label>
                            <div class="col-md-12">
                              <input name="ano_modelo" type="text" class="form-control" value="<?=$data->ano_modelo?>" >
                            </div>
                          </div>

                        </div>

                        <div class="col-xs-2">

                          <div class="form-group">
                            <label class="col-md-12" >Km</label>
                            <div class="col-md-12">
                              <input name="km" type="text" class="form-control" value="<?=$data->km?>" >
                            </div>
                          </div>

                        </div>

                        <div class="col-xs-2">

                          <div class="form-group">
                            <label class="col-md-12" >Placa</label>
                            <div class="col-md-12">
                              <input name="placa" type="text" class="form-control" value="<?=$data->placa?>" >
                            </div>
                          </div>

                        </div>
                         
                      </div>

                      <div class="row">
                        <div class="col-xs-3">

                          <div class="form-group">
                            <label class="col-md-12">Cor</label>
                            <div class="col-md-12">
                              <select name="cor" class="form-control select2" style="width: 100%;" >
                                <option value='' >Selecione</option>
                                <?php
                                foreach ($cores as $key => $value) {

                                  if($data->cor_cod == $value['codigo']){
                                    $select = " selected='' ";
                                  } else {
                                    $select = "";
                                  }

                                  echo "<option value='".$value['codigo']."' $select >".$value['titulo']."</option>";
                                }
                                ?>
                              </select>
                            </div>
                          </div>

                        </div>
                        <div class="col-xs-3">

                          <div class="form-group">
                            <label class="col-md-12">Transmissão</label>
                            <div class="col-md-12">
                              <select name="transmissao" class="form-control select2" style="width: 100%;" >
                                <option value='' >Selecione</option>
                                <?php
                                foreach ($transmissao as $key => $value) {

                                  if($data->transmissao_cod == $value['codigo']){
                                    $select = " selected='' ";
                                  } else {
                                    $select = "";
                                  }

                                  echo "<option value='".$value['codigo']."' $select >".$value['titulo']."</option>";
                                }
                                ?>
                              </select>
                            </div>
                          </div>

                        </div>
                        <div class="col-xs-3">

                          <div class="form-group">
                            <label class="col-md-12">Combustivel</label>
                            <div class="col-md-12">
                              <select name="combustivel" class="form-control select2" style="width: 100%;" >
                                <option value='' >Selecione</option>
                                <?php
                                foreach ($combustivel as $key => $value) {

                                  if($data->combustivel_cod == $value['codigo']){
                                    $select = " selected='' ";
                                  } else {
                                    $select = "";
                                  }

                                  echo "<option value='".$value['codigo']."' $select >".$value['titulo']."</option>";
                                }
                                ?>
                              </select>
                            </div>
                          </div>

                        </div>
                        <div class="col-xs-3">

                          <div class="form-group">
                            <label class="col-md-12">Motor</label>
                            <div class="col-md-12">
                              <select name="motor" class="form-control select2" style="width: 100%;" >
                                <option value='' >Selecione</option>
                                <?php
                                foreach ($motor as $key => $value) {

                                  if($data->motor_cod == $value['codigo']){
                                    $select = " selected='' ";
                                  } else {
                                    $select = "";
                                  }

                                  echo "<option value='".$value['codigo']."' $select >".$value['titulo']."</option>";
                                }
                                ?>
                              </select>
                            </div>
                          </div>

                        </div>
                      </div>

                      <div class="form-group">
                        <label class="col-md-12">Observações</label>
                        <div class="col-md-6">
                          <textarea class="form-control" name="obs" rows="5" ><?=$data->obs?></textarea>
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
                    <button type="button" class="btn btn-default" onClick="window.location='<?=$_base['objeto']?>';" >Voltar</button>
                  </div>

                </div>


                <div id="opcionais" class="tab-pane <?php if($aba_selecionada == "opcionais"){ echo "active"; } ?>" >
                  <form action="<?=$_base['objeto']?>marcar_opcionais" class="form-horizontal" method="post">              

                    <div style="margin-top: 15px; margin-bottom: 15px; text-align:left; font-size: 16px; font-weight: bold; ">Selecione os itens inclusos:</div>

                    <div class="row">
                      <?php

                      foreach ($opcionais as $key => $value) {

                        if($value['check']){
                          $check = " checked='' ";
                        } else {
                          $check = "";
                        }

                        echo "
                        <div class='col-md-4'>
                        <div class='checkbox-custom' style='width:100%;' >
                        <input type='checkbox' id='check_".$value['id']."' name='opcional_".$value['id']."' ".$check." value='1' >
                        <label for='check_".$value['id']."' style='font-weight:500;' >".$value['titulo']."</label>
                        </div>
                        </div>
                        ";
                      }

                      ?>
                    </div>

                    <div style="margin-top: 20px;">
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
    <script src="<?=LAYOUT?>ckeditor412/ckeditor.js"></script>
    <script src="<?=LAYOUT?>api/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
    <script src="<?=LAYOUT?>api/bootstrap-fileupload/bootstrap-fileupload.min.js"></script>
    <script src="<?=LAYOUT?>dist/js/app.min.js"></script>
    <script src="<?=LAYOUT?>dist/js/demo.js"></script> 
    <script src="<?=LAYOUT?>js/funcoes.js"></script>
    <script>
      $(document).ready(function() {

        $(".select2").select2();

        $( "#sortable_imagem" ).sortable({
          update: function(event, ui){
            var postData = $(this).sortable('serialize');
            console.log(postData);

            $.post('<?=$_base['objeto']?>ordenar_imagem', {list: postData, codigo: '<?=$data->codigo?>'}, function(o){
              console.log(o);
            }, 'json');
          }
        });

      });

      function carrega_modelos(marca){

        $('#modelos_div').html("<div style='text-align:center;'><img src='<?=LAYOUT?>img/loading.gif' style='border:0px; width:30px;' ></div>");

        //atualiza cidade
        $.post('<?=DOMINIO?>garagem/modelos_select', {marca: marca, selecionado: '<?=$data->modelo_cod?>'},function(data){
          if(data){
            $('#modelos_div').html(data);
          }
        });
        
      }
      carrega_modelos('<?=$data->marca_cod?>');

    </script>
    <script>function dominio(){ return '<?=DOMINIO?>'; }</script>
    <script src="<?=LAYOUT?>js/ajuda.js"></script>

  </body>
  </html>