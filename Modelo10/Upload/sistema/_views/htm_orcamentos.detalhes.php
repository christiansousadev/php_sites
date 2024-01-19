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
  <link rel="stylesheet" href="<?=LAYOUT?>dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="<?=LAYOUT?>dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="<?=LAYOUT?>api/bootstrap-fileupload/bootstrap-fileupload.min.css" />
  <link rel="stylesheet" href="<?=LAYOUT?>css/css.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <style>

  .form-group label{
    margin-top:10px;
  }

  </style>

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
          <section class="panel">

            <header class="panel-heading" style="background-color:#ddd">      
                <h2 class="panel-title" style="font-size:16px; padding-top: 5px; padding-bottom: 5px; text-align: center;">
                <strong>DETALHES DA SOLICITAÇÃO <?=$data->id?></strong> - Realizado em: <?=date('d/m/y H:i', $data->data)?></h2> 
            </header>

          </section>
        </div>

      </div>


    	<div class="row">
        
        <div class="col-xs-6">



          <section class="panel">

            <header class="panel-heading" style="background-color:#ddd">      
                <h2 class="panel-title" style="font-size:16px; padding-top: 5px; padding-bottom: 5px; text-align: center;">
                <strong>ITENS DO PEDIDO</strong></h2> 
            </header>     

            <div class="panel-body">      

                <div class="table-responsive">
                  <table class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Produto</th>
                        <th>Quantidade</th>
                      </tr>
                    </thead>

                    <?php

                      foreach ($lista_itens as $key => $value) {

                        echo "
                        <tr>
                          <td>".$value['produto_titulo']."</td>
                          <td>".$value['quantidade']."</td>
                        </tr>
                        ";

                      }

                    ?>
                  </table>
                </div>
              </div>

          </section>


          
          <section class="panel">
          <form action="<?=$_base['objeto']?>salvar_pedido/codigo/<?=$data->codigo?>" method="post" >

            <header class="panel-heading" style="background-color:#ddd">      
              <h2 class="panel-title" style="font-size:16px; padding-top: 5px; padding-bottom: 5px; font-weight: bold; text-align: center;">
              INFORMAÇÕES DO PEDIDO</h2> 
            </header>
            
            <div class="panel-body">
              
              <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">      

                  <div class="form-group" >
                    <label class="col-md-12" >Metragem</label>
                    <div class="col-md-12">
                      <input type="text" class="form-control" name="metragem" value="<?=$data->metragem?>" >
                    </div>
                  </div>
                  
                  <div class="form-group" >
                    <label class="col-md-12" >Status:</label>
                    <div class="col-md-12">
                      <select data-plugin-selectTwo class="form-control" name="status" >
                        <option value='1' <?php if($data->status == 1){ echo "selected"; } ?> >Aguardando</option>
                        <option value='2' <?php if($data->status == 2){ echo "selected"; } ?> >Finalizado</option>
                      </select>
                    </div>
                  </div>

                </div>
              </div>

              <div style="padding-top:10px;" ><hr></div>

              <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">

                  <button type="button" class="btn btn-primary" onClick="submit()">Salvar Alterações</button>                    
                  <button type="button" class="btn btn-default" onClick="window.location='<?=$_base['objeto']?>';">Voltar</button>
                  
                </div>
              </div>
              
            </div>
            
          </form>
          </section>



        </div>
        

        <div class="col-md-6">


          <section class="panel">

            <header class="panel-heading" style="background-color:#ddd">      
              <h2 class="panel-title" style="font-size:16px; padding-top: 5px; padding-bottom: 5px; font-weight: bold; text-align: center;">
              INFORMAÇÕES DO CLIENTE</h2> 
            </header>

            <div class="panel-body">

              <fieldset>

                <div class="form-group" >
                  <label class="col-md-12" >Nome</label>
                  <div class="col-md-12">
                    <input type="text" class="form-control" name="nome" value="<?=$data->nome?>" >
                  </div>
                </div>

                <div class="form-group" >
                  <label class="col-md-12" >E-mail</label>
                  <div class="col-md-12">
                    <input type="text" class="form-control" name="email" value="<?=$data->email?>" >
                  </div>
                </div>

                <div class="form-group" >
                  <label class="col-md-12" >Fone</label>
                  <div class="col-md-12">
                    <input type="text" class="form-control" name="fone" value="<?=$data->fone?>" >
                  </div>
                </div>

                <div class="form-group" >
                  <label class="col-md-12" >Celular</label>
                  <div class="col-md-12">
                    <input type="text" class="form-control" name="celular" value="<?=$data->celular?>" >
                  </div>
                </div>

                <div class="form-group" >
                  <label class="col-md-12" >Cep</label>
                  <div class="col-md-12">
                    <input id="cep" type="text" class="form-control" value="<?=$data->cep?>" >
                  </div>
                </div>

                <div class="form-group" >
                  <label class="col-md-12" >Endereço</label>
                  <div class="col-md-12">
                    <input name="endereco" type="text" class="form-control" value="<?=$data->endereco?>" >
                  </div>
                </div>

                <div class="form-group" >
                  <label class="col-md-12" >Número</label>
                  <div class="col-md-12">
                    <input name="numero" type="text" class="form-control" value="<?=$data->numero?>" >
                  </div>
                </div>

                <div class="form-group" >
                  <label class="col-md-12" >Bairro</label>
                  <div class="col-md-12">
                    <input type="text" class="form-control" value="<?=$data->bairro?>" >
                  </div>
                </div>

                <div class="form-group" >
                  <label class="col-md-12" >Cidade</label>
                  <div class="col-md-12">
                    <input type="text" class="form-control" value="<?=$data->cidade?>">
                  </div>
                </div>

              </fieldset>

            </div>

            <div class="panel-footer">
              <div class="row">
                <div class="col-md-6">
                  <button type="button" class="btn btn-default" onClick="window.location='<?=$_base['objeto']?>';">Voltar</button>
                </div>
              </div>
            </div>
            
          </section>


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
<script src="<?=LAYOUT?>bootstrap/js/bootstrap.min.js"></script>
<script src="<?=LAYOUT?>plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?=LAYOUT?>plugins/datatables/dataTables.bootstrap.min.js"></script>
<script src="<?=LAYOUT?>plugins/slimScroll/jquery.slimscroll.min.js"></script>
<script src="<?=LAYOUT?>plugins/fastclick/fastclick.js"></script>
<script src="<?=LAYOUT?>dist/js/app.min.js"></script>
<script src="<?=LAYOUT?>api/bootstrap-fileupload/bootstrap-fileupload.min.js"></script>
<script src="<?=LAYOUT?>dist/js/demo.js"></script>
<script>function dominio(){ return '<?=DOMINIO?>'; }</script>
<script src="<?=LAYOUT?>js/funcoes.js"></script>

</body>
</html>