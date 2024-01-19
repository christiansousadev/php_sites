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
						<form action="<?=$_base['objeto']?>bairros_apagar" method="post" id="form_apagar" name="form_apagar" >

							<!-- box -->
							<div class="box">
								<div class="box-body">

									<div style="text-align:left;">

										<button type="button" class="btn btn-primary" onClick="modal('<?=$_base['objeto']?>bairros_novo', 'Nova Cidade');">Novo</button>

										<button type="button" class="btn btn-default" onClick="apagar_varios('form_apagar');" >Apagar Selecionados</button>

										<button type="button" class="btn btn-default" onClick="window.location='<?=$_base['objeto']?>';">Voltar</button>

									</div>

									<hr>

									<div style="width: 100%; margin-top: 15px; margin-bottom: 15px;">
										<select class="form-control select2" name="cidade" onChange="sel_cidade(this.value);">
											<?php

											foreach ($cidades as $key => $value) {

												if($selecionado == $value['codigo']){
													$selected = " selected='' ";
												} else {
													$selected = "";
												}

												echo "<option value='".$value['codigo']."' $selected >".$value['cidade']." - ".$value['estado']."</option>";

											}

											?>                        
										</select>
									</div>

									<hr>

									<table id="tabela1" class="table table-bordered table-striped">

										<thead>
											<tr>
												<th>Sel.</th>
												<th>Bairro</th>
												<th>Cidade</th>
											</thead>

											<tbody>
												<?php

												foreach ($lista as $key => $value) {
													
													$linklinha = "onClick=\"modal('".$_base['objeto']."bairros_alterar/codigo/".$value['codigo']."', 'Alterar Cidade');\" style='cursor:pointer;' ";
													
													echo "
													<tr>
													<td class='center' style='width:30px;' ><input type='checkbox' class='marcar' name='apagar_".$value['id']."' value='1' ></td>
													<td $linklinha >".$value['bairro']."</td>
													<td $linklinha >".$value['cidade']."</td>
													</tr>
													";
													
												}

												?>
											</tbody>

										</table>

									</div>

								</div>
								<!-- /.box -->

							</form>
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
		<script src="<?=LAYOUT?>plugins/iCheck/icheck.min.js"></script>
		<script src="<?=LAYOUT?>dist/js/app.min.js"></script>
		<script src="<?=LAYOUT?>dist/js/demo.js"></script>
		<script>
			$(function () {
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
		<script>
			function sel_cidade(val){ 
				window.location='<?=DOMINIO?>imoveis/bairros/cidade/'+val;
			}
		</script>
	</body>
	</html>