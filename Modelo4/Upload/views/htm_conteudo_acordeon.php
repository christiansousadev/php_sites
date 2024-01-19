<?php if(!isset($_base['libera_views'])){ header("HTTP/1.0 404 Not Found"); exit; } ?>

<?php
//echo "<pre>"; print_r($conteudo_sessao['cores']['detalhes']); echo "</pre>";
$cores = $conteudo_sessao['cores']['lista'];
$conteudo_config = $conteudo_sessao['data_grupo'];

?>
<section id="section-acordeon-<?=$conteudo_id?>" class="" style="position: relative; padding-top:20px; padding-bottom: 20px; background-color: <?=$cores['1']?>; ">
	<div class="container">
		<div class="row">
			
			<?php if($conteudo_config->mostrar_titulo == 1){ ?>

				<div class='row' >
					<div class='col-xs-12 col-sm-12 col-md-12' >
						<div>
							<h2 class="titulo_padrao" style="color:<?=$cores[2]?> !important; border-color:<?=$cores[2]?> !important; " ><?=$conteudo_config->titulo?></h2>
							</div>
				</div>

			<?php } ?>

			<div class='col-xs-12 col-sm-6 col-md-6' >
				<div class="accordion" >
					<?php
					$total = count($conteudo_sessao['lista']);
					$por_coluna = round($total/2);
					$n_acord = 1;
					foreach ($conteudo_sessao['lista'] as $key => $value) {								
						if($n_acord <= $por_coluna){
							
							echo "
							<div class='card z-depth-0 bordered'>
							<div class='card-header' id='heading".$n_acord."'>
							<h5 class='mb-0'>
							<button class='btn btn-link acordeon_titulo'  type='button' data-toggle='collapse' data-target='#collapse_".$value['id']."_".$n_acord."' aria-expanded='true' aria-controls='collapse".$n_acord."' style='color:".$cores['4']."; background-color:".$cores['3'].";' ><i class='fas fa-chevron-down'></i>
							".$value['titulo']."
							</button>
							</h5>
							</div>
							<div id='collapse_".$value['id']."_".$n_acord."' class='collapse' aria-labelledby='heading".$n_acord."' >
							<div class='card-body' >
							<div class='row'>
							";

							if($value['imagem']){

								echo "
								<div class='col-xs-12 col-sm-8 col-md-8' >
								<div class='acordeon_descricao' style='color:".$cores['2']."; ' >
								".$value['descricao']."
								</div>
								</div>
								<div class='col-xs-12 col-sm-4 col-md-4' >
								<div class='acordeon_img'>
								<img src='".$value['imagem']."'>
								</div>
								</div>
								";

							} else {

								echo "
								<div class='col-xs-12 col-sm-12 col-md-12' >
								<div class='acordeon_descricao' style='color:".$cores['2']."; ' >
								".$value['descricao']."
								</div>
								</div>
								";
							}

							echo "
							</div>
							</div>
							</div>
							</div>
							";

						}
						$n_acord++;
					}

					?>

				</div>
			</div>
			<div class='col-xs-12 col-sm-6 col-md-6' >
				<div class="accordion" >
					<?php

					$n_acord = 1;
					foreach ($conteudo_sessao['lista'] as $key => $value) {

						if($n_acord > $por_coluna){

							echo "
							<div class='card z-depth-0 bordered'>
							<div class='card-header' id='heading_".$value['id']."_".$n_acord."'>
							<h5 class='mb-0'>
							<button class='btn btn-link acordeon_titulo'  type='button' data-toggle='collapse' data-target='#collapse_".$value['id']."_".$n_acord."' aria-expanded='true' aria-controls='collapse_".$value['id']."_".$n_acord."' style='color:".$cores['4']."; background-color:".$cores['3'].";' ><i class='fas fa-chevron-down'></i>
							".$value['titulo']."
							</button>
							</h5>
							</div>
							<div id='collapse_".$value['id']."_".$n_acord."' class='collapse' aria-labelledby='heading_".$value['id']."_".$n_acord."' >
							<div class='card-body' >
							<div class='row'>
							";

							if($value['imagem']){

								echo "
								<div class='col-xs-12 col-sm-8 col-md-8' >
								<div class='acordeon_descricao' style='color:".$cores['2']."; ' >
								".$value['descricao']."
								</div>
								</div>
								<div class='col-xs-12 col-sm-4 col-md-4' >
								<div class='acordeon_img'>
								<img src='".$value['imagem']."'>
								</div>
								</div>
								";

							} else {

								echo "
								<div class='col-xs-12 col-sm-12 col-md-12' >
								<div class='acordeon_descricao' style='color:".$cores['2']."; ' >
								".$value['descricao']."
								</div>
								</div>
								";
							}

							echo "
							</div>
							</div>
							</div>
							</div>
							";

						}
						$n_acord++;
					}

					?>

				</div>
			</div>
		</div>

		<div class="col-sm-7">


		</div>

	</div>          

</section>

