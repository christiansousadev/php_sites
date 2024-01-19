<?php if(!isset($_base['libera_views'])){ header("HTTP/1.0 404 Not Found"); exit; }

//echo "<pre>"; print_r($conteudo_sessao['cores']['detalhes']); echo "</pre>";
$cores = $conteudo_sessao['cores']['lista'];
$banners_topo = $conteudo_sessao['banners_topo'];

include('htm_css_topo_'.$conteudo_sessao['data_topo']->modelo.'.php');

?>

<?php if($conteudo_sessao['data_topo']->modelo == 1){ ?>

	<header id="header" >
		<div id="topo" class="header-middle" >
			<div class="container" >


				<div class="row" >

					<div class="col-xs-12 col-sm-4 col-md-3">
						<div class="logo">
							<a href="<?=DOMINIO?>" ><img src="<?=$_base['logo']?>" ></a>
						</div>
					</div>
					
					<div class="col-xs-12 col-sm-8 col-md-9">
						<div class="row">

							<div class="col-xs-12 col-sm-4 col-md-4"></div>

							<div class="col-xs-12 col-sm-8 col-md-8">
								<div class="busca_div">
									<form action="<?=DOMINIO?><?=$controller?>/buscar" method="post" > 
										<div class="input-group">
											<input name='busca' type="text" class="form-control busca_input" placeholder="O que você está procurando?" />
											<span class="input-group-btn">
												<button class="btn busca_botao" type="submit" >
													<i class="fas fa-search"></i>
												</button>
											</span>
										</div> 
									</form>
								</div>
							</div>

						</div>


						<div class="row">

							<div class="col-xs-12 col-sm-4 col-md-3" >

								<div class="div_botoes_topo">

									<a class="botao_conta_topo" href="<?=DOMINIO?>" >
										<i class="fas fa-home"></i>
										<span>HOME</span>
									</a>
									<a class="botao_conta_topo" href="<?=DOMINIO?>faleconosco" >
										<i class="fas fa-phone-alt"></i>
										<span>ATENDIMENTO</span>
									</a>									
									<div style="clear: both;"></div>

								</div>
							</div>
							<div class="col-xs-12 col-sm-8 col-md-9">
								<div class="topo_redes_triangulo"></div>
								<div class="topo_redes">

									<div class="fone_topo" >
										<i class="fas fa-phone"></i> <?=$_base['texto']['154472085623402']?>
									</div>

									<div class="whats_topo" >
										<i class="fa fa-envelope"></i> <?=$_base['texto']['159604129420990']?>
									</div>
									<div class="redes_topo">
										<?php

										foreach ($_base['redessociais'] as $key => $value) {

											echo "
											<a class='redes_topo_item' href='".$value['endereco']."' target='_blank' ><img src='".$value['imagem']."' ></a>
											";

										}

										?>
									</div>
									<div style="clear: both;"></div>

								</div>
								<div style="clear:both; "></div>
							</div>

						</div>

					</div>
				</div>

			</div>
		</div>


		<div class="header-bottom" >
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-'12' col-md-12">

						<div class="navbar-header" >
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse" >
								MENU <i class="fa fa-bars" aria-hidden="true"></i>
							</button>
						</div>

						<div class="mainmenu">
							<ul class="nav navbar-nav collapse navbar-collapse">
								
								<?php
								
								function menu($array, $controller, $url_pagina = null){
									
									foreach ($array as $key => $value) {
										
										if($value['controller'] == $controller){
											if($value['controller'] == 'conteudo'){
												if($value['url'] == $url_pagina){
													$active = " class='active' ";
												} else {
													$active = "";
												}
											} else {
												$active = " class='active' ";
											}
										} else {
											$active = "";
										}
										
										echo "<li><a href='".$value['destino']."' ".$active." >";
										
										if($value['imagem']){
											echo "<span class='mainmenu_img' ><img src='".PASTA_CLIENTE."imagens/".$value['imagem']."' ></span>";
										}

										echo "<span class='mainmenu_txt' >".$value['titulo']."</span></a>";

										if(count($value['submenu']) != 0){
											
											echo "<ul>";
											echo "
											<div class='submenu_esq' >
											";

											menu($value['submenu'], $controller, $url_pagina);								 

											echo "</div>";											 

											echo "<div style='clear:both' ></div>";
											echo "</ul>";
										}

										echo "</li>";
									}
								}

								if($controller == 'conteudo'){
									menu($conteudo_sessao['menu'], $controller, 'conteudo/pag/id/'.$pagina['url']);
								} else {
									menu($conteudo_sessao['menu'], $controller, '');
								}

								?>
							</ul>
						</div>

					</div>

				</div>
			</div>
		</div>
	</header>

<?php } ?>


