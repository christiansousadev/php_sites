<?php if(!isset($_base['libera_views'])){ header("HTTP/1.0 404 Not Found"); exit; }

// echo "<pre>"; print_r($conteudo_sessao['cores']['detalhes']); echo "</pre>";
$cores = $conteudo_sessao['cores']['lista'];

include('htm_css_rodape_'.$conteudo_sessao['data_rodape']->modelo.'.php');

?>

<?php if($conteudo_sessao['data_rodape']->modelo == 1){ ?>

	<footer class="rodape" >
		<div class="container">
			<div class="row">			 

				<div class="col-xs-12 col-sm-8 col-md-8" >
					<div class="footer-grid">
						<h3 style="font-weight: bold">INSTITUCIONAL</h3>
						<div class="row">
							<div class="col-xs-12 col-sm-6 col-md-6">
								<ul>
									<?php

								//calcula quantos itens por coluna
									$itens = count($conteudo_sessao['menu']);
									$porcoluna = round($itens/2);

								//lista colunas
									$n = 1;
									foreach ($conteudo_sessao['menu'] as $key => $value) {
										if($n <= $porcoluna){

											echo "<li><a href='".$value['destino']."' >".$value['titulo']."</a></li>";

										}
										$n++;
									}
									?>
								</ul>				  
							</div>
							<div class="col-xs-12 col-sm-6 col-md-6">
								<ul>
									<?php
									//lista colunas
									$n = 1;
									foreach ($conteudo_sessao['menu'] as $key => $value) {
										if($n > $porcoluna){

											echo "<li><a href='".$value['destino']."' >".$value['titulo']."</a></li>";

										}
										$n++;
									}
									?>
								</ul>
							</div>
						</div>
					</div>
					<div style="clear: both;"></div>
				</div>

				<div class="col-xs-12 col-sm-1 col-md-1" >
				</div>

				<div class="col-xs-12 col-sm-3 col-md-3">
					<div class="footer-grid">
						<h3 style="font-weight: bold">Fale Conosco</h3>
					</div>

					<div class='rodape_contatos'>
						<?=$_base['texto']['154474571539640']?><br>						
						<?=$_base['texto']['154474577677620']?>
					</div>

					<div>
						<?php
						$listaredes = $_base['redessociais'];
						foreach ($listaredes as $key => $value) {

							echo "
							<div class='redessociais hvr-float-shadow'>
							<a href='".$value['endereco']."' target='_blank' >
							<img src='".$value['imagem']."'>
							</a>
							</div>
							";

						}

						?>
						<div style="clear: both;"></div>
					</div>

				</div>

			</div>
			<div style="width: 100%; padding-top:30px;"></div>
		</div>

		<div class="rodape_copy" >
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12" >					
						<a href="https://www.mrcomerciodigital.com.br" target="_blank" >Copyright © <?=date('Y')?>. Todos os direitos reservados. DESENVOLVIDOR POR: MR COMERCIO DIGITAL</a>
					</div>
				</div>
			</div>
		</div>

	</footer>

	<?php
	if(!isset($_SESSION['cookies'])){
		?>
		<div class="fot-fixd politica_cookies" style="background-color: <?=$cores['15']?>; color:<?=$cores['18']?>; " ><div class="fot-fixd-msg"><?=$_base['texto']['321321']?></div><div class="fot-fixd-box clearfix"><span class="fot-fixd-close" onClick="aceitar_cokies();" style="background-color: <?=$cores['24']?>; color:<?=$cores['21']?>; " >Permitir cookies</span></div></div>
		<?php
	}
	?>

<?php } ?>


<?php if($conteudo_sessao['data_rodape']->modelo == 2){ ?>


	<footer class="rodape" >
		<div class="container">
			<div class="row">

				<div class="col-xs-12 col-sm-4 col-md-2">
					
					<div style="margin-top:15px; margin-bottom: 20px;"><img src="<?=$_base['imagem']['159432484772768']?>" style="width:70%;"></div> 

				</div>

				<div class="col-xs-12 col-sm-4 col-md-3">
					<div class="footer-grid">
						<h3 style="font-weight: bold; ">Fale Conosco</h3>
					</div>

					<div class='rodape_contatos' style="font-size: 16px; line-height: 30px; ">
						<?=$_base['texto']['154474571539640']?><br>						
						<?=$_base['texto']['154474577677620']?>
					</div>


				</div>

				<div class="col-xs-12 col-sm-4 col-md-6" >
					<div class="footer-grid">
						<h3 style="font-weight: bold">ACESSO RÁPIDO</h3>
						<div class="row">
							<div class="col-xs-12 col-sm-6 col-md-6">
								<ul>
									<?php

									foreach ($conteudo_sessao['menu'] as $key => $value) {

										echo "<li><a href='".$value['destino']."' >".$value['titulo']."</a></li>";


									}
									?>
								</ul>				  
							</div> 
						</div>
					</div>
					<div style="clear: both;"></div>
				</div>

				<div class="col-xs-12 col-sm-4 col-md-6" >


				</div>


			</div>
			<div style="width: 100%; padding-top:30px;"></div>
		</div>

		<div class="rodape_copy" >
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12" >					
						<a href="https://www.mrcomerciodigital.com.br" target="_blank" >Copyright © <?=date('Y')?>. Todos os direitos reservados. DESENVOLVIDO POR: MR COMERCIO DIGITAL</a>
					</div>
				</div>
			</div>
		</div>

	</footer>

	<?php
	if(!isset($_SESSION['cookies'])){
		?>
		<div class="fot-fixd politica_cookies" style="background-color: <?=$cores['16']?>; color:<?=$cores['19']?>; " ><div class="fot-fixd-msg"><?=$_base['texto']['321321']?></div><div class="fot-fixd-box clearfix"><span class="fot-fixd-close" onClick="aceitar_cokies();" style="background-color: <?=$cores['25']?>; color:<?=$cores['22']?>; " >Permitir cookies</span></div></div>
		<?php
	}
	?>

<?php } ?>



