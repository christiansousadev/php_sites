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
                <li <?php if($aba_selecionada == "imagem"){ echo "class='active'"; } ?> onClick="carrega_envio_imagens();" >
                  <a href="#imagem" data-toggle="tab">Imagens</a>
                </li>
                <li <?php if($aba_selecionada == "opcoes"){ echo "class='active'"; } ?> >
                  <a href="#opcoes" data-toggle="tab">Opções</a>
                </li>
                
              </ul>
              
              <div class="tab-content" >


                <div id="dados" class="tab-pane <?php if($aba_selecionada == "dados"){ echo "active"; } ?>" >
                  <form action="<?=$_base['objeto']?>alterar_dados" class="form-horizontal" method="post">  						

                    <fieldset>

                      <div style="text-align: left; font-size: 14px; padding-bottom: 20px; color:#666;">* Campos obrigatórios</div>
                      
                      <div class="row">

                        <div class="col-md-3">

                          <div class="form-group">
                            <label class="col-md-12" >Id</label>
                            <div class="col-md-12">
                              <input name="id" type="text" class="form-control" value="<?=$data->id?>" disabled='' >
                            </div>
                          </div>
                          
                        </div>
                        
                        <div class="col-md-3">

                          <div class="form-group">
                            <label class="col-md-12" >Ref.</label>
                            <div class="col-md-12">
                              <input name="cod_interno" type="text" class="form-control" value="<?=$data->cod_interno?>" >
                            </div>
                          </div>
                          
                        </div>
                        
                        <div class="col-md-6">

                          <div class="form-group">
                            <label class="col-md-12">Cadastro</label>
                            <div class="col-md-12">
                              <select class="form-control select2" name="cadastro" >
                                <option value='' selected="" >Selecione</option>
                                <?php
                                
                                foreach ($lista_cadastro as $key => $value) {

                                  if($data->cadastro == $value['codigo']){
                                    $select = " selected='' ";
                                  } else {
                                    if($cadastro_get == $value['codigo']){
                                      $select = " selected='' ";
                                    } else {
                                      $select = "";
                                    }
                                  }

                                  echo "
                                  <option value='".$value['codigo']."' $select >".$value['nome']."</option>
                                  ";

                                }

                                ?>
                              </select>
                            </div>
                          </div>

                        </div>


                      </div>


                      <div class="row">

                        <div class="col-md-5">

                          <div class="form-group">
                            <label class="col-md-12" >*Titulo</label>
                            <div class="col-md-12">
                              <input name="titulo" type="text" class="form-control" value="<?=$data->titulo?>" >
                            </div>
                          </div>

                        </div>

                        <div class="col-md-4">

                          <div class="form-group">
                            <label class="col-md-12">*Status</label>
                            <div class="col-md-12">
                              <select class="form-control select2" name="status" >
                                <option value="0" <?php if( ($data->status == '0') OR (!$data->status) ){ echo " selected=''; "; } ?> >Inativo</option>
                                <option value="1" <?php if($data->status == '1'){ echo " selected=''; "; } ?> >Ativo</option>
                              </select>
                            </div>
                          </div>

                        </div>                        
                        
                      </div>

                      <div class="row">

                        <div class="col-md-4">

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

                        </div>

                        <div class="col-md-4">

                          <div class="form-group">
                            <label class="col-md-12">*Tipo</label>
                            <div class="col-md-12">
                              <select class="form-control select2" name="tipo" >
                                <option value="" >Selecione</option>
                                <?php

                                foreach ($tipos as $key => $value) {

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
                        </div>

                      </div>


                      <div class="row">

                        <div class="col-md-6">

                          <div class="form-group">
                            <label class="col-md-12">*Cidade</label>
                            <div class="col-md-12">
                              <select class="form-control select2" name="cidade" onChange="abre_bairros(this.value)" >
                                <option value="" >Selecione</option>
                                <?php

                                foreach ($cidades as $key => $value) {

                                  if($value['selected']){
                                    $selected = " selected='' ";
                                  } else {
                                    $selected = "";
                                  }

                                  echo "<option value='".$value['codigo']."' $selected >".$value['cidade']." - ".$value['estado']."</option>";

                                }

                                ?>                        
                              </select>
                            </div>
                          </div>

                        </div>
                        
                        <div class="col-md-6">

                          <div class="form-group">
                            <label class="col-md-12">Bairro</label>
                            <div class="col-md-12" id="div_bairros" >
                              <select class="form-control select2" name="bairro" >
                                <option value="" >Selecione primeiro a cidade</option> 
                              </select>
                            </div>
                          </div>
                          
                        </div>
                        
                      </div>
                      
                      <div class="row">                        
                        <div class="col-md-5">

                          <div class="form-group"> 
                            <label class="col-md-12" >Endereço</label>
                            <div class="col-md-12">
                              <input name="endereco" type="text" class="form-control" value="<?=$data->endereco?>" >
                            </div>
                          </div>

                        </div>
                        <div class="col-md-2">

                          <div class="form-group"> 
                            <label class="col-md-12" >Número</label>
                            <div class="col-md-12">
                              <input name="numero" type="text" class="form-control" value="<?=$data->numero?>" >
                            </div>
                          </div>

                        </div>
                        <div class="col-md-3">

                          <div class="form-group"> 
                            <label class="col-md-12" >Complemento</label>
                            <div class="col-md-12">
                              <input name="complemento" type="text" class="form-control" value="<?=$data->complemento?>" >
                            </div>
                          </div>
                          
                        </div>
                        <div class="col-md-2">

                          <div class="form-group"> 
                            <label class="col-md-12" >Cep</label>
                            <div class="col-md-12">
                              <input name="cep" type="text" class="form-control" value="<?=$data->cep?>" >
                            </div>
                          </div>
                          
                        </div>
                      </div>
                      
                      <hr>
                      
                      <div class="row">                        
                        <div class="col-md-3">

                          <div class="form-group"> 
                            <label class="col-md-12" >Área útil</label>
                            <div class="col-md-12">
                              <input name="area_util" type="text" class="form-control" value="<?=$data->area_util?>" >
                            </div>
                          </div>
                          
                        </div>
                        <div class="col-md-3">

                          <div class="form-group"> 
                            <label class="col-md-12" >Área total</label>
                            <div class="col-md-12">
                              <input name="area_total" type="text" class="form-control" value="<?=$data->area_total?>" >
                            </div>
                          </div>
                          
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-3">

                          <div class="form-group"> 
                            <label class="col-md-12" >Garagem</label>
                            <div class="col-md-12">
                              <input name="garagem" type="text" class="form-control" value="<?=$data->garagem?>" >
                            </div>
                          </div>
                          
                        </div>
                        <div class="col-md-3">

                          <div class="form-group"> 
                            <label class="col-md-12" >Churrasqueira</label>
                            <div class="col-md-12">
                              <input name="churrasqueira" type="text" class="form-control" value="<?=$data->churrasqueira?>" >
                            </div>
                          </div>
                          
                        </div>
                        <div class="col-md-3">

                          <div class="form-group"> 
                            <label class="col-md-12" >Cozinhas</label>
                            <div class="col-md-12">
                              <input name="cozinhas" type="text" class="form-control" value="<?=$data->cozinhas?>" >
                            </div>
                          </div>

                        </div>

                        <div class="col-md-3">

                          <div class="form-group"> 
                            <label class="col-md-12" >Salas</label>
                            <div class="col-md-12">
                              <input name="salas" type="text" class="form-control" value="<?=$data->salas?>" >
                            </div>
                          </div>

                        </div>

                      </div>

                      <div class="row">   
                        
                        <div class="col-md-3">
                          
                          <div class="form-group"> 
                            <label class="col-md-12" >Quartos</label>
                            <div class="col-md-12">
                              <input name="quartos" type="text" class="form-control" value="<?=$data->quartos?>" >
                            </div>
                          </div>

                        </div>
                        <div class="col-md-3">

                          <div class="form-group"> 
                            <label class="col-md-12" >Súites</label>
                            <div class="col-md-12">
                              <input name="suites" type="text" class="form-control" value="<?=$data->suites?>" >
                            </div>
                          </div>

                        </div> 

                        <div class="col-md-3">

                          <div class="form-group"> 
                            <label class="col-md-12" >Banheiros</label>
                            <div class="col-md-12">
                              <input name="banheiros" type="text" class="form-control" value="<?=$data->banheiros?>" >
                            </div>
                          </div>

                        </div>

                        <div class="col-md-3">

                          <div class="form-group"> 
                            <label class="col-md-12" >Lavanderias</label>
                            <div class="col-md-12">
                              <input name="lavanderias" type="text" class="form-control" value="<?=$data->lavanderias?>" >
                            </div>
                          </div>

                        </div>
                        
                      </div>

                      <div class="row">                        
                        <div class="col-md-4">

                          <div class="form-group">
                            <label class="col-md-12" >Valor R$ (0,00 para "Consulte")</label>
                            <div class="col-md-12">
                              <input name="valor" type="text" class="form-control" value="<?=$valor?>" onkeypress="Mascara(this,MaskMonetario)" onKeyDown="Mascara(this,MaskMonetario)" >
                            </div>
                          </div> 

                        </div>
                        <div class="col-md-4">

                          <div class="form-group">
                            <label class="col-md-12" >Valor Condomínio R$ (0,00 para "Consulte")</label>
                            <div class="col-md-12">
                              <input name="condominio" type="text" class="form-control" value="<?=$condominio?>" onkeypress="Mascara(this,MaskMonetario)" onKeyDown="Mascara(this,MaskMonetario)" >
                            </div>
                          </div> 

                        </div>
                        <div class="col-md-4">

                          <div class="form-group">
                            <label class="col-md-12" >Valor Iptu R$ (0,00 para "Consulte")</label>
                            <div class="col-md-12">
                              <input name="iptu" type="text" class="form-control" value="<?=$iptu?>" onkeypress="Mascara(this,MaskMonetario)" onKeyDown="Mascara(this,MaskMonetario)" >
                            </div>
                          </div>

                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label class="col-md-12">Observações (não aparece no site)</label>
                        <div class="col-md-12">
                          <textarea class="form-control" name="obs" rows="6" ><?=$data->obs?></textarea>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="col-md-12">Descrição</label>
                        <div class="col-md-12">
                          <textarea name="descricao" class="summernote" ><?=$data->descricao?></textarea>
                        </div>
                      </div>

                    </fieldset>

                    <div>
                      <div style="margin-bottom: 10px;">(*) Campos obrigatórios.</div>
                      <button type="submit" class="btn btn-primary">Salvar</button>
                      <input type="hidden" name="codigo" value="<?=$data->codigo?>" >
                      <button type="button" class="btn btn-default" onClick="window.location='<?=$_base['objeto']?>';" >Voltar</button>
                    </div>

                  </form>
                </div>


                <div id="imagem" class="tab-pane <?php if($aba_selecionada == "imagem"){ echo "active"; } ?>" >

                  <button type="button" class="btn btn-primary" onClick="modal('<?=$_base['objeto']?>upload/codigo/<?=$data->codigo?>', 'Enviar Imagens');" >Carregar Imagens</button>
                  
                  <hr>

                  <div style="text-align:center;">
                    <ul id="sortable_imagem" >
                      <?php

                      $n = 0;
                      foreach ($imagens as $key => $value) {

                        echo "
                        <li id='item_".$value['id']."' >

                        <div class='quadro_img' style='background-image:url(".$value['imagem_p']."); '></div>
                        <div style='padding-top:5px; text-align:center;'>                         
                        <button class='btn btn-default fa fa-times-circle' onClick=\"confirma_apagar('".$_base['objeto']."apagar_imagem/codigo/$data->codigo/id/".$value['id']."');\" title='Remover imagem' ></button>
                        <button class='btn btn-default' onClick=\"modal('".$_base['objeto']."legenda/id/".$value['id']."/codigo/$data->codigo', 'Alterar Legenda');\" title='Editar legenda' ><i class='fas fa-edit'></i></button>
                        <button class='btn btn-default fa fa-repeat' onClick=\"window.location='".$_base['objeto']."girar_imagem/codigo/$data->codigo/id/".$value['id']."';\" title='Girar imagem' ><i class='fas fa-sync-alt'></i></button>
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


                <div id="opcoes" class="tab-pane <?php if($aba_selecionada == "opcoes"){ echo "active"; } ?>" >
                  <form action="<?=$_base['objeto']?>marcar_opcionais" class="form-horizontal" method="post">              

                    <div style="margin-top: 15px; margin-bottom: 15px; text-align:left; font-size: 16px; font-weight: bold; ">Selecione os itens inclusos:</div>

                    <div class="row">
                      <?php

                      foreach ($opcionais as $key => $value) {

                        if($value['selected']){
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
    <script src="<?=LAYOUT?>api/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
    <script src="<?=LAYOUT?>api/bootstrap-fileupload/bootstrap-fileupload.min.js"></script>
    <script src="<?=LAYOUT?>js/canvas-to-blob.min.js"></script>
    <script src="<?=LAYOUT?>dist/js/app.min.js"></script>
    <script src="<?=LAYOUT?>dist/js/demo.js"></script> 
    <script src="<?=LAYOUT?>js/funcoes.js"></script>
    <script>function dominio(){ return '<?=DOMINIO?>'; }</script>
    <script type="text/javascript">

      function abre_bairros(cidade){

        $('#div_bairros').html("<div style='text-align:left;'><img src='"+dominio()+"_views/img/loading.gif' style='width:25px;'></div>");

        $.post('<?=DOMINIO?>imoveis/lista_bairros',{ cidade:cidade, selecionado:'<?=$data->bairro_id?>' },function(data){
          if(data){
            $('#div_bairros').html(data);
          }
        });

      }

    </script>
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

        <?php if($data->cidade_id){ ?>

          abre_bairros('<?=$data->cidade_id?>');

        <?php } ?>

      });

    </script>

    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

    <?php include_once('js_summernote.php'); ?>

  </body>
  </html>