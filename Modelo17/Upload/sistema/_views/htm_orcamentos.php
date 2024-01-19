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
  <link rel="stylesheet" href="<?=LAYOUT?>api/jquery-ui/css/ui-lightness/jquery-ui-1.10.4.custom.css" />
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
						
						<li <?php if($aba_selecionada == "aguardando"){ echo "class='active'"; } ?> >
							<a href="#aguardando" data-toggle="tab">Aguardando</a>
						</li>
						<li <?php if($aba_selecionada == "finalizados"){ echo "class='active'"; } ?> >
							<a href="#finalizados" data-toggle="tab">Finalizados</a>
						</li>
						
					</ul>

					<div class="tab-content" >
												
						<div id="aguardando" class="tab-pane <?php if($aba_selecionada == "aguardando"){ echo "active"; } ?>" >
						<table id="tabela1" class="table table-bordered table-striped">

		                	<thead>
		                		<tr>
		                			<th>Data</th>
		                			<th>Nome</th>
		                			<th>E-mail</th>
		                			<th>Fone</th>
						    	</tr>
							</thead>						 	
							
							<tbody>
							<?php
							
							foreach ($aguardando as $key => $value) {
								
								$linklinha = "onClick=\"window.location='".$_base['objeto']."detalhes/codigo/".$value['codigo']."';\" style='cursor:pointer;' ";
								
								echo "
								<tr>
									<td $linklinha >".$value['dia']."</td>
									<td $linklinha >".$value['nome']."</td>
									<td $linklinha >".$value['email']."</td>
									<td $linklinha >".$value['fone']."</td>
								</tr>
								";
								
							}
							
							?>
							</tbody>
							
						</table>
						</div>
						
						
						
						<div id="finalizados" class="tab-pane <?php if($aba_selecionada == "finalizados"){ echo "active"; } ?>" >
						<table id="tabela2" class="table table-bordered table-striped">
							
		                	<thead>
		                		<tr>
		                			<th>Data</th>
		                			<th>Nome</th>
		                			<th>E-mail</th>
		                			<th>Fone</th>
						    	</tr>
							</thead>						 	

							<tbody>
							<?php

							foreach ($finalizados as $key => $value) {
								
								$linklinha = "onClick=\"window.location='".$_base['objeto']."detalhes/codigo/".$value['codigo']."';\" style='cursor:pointer;' ";
								
								echo "
								<tr>
									<td $linklinha >".$value['dia']."</td>
									<td $linklinha >".$value['nome']."</td>
									<td $linklinha >".$value['email']."</td>
									<td $linklinha >".$value['fone']."</td>
								</tr>
								";

							}

							?>
							</tbody>

						</table>
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
<script src="<?=LAYOUT?>dist/js/app.min.js"></script>
<script src="<?=LAYOUT?>dist/js/demo.js"></script> 
<script>function dominio(){ return '<?=DOMINIO?>'; }</script>
<script src="<?=LAYOUT?>js/funcoes.js"></script>

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
	
    $('#tabela2').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true
    });
  	
});
</script>

</body>
</html>