<?php if($conteudo_sessao['data_rodape']->modelo == 3){ ?>

	<footer class="rodape" >
		<div class="container">
			<div class="row">

				<div class="col-xs-12 col-sm-12 col-md-3" >

					<div class="logo_rodape" ><img src="<?=$_base['imagem']['159432484772768']?>"></div>

					<div style="margin-top: 20px;">
						<?php
						$listaredes = $_base['redessociais'];
						foreach ($listaredes as $key => $value) {

							echo "
							<div class='redessociais hvr-float-shadow'>
							<a href='".$value['endereco']."' target='_blank' >
							<img src='".$value['imagem']."'>
							</a>
							</div>
							";

						}

						?>
						<div style="clear: both;"></div>
					</div>

				</div>

				<div class="col-xs-12 col-sm-12 col-md-6" >
					<div class="footer-grid">
						<h3 style="font-weight: bold"><i class="fa fa-arrow-down" aria-hidden="true"></i>
 O PROVEDOR</h3>
						<div class="row">
							<div class="col-xs-12 col-sm-6 col-md-6">
								<ul>
									<?php

								//calcula quantos itens por coluna
									$itens = count($conteudo_sessao['menu']);
									$porcoluna = round($itens/2);

								//lista colunas
									$n = 1;
									foreach ($conteudo_sessao['menu'] as $key => $value) {
										if($n <= $porcoluna){

											echo "<li><a href='".$value['destino']."' ><i class='fas fa-caret-right'></i> ".$value['titulo']."</a></li>";

										}
										$n++;
									}
									?>
								</ul>				  
							</div>
							<div class="col-xs-12 col-sm-6 col-md-6">
								<ul>
									<?php
									//lista colunas
									$n = 1;
									foreach ($conteudo_sessao['menu'] as $key => $value) {
										if($n > $porcoluna){

											echo "<li><a href='".$value['destino']."' ><i class='fas fa-caret-right'></i> ".$value['titulo']."</a></li>";

										}
										$n++;
									}
									?>
								</ul>
							</div>
						</div>
					</div>
					<div style="clear: both;"></div>
				</div>

				<div class="col-xs-12 col-sm-6 col-md-3">
					
					<div class="footer-grid">
						<h3 style="font-weight: bold"><i class="fa fa-arrow-down" aria-hidden="true"></i>
 ATENDIMENTO</h3>
					</div>

					<div class='rodape_contatos'>
						<i class="fab fa-whatsapp" aria-hidden="true"></i> <?=$_base['texto']['154474571539640']?><br>						
						<i class="fa fa-envelope" aria-hidden="true"></i> <?=$_base['texto']['154474577677620']?>
                        <br />
<i class="fas fa-map-marker" aria-hidden="true"></i>  <?=$_base['texto']['154474505229929']?>
					</div>

				</div>

			</div>
			<div style="width: 100%; padding-top:30px;"></div>
		</div>
		
		<div class="rodape_copy" >
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12" >					
						<a href="https://www.fabricadosite.com" target="_blank" >Copyright © <?=date('Y')?>. Todos os direitos reservados.Todo o conteúdo deste site é de uso exclusivo. Proibida reprodução ou utilização a qualquer título, sob as penas da lei.</a>
						<?php
	if(!isset($_SESSION['cookies'])){
		?>
		</div>
				</div>
			</div>
		</div>
		
	</footer>
	<div class="fot-fixd politica_cookies" style="background-color: <?=$cores['17']?>; color:<?=$cores['20']?>; " ><div class="fot-fixd-msg"><?=$_base['texto']['321321']?></div>
	<div class="fot-fixd-box clearfix"><span class="fot-fixd-close" onClick="aceitar_cokies();" style="background-color: <?=$cores['26']?>; color:<?=$cores['23']?>; " >PERMITIR COOKIES</span></div>
	</div>
		<?php
	}
	?>

<?php } ?>



<?php if($_base['texto']['156630113722300']){ ?>

	<div id="ico_whats" style="position: fixed; bottom:20px; right: 20px; z-index: 999999; cursor: pointer;">
		<img src="<?=LAYOUT?>img/whatsapp.png" width="70px" height="70px" >	</div>

		<div id="whats_janela" >

			<div class="whats_janela_top">
			  <table width="334" height="27" border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td width="63"><span style="margin-top:10px; margin-bottom: 20px;"><img src="<?=LAYOUT?>img/perfilwhats.fw.png" width="61" height="61" style="width:100%;" /></span></td>
                  <td width="281"><div align="left">Atendimento Via <strong>WhatsApp <i class="fab fa-whatsapp" aria-hidden="true"></i></strong><br />
                    Olá!👋Como Podemos Ajudar? Vamos conversar 🤝</div></td>
                </tr>
              </table>
			</div>

			<div style="padding: 20px;">
				<form action="<?=DOMINIO?><?=$controller?>/iniciar_conversa" method="post" target="_blank" >

					<div ><input type="text" class="form-control" name="nome" placeholder="Nome" ></div> 

					<div style="margin-top: 15px;" ><textarea class="form-control" name="msg" placeholder="Digite sua mensagem" style="height:60px;"></textarea></div>

					<div style="margin-top: 15px;" >
						<button class="whats_janela_bt" >INICIAR CONVERSA</button>
					</div>

				</form>
			</div>

		</div>

		<?php

	}

	?>



