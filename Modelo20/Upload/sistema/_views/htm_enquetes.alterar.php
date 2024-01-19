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
  <link rel="stylesheet" href="<?=LAYOUT?>plugins/datatables/dataTables.bootstrap.css">
  <link rel="stylesheet" href="<?=LAYOUT?>plugins/colorpicker/bootstrap-colorpicker.min.css">
  <link rel="stylesheet" href="<?=LAYOUT?>dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="<?=LAYOUT?>dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="<?=LAYOUT?>plugins/select2/select2.min.css">
  <link rel="stylesheet" href="<?=LAYOUT?>plugins/iCheck/square/blue.css">
  <link rel="stylesheet" href="<?=LAYOUT?>api/bootstrap-fileupload/bootstrap-fileupload.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">

  <link href="<?=LAYOUT?>api/multiselect/multiselect.css" rel="stylesheet" />
  <link href="<?=LAYOUT?>api/multiselect/style.css" rel="stylesheet" />

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

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
              <li <?php if($aba_selecionada == "respostas"){ echo "class='active'"; } ?> >
                <a href="#respostas" data-toggle="tab">Respostas</a>
              </li>
              <li <?php if($aba_selecionada == "cores"){ echo "class='active'"; } ?> >
                <a href="#cores" data-toggle="tab">Cores</a>
              </li>
              <li <?php if($aba_selecionada == "imagem"){ echo "class='active'"; } ?> >
                <a href="#imagem" data-toggle="tab">Imagem</a>
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
                      <label class="col-md-12" >Enquete</label>
                      <div class="col-md-6">
                        <input name="enquete" type="text" class="form-control" value="<?=$data->enquete?>" >
                      </div>
                    </div>
                    
                    <div class="row">

                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="col-md-12">Posição da enquete</label>
                          <div class="col-md-12">
                            <select name="posicao_enquete" class="form-control select2" style="width: 100%;" >
                              <option value='0' <?php if($data->posicao_enquete == 0){ echo " selected='' "; } ?> >Centro (somente enquete)</option>
                              <option value='1' <?php if($data->posicao_enquete == 1){ echo " selected='' "; } ?> >Esquerda</option>
                              <option value='2' <?php if($data->posicao_enquete == 2){ echo " selected='' "; } ?> >Direita</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="col-md-12">Posição da imagem</label>
                          <div class="col-md-12">
                            <select name="posicao_img" class="form-control select2" style="width: 100%;" >
                              <option value='0' <?php if($data->posicao_img == 0){ echo " selected='' "; } ?> >Em cima da descricao</option>
                              <option value='1' <?php if($data->posicao_img == 1){ echo " selected='' "; } ?> >Em baixo da descricao</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="col-md-12">Status</label>
                          <div class="col-md-12">
                            <select name="status" class="form-control select2" style="width: 100%;" >
                              <option value='1' <?php if($data->status == 1){ echo "selected"; } ?> >Ativo</option>
                              <option value='2' <?php if($data->status == 2){ echo "selected"; } ?> >Finalizado</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      
                    </div>
                    
                    <div class="row">

                     <div class="col-md-4">

                      <div class="form-group">
                        <label class="col-md-12" >Estilo do botão Votar</label>
                        <div class="col-md-12">
                          <select name="botao_codigo_votar" class="form-control select2" style="width: 100%;" > 
                            <?php
                            foreach ($botoes as $key => $value) {

                              if($data->botao_codigo_votar == $value['codigo']){ $selected = " selected='' "; } else { $selected = ""; }

                              echo "<option value='".$value['codigo']."' $selected >".$value['titulo']."</option>";
                            }
                            ?>
                          </select>
                        </div>
                      </div>

                    </div>

                    <div class="col-md-4">

                      <div class="form-group">
                        <label class="col-md-12" >Estilo do botão Resultados</label>
                        <div class="col-md-12">
                          <select name="botao_codigo_result" class="form-control select2" style="width: 100%;" > 
                            <?php
                            foreach ($botoes as $key => $value) {

                              if($data->botao_codigo_result == $value['codigo']){ $selected = " selected='' "; } else { $selected = ""; }

                              echo "<option value='".$value['codigo']."' $selected >".$value['titulo']."</option>";
                            }
                            ?>
                          </select>
                        </div>
                      </div>

                    </div>

                    <div class="col-md-4">

                      <div class="form-group">
                        <label class="col-md-12" >Estilo do botão Imagem</label>
                        <div class="col-md-12">
                          <select name="botao_codigo_img" class="form-control select2" style="width: 100%;" >
                            <option value="" <?php if($data->botao_codigo_img == ''){ echo "$selected=''"; } ?> >Esconder Botão</option>
                            <?php
                            foreach ($botoes as $key => $value) {

                              if($data->botao_codigo_img == $value['codigo']){ $selected = " selected='' "; } else { $selected = ""; }

                              echo "<option value='".$value['codigo']."' $selected >".$value['titulo']."</option>";
                            }
                            ?>
                          </select>
                        </div>
                      </div>

                    </div>

                  </div>

                  <div class="row">

                    <div class="col-md-4">
                      <div class="form-group">
                        <label class="col-md-12" >Titulo Botão (deixe em branco para esconder o botão)</label>
                        <div class="col-md-12">
                          <input name="botao_titulo" type="text" class="form-control" value="<?=$data->botao_titulo?>" >
                        </div>
                      </div>
                    </div>

                    <div class="col-md-4">
                      <div class="form-group">
                        <label class="col-md-12" >Link do botão (interno)</label>
                        <div class="col-md-12">
                          <select name="endereco_padrao" class="form-control select2" style="width: 100%;" >
                            <option value='' selected='' >Personalizado</option>
                            <?php
                            foreach ($destinos as $key => $value) {

                              if($data->endereco_padrao == $value['chave']){ $selected = " selected='' "; } else { $selected = ""; }

                              echo "<option value='".$value['chave']."' $selected >".$value['titulo']."</option>";
                            }
                            ?>
                          </select>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-4">
                      <div class="form-group">
                        <label class="col-md-12" >Link Personalizado</label>
                        <div class="col-md-12">
                          <input name="endereco" type="text" class="form-control" value="<?=$data->endereco?>" >
                        </div>
                      </div>
                    </div>

                  </div>

                  <hr>

                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="col-md-12" >Classes Css</label>  
                        <div class="col-md-12">
                          <select name="lista_css[]"  class="js-select2" multiple="multiple" >
                            <?php

                            $lista_selecionada = explode(' ', $data->classes);
                            foreach ($lista_css as $key => $value) {

                              $consulta = '.'.$value['classe'];
                              if(in_array($consulta, $lista_selecionada)){
                                $selected = " selected='' ";
                              } else {
                                $selected = "";
                              }

                              echo "
                              <option value='.".$value['classe']."' data-badge='' $selected >".$value['titulo']."</option>
                              ";
                            }
                            ?>
                          </select> 
                        </div>
                      </div>
                    </div> 
                  </div>

                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="col-md-12" >Classes Css Imagens</label>  
                        <select name="lista_css_img[]"  class="js-select2" multiple="multiple" >
                          <?php

                          $lista_selecionada = explode(' ', $data->classes_img);
                          foreach ($lista_css as $key => $value) {

                            $consulta = '.'.$value['classe'];
                            if(in_array($consulta, $lista_selecionada)){
                              $selected = " selected='' ";
                            } else {
                              $selected = "";
                            }

                            echo "
                            <option value='.".$value['classe']."' data-badge='' $selected >".$value['titulo']."</option>
                            ";
                          }
                          ?>
                        </select>

                      </div>
                    </div>
                  </div>

                  <hr>

                  <div class="form-group">
                    <label class="col-md-12">Descrição</label>
                    <div class="col-md-12">
                      <textarea class="summernote" name="descricao"  ><?=$data->descricao?></textarea>
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

            <div id="cores" class="tab-pane <?php if($aba_selecionada == "cores"){ echo "active"; } ?>" >
              <form action="<?=$_base['objeto']?>cores_grv" class="form-horizontal" method="post">              

                <fieldset>

                  <?php

                  foreach ($cores as $key => $value) {

                    echo "
                    <div class='form-group' >
                    <label class='col-md-12' >Cor: ".$value['titulo']."</label>
                    <div class='col-md-4'>
                    <input name='cor_".$value['id']."' type='text' class='form-control my-colorpicker1' value='".$value['cor']."' autocomplete='off' >
                    </div>
                    </div>
                    ";

                  }

                  ?>

                </fieldset>

                <div>
                  <button type="submit" class="btn btn-primary">Salvar</button>
                  <input type="hidden" name="codigo" value="<?=$data->codigo?>" >
                  <button type="button" class="btn btn-default" onClick="window.location='<?=$_base['objeto']?>';" >Voltar</button>
                </div>

              </form>
            </div>

            <div id="imagem" class="tab-pane <?php if($aba_selecionada == "imagem"){ echo "active"; } ?>" >
              <?php if(!$data->imagem){ ?>
                <form action="<?=$_base['objeto']?>imagem/codigo/<?=$data->codigo?>" method="post" enctype="multipart/form-data">

                  <fieldset>
                    <label>Arquivo</label>
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
                        </span>
                        <a href="#" class="btn btn-default fileupload-exists" data-dismiss="fileupload">Remover</a>
                      </div>
                    </div>
                  </fieldset>

                  <div style="text-align:left; padding-top:10px;">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                    <button type="button" class="btn btn-default" onClick="window.location='<?=$_base['objeto']?>';" >Voltar</button>
                  </div>

                </form>
              <?php } else { ?>

                <div style="text-align:left;">
                  <img src="<?=PASTA_CLIENTE?>img_enquetes/<?=$data->imagem?>" style="max-width:300px;" >
                </div>

                <div style="text-align:left; padding-top:10px;">
                  <button type="button" class="btn btn-primary" onClick="confirma('<?=$_base['objeto']?>apagar_imagem/codigo/<?=$data->codigo?>');" >Apagar Imagem</button>
                  <button type="button" class="btn btn-default" onClick="window.location='<?=$_base['objeto']?>';" >Voltar</button>
                </div>

              <?php } ?>

            </div>

            <div id="respostas" class="tab-pane <?php if($aba_selecionada == "respostas"){ echo "active"; } ?>" >

              <button type="button" class="btn btn-primary" onClick="modal('<?=$_base['objeto']?>nova_resposta/codigo/<?=$data->codigo?>', 'Nova Resposta');">Nova Resposta</button>

              <hr>  

              <table class="table table-bordered table-striped">

                <thead>
                  <tr>
                    <th>#</th>
                    <th>Resposta</th>
                    <th class="center">Votos</th>
                    <th>Porcentagem</th>
                  </tr>
                </thead>

                <tbody>
                  <?php

                  $i = 1;
                  foreach ($relatorio as $key => $value) {

                    $linklinha = "onClick=\"modal('".$_base['objeto']."alterar_resposta/codigo_enquete/".$data->codigo."/codigo/".$value['codigo']."', 'Alterar Resposta');\" style='cursor:pointer;' ";

                    echo "
                    <tr>
                    <td $linklinha >$i</td>
                    <td $linklinha >".$value['resposta']."</td>
                    <td $linklinha class='center' >".$value['votos']."</td>
                    <td $linklinha >
                    <div class='progress progress-sm progress-half-rounded m-none mt-xs light' >
                    <div class='progress-bar progress-bar-primary' style='width:".$value['votos_porc']."%;'>".$value['votos_porc']."%</div>
                    </div>
                    </td>
                    </tr>
                    ";

                    $i++;
                  }

                  ?>
                </tbody>

              </table>

              <div style="padding-top:15px;" >
                <button type="button" class="btn btn-default" onClick="window.location='<?=$_base['objeto']?>';" >Voltar</button>
              </div>

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