<?php if($conteudo_sessao['data_topo']->modelo == 2){ ?>

	<header id="header" class="topo2">

		<div id="topo" class="header-top topo2_superior" >
			<div class="container" >
				<div class="row" >
					<div class="col-xs-12 col-sm-6 col-md-6">
						<div class="topo2_superior_esq" >
							<span><i class="fa fa-phone-square" aria-hidden="true"></i>
 <?=$_base['texto']['154472085623402']?></span>
							<span>|</span>
							<span><i class="fab fa-whatsapp"></i> <?=$_base['texto']['156630113722300']?></span>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6">
						<div class="topo2_superior_dir" >
							<?php

							foreach ($_base['redessociais'] as $key => $value) {

								echo "
								<a class='redes_topo_item' href='".$value['endereco']."' target='_blank' ><img src='".$value['imagem']."' ></a>
								";

							}

							?>
						</div>
					</div>
				</div>
			</div>				
		</div>

		<div class="header-middle" >
			<div class="container" >
				<div class="row" >

					<div class="col-xs-12 col-sm-4 col-md-3">
						<div class="logo">
							<a href="<?=DOMINIO?>" ><img src="<?=$_base['logo']?>" ></a>
						</div>
					</div>

					<div class="col-xs-12 col-sm-8 col-md-9">
						<div class="row">


							<div class="col-xs-12 col-sm-4 col-md-3"> </div>

							<div class="col-xs-12 col-sm-4 col-md-6">
								<div class="busca_div">
									<form action="<?=DOMINIO?><?=$controller?>/buscar" method="post" > 
										<div class="input-group">
											<input name='busca' type="text" class="form-control busca_input" placeholder="O que você está procurando?" />
											<span class="input-group-btn">
												<button class="btn busca_botao" type="submit" >
													<i class="fas fa-search"></i>
												</button>
											</span>
										</div> 
									</form>
								</div>
							</div>

							<div class="col-xs-12 col-sm-4 col-md-3" >

								<div class="topo2_div_botoes_topo">

									<a class="botao_conta_topo" href="<?=DOMINIO?>" >
										<i class="fas fa-home"></i>
										<span>HOME</span>
									</a>
									<a class="botao_conta_topo" href="<?=DOMINIO?>faleconosco" >
										<i class="fa fa-phone-square" aria-hidden="true"></i>
										<span>ATENDIMENTO</span>
									</a>
									
									<div style="clear: both;"></div>

								</div>
							</div>


						</div> 
					</div>
				</div>

			</div>
		</div>

		<div class="header-bottom" >
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-'12' col-md-12">

						<div class="navbar-header" >
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse" >
								MENU <i class="fa fa-bars" aria-hidden="true"></i>
							</button>
						</div>

						<div class="mainmenu">
							<ul class="nav navbar-nav collapse navbar-collapse">

								<?php

								function menu($array, $controller, $url_pagina = null){

									foreach ($array as $key => $value) {

										if($value['controller'] == $controller){
											if($value['controller'] == 'conteudo'){
												if($value['url'] == $url_pagina){
													$active = " class='active' ";
												} else {
													$active = "";
												}
											} else {
												$active = " class='active' ";
											}
										} else {
											$active = "";
										}

										echo "<li><a href='".$value['destino']."' ".$active." >";

										if($value['imagem']){
											echo "<span class='mainmenu_img' ><img src='".PASTA_CLIENTE."imagens/".$value['imagem']."' ></span>";
										}

										echo "<span class='mainmenu_txt' >".$value['titulo']."</span></a>";

										if(count($value['submenu']) != 0){
											
											echo "<ul>";
											echo "
											<div class='submenu_esq' >
											";

											menu($value['submenu'], $controller, $url_pagina);								 

											echo "</div>";											 

											echo "<div style='clear:both' ></div>";
											echo "</ul>";
										}

										echo "</li>";
									}
								}

								if($controller == 'conteudo'){
									menu($conteudo_sessao['menu'], $controller, 'conteudo/pag/id/'.$pagina['url']);
								} else {
									menu($conteudo_sessao['menu'], $controller, '');
								}

								?>
							</ul>
						</div>

					</div>

				</div>
			</div>
		</div>
	</header>

<?php } ?>



