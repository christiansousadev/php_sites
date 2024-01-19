<?php if(!isset($_base['libera_views'])){ header("HTTP/1.0 404 Not Found"); exit; }

//echo "<pre>"; print_r($conteudo_sessao['cores']['detalhes']); echo "</pre>";
$cores = $conteudo_sessao['cores']['lista'];
$conteudo_config = $conteudo_sessao['data_grupo'];

?>

<style type="text/css">
	.carousel-indicators li.active{
		background-color:<?=$cores[83]?> !important;
	}
	.control-carousel{
		color:<?=$cores[83]?> !important;
	}
</style>

<section id="section-depoimentos-<?=$conteudo_id?>" class="animate-effect" style="padding-top:50px; padding-bottom:50px; background-color: <?=$cores[30]?>; ">
	<div class="container">

		<?php if($conteudo_config->mostrar_titulo == 1){ ?>

			<div class='row' >
				<div class='col-xs-12 col-sm-12 col-md-12' >
					<div>
						<h2 class="titulo_padrao" style="color:<?=$cores[31]?> !important; border-color:<?=$cores[31]?> !important; " ><?=$conteudo_config->titulo?></h2>
						<div class="titulo_padrao_linha" style="color:<?=$cores[31]?>; " ><i class="fas fa-caret-down"></i></div> 
					</div>
				</div>
			</div>

		<?php } ?>

		<?php if($conteudo_config->descricao){ ?>

			<div class='row' >
				<div class='col-xs-12 col-sm-12 col-md-12' >
					<div style="margin-top:0px; padding-bottom:0px; font-size: 16px; color:<?=$cores[31]?>; text-align: center;">
						<?=$conteudo_config->descricao?>
					</div>
				</div>
			</div>

		<?php } ?>

		<?php

		$lista = $conteudo_sessao['lista'];

		$retorno_ctrl = '';
		$retorno = '';

		$i = 0;
		foreach ($lista as $key => $value) {

			$retorno .= "
			<div class='item";

			if($i == 0){
				$retorno_ctrl .= "<li data-target='#slider-depoimentos' data-slide-to='$i' class='active' ></li>";
				$retorno .= " active";
			} else {
				$retorno_ctrl .= "<li data-target='#slider-depoimentos' data-slide-to='$i' ></li>";
			}

			$retorno .= "
			' >
			<div class='depoimentos_inicial_conteudo' style='color:".$cores[85]."' >".nl2br($value['conteudo'])."</div>

			<div style='text-align:center;'>
			";

			if($value['imagem']){
				$retorno .= "
				<div class='depoimentos_inicial_imagem' ><img src='".$value['imagem']."' ></div>
				";
			}

			$retorno .= "
			<div class='depoimentos_inicial_nome' style='color:".$cores[84]."' >".$value['nome']."</div>
			<div class='depoimentos_inicial_cidade' style='color:".$cores[84]."' >".$value['cidade']."</div>			
			</div>
			</div>
			";

			$i++;
		}

		?>

		<div class='row'>
			<div class='col-md-12'>

				<div id="slider-depoimentos" class="carousel slide" data-ride="carousel">		

					<?php if($i > 1){ ?>
						<ol class="carousel-indicators">
							<?=$retorno_ctrl?>
						</ol>
					<?php } ?>

					<div class="carousel-inner">
						<?=$retorno?>
					</div>
					
					<a href="#slider-depoimentos" class="left control-carousel hidden-xs" data-slide="prev">
						<i class="fa fa-angle-left"></i>
					</a>
					<a href="#slider-depoimentos" class="right control-carousel hidden-xs" data-slide="next">
						<i class="fa fa-angle-right"></i>
					</a>
					
					<div style="position: absolute; bottom:-20px; width:100%; text-align:center;" >
						<div class="btn btn-default add-to-cart hvr-float-shadow" style="width: 230px; background-color: <?=$cores[32]?>; color:<?=$cores[33]?>;" onClick="modal('<?=DOMINIO?><?=$controller?>/criar_depoimento', 'Enviar depoimento');" >Envie seu depoimento</div>
					</div>
					
				</div>

			</div>
		</div>


	</div>
</section>