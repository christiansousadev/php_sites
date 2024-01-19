<?php require_once('_system/bloqueia_view.php'); ?>

<div class="footer">
	<div class="container">


		<div class="row" >
			

			<div class="col-md-3">

				<div class="rodape_facebook">
					<div style="margin-top:10px; text-align: left; "><img src="<?=$_base['logo_rodape']?>" style="max-width: 90%;"></div>
				</div>

			</div>


			<div class="col-md-3">

				<h2 class="rodape_titulo" >SERVIÇOS</h2>

				<?php
				
				foreach ($servicos as $key => $value) {
					
					$endereco = DOMINIO.'servicos/detalhes/codigo/'.$value['codigo'];

					echo "
					<div class='rodape_servicos' >
					<a href='$endereco' >
					<span><img src='".LAYOUT."img/rodape_servicos_ico.png'></span>".$value['titulo']."
					</a>
					</div>
					";
					
				}
				

				?>

			</div>


			<div class="col-md-3">

				<h2 class="rodape_titulo" >CONTATOS</h2>

				<div class="rodape_contatos"><img src="<?=LAYOUT?>img/ico_rodape1.png"><span style="font-size: 18px;"><strong><?=$_base['rodape_contato1']?></strong></span></div>

				<div class="rodape_contatos"><img src="<?=LAYOUT?>img/ico_rodape2.png"><span style="font-size: 14px;"><?=$_base['rodape_contato2']?></span></div>

				<div class="rodape_contatos" style="color:#fff;"><img src="<?=LAYOUT?>img/ico_rodape3.png"><span style="font-size: 13px; display: inline-block;"><?=$_base['rodape_contato3_a']?><br><?=$_base['rodape_contato3_b']?></span></div>

				<div class="rodape_contatos"><img src="<?=LAYOUT?>img/ico_rodape4.png"><span style="font-size: 16px;"><?=$_base['rodape_contato4']?></span></div>

				<div style="padding-bottom:10px;"></div>
			</div>


			<div class="col-md-3">

				<div class="rodape_news_txt">
					Cadastre seu e-mail, receba nossas ofertas e novidades em primeira mão:
				</div>

				<div style="margin-top:10px; margin-bottom: 15px;">
					<div class="input-field">							
						<input type="text" name="news_email" id="news_email" class="form_rodape" placeholder="Digite seu E-mail" />
						<button class="form_rodape_botao" onClick="abre_cadastro_news();" >
							<i class="fa fa-angle-right">&nbsp;</i>
						</button>
						<div style="clear: both;"></div>
					</div>
				</div>


				<div class="rodape_news_txt" >Siga nas redes sociais</div>

				<div style="padding-top:10px; text-align: center;">
					<?php

					foreach ($listaredes as $key => $value) {
						
						if($value['titulo'] != 'facebook'){
							
							echo "
							<div class='redessociais'>
							<a href='".$value['endereco']."' target='_blank' >
							<img src='".$value['imagem']."'>
							</a>
							</div>
							";
							
						}
					}

					?>
					<div style="clear: both;"></div>
				</div>

			</div>

		</div>

		

		<div class="row" >
			
			<div class="col-md-3">

				<div class="rodape_copyright"><?=$_base['rodape_copyright']?></div>

			</div>

			<div class="col-md-7">

				<div class="rodape_menu_div">

					<div class="rodape_menu">
						<ul>
							<?php
							
							foreach ($_base['menu_rodape'] as $key => $value) { 
								
								echo "<li><a href='".$value['destino']."' >".$value['titulo']."</a></li>";
								
							}

							?>
						</ul>
					</div>

					<div class="rodape_menu_contato" onclick="window.location='<?=DOMINIO?>faleconosco';">
						<div><img src="<?=LAYOUT?>img/rodape_contato.png"></div>
					</div>

				</div>

			</div>

			<div class="col-md-2">

				<div class="rodape_copyright"><?=$_base['rodape_desenvolvedor']?></div>

			</div>

		</div>


	</div>


</div> 

<script>
	
	function abre_cadastro_news(){
		var email = $('#news_email').val();
		window.location='<?=DOMINIO?>cadastrar_email/inicial/email/'+email;
	}
	
</script>