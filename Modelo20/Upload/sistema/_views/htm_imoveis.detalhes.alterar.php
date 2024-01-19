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
	<link rel="stylesheet" href="<?=LAYOUT?>dist/css/AdminLTE.min.css">
	<link rel="stylesheet" href="<?=LAYOUT?>dist/css/skins/_all-skins.min.css">
	<link rel="stylesheet" href="<?=LAYOUT?>plugins/select2/select2.min.css">
	<link rel="stylesheet" href="<?=LAYOUT?>plugins/iCheck/square/blue.css">	
	<link rel="stylesheet" href="<?=LAYOUT?>api/bootstrap-fileupload/bootstrap-fileupload.min.css" />
	<link rel="stylesheet" href="<?=LAYOUT?>plugins/colorpicker/bootstrap-colorpicker.min.css">

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
								<li <?php if($aba_selecionada == "cores"){ echo "class='active'"; } ?> >
									<a href="#cores" data-toggle="tab">Cores</a>
								</li>

							</ul>

							<div class="tab-content" >

								<div id="dados" class="tab-pane <?php if($aba_selecionada == "dados"){ echo "active"; } ?>" >
									<form action="<?=$_base['objeto']?>pg_detalhes_grv" class="form-horizontal" method="post">  					
										<fieldset>

											<div class="form-group">
												<label class="col-md-12" >Página de detalhes</label>
												<div class="col-md-12">
													<select name="formato_pg" class="form-control select2" style="width: 100%;" >
														<option value="1" <?php if($data->formato_pg == 1){ echo " selected='' "; } ?>  >Modelo 1</option>
														<option value="2" <?php if($data->formato_pg == 2){ echo " selected='' "; } ?>  >Modelo 2</option>
													</select>
												</div>
											</div>

											<div class="form-group">
												<label class="col-md-12" >E-mail de destino do formulario</label>
												<div class="col-md-12">
													<input name="destino_form" type="text" class="form-control" value="<?=$data->destino_form?>" >
												</div>
											</div>

											<div class="form-group">
												<label class="col-md-12" >Contato whatsapp (apenas numeros com codigo de area)</label>
												<div class="col-md-12">
													<input name="whats_destino" type="text" class="form-control" value="<?=$data->whats_destino?>" >
												</div>
											</div>
											
											<div class="form-group">
												<label class="col-md-12" >Destino do botão voltar</label>
												<div class="col-md-12">
													<select name="destino_voltar" class="form-control select2" style="width: 100%;" >
														<option value="" <?php if(!$data->destino_voltar){ echo " selected='' "; } ?>  >Página anterior</option>
														<?php
														foreach ($destinos as $key => $value) {
															if($value['chave'] == $data->destino_voltar){
																$selected= " selected='' ";
															} else {
																$selected= "";
															}
															echo "<option value='".$value['chave']."' $selected >".$value['titulo']."</option>";
														}
														?>
													</select>
												</div>
											</div>

											<div class="form-group">
												<label class="col-md-12" >Botões Pedidos</label>
												<div class="col-md-6">
													<select name="botao_codigo_ped" class="form-control select2" style="width: 100%;" > 
														<?php
														foreach ($botoes as $key => $value) {
															
															if($data->botao_codigo_ped == $value['codigo']){ $selected = " selected='' "; } else { $selected = ""; }
															
															echo "<option value='".$value['codigo']."' $selected >".$value['titulo']."</option>";
														}
														?>
													</select>
												</div>
											</div>
											
											<div class="form-group">
												<label class="col-md-12" >Fonte Padrão</label>
												<div class="col-md-6">
													<select name="font_codigo" class="form-control select2" style="width: 100%;" >
														<?php
														
														foreach ($fontes as $key => $value) {
															
															if($value['codigo'] == $data->font_codigo){
																$selected = " selected=''; ";
															} else {
																$selected = "";              
															}

															echo "<option value='".$value['codigo']."' $selected >".$value['titulo']."</option>";

														}

														?>
													</select>
												</div>
											</div>

										</fieldset>

										<div>
											<button type="submit" class="btn btn-primary">Salvar</button>
											<button type="button" class="btn btn-default" onClick="window.location='<?=$_base['objeto']?>inicial';" >Voltar</button>
										</div>
										
									</form>
								</div>

								<div id="cores" class="tab-pane <?php if($aba_selecionada == "cores"){ echo "active"; } ?>" >
									<form action="<?=$_base['objeto']?>pg_detalhes_cores" class="form-horizontal" method="post">  					
										<fieldset>											

											<div class="row">
												<?php
												
												foreach ($cores as $key => $value) {

													echo "
													<div class='col-md-4' >
													<div class='form-group' >
													<label class='col-md-12' >Cor: ".$value['titulo']."</label>
													<div class='col-md-12'>
													<input name='cor_".$value['id']."' type='text' class='form-control my-colorpicker1' value='".$value['cor']."' autocomplete='off' >
													</div>
													</div>
													</div>
													";

												}
												?>												 
											</div>

										</fieldset>
										
										<div>
											<button type="submit" class="btn btn-primary">Salvar</button>
											<input type="hidden" name="formato_pg" value="<?=$data->formato_pg?>">
											<button type="button" class="btn btn-default" onClick="window.location='<?=$_base['objeto']?>inicial';" >Voltar</button>
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
		<script src="<?=LAYOUT?>api/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
		<script src="<?=LAYOUT?>bootstrap/js/bootstrap.min.js"></script>
		<script src="<?=LAYOUT?>plugins/datatables/jquery.dataTables.min.js"></script>
		<script src="<?=LAYOUT?>plugins/datatables/dataTables.bootstrap.min.js"></script>
		<script src="<?=LAYOUT?>plugins/slimScroll/jquery.slimscroll.min.js"></script>
		<script src="<?=LAYOUT?>plugins/fastclick/fastclick.js"></script>
		<script src="<?=LAYOUT?>plugins/select2/select2.full.min.js"></script>
		<script src="<?=LAYOUT?>plugins/iCheck/icheck.min.js"></script>	 
		<script src="<?=LAYOUT?>dist/js/app.min.js"></script>
		<script src="<?=LAYOUT?>dist/js/demo.js"></script>	
		<script src="<?=LAYOUT?>plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
		<script src="<?=LAYOUT?>api/bootstrap-fileupload/bootstrap-fileupload.min.js"></script>
		<script>

			$(document).ready(function() {

				$(".my-colorpicker1").colorpicker();

				$(".select2").select2();

			}); 

		</script>


		<script>function dominio(){ return '<?=DOMINIO?>'; }</script>
		<script src="<?=LAYOUT?>js/funcoes.js"></script>
		<script src="<?=LAYOUT?>js/ajuda.js"></script> 

	</body>
	</html>