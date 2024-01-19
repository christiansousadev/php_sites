<?php if(!isset($_base['libera_views'])){ header("HTTP/1.0 404 Not Found"); exit; }

// echo "<pre>"; print_r($conteudo_sessao['cores']['detalhes']); echo "</pre>";
$cores = $conteudo_sessao['cores']['lista'];

include('htm_css_rodape_'.$conteudo_sessao['data_rodape']->modelo.'.php');

if($conteudo_sessao['data_rodape']->imagem_fundo){
	$fundo_rodape = PASTA_CLIENTE.'img_rodape/'.$conteudo_sessao['data_rodape']->imagem_fundo;
	echo "
	<style>
	.rodape{
		background-image:url(".$fundo_rodape.");
		background-size: cover; background-position: bottom; background-repeat: no-repeat;
	}
	</style>
	";
}

if($conteudo_sessao['data_rodape']->font_family){ 
	echo "
	<style>
	.rodape{
		font-family: ".$conteudo_sessao['data_rodape']->font_family." !important;
	}
	</style>
	";
}

$botao_aviso = $conteudo_sessao['botao_aviso'];

?>

<?php if($conteudo_sessao['data_rodape']->modelo == 1){ ?>

	<footer class="rodape"  >
		<div class="container">
			<div class="row">

				<div class="col-xs-12 col-sm-8 col-md-8" >
					<div class="footer-grid">
						<h3 style="font-weight: bold">ACESSO RÁPIDO</h3>
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

						<span style="font-weight: bold;"><?=$conteudo_sessao['data_rodape']->endereco1?></span>
						<span style="font-weight: bold;"><?=$conteudo_sessao['data_rodape']->endereco2?></span>

						<span style="margin-top:10px;"><?=$conteudo_sessao['data_rodape']->email?></span>
						<span><?=$conteudo_sessao['data_rodape']->fone1?></span>
						<span><?=$conteudo_sessao['data_rodape']->fone2?></span>

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
						<a href="https://www.fabricadosite.com" target="_blank" ><?=$conteudo_sessao['data_rodape']->copy?></a>
					</div>
				</div>
			</div>
		</div>

	</footer>

	<?php
	if( (!isset($_SESSION['cookies'])) AND ($conteudo_sessao['data_rodape']->mostrar_aviso == 1) ){
		?>
		<div class="fot-fixd politica_cookies" style="background-color: <?=$cores['18']?>; color:<?=$cores['21']?>; " ><div class="fot-fixd-msg"><?=$conteudo_sessao['data_rodape']->aviso_conteudo?></div><div class="fot-fixd-box clearfix"><?=$botao_aviso?></div></div>
		<?php
	}
	?>

<?php } ?>