<!-- jQuery 2.2.3 -->
<script src="<?=LAYOUT?>plugins/jQuery/jquery-2.2.3.min.js"></script>
<script src="<?=LAYOUT?>api/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
<script src="<?=LAYOUT?>bootstrap/js/bootstrap.min.js"></script>
<script src="<?=LAYOUT?>plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?=LAYOUT?>plugins/datatables/dataTables.bootstrap.min.js"></script>
<script src="<?=LAYOUT?>plugins/slimScroll/jquery.slimscroll.min.js"></script>
<script src="<?=LAYOUT?>plugins/fastclick/fastclick.js"></script>
<script src="<?=LAYOUT?>plugins/select2/select2.full.min.js"></script>
<script src="<?=LAYOUT?>plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
<script src="<?=LAYOUT?>api/bootstrap-fileupload/bootstrap-fileupload.min.js"></script>
<script src="<?=LAYOUT?>plugins/iCheck/icheck.min.js"></script> 
<script src="<?=LAYOUT?>dist/js/app.min.js"></script>
<script src="<?=LAYOUT?>dist/js/demo.js"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script src="<?=LAYOUT?>api/multiselect/multiselect.js"></script>

<script>
  $(function () {

    $(".my-colorpicker1").colorpicker();

    $('#tabela1').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true
    });
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue'
    });
  });
</script>
<script>function dominio(){ return '<?=DOMINIO?>'; }</script>
<script src="<?=LAYOUT?>js/funcoes.js"></script>
<script src="<?=LAYOUT?>js/ajuda.js"></script> 

<?php include_once('js_summernote.php'); ?>

<script type="text/javascript">

  (function($) {

    "use strict";
    
    $(".select2").select2();
    
    $(".js-select2").select2({
      closeOnSelect : false,
      placeholder : "Clique e selecione a classe",
      allowHtml: true,
      allowClear: true,
      tags: true
    });

    $('.icons_select2').select2({
      width: "100%",
      templateSelection: iformat,
      templateResult: iformat,
      allowHtml: true,
      placeholder: "Clique e selecione a classe",
      dropdownParent: $( '.select-icon' ),
      allowClear: true,
      multiple: false
    });

    function iformat(icon, badge,) {
      var originalOption = icon.element;
      var originalOptionBadge = $(originalOption).data('badge');
      
      return $('<span><i class="fa ' + $(originalOption).data('icon') + '"></i> ' + icon.text + '<span class="badge">' + originalOptionBadge + '</span></span>');
    }

  })(jQuery);

</script>
</body>
</html>