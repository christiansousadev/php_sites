<?php if(!isset($_base['libera_views'])){ header("HTTP/1.0 404 Not Found"); exit; }

// echo "<pre>"; print_r($conteudo_sessao['cores']['detalhes']); echo "</pre>";
$cores = $conteudo_sessao['cores']['lista'];

include('htm_css_rodape_'.$conteudo_sessao['data_rodape']->modelo.'.php');

?>

<?php if($conteudo_sessao['data_rodape']->modelo == 1){ ?>
<style type="text/css">
<!--
.style1 {color: #FFFFFF}
-->
</style>
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
						<i class="fab fa-whatsapp" aria-hidden="true"></i> <?=$_base['texto']['154474571539640']?><br>						
						<i class="fa fa-envelope" aria-hidden="true"></i> <?=$_base['texto']['154474577677620']?>
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
						<a href="https://www.fabricadosite.com" target="_blank" >Copyright © <?=date('Y')?>. Todos os direitos reservados.</a><div>
                        
						<body> 
  <div vw class="enabled">
    <div vw-access-button class="active"></div>
    <div vw-plugin-wrapper>
      <div class="vw-plugin-top-wrapper"></div>
    </div>
  </div>
  <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
  <script>
    new window.VLibras.Widget('https://vlibras.gov.br/app');
  </script>
</body> 
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
						<a href="https://www.fabricadosite.com" target="_blank" >Copyright © <?=date('Y')?>. Todos os direitos reservados.</a>
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

					<div class="logo_rodape" >
					  <div class="footer-grid">
                        <h3 style="font-weight: bold">FORMAS DE PAGAMENTO<br />
                          <br />    
                        <img src="<?=$_base['imagem']['159432484772768']?>"><br />
                        <br />
                        </h3>
				        <div class="footer-grid">
                          <h3 style="font-weight: bold"><i class="fa fa-lock" aria-hidden="true"></i> PAGAMENTO SEGURO </h3>
                         </div>
                         <?=$_base['texto']['154474505229929']?>
			              </div>
				  </div>

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
						<h3 style="font-weight: bold">EXEWEB</h3>
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
						<h3 style="font-weight: bold">CONTATO</h3>
					</div>

					<div class='rodape_contatos'>
						<p><i class="fab fa-whatsapp" aria-hidden="true"></i> 
						    <?=$_base['texto']['154474571539640']?>
						  <br>						
						    <i class="fa fa-envelope" aria-hidden="true"></i> 
						  <?=$_base['texto']['154474577677620']?>
					  </p>
						<p><a href="<?=DOMINIO?>" ><br />
					      <br />
				          <br />
			              <br />
		                  <br />
	                    <img src="<?=$_base['logo']?>" /></a> </p>
					</div>

			  </div>

			</div>
			<div style="width: 100%; padding-top:30px;"></div>
		</div>
		
		<div class="rodape_copy" >
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12" >					
						<a href="https://www.fabricadosite.com" target="_blank" >Copyright © <?=date('Y')?>. Todos os direitos reservados.Todo o conteúdo deste site é de uso exclusivo da <strong></strong>. Proibida reprodução ou utilização a qualquer título, sob as penas da lei.</a>
						<?php
	if(!isset($_SESSION['cookies'])){
		?>
		</div>
				</div>
			</div>
		</div>
		
	</footer>
	<div class="fot-fixd politica_cookies" style="background-color: <?=$cores['17']?>; color:<?=$cores['20']?>; " ><div class="fot-fixd-msg"><?=$_base['texto']['321321']?></div>
	<div class="fot-fixd-box clearfix"><span class="fot-fixd-close" onClick="aceitar_cokies();" style="background-color: <?=$cores['26']?>; color:<?=$cores['23']?>; " ><i class="fas fa-cookie-bite"></i> Permitir Cookies</span></div>
	</div>
		<?php
	}
	?>

<?php } ?>



<?php if($_base['texto']['156630113722300']){ ?>

	
	<div id="ico_whats" style="position: fixed; bottom:10px; right: 10px; z-index: 999999999; cursor: pointer;">
		<img src="<?=LAYOUT?>img/whatsapp.fw.png" width="95px" height="95px">	</div>

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

<div style="padding: 27px;">
				<form action="<?=DOMINIO?><?=$controller?>/iniciar_conversa" method="post" target="_blank" >

					<div ><input type="text" class="form-control" name="nome" placeholder="Nome" ></div> 

					<div style="margin-top: 15px;" ><textarea class="form-control" name="msg" placeholder="Digite sua mensagem" style="height:60px;"></textarea></div>

				  <div style="margin-top: 15px;">
						<button class="whats_janela_bt" >INICIAL ATENDIMENTO</button>
				  </div>

				</form>
		  </div>

</div>

		<?php

	}

	?>
	</div>
<style type="text/css">


	#preloader {
		position:fixed;
		top:0;
		left:0;
		right:0;
		bottom:0;
		background-color:rgba(0,0,0,0.66); /* cor do background que vai ocupar o body */
		z-index:9999999999999999; /* z-index para jogar para frente e sobrepor tudo */
	}
	#preloader .inner {
		position: absolute;
		top: 50%; /* centralizar a parte interna do preload (onde fica a animação)*/
		left: 50%;
		transform: translate(-50%, -50%);  
	}
	.bolas > div {
		display: inline-block;
		background-color: #fff;
		width: 25px;
		height: 25px;
		border-radius: 100%;
		margin: 3px;
		-webkit-animation-fill-mode: both;
		animation-fill-mode: both;
		animation-name: animarBola;
		animation-timing-function: linear;
		animation-iteration-count: infinite;

	}
	.bolas > div:nth-child(1) {
		animation-duration:0.75s ;
		animation-delay: 0;
	}
	.bolas > div:nth-child(2) {
		animation-duration: 0.75s ;
		animation-delay: 0.12s;
	}
	.bolas > div:nth-child(3) {
		animation-duration: 0.75s  ;
		animation-delay: 0.24s;
	}

	@keyframes animarBola {
		0% {
			-webkit-transform: scale(1);
			transform: scale(1);
			opacity: 1;
		}
		16% {
			-webkit-transform: scale(0.1);
			transform: scale(0.1);
			opacity: 0.7;
		}
		33% {
			-webkit-transform: scale(1);
			transform: scale(1);
			opacity: 1; 
		} 
	}
	/* end: Preloader */

</style>





