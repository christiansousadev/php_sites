<?php require_once('_system/bloqueia_view.php'); ?>

<div class="footer">
	<div class="container"> 
		<div class="row">


			<div class="col-xs-12 col-sm-4">

				<div class="logo_rodape">
					<img src="<?=$_base['imagem']['152269870043546']?>" >
				</div>

				<div class="logo_rodape_texto" ><?=$_base['rodape_texto']?></div>

			</div>


			<div class="col-xs-12 col-sm-1"></div>

			<div class="col-xs-12 col-sm-3">

				<h3>Acesso Rápido</h3>

				<ul class="rodape_menu" >
					<?php

					foreach ($_base['menu_rodape'] as $key => $value) { 


						$array = explode('#', $value['destino']);
						$numero = count($array);
						$end_final = '#'.end($array);
						if($numero > 1){ 
							$endereco = DOMINIO."index/".$end_final;
						} else {
							$endereco = $value['destino'];
						}

						echo "<li><a href='".$endereco."' >".$value['titulo']."</a></li>";

					}

					?>
					<div style="clear: both;"></div>
				</ul>

				<div style="padding-bottom:30px; padding-top:10px;">
					<?php
					$listaredes = $_base['listaredes'];
					foreach ($listaredes as $key => $value) {

						echo "
						<div class='redessociais_rodape'>
						<a href='".$value['endereco']."' target='_blank' >
						<img src='".$value['imagem']."'>
						</a>
						</div>
						";

					}

					?>
				</div>

			</div>


			<div class="col-xs-12 col-sm-4">

				<h3>Contatos</h3>

				<div>
					<div style="float:left; width:50px; padding-top: 3px; text-align: center; font-size:40px; margin-right:15px;"><i class="fas fa-mobile-alt"></i></div>
					<div style="float: left;">
						<div class="rodape_textos" style="margin-top:0px; font-weight: bold;"><?=$_base['rodape_fone1']?></div>
						<div class="rodape_textos" style="padding-top:5px; font-weight: bold;"><?=$_base['rodape_fone2']?></div>
					</div>
					<div style="clear:both;" ></div>
				</div>

				<div style="margin-top:30px;">
					<div style="float:left; width:50px; text-align: center; font-size:40px; margin-right:15px;"><i class="far fa-envelope"></i></div>
					<div style="float: left;">
						<div class="rodape_textos" style="padding-top:0px; font-weight: bold;"><?=$_base['rodape_email1']?></div>
						<div class="rodape_textos" style="padding-top:0px;"><?=$_base['rodape_email2']?></div>
					</div>
					<div style="clear:both;" ></div>
				</div>					 

				<div style="margin-top:30px;">
					<div style="float:left; width:50px; text-align: center; font-size:35px; margin-right:15px;"><i class="fas fa-map-marked-alt"></i></div>
					<div style="float: left;">
						<div class="rodape_textos" style="margin-top:0px;"><?=$_base['rodape_endereco1']?></div> 
						<div class="rodape_textos" style="margin-top:0px;"><?=$_base['rodape_endereco2']?></div> 
					</div>
					<div style="clear:both;" ></div>
				</div>

			</div>

		</div>

	</div>

</div>

<div class="footer_bottom"><?=$_base['copy']?></div>