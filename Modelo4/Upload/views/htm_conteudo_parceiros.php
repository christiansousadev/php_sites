<?php if(!isset($_base['libera_views'])){ header("HTTP/1.0 404 Not Found"); exit; }

// echo "<pre>"; print_r($conteudo_sessao['cores']['detalhes']); echo "</pre>";
$cores = $conteudo_sessao['cores']['lista'];
$conteudo_config = $conteudo_sessao['data_grupo'];

?>

<style type="text/css">
	
	.bx-wrapper .bx-pager.bx-default-pager a:hover, .bx-wrapper .bx-pager.bx-default-pager a.active{
		background-color: <?=$cores[43]?> !important;
	}

</style>
<section id="section-parceiros-<?=$conteudo_id?>" class="" style="padding-top:-15px; padding-bottom:-15px; background-color: <?=$cores[42]?>; ">
	<div class="container">

		<?php if($conteudo_config->mostrar_titulo == 1){ ?>

			<div class='row' >
				<div class='col-xs-12 col-sm-12 col-md-12' >
					<div>
						<h2 class="titulo_padrao" style="color:<?=$cores[43]?> !important; border-color:<?=$cores[43]?> !important; " ><?=$conteudo_config->titulo?></h2>
						<div class="titulo_padrao_linha" style="color:<?=$cores[43]?>; " ><i class="fas fa-caret-down"></i></div> 
					</div>
				</div>
			</div>

		<?php } ?>

		<?php if($conteudo_config->descricao){ ?>

			<div class='row' >
				<div class='col-xs-12 col-sm-12 col-md-12' >
					<div style="margin-top:30px; padding-bottom: 40px; font-size: 16px; color:<?=$cores[43]?>; text-align: center;">
						<?=$conteudo_config->descricao?>
					</div>
				</div>
			</div>

		<?php } ?>

		<?php

		$parceiros = $conteudo_sessao['lista'];

		?>

		<ul id="parceiros-<?=$conteudo_id?>" >
			<?php

			$i = 1;
			foreach ($parceiros as $key => $value) {

				$destino = $value['endereco'];

				if($value['imagem']){
					$imagem = $value['imagem'];
				} else {
					$imagem = LAYOUT."img/semimagem.png";
				}

				echo "
				<li class='parceiros_item' >
				<div class='parceiros_img_div'>
				<a class='parceiros_img' href='".$destino."' target='_blank' >
				<img src='".$value['imagem']."' >
				</a>
				</div>
				</li>
				";

				$i++;
			} 

			?>
		</ul>

	</div>
</section>