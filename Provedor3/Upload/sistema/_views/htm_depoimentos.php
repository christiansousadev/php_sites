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
	<link rel="stylesheet" href="<?=LAYOUT?>api/jquery-ui/css/ui-lightness/jquery-ui-1.10.4.custom.css" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<link rel="stylesheet" href="<?=LAYOUT?>plugins/datatables/dataTables.bootstrap.css">
	<link rel="stylesheet" href="<?=LAYOUT?>plugins/select2/select2.min.css">
	<link rel="stylesheet" href="<?=LAYOUT?>dist/css/AdminLTE.min.css">
	<link rel="stylesheet" href="<?=LAYOUT?>dist/css/skins/_all-skins.min.css">
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

			<!-- Main content -->
			<section class="content">
				<div class="row">
					<div class="col-xs-12">
						
						<div>
							<button class="btn btn-primary" type="button" onClick="window.location='<?=$_base['objeto']?>novo';" >Novo</button>

							<button type="button" class="btn btn-default" onClick="window.location='<?=$_base['objeto']?>grupos';">Grupos/Páginas</button>
						</div>
						
						<div style="text-align:left; padding-top:15px; margin-bottom: 15px;">
							<label>Filtro: <?=ajuda('Selecione para filtrar por setor')?></label>
							<select class="form-control select2" name="grupo" onChange="window.location='<?=$_base['objeto']?>inicial/grupo/'+this.value;"; >
								<option value="0">Todos</option>
								<?php
								foreach ($grupos as $key => $value) {

									if($value['codigo'] == $grupo_selecionado){
										$selected = " selected ";
									} else {
										$selected = "";
									}

									echo "<option value='".$value['codigo']."' ".$selected." >".$value['titulo']."</option>";
								}
								?>
							</select>
						</div>

						<div class="nav-tabs-custom">

							<ul class="nav nav-tabs">

								<li <?php if($aba_selecionada == "aguardando"){ echo "class='active'"; } ?> >
									<a href="#aguardando" data-toggle="tab">Aguardando</a>
								</li>
								<li <?php if($aba_selecionada == "aprovados"){ echo "class='active'"; } ?> >
									<a href="#aprovados" data-toggle="tab">Aprovados</a>
								</li>

							</ul>
							
							<div class="tab-content" >

								<div id="aguardando" class="tab-pane <?php if($aba_selecionada == "aguardando"){ echo "active"; } ?>" >

									<?php

									$n = 0;
									foreach ($aguardando as $key => $value) {

										echo '
										<hr>
										<div style="padding:20px;">
										<div><strong>Data:</strong> '.$value['data'].'</div>
										<div style="padding-top:5px;"><strong>Nome:</strong> '.$value['nome'].'</div>
										<div style="padding-top:5px;"><strong>E-mail:</strong> '.$value['email'].'</div>
										<div style="padding-top:5px;"><strong>Empresa:</strong> '.$value['empresa'].'</div>	
										<div style="padding-top:5px;"><strong>Cidade:</strong> '.$value['cidade'].'</div>		
										<div style="padding-top:5px;"><strong>Depoimento:</strong> '.$value['conteudo'].'</div>
										<div style="padding-top:10px;">
										<button class="btn btn-default" type="button" onClick="window.location=\''.$_base['objeto'].'alterar/id/'.$value['id'].'\';" >Alterar</button>
										<button class="btn btn-default" type="button" onClick="window.location=\''.$_base['objeto'].'imagem/id/'.$value['id'].'\';" >Imagem</button>
										<button type="button" class="btn btn-default" onclick="confirma(\''.$_base['objeto'].'apagar/id/'.$value['id'].'\');">Apagar</button>
										</div>
										</div>
										';

										$n++;
									}

									if($n == 0){

										echo "
										<div style='text-align:center; font-size:14px; padding-top:60px; padding-bottom:70px; ' >
										Nenhum depoimento aguardando aprovação.
										</div>
										";

									}

									?>
								</div>


								<div id="aprovados" class="tab-pane <?php if($aba_selecionada == "aprovados"){ echo "active"; } ?>" >

									<?php

									$n=0;
									foreach ($aprovados as $key => $value) {

										echo '
										<hr>
										<div style="padding:20px;">
										<div><strong>Data:</strong> '.$value['data'].'</div>
										<div style="padding-top:5px;"><strong>Nome:</strong> '.$value['nome'].'</div>
										<div style="padding-top:5px;"><strong>E-mail:</strong> '.$value['email'].'</div>
										<div style="padding-top:5px;"><strong>Cidade:</strong> '.$value['cidade'].'</div>
										<div style="padding-top:5px;"><strong>Empresa:</strong> '.$value['empresa'].'</div>
										<div style="padding-top:5px;"><strong>Depoimento:</strong> '.$value['conteudo'].'</div>
										<div style="padding-top:10px;">
										<button class="btn btn-default" type="button" onClick="window.location=\''.$_base['objeto'].'alterar/id/'.$value['id'].'\';" >Alterar</button>
										<button class="btn btn-default" type="button" onClick="window.location=\''.$_base['objeto'].'imagem/id/'.$value['id'].'\';" >Imagem</button>
										<button type="button" class="btn btn-default" onclick="confirma(\''.$_base['objeto'].'apagar/id/'.$value['id'].'\');">Apagar</button>
										</div>
										</div>
										';

										$n++;
									}


									if($n == 0){

										echo "
										<div style='text-align:center; font-size:14px; padding-top:60px; padding-bottom:70px; ' >
										Nenhum depoimento aprovado.
										</div>
										";

									}

									?>
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
	<script src="<?=LAYOUT?>api/jquery/jquery.js"></script>
	<script src="<?=LAYOUT?>api/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
	<script src="<?=LAYOUT?>bootstrap/js/bootstrap.min.js"></script>
	<script src="<?=LAYOUT?>api/bootstrap-fileupload/bootstrap-fileupload.min.js"></script>
	<script src="<?=LAYOUT?>plugins/datatables/jquery.dataTables.min.js"></script>
	<script src="<?=LAYOUT?>plugins/datatables/dataTables.bootstrap.min.js"></script>
	<script src="<?=LAYOUT?>plugins/select2/select2.full.min.js"></script>
	<script src="<?=LAYOUT?>dist/js/app.min.js"></script>
	<script src="<?=LAYOUT?>dist/js/demo.js"></script> 
	<script>function dominio(){ return '<?=DOMINIO?>'; }</script>
	<script src="<?=LAYOUT?>js/funcoes.js"></script>
	<script>
		$(function() {
			$(".select2").select2();
		});
	</script>
	<script src="<?=LAYOUT?>js/ajuda.js"></script> 
</body>
</html>