<?php if($conteudo_sessao['data_rodape']->modelo == 2){ ?>


	<footer class="rodape" >
		<div class="container">
			<div class="row">

				<div class="col-xs-12 col-sm-2 col-md-2">
					
					<div style="margin-top:15px; margin-bottom: 20px;"><img src="<?=$_base['imagem']['159432484772768']?>" style="width:70%;"></div> 

				</div>

				<div class="col-xs-12 col-sm-3 col-md-3">
					<div class="footer-grid">
						<h3 style="font-weight: bold; ">Fale Conosco</h3>
					</div>

					<div class='rodape_contatos' style="font-size: 16px; line-height: 30px; ">
						<span style="font-weight: bold;"><?=$conteudo_sessao['data_rodape']->endereco1?></span>
						<span style="font-weight: bold;"><?=$conteudo_sessao['data_rodape']->endereco2?></span>

						<span style="margin-top:10px;"><?=$conteudo_sessao['data_rodape']->email?></span>
						<span><?=$conteudo_sessao['data_rodape']->fone1?></span>
						<span><?=$conteudo_sessao['data_rodape']->fone2?></span>
					</div>


				</div>

				<div class="col-xs-12 col-sm-2 col-md-3" >
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

				<div class="col-xs-12 col-sm-4 col-md-3" >
					<div style="text-align: center; margin-top: 20px; ">
						<?php
						$facebook = "";
						foreach ($_base['redessociais'] as $key => $value) {
							if( ($value['titulo'] == 'Facebook') OR ($value['titulo'] == 'facebook') ){
								$facebook = $value['endereco'];
							}
						}
						if($facebook){
							?>
							<iframe src="//www.facebook.com/plugins/likebox.php?href=<?=$facebook?>/&amp;width=350&amp;height=160&amp;colorscheme=light&amp;show_faces=true&amp;header=false&amp;stream=false&amp;show_border=false" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:330px; height:160px;" allowTransparency="true"></iframe>
						<?php } ?>
					</div>
				</div>

			</div>
			<div style="width: 100%; padding-top:30px;"></div>
		</div>

		<div class="rodape_copy" >
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12" >					
						<a href="https://www.fabricadosite.com" target="_blank" ><?=$conteudo_sessao['data_rodape']->copy?></a>
					</div>
				</div>
			</div>
		</div>

	</footer>

	<?php
	if( (!isset($_SESSION['cookies'])) AND ($conteudo_sessao['data_rodape']->mostrar_aviso == 1) ){
		?>
		<div class="fot-fixd politica_cookies" style="background-color: <?=$cores['19']?>; color:<?=$cores['22']?>; " ><div class="fot-fixd-msg"><?=$conteudo_sessao['data_rodape']->aviso_conteudo?></div><div class="fot-fixd-box clearfix"><?=$botao_aviso?></div></div>
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
						<h3 style="font-weight: bold">ACESSO RÁPIDO</h3>
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
						<h3 style="font-weight: bold">Fale Conosco</h3>
					</div>

					<div class='rodape_contatos'>

						<span style="font-weight: bold;"><?=$conteudo_sessao['data_rodape']->endereco1?></span>
						<span style="font-weight: bold;"><?=$conteudo_sessao['data_rodape']->endereco2?></span>

						<span style="margin-top:10px;"><?=$conteudo_sessao['data_rodape']->email?></span>
						<span><?=$conteudo_sessao['data_rodape']->fone1?></span>
						<span><?=$conteudo_sessao['data_rodape']->fone2?></span>
						
					</div>

				</div>

			</div>
			<div style="width: 100%; padding-top:30px;"></div>
		</div>

		<div class="rodape_copy" >
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12" >					
						<a href="https://www.fabricadosite.com" target="_blank" ><?=$conteudo_sessao['data_rodape']->copy?></a>
					</div>
				</div>
			</div>
		</div>

	</footer>

	<?php
	if( (!isset($_SESSION['cookies'])) AND ($conteudo_sessao['data_rodape']->mostrar_aviso == 1) ){
		?>
		<div class="fot-fixd politica_cookies" style="background-color: <?=$cores['20']?>; color:<?=$cores['23']?>; " ><div class="fot-fixd-msg"><?=$conteudo_sessao['data_rodape']->aviso_conteudo?></div><div class="fot-fixd-box clearfix"><?=$botao_aviso?></div></div>
		<?php
	}
	?>

<?php } ?>




<?php if($conteudo_sessao['data_rodape']->modelo == 4){ ?>

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
						
						<div class="row">
							<div class="col-xs-12 col-sm-5 col-md-5">
								
								<div class="rodape_contatos">
									<div><i class="fab fa-whatsapp"></i> <?=$conteudo_sessao['data_rodape']->fone1?></div>
									<div><?=$conteudo_sessao['data_rodape']->fone2?></div>
									<div><?=$conteudo_sessao['data_rodape']->email?></div>
								</div>
								
								<div style="margin-top: 20px;">
									<ul>
										<li><a href='#' onclick="modal('<?=DOMINIO?><?=$controller?>/ligamospravc', 'Nós Ligamos pra Você');" >Nós Ligamos pra Você</a></li>
										<li><a href='<?=DOMINIO?><?=$controller?>/imoveis_favoritos' >Imóveis Favoritos</a></li>
									</ul>
								</div>
								
							</div>
							<div class="col-xs-12 col-sm-7 col-md-7">
								<ul>
									<?php
									//lista colunas
									$n = 1;
									foreach ($conteudo_sessao['menu'] as $key => $value) { 

										echo "<li><a href='".$value['destino']."' >".$value['titulo']."</a></li>";

										$n++;
									}
									?>
								</ul>
							</div>
						</div>

						<div class="rodape_copy" >
							<?=$conteudo_sessao['data_rodape']->copy?>
						</div>

					</div>
					<div style="clear: both;"></div>
				</div>

				<div class="col-xs-12 col-sm-6 col-md-3">
					
					

				</div> 

			</div> 
		</div>

	</footer>

	<?php
	if( (!isset($_SESSION['cookies'])) AND ($conteudo_sessao['data_rodape']->mostrar_aviso == 1) ){
		?>
		<div class="fot-fixd politica_cookies" style="background-color: <?=$cores['25']?>; color:<?=$cores['24']?>; " ><div class="fot-fixd-msg"><?=$conteudo_sessao['data_rodape']->aviso_conteudo?></div><div class="fot-fixd-box clearfix"><?=$botao_aviso?></div></div>
		<?php
	}
	?>

<?php } ?>


<script type="text/javascript">
	function aceitar_cokies(){
		$.post('<?=DOMINIO?>index/cookies_aceitar', {token: '<?=time()?>'},function(data){
			if(data){
				$('.politica_cookies').hide();
			}
		});
	}
</script>


<?php if($conteudo_sessao['data_rodape']->mostrar_whats == 1){ ?>

	
	<!-- START Widget WhastApp Fabrica do Site -->
<a href="https://wa.me/55<?=$conteudo_sessao['data_rodape']->whatsapp?>" class="bt-whatsApp" target="_blank" style="right:25px; position:fixed;width:60px;height:60px;bottom:40px;z-index:100;">
<img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/PjwhRE9DVFlQRSBzdmcgIFBVQkxJQyAnLS8vVzNDLy9EVEQgU1ZHIDEuMS8vRU4nICAnaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkJz48c3ZnIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDUxMiA1MTIiIGhlaWdodD0iNTEycHgiIGlkPSJMYXllcl8xIiB2ZXJzaW9uPSIxLjEiIHZpZXdCb3g9IjAgMCA1MTIgNTEyIiB3aWR0aD0iNTEycHgiIHhtbDpzcGFjZT0icHJlc2VydmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiPjxnPjxnPjxwYXRoIGNsaXAtcnVsZT0iZXZlbm9kZCIgZD0iTTQxMS4xNDksODguMjc1Yy0wLjAwNSwwLTAuMDA1LDAtMC4wMDUsMCAgICAgYy0zNy42MTMtMzcuNjA4LTg5LjA1NS01OC4zMjQtMTQ0LjgzMy01OC4zMTRjLTYzLjU4MywwLjAwNS0xMjcuMjI0LDI3LjE5NS0xNzQuNjEyLDc0LjYwMiAgICAgQzQ0LjI5MiwxNTEuOTYsMTcuMDk3LDIxNS42MDgsMTcuMDkzLDI3OS4xODFjMCw1NS43ODYsMjAuNzIsMTA3LjIxNiw1OC4zMzksMTQ0LjgyM2MzNy42MTcsMzcuNjIzLDg5LjA1Myw1OC4zNCwxNDQuODMzLDU4LjMzICAgICBjNjMuNTY4LDAsMTI3LjIxMS0yNy4xOSwxNzQuNjAzLTc0LjYwMkM0ODcuNDIyLDMxNS4xODQsNDk0LjcyNCwxNzEuODc1LDQxMS4xNDksODguMjc1eiIgZmlsbD0iIzU0Qjc1QSIgZmlsbC1ydWxlPSJldmVub2RkIi8+PHBhdGggZD0iTTI0OC41ODUsMTA5LjY4MmMtODMuODE1LDAtMTUxLjc2OSw2MS44OTYtMTUxLjc2OSwxMzguMjVjMCwzMy44MDcsMTMuMzM5LDY0Ljc2NiwzNS40NjUsODguNzg1ICAgICBsLTE3LjEzMyw2Ni45NjFsODguOTI0LTIzLjU1NWMxNC4wNzIsMy45MzIsMjkuMDIsNi4wNTYsNDQuNTEzLDYuMDU2YzgzLjgxMywwLDE1MS43NjgtNjEuODk0LDE1MS43NjgtMTM4LjI0NyAgICAgUzMzMi4zOTgsMTA5LjY4MiwyNDguNTg1LDEwOS42ODJ6IE0yNDAuODU1LDM1NS40NTljLTguOTE4LDAtMTcuNTY3LTEuMTA5LTI1LjgyLTMuMTk0Yy0zLjU3NC0wLjkwMS03LjA2OC0yLjAwNC0xMC40ODItMy4yNjUgICAgIGwtMzYuMzQ5LDE2LjE4bC0yMC4zOTksOS4wODRsOC44NjctMTYuMzQybDE1LjM0Ni0yOC4yODVjLTYuNTYzLTUuNzY3LTEyLjM1Mi0xMi4zNDgtMTcuMjMxLTE5LjU3NiAgICAgYy0xMC43NTMtMTUuOTM5LTE3LjAzMS0zNS4wMzMtMTcuMDMxLTU1LjU2OGMwLTU1Ljc2Miw0Ni4xNjEtMTAwLjk2NywxMDMuMTAxLTEwMC45NjdjNTYuOTMsMCwxMDMuMDg2LDQ1LjIwNSwxMDMuMDg2LDEwMC45NjcgICAgIEMzNDMuOTQxLDMxMC4yNTQsMjk3Ljc4NSwzNTUuNDU5LDI0MC44NTUsMzU1LjQ1OXoiIGZpbGw9IiNGRkZGRkYiLz48L2c+PC9nPjwvc3ZnPg==" alt="" width="60px">
</a>
<span id="alertWapp" style="right:30px; visibility: hidden; position:fixed;	width:17px;	height:17px;bottom:90px; background:red;z-index:101; font-size:11px;color:#fff;text-align:center;border-radius: 50px; font-weight:bold;line-height: normal; "> 1 </span>
<div id="msg1" style="right: 90px; visibility: visible; background: #1EBC59; color: #fff; position: fixed; width: 200px; bottom: 52px; text-align: center; font-size: 13px; line-height: 31px; height: 32px; border-radius: 100px; z-index: 100; ">Atendimento WhatsApp</div>
<script type="text/javascript">function showIt2() {document.getElementById("msg1").style.visibility = "visible";}    setTimeout("showIt2()", 5000); function hiddenIt() {document.getElementById("msg1").style.visibility = "hidden";}setTimeout("hiddenIt()", 15000); function showIt3() {document.getElementById("msg1").style.visibility = "visible";} setTimeout("showIt3()", 25000);  msg1.onclick = function() {document.getElementById('msg1').style.visibility = "hidden"; };function alertW() { document.getElementById("alertWapp").style.visibility = "visible";	} setTimeout("alertW()", 15000); </script>
<!-- END Widget WhastApp -->



	<?php } ?>