<?php if($conteudo_sessao['data_topo']->modelo == 3){ ?>

	<header id="header" >

		<div id="topo" class="topo3" >
			<div class="container">
				<div class="row" >

					<div class="col-xs-6 col-sm-5 col-md-4">
						<div class="logo">
							<a href="<?=DOMINIO?>" ><img src="<?=$_base['logo']?>" ></a>
						</div>
						<div class="logo_fundo"></div>
					</div>

					<div class="col-xs-1 col-sm-2 col-md-5">

						<div class="fone_topo" >
							<i class="fab fa-whatsapp"></i> <?=$_base['texto']['154472085623402']?>
						</div> 

						<div class="whats_topo" >
							<i class="fa fa-envelope"></i> <?=$_base['texto']['159604129420990']?>
						</div>

					</div>

					<div class="col-xs-5 col-sm-5 col-md-3">
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

		</div>

		<div class="topo3_bottom">

			<div class="container">

				<div class="row" >
					<div class="col-md-12">

						<div class="menu_home">
							<a href="<?=DOMINIO?>">
								<i class="fa fa-home" aria-hidden="true"></i>
							</a>
						</div>

						<div class="menu">

							<div class="botaomenuresponsivo" onclick="abremenu();" >
								<i class="fa fa-bars" aria-hidden="true"></i>
							</div>

							<div class="mainmenu">

								<ul class="nav navbar-nav collapse navbar-collapse">

									<?php

									function menu($array, $controller, $url_pagina = null){

										foreach ($array as $key => $value) {

											if($value['controller'] == $controller){
												if($value['controller'] == 'conteudo'){
													if($value['url'] == $url_pagina){
														$active = " class='active' ";
													} else {
														$active = "";
													}
												} else {
													$active = " class='active' ";
												}
											} else {
												$active = "";
											}

											echo "<li><a href='".$value['destino']."' ".$active." >";

											echo "<span class='mainmenu_txt' >".$value['titulo']."</span></a>";

											if(count($value['submenu']) != 0){

												echo "<ul>";
												echo "
												<span class='setasub'><i class='fas fa-sort-up'></i></span>
												<div class='submenu_esq' >
												";

												menu($value['submenu'], $controller, $url_pagina);								 

												echo "</div>";											 

												echo "<div style='clear:both' ></div>";
												echo "</ul>";
											}

											echo "</li>";
										}
									}

									if($controller == 'conteudo'){
										menu($conteudo_sessao['menu'], $controller, 'conteudo/pag/id/'.$pagina['url']);
									} else {
										menu($conteudo_sessao['menu'], $controller, '');
									}

									?>
								</ul>
						  </div>

						</div>
					</div>

				</div>
			</div>

		</div>

	</div>		

</header>


<script type="text/javascript">
	function abremenu(){
		$('.navbar-collapse').toggle();
	}	
</script>


<?php } ?>



