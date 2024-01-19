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
	<link rel="stylesheet" href="<?=LAYOUT?>dist/css/AdminLTE.min.css">
	<link rel="stylesheet" href="<?=LAYOUT?>dist/css/skins/_all-skins.min.css">
	<link rel="stylesheet" href="<?=LAYOUT?>plugins/iCheck/square/blue.css">
	<link rel="stylesheet" href="<?=LAYOUT?>api/bootstrap-fileupload/bootstrap-fileupload.min.css" />
	<link rel="stylesheet" href="<?=LAYOUT?>plugins/colorpicker/bootstrap-colorpicker.min.css">	
	<link rel="stylesheet" href="<?=LAYOUT?>plugins/select2/select2.min.css">
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
								<li <?php if($aba_selecionada == "itens"){ echo "class='active'"; } ?> >
									<a href="#itens" data-toggle="tab">Itens</a>
								</li>
								<li <?php if($aba_selecionada == "imagem_fundo"){ echo "class='active'"; } ?> >
									<a href="#imagem_fundo" data-toggle="tab">Imagem Fundo</a>
								</li>

							</ul>
							
							<div class="tab-content" >

								<div id="dados" class="tab-pane <?php if($aba_selecionada == "dados"){ echo "active"; } ?>" >
									<form action="<?=$_base['objeto']?>alterar_grv" class="form-horizontal" method="post">  						

										<fieldset>

											<div class="form-group">
												<label class="col-md-12" >Titulo</label>
												<div class="col-md-12">
													<textarea name="titulo" class="summernote" ><?=$data->titulo?></textarea>
												</div>
											</div>
											
											<div class="form-group">
												<label class="col-md-12" >Valor</label>
												<div class="col-md-4">
													<input name="valor" type="text" class="form-control" value="<?=$valor?>" onkeypress="Mascara(this,MaskMonetario)" onKeyDown="Mascara(this,MaskMonetario)" >
												</div>
											</div>
											
											<div class="form-group">
												<label class="col-md-12">Tipo</label>
												<div class="col-md-12">
													<select name="tipo" class="form-control select2" style="width: 100%;" >
														<option value='0' <?php if($data->tipo == 0){ echo "selected=''"; } ?> >Link Externo</option>
														<option value='1' <?php if($data->tipo == 1){ echo "selected=''"; } ?> >Adicionar ao carrinho</option>
													</select>
												</div>
											</div>
											
											<div class="form-group">
												<label class="col-md-12" >Destino</label>
												<div class="col-md-7">
													<input name="endereco" type="text" class="form-control" value="<?=$data->endereco?>"  >
												</div>
											</div>
											
										</fieldset>

										<div>
											<button type="submit" class="btn btn-primary">Salvar</button>
											<input type="hidden" name="codigo" value="<?=$data->codigo?>" >
											<button type="button" class="btn btn-default" onClick="window.location='<?=$_base['objeto']?>inicial';" >Voltar</button>
										</div>

									</form>
								</div>


								<div id="itens" class="tab-pane <?php if($aba_selecionada == "itens"){ echo "active"; } ?>" >

									<div style="margin-top: 10px; padding-bottom: 20px; font-size: 16px; font-weight: bold; margin-left: 15px;">Adicionar Novo:</div>

									<form action="<?=$_base['objeto']?>item_novo/codigo/<?=$data->codigo?>" method="post" >

										<div class="row">
											<div class="col-md-3">

												<div class="form-group">
													<label class="col-md-12">Tipo</label>
													<div class="col-md-12">
														<select name="tipo" class="form-control select2" style="width: 100%;" >
															<option value='1' selected='' >Incluso</option>
															<option value='0' >Não Incluso</option>
														</select>
													</div>
												</div>

											</div>
											<div class="col-md-9">

												<div class="form-group">
													<label class="col-md-12" >Titulo</label>
													<div class="col-md-10">
														<input class="form-control" name="titulo" type="text" >
													</div>
													<div class="col-md-2">
														<div style="text-align:left; ">
															<button type="submit" class="btn btn-primary">Enviar</button> 
															<input type="hidden" name="codigo" value="<?=$data->codigo?>">
														</div>
													</div>
												</div>

											</div>										 
										</div>

									</form>

									<hr>

									<table class="table table-bordered table-striped">

										<thead>
											<tr>
												<th>Tipo</th>
												<th>Titulo</th>
												<th>Ação</th>
											</tr>
										</thead>

										<tbody>
											<?php

											foreach ($itens as $key => $value) {

												echo "
												<tr>
												<td>".$value['tipo']."</td>
												<td>".$value['titulo']."</td>
												<td><a href='#' onclick=\"confirma('".DOMINIO."planos/item_apagar/codigo/".$data->codigo."/id/".$value['id']."');\" >Apagar</a></td>
												</tr>
												";

											}

											?>
										</tbody>

									</table>

									<div style="text-align:left; padding-top:10px;">
										<button type="button" class="btn btn-default" onClick="window.location='<?=$_base['objeto']?>';" >Voltar</button>
									</div>									

								</div>

								<div id="imagem_fundo" class="tab-pane <?php if($aba_selecionada == "imagem_fundo"){ echo "active"; } ?>" >

									<?php if(!$data->img_fundo){ ?>
										<form action="<?=$_base['objeto']?>imagem_fundo/codigo/<?=$data->codigo?>" method="post" enctype="multipart/form-data">

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
											<img src="<?=PASTA_CLIENTE?>imagens/<?=$data->img_fundo?>" style="max-width:300px;" >
										</div>

										<div style="text-align:left; padding-top:10px;">
											<button type="button" class="btn btn-primary" onClick="confirma('<?=$_base['objeto']?>apagar_imagem_fundo/codigo/<?=$data->codigo?>');" >Apagar Imagem</button>
											<button type="button" class="btn btn-default" onClick="window.location='<?=$_base['objeto']?>';" >Voltar</button>
										</div>

									<?php } ?>
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
		<script src="<?=LAYOUT?>plugins/datatables/jquery.dataTables.min.js"></script>
		<script src="<?=LAYOUT?>plugins/datatables/dataTables.bootstrap.min.js"></script>
		<script src="<?=LAYOUT?>plugins/slimScroll/jquery.slimscroll.min.js"></script>
		<script src="<?=LAYOUT?>plugins/fastclick/fastclick.js"></script>
		<script src="<?=LAYOUT?>plugins/iCheck/icheck.min.js"></script>
		<script src="<?=LAYOUT?>plugins/select2/select2.full.min.js"></script>
		<script src="<?=LAYOUT?>plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
		<script src="<?=LAYOUT?>api/bootstrap-fileupload/bootstrap-fileupload.min.js"></script>
		<script src="<?=LAYOUT?>dist/js/app.min.js"></script>
		<script src="<?=LAYOUT?>dist/js/demo.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
		
		<script>
			
			$(document).ready(function() {

				$(".select2").select2();

			}); 

		</script>
		
		<script>function dominio(){ return '<?=DOMINIO?>'; }</script>
		<script src="<?=LAYOUT?>js/funcoes.js"></script>
		<script src="<?=LAYOUT?>js/ajuda.js"></script> 
		
		<?php include_once('js_summernote.php'); ?>

	</body>
	</html>