<?php if(!isset($_base['libera_views'])){ header("HTTP/1.0 404 Not Found"); exit; } ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

	<title><?=$_titulo?> - <?=TITULO_VIEW?></title>
	<link rel="icon" href="<?=FAVICON?>" type="image/x-icon" />
	
	<link rel="stylesheet" href="<?=LAYOUT?>bootstrap/css/bootstrap.min.css"> 

</head>
<body>

	<div class="wrapper"> 
		<div class="content-wrapper"> 

			<!-- Main content -->
			<section class="content">


				<?php if($resultado){ ?>

					<section class="panel">
						<div class="panel-body">

							<table class="table table-bordered table-striped">

								<thead>
									<tr>
										<th>Ref.</th>
										<th>Titulo</th>
										<th>Categoria</th>
										<th>Tipo</th>
										<th>Cidade</th>
									</tr>
								</thead>						 	

								<tbody>
									<?php

									foreach ($lista as $key => $value) {

										echo "
										<tr>
										<td>".$value['codigo_interno']."</td>
										<td>".$value['titulo']."</td>
										<td>".$value['categoria']."</td>
										<td>".$value['tipo']."</td>
										<td>".$value['cidade']."</td>
										</tr>
										";

									}

									?>
								</tbody>

							</table>

						</div>
					</section>

				<?php } ?>

			</section>
			<!-- /.content -->

		</div>

	</div>
	<!-- ./wrapper -->

	<script src="<?=LAYOUT?>plugins/jQuery/jquery-2.2.3.min.js"></script>
	<script src="<?=LAYOUT?>bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript">
		$(function(){
			window.print();
		});
	</script>
</body>
</html>