<?php if($conteudo_sessao['data_topo']->modelo == 4){ ?>

	<header id="header" class="topo4" >
		<div id="topo" >
			<div class="container">
				<div class="row">

					<div class="col-xs-12 col-sm-4 col-md-4">

						<div class="logo_div">
							<a href="<?=DOMINIO?>" class="logo">
								<img alt="" src="<?=$_base['logo']?>">
							</a>
						</div>

					</div>

					<div class="col-xs-12 col-sm-8 col-md-8">

						<div class="topo_div1">

							<a class="botao_conta_topo" href="<?=DOMINIO?>" >
								<i class="fas fa-home"></i>
								<span>HOME</span>
							</a>
							<a class="botao_conta_topo" href="<?=DOMINIO?>faleconosco" >
								<i class="fas fa-phone-alt"></i>
								<span>ATENDIMENTO</span>
							</a>
							
							<div style="clear: both;"></div>

						</div>

					</div>

				</div>

				<div class='linha_menu' ></div>

				<div class="row">

					<div class="col-sm-10" >

						<div class="menu">

							<div class="botaomenuresponsivo" onclick="abremenu();" >
								<i class="fa fa-bars" aria-hidden="true"></i> MENU
							</div>

							<div class="mainmenu">

								<ul class="nav navbar-nav collapse navbar-collapse">

									<?php

									function menu($array, $controller, $url_pagina = null){

										foreach ($array as $key => $value) {

											if($value['controller'] == $controller){
												if($value['controller'] == 'conteudo'){
													if($value['url'] == $url_pagina){
														$active = " class='active' ";
													} else {
														$active = "";
													}
												} else {
													$active = " class='active' ";
												}
											} else {
												$active = "";
											}

											echo "<li><a href='".$value['destino']."' ".$active." >";

											echo "<span class='mainmenu_txt' >".$value['titulo']."</span></a>";

											if(count($value['submenu']) != 0){

												echo "<ul>";
												echo "
												<span class='setasub'><i class='fas fa-sort-up'></i></span>
												<div class='submenu_esq' >
												";

												menu($value['submenu'], $controller, $url_pagina);								 

												echo "</div>";											 

												echo "<div style='clear:both' ></div>";
												echo "</ul>";
											}

											echo "</li>";
										}
									}

									if($controller == 'conteudo'){
										menu($conteudo_sessao['menu'], $controller, 'conteudo/pag/id/'.$pagina['url']);
									} else {
										menu($conteudo_sessao['menu'], $controller, '');
									}

									?>
								</ul>
							</div>

						</div>
					</div>

					<div class="col-sm-2" >

						<div class="topo2_superior_dir" >
							<?php

							foreach ($_base['redessociais'] as $key => $value) {

								echo "
								<a class='redes_topo_item' href='".$value['endereco']."' target='_blank' ><img src='".$value['imagem']."' ></a>
								";

							}

							?>
						</div>

					</div>

				</div>


			</div>
		</div>
	</header>

	<script type="text/javascript">
		function abremenu(){
			$('.navbar-collapse').toggle();
		}	
	</script>

<?php } ?>



<?php if($conteudo_sessao['data_topo']->modelo == 5){ ?>

	<header class="topo5" >

		<div id="topo" class="header-top topo2_superior" >
			<div class="container" >
				<div class="row" >
					<div class="col-xs-12 col-sm-6 col-md-6">
						<div class="topo2_superior_esq" >
							<?php

							foreach ($_base['redessociais'] as $key => $value) {

								echo "
								<a class='redes_topo_item' href='".$value['endereco']."' target='_blank' ><img src='".$value['imagem']."' ></a>
								";

							}

							?>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6">
						<div class="topo2_superior_dir" > 

							<a class="botao_conta_topo" href="<?=DOMINIO?>" >
								<span>HOME</span>
							</a>
							<a class="botao_conta_topo" href="<?=DOMINIO?>faleconosco" >
								<span>ATENDIMENTO</span>
							</a>

							<div style="clear: both;"></div>

						</div>
					</div>
				</div>
			</div>				
		</div>

		<div class="container">

			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12">
					
					<div class="logo_div">
						<a href="<?=DOMINIO?>" class="logo">
							<img alt="" src="<?=$_base['logo']?>">
						</a>
					</div>
					
				</div>
			</div>

			<div style="position: relative; width: 100%; border-top:1px solid <?=$_base['cor'][147]?>; padding-top: 15px; "></div>

			<div class="row">

				<div class="col-sm-12" >

					<div class="menu">

						<div class="botaomenuresponsivo" onclick="abremenu();" >
							<i class="fa fa-bars" aria-hidden="true"></i> MENU
						</div>

						<div class="mainmenu">

							<ul class="nav navbar-nav collapse navbar-collapse">

								<?php

								function menu($array, $controller, $url_pagina = null){

									foreach ($array as $key => $value) {

										if($value['controller'] == $controller){
											if($value['controller'] == 'conteudo'){
												if($value['url'] == $url_pagina){
													$active = " class='active' ";
												} else {
													$active = "";
												}
											} else {
												$active = " class='active' ";
											}
										} else {
											$active = "";
										}

										echo "<li><a href='".$value['destino']."' ".$active." >";

										echo "<span class='mainmenu_txt' >".$value['titulo']."</span></a>";

										if(count($value['submenu']) != 0){
											
											echo "<ul>";
											echo "
											<span class='setasub'><i class='fas fa-sort-up'></i></span>
											<div class='submenu_esq' >
											";

											menu($value['submenu'], $controller, $url_pagina);								 

											echo "</div>";											 

											echo "<div style='clear:both' ></div>";
											echo "</ul>";
										}
										echo "</li>";
									}
								}

								if($controller == 'conteudo'){
									menu($conteudo_sessao['menu'], $controller, 'conteudo/pag/id/'.$pagina['url']);
								} else {
									menu($conteudo_sessao['menu'], $controller, '');
								}

								?>
							</ul>
						</div>

					</div>
				</div>

			</div>

		</div>

	</header>

	<script type="text/javascript">
		function abremenu(){
			$('.navbar-collapse').toggle();
		}	
	</script>
	
<?php } ?>



