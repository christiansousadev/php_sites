<?php if(!isset($_base['libera_views'])){ header("HTTP/1.0 404 Not Found"); exit; } ?>


<form id="form_depoimento_envia" name="form_depoimento" method="post" action="<?=DOMINIO?><?=$controller?>/enviar_depoimento" method="post" >

	<div class="row" >

		<div class="col-md-12">
			<div style="padding-top:50px; padding-bottom:20px; text-align: left; font-weight: bold; font-size: 18px;">Envie seu Depoimento.</div>
		</div>

		<div class="form-group col-md-12">   
			<input type="text" name="nome" id="nome" class="form-control" required="required" placeholder="Nome" >
		</div>

		<div class="form-group col-md-6">
			<input type="email" name="email" id="email" class="form-control" required="required" placeholder="E-mail" >
		</div>

		<div class="form-group col-md-6">   
			<input type="text" name="cidade" id="cidade" class="form-control" required="required" placeholder="Cidade" >
		</div>

		<div class="form-group col-md-12">
			<textarea name="msg" id="msg" required class="form-control" style="height:100px" placeholder="Escreva sua experiencia" ></textarea>
		</div>

		<div class="form-group col-md-12">
			<div class="botao_contato" >

				<?php
				
				$botao_certo = str_replace("aquivaiolink", " onclick=\"document.getElementById('form_depoimento_envia').submit();\" ", $botao);

				echo $botao_certo;
				?>

			</div>
		</div>

	</div>

</form>

