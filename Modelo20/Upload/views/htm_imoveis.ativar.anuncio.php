 

<div class="modal-header"> 
	<h4 class="modal-title">Selecione o Plano</h4>
</div>

<div class="modal-body">	 

	<div class="row">

		<div class="col-xs-12 col-sm-12 col-md-12">

			<div class="div_form" >
				<label>Imovel ref.: <?=$data_imovel->id?></label> 
			</div>

			<?php if(count($planos) > 0){ ?>

				<form action="<?=DOMINIO?><?=$controller?>/imoveis_ativar_anuncio_grv" method="post" name="form_imovel" id="form_imovel" >

					<div class="div_form" >
						<label>Plano</label>
						<select name="plano" class="form-control select2 cadastro_select" >
							<option value="">Selecione</option>
							<?php

							foreach ($planos as $key => $value) {

								echo "<option value='".$value['codigo']."' >".$value['titulo']."</option>";

							}

							?>
						</select>
					</div>

					<div style="text-align: center; margin-top: 20px;">
						<button type="button" class="btn botao_padrao <?=$botao_css?>" onClick="form_imovel.submit();" >Continuar</button> 
						<input type="hidden" name="imovel" value="<?=$data_imovel->codigo?>" >
					</div>

				</form>
			<?php } else { ?>

				<div style="text-align: center; margin: 20px; font-size: 15px; color:#666;">Nenhum plano disponível, compre um plano para ativar este anúncio.</div>

			<?php } ?>


		</div>

	</div>

</div>