<?php if($conteudo_sessao['data_topo']->modelo == 6){ ?>

	<header id="header" class="topo6" >

		<div id="topo" class="header-middle" >
			<div class="container" >
				<div class="row" >

					<div class="col-xs-12 col-sm-4 col-md-3">
						<div class="logo_div">
							<a href="<?=DOMINIO?>" class="logo" ><img src="<?=$_base['logo']?>" ></a>
						</div>
					</div>

					<div class="col-xs-12 col-sm-4 col-md-3"></div>
					
					<div class="col-xs-12 col-sm-4 col-md-6">
						<div class="busca_div">
							<form action="<?=DOMINIO?><?=$controller?>/buscar" method="post" > 
								<div class="input-group">
									<input name='busca' type="text" class="form-control busca_input" placeholder="O que você está procurando?" />
									<span class="input-group-btn">
										<button class="btn busca_botao" type="submit" ><i class="fa fa-search" aria-hidden="true"></i></button>
									</span>
								</div> 
							</form>
						</div>
					</div>

				</div>
			</div>
		</div>


		<div class="header-bottom" >
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-'12' col-md-12">

						<a class="botao_carrinho2" href="<?=DOMINIO?>carrinho"  > 
							<i class="fas fa-cart-arrow-down"></i> 
						</a>

						<a class="topo_botao_user2" href="<?=DOMINIO?>meuspedidos" >
							<i class="fas fa-user-circle"></i>
						</a>

						<div class="navbar-header" >
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse" >
								MENU <i class="fa fa-bars" aria-hidden="true"></i>
							</button>
						</div>

						<div class="mainmenu">
							<ul class="nav navbar-nav collapse navbar-collapse">

								<?php

								function menu($array, $controller, $url_pagina = null){

									foreach ($array as $key => $value) {

										if($value['controller'] == $controller){
											if($value['controller'] == 'conteudo'){
												if($value['url'] == $url_pagina){
													$active = " class='active' ";
												} else {
													$active = "";
												}
											} else {
												$active = " class='active' ";
											}
										} else {
											$active = "";
										}

										echo "<li><a href='".$value['destino']."' ".$active." >";

										echo "<span class='mainmenu_txt' ><i class='fa fa-angle-right' aria-hidden='true'></i> ".$value['titulo']."</span></a>";

										if(count($value['submenu']) != 0){

											echo "<ul>";
											echo "
											<span class='setasub'><i class='fas fa-sort-up'></i></span>
											<div class='submenu_esq' >
											";

											menu($value['submenu'], $controller, $url_pagina);								 

											echo "</div>";											 

											echo "<div style='clear:both' ></div>";
											echo "</ul>";
										}

										echo "</li>";
									}
								}

								if($controller == 'conteudo'){
									menu($conteudo_sessao['menu'], $controller, 'conteudo/pag/id/'.$pagina['url']);
								} else {
									menu($conteudo_sessao['menu'], $controller, '');
								}

								?>
							</ul>
						</div>

					</div>

				</div>
			</div>
		</div>
	</header>

	<section class="margemtopo"></section>

<?php } ?>



