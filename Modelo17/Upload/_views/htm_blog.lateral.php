<?php require_once('_system/bloqueia_view.php'); ?>

<div>

	<form id="form_busca" name="form_busca" action="<?=DOMINIO?>busca_blog" method="post" >
		
		<div style="margin-top:30px;">
			<input name="busca" type="text" class="form-control campo_busca" placeholder="O que procura?" style="width:100%; border-radius:2px;" >
		</div>

		<div>
			<input type="button" value="BUSCAR" class="botao_padrao" style="font-size: 15px; border-radius: 2px; width: 100%;" onclick="document.form_busca.submit()" >
		</div> 

	</form>

</div>

<div style="margin-top: 30px;">
	
	<div class="titulo_padrao" style="position: relative; margin-bottom: 20px;" >CATEGORIAS</div>

	<div class="blog_categorias" >
		<?php

		foreach ($categorias as $key => $value) {
			
			$endereco_cat = DOMINIO."blog/lista/categoria/".$value['codigo'].'#corpo';

			if($categoria_codigo == $value['codigo']){
				$active = "  class='active' ";
			} else {
				$active = "";
			}
			
			echo "
			<li>
			<a href='$endereco_cat' $active > ".$value['titulo']."</a>
			</li>
			";
			
		}

		?>
	</div>
	
</div>