<?php require_once('_system/bloqueia_view.php'); ?>

<div>

	<h2 class="titulo_padrao titulo_lateral" >BUSCA</h2>

	<form id="form_busca" name="form_busca" action="<?=DOMINIO?>busca_pacotes" method="post" >
		
		<div>
			<input name="busca" type="text" class="form-control campo_busca" placeholder="O que procura?" style="width: 70%; float: left;">
			<input type="button" value="OK" class="botao_padrao" style="float: right; width: 25%; border-radius:2px;" >
			<div style="clear: both;"></div>
		</div>

	</form>

</div>

<div>
	
	<h2 class="titulo_padrao titulo_lateral" >CATEGORIAS <i></i></h2>
	
	<div class="categorias_lateral" style="margin-bottom:30px;" >
		<?php
		
		foreach ($categorias as $key => $value) {
			
			$endereco_cat = DOMINIO."pacotes/lista/categoria/".$value['codigo'];
			
			if($categoria_codigo == $value['codigo']){
				$active = "  class='active' ";
				$active_folder = "-open";
			} else {
				$active = "";
				$active_folder = "";
			}
			
			echo "
			<li>
			<a href='$endereco_cat' $active ><i class='far fa-folder".$active_folder."'></i> ".$value['titulo']."</a>
			<ul>
			";
			
			foreach ($value['filhos'] as $key2 => $value2) {
				
				$endereco_cat = DOMINIO."pacotes/lista/categoria/".$value2['codigo'];

				if($categoria_codigo == $value2['codigo']){
					$active = "  class='active' ";
					$active_folder = "-open";
				} else {
					$active = "";
					$active_folder = "";
				}

				echo "
				<li>
				<a href='$endereco_cat' $active ><i class='far fa-folder".$active_folder."'></i> ".$value2['titulo']."</a>
				</li>
				";

			}

			echo "
			</ul>
			</li>
			";

		}

		?>
	</div>
	
</div>