<?php if($conteudo_sessao['data_topo']->modelo == 7){ ?>

	<header id="header" class="topo7" >

		<div id="topo" class="header-middle" >
			<div class="container" >
				<div class="row" >

					<div class="col-xs-8 col-sm-4 col-md-3">
						<div class="logo_div">
							<a href="<?=DOMINIO?>" class="logo" ><img src="<?=$_base['logo']?>" ></a>
						</div>
					</div>

					<div class="col-xs-12 col-sm-8 col-md-9 fundomenuresponsivo" >
						
						<div class="navbar-header" >
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse" >
								MENU <i class="fa fa-bars" aria-hidden="true"></i>
							</button>
						</div>

						<div class="mainmenu">
							<ul class="nav navbar-nav collapse navbar-collapse">

								<?php

								function menu($array, $controller, $url_pagina = null){

									foreach ($array as $key => $value) {

										if($value['controller'] == $controller){
											if($value['controller'] == 'conteudo'){
												if($value['url'] == $url_pagina){
													$active = " class='active' ";
												} else {
													$active = "";
												}
											} else {
												$active = " class='active' ";
											}
										} else {
											$active = "";
										}

										echo "<li><a href='".$value['destino']."' ".$active." >";

										echo "<span class='mainmenu_txt' >".$value['titulo']."</span></a>";

										if(count($value['submenu']) != 0){
											
											echo "<ul>";
											echo "
											<span class='setasub'><i class='fas fa-sort-up'></i></span>
											<div class='submenu_esq' >
											";

											menu($value['submenu'], $controller, $url_pagina);								 

											echo "</div>";											 

											echo "<div style='clear:both' ></div>";
											echo "</ul>";
										}

										echo "</li>";
									}
								}

								if($controller == 'conteudo'){
									menu($conteudo_sessao['menu'], $controller, 'conteudo/pag/id/'.$pagina['url']);
								} else {
									menu($conteudo_sessao['menu'], $controller, '');
								}

								?>
							</ul>
						</div>

						

					</div>
				</div>

			</div>
		</div>
		
	</header>

	<section class="margemtopo"></section>

<?php } ?>


<?php if($conteudo_sessao['data_topo']->modelo == 8){ ?>

	<header id="header" class="topo8" >

		<div id="topo" class="header-middle" >
			<div class="container" >
				<div class="row" >

					<div class="col-xs-12 col-sm-4 col-md-3">
						<div class="logo_div">
							<a href="<?=DOMINIO?>" class="logo" ><img src="<?=$_base['logo']?>" ></a>
						</div>
					</div>

					<div class="col-xs-12 col-sm-8 col-md-9 fundomenuresponsivo" >
						

						<div class="topo_faixasuperior">
							<div class="topo_redes_triangulo1"></div>
							<div class="topo_redes">

								<div class="fone_topo" >
									<i class="fas fa-phone"></i> <?=$_base['texto']['154472085623402']?>
								</div>

								<div class="whats_topo" >
									<i class="fab fa-whatsapp"></i> <?=$_base['texto']['156630113722300']?>
								</div>
								<div class="redes_topo">
									<?php

									foreach ($_base['redessociais'] as $key => $value) {

										echo "
										<a class='redes_topo_item' href='".$value['endereco']."' target='_blank' ><img src='".$value['imagem']."' ></a>
										";

									}

									?>
								</div>
								<div style="clear: both;"></div>

							</div>
							<div class="topo_redes_triangulo2"></div>
							<div style="clear:both; "></div>
						</div>

						
						<div class="navbar-header" >
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse" >
								MENU <i class="fa fa-bars" aria-hidden="true"></i>
							</button>
						</div>

						<div class="mainmenu">
							<ul class="nav navbar-nav collapse navbar-collapse">

								<?php

								function menu($array, $controller, $url_pagina = null){

									foreach ($array as $key => $value) {

										if($value['controller'] == $controller){
											if($value['controller'] == 'conteudo'){
												if($value['url'] == $url_pagina){
													$active = " class='active' ";
												} else {
													$active = "";
												}
											} else {
												$active = " class='active' ";
											}
										} else {
											$active = "";
										}

										echo "<li><a href='".$value['destino']."' ".$active." >";

										echo "<span class='mainmenu_txt' >".$value['titulo']."</span></a>";

										if(count($value['submenu']) != 0){
											
											echo "<ul>";
											echo "
											<span class='setasub'><i class='fas fa-sort-up'></i></span>
											<div class='submenu_esq' >
											";

											menu($value['submenu'], $controller, $url_pagina);								 

											echo "</div>";											 

											echo "<div style='clear:both' ></div>";
											echo "</ul>";
										}

										echo "</li>";
									}
								}

								if($controller == 'conteudo'){
									menu($conteudo_sessao['menu'], $controller, 'conteudo/pag/id/'.$pagina['url']);
								} else {
									menu($conteudo_sessao['menu'], $controller, '');
								}

								?>
							</ul>
						</div>


					</div>
				</div>

			</div>
		</div>
		
	</header>

	<section class="margemtopo"></section>

<?php } ?>

