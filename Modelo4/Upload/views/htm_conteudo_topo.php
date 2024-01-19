<?php if(!isset($_base['libera_views'])){ header("HTTP/1.0 404 Not Found"); exit; }

//echo "<pre>"; print_r($conteudo_sessao['cores']['detalhes']); echo "</pre>";
$cores = $conteudo_sessao['cores']['lista'];
$banners_topo = $conteudo_sessao['banners_topo'];

include('htm_css_topo_'.$conteudo_sessao['data_topo']->modelo.'.php');

?>

<?php if($conteudo_sessao['data_topo']->modelo == 1){ ?>

	<header id="header" ></header>

<?php } ?>


<?php if($conteudo_sessao['data_topo']->modelo == 2){ ?>

	<header id="header" class="topo2"></header>

<?php } ?>



<?php if($conteudo_sessao['data_topo']->modelo == 3){ ?>

	<header id="header" >
	  </div>		
</header>


<script type="text/javascript">
	function abremenu(){
		$('.navbar-collapse').toggle();
	}	
</script>


<?php } ?>



<?php if($conteudo_sessao['data_topo']->modelo == 4){ ?>

	<header id="header" class="topo4" ></header>

	<script type="text/javascript">
		function abremenu(){
			$('.navbar-collapse').toggle();
		}	
	</script>

<?php } ?>



<?php if($conteudo_sessao['data_topo']->modelo == 5){ ?>

	<header class="topo5" ></header>

	<script type="text/javascript">
		function abremenu(){
			$('.navbar-collapse').toggle();
		}	
	</script>
	
<?php } ?>



<?php if($conteudo_sessao['data_topo']->modelo == 6){ ?>

	<header id="header" class="topo6" ></header>

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
						    <br />
						    <br />
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
									<i class="fab fa-whatsapp"></i> <?=$_base['texto']['159604129420990']?>
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

	<header id="header" class="topo9" ></header>

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
								 <i class="fa fa-bars" aria-hidden="true"></i>
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
	  </div>		
</header>


<script type="text/javascript">
	function abremenu(){
		$('.navbar-collapse').toggle();
	}	
</script>


<?php } ?>