<?php if($conteudo_sessao['data_topo']->modelo == 9){ ?>

	<header id="header" class="topo9" >

		<div id="topo" class="header-middle" >
			<div class="container" >
				<div class="row" >

					<div class="col-xs-12 col-sm-4 col-md-3">
						<div class="logo_div">
							<a href="<?=DOMINIO?>" class="logo" ><img src="<?=$_base['logo']?>" ></a>
						</div>
					</div>

					<div class="col-xs-12 col-sm-8 col-md-9 fundomenuresponsivo" >
						
						<div class="navbar-header" >
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse" >
								MENU <i class="fa fa-bars" aria-hidden="true"></i>
							</button>
						</div>

						<div class="mainmenu">
							<ul class="nav navbar-nav collapse navbar-collapse">

								<?php

								function menu($array, $controller, $url_pagina = null){

									foreach ($array as $key => $value) {

										if($value['controller'] == $controller){
											if($value['controller'] == 'conteudo'){
												if($value['url'] == $url_pagina){
													$active = " class='active' ";
												} else {
													$active = "";
												}
											} else {
												$active = " class='active' ";
											}
										} else {
											$active = "";
										}

										echo "<li><a href='".$value['destino']."' ".$active." >";

										echo "<span class='mainmenu_txt' >".$value['titulo']."</span></a>";

										if(count($value['submenu']) != 0){
											
											echo "<ul>";
											echo "
											<span class='setasub'><i class='fas fa-sort-up'></i></span>
											<div class='submenu_esq' >
											";

											menu($value['submenu'], $controller, $url_pagina);								 

											echo "</div>";											 

											echo "<div style='clear:both' ></div>";
											echo "</ul>";

										}

										echo "</li>";
									}
								}

								if($controller == 'conteudo'){
									menu($conteudo_sessao['menu'], $controller, 'conteudo/pag/id/'.$pagina['url']);
								} else {
									menu($conteudo_sessao['menu'], $controller, '');
								}

								?>
							</ul>
						</div>


					</div>
				</div>

			</div>
		</div>

	</header>

	<section class="margemtopo"></section>

<?php } ?>

<?php if($conteudo_sessao['data_topo']->modelo == 10){ ?>

	<header id="header" class="topo10" >

		<div id="topo" class="header-middle" >
			<div class="container" >
				<div class="row" >

					<div class="col-xs-12 col-sm-4 col-md-3">
						<div class="logo_div">
							<a href="<?=DOMINIO?>" class="logo" ><img src="<?=$_base['logo']?>" ></a>
						</div>
					</div>

					<div class="col-xs-12 col-sm-8 col-md-9 fundomenuresponsivo" >
						
						<div class="navbar-header" >
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse" >
								MENU <i class="fa fa-bars" aria-hidden="true"></i>
							</button>
						</div>

						<div class="mainmenu">
							<ul class="nav navbar-nav collapse navbar-collapse">

								<?php

								function menu($array, $controller, $url_pagina = null){

									foreach ($array as $key => $value) {

										if($value['controller'] == $controller){
											if($value['controller'] == 'conteudo'){
												if($value['url'] == $url_pagina){
													$active = " class='active' ";
												} else {
													$active = "";
												}
											} else {
												$active = " class='active' ";
											}
										} else {
											$active = "";
										}

										echo "<li><a href='".$value['destino']."' ".$active." >";

										echo "<span class='mainmenu_txt' >".$value['titulo']."</span></a>";

										if(count($value['submenu']) != 0){
											
											echo "<ul>";
											echo "
											<span class='setasub'><i class='fas fa-sort-up'></i></span>
											<div class='submenu_esq' >
											";

											menu($value['submenu'], $controller, $url_pagina);								 

											echo "</div>";											 

											echo "<div style='clear:both' ></div>";
											echo "</ul>";
										}

										echo "</li>";
									}
								}

								if($controller == 'conteudo'){
									menu($conteudo_sessao['menu'], $controller, 'conteudo/pag/id/'.$pagina['url']);
								} else {
									menu($conteudo_sessao['menu'], $controller, '');
								}

								?>
							</ul>
						</div>


					</div>
				</div>

			</div>
		</div>

	</header>

	<section class="margemtopo"></section>

<?php } ?>


<?php if($conteudo_sessao['data_topo']->modelo == 11){ ?>

	<header id="header" >

		<div id="topo" class="header-middle topo11" >
			<div class="container" >
				<div class="row" >

					<div class="col-xs-12 col-sm-4 col-md-3">
						<div class="logo_div">
							<a href="<?=DOMINIO?>" class="logo" ><img src="<?=$_base['logo']?>" ></a>
						</div>
					</div>

					<div class="col-xs-12 col-sm-8 col-md-9">

						<div>
							<?php
							$banners_topo = $conteudo_sessao['banners_topo'];
							include 'htm_conteudo_banners_topo.php'; ?>
						</div>

						<div class="row">

							<div class="col-xs-12 col-sm-6 col-md-7">

								<div class="email_topo" >
									<i class="fas fa-envelope"></i> <?=$_base['texto']['154472085623401']?>
								</div>

								<div class="whats_topo" >
									<i class="fab fa-whatsapp"></i> <?=$_base['texto']['154472085623402']?>
								</div>

							</div>

							<div class="col-xs-12 col-sm-6 col-md-5">

								<div class="busca_div">
									<form action="<?=DOMINIO?><?=$controller?>/buscar" method="post" > 
										<div class="input-group">
											<input name='busca' type="text" class="form-control busca_input" placeholder="O que você está procurando?" />
											<span class="input-group-btn">
												<button class="btn busca_botao" type="submit" ><i class="fa fa-search" aria-hidden="true"></i></button>
											</span>
										</div> 
									</form>
								</div>
								
							</div>
							
						</div>

					</div>

				</div>

			</div>
		</div>


		<div class="header-bottom" >
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-'12' col-md-12">				 

						<div class="navbar-header" >
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse" >
								MENU <i class="fa fa-bars" aria-hidden="true"></i>
							</button>
						</div>

						<div class="mainmenu">
							<ul class="nav navbar-nav collapse navbar-collapse">

								<?php

								function menu($array, $controller, $url_pagina = null){

									foreach ($array as $key => $value) {

										if($value['controller'] == $controller){
											if($value['controller'] == 'conteudo'){
												if($value['url'] == $url_pagina){
													$active = " class='active' ";
												} else {
													$active = "";
												}
											} else {
												$active = " class='active' ";
											}
										} else {
											$active = "";
										}

										echo "<li><a href='".$value['destino']."' ".$active." >";

										echo "<span class='mainmenu_txt' ><i class='fa fa-angle-right' aria-hidden='true'></i> ".$value['titulo']."</span></a>";

										if(count($value['submenu']) != 0){

											echo "<ul>";
											echo "
											<span class='setasub'><i class='fas fa-sort-up'></i></span>
											<div class='submenu_esq' >
											";

											menu($value['submenu'], $controller, $url_pagina);								 

											echo "</div>";											 

											echo "<div style='clear:both' ></div>";
											echo "</ul>";

										}

										echo "</li>";
									}
								}

								if($controller == 'conteudo'){
									menu($conteudo_sessao['menu'], $controller, 'conteudo/pag/id/'.$pagina['url']);
								} else {
									menu($conteudo_sessao['menu'], $controller, '');
								}

								?>
							</ul>
						</div>

					</div>

				</div>
			</div>
		</div>

	</div>		

</header>


<script type="text/javascript">
	function abremenu(){
		$('.navbar-collapse').toggle();
	}	
</script>


<?php } ?>