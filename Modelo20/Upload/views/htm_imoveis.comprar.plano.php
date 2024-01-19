<form action="<?=DOMINIO?><?=$controller?>/imoveis_comprar_plano_grv" method="post" name="form_imovel" id="form_imovel" >

	<div class="modal-header"> 
		<h4 class="modal-title">Selecione o Plano</h4>
	</div>

	<div class="modal-body">	 

		<div class="row">

			<div class="col-xs-12 col-sm-12 col-md-12">

				<div class="div_form" >
					<label>Plano</label>
					<select name="plano" class="form-control select2 cadastro_select" onchange="seleciona_plano(this.value);">
						<option value="">Selecione</option>
						<?php
						
						foreach ($planos as $key => $value) {							
							if($value['codigo'] != 1){
								echo "<option value='".$value['codigo']."' >".$value['titulo']."</option>";
							}
						}
						
						?>
					</select>
				</div>

				<div id="conteudo_anuncio"></div>

				<div style="text-align: center; margin-top: 20px;">
					<button type="button" class="btn botao_padrao <?=$botao_css?>" onClick="form_imovel.submit();" >Continuar</button> 
					<input type="hidden" name="imovel" value="<?=$data_imovel->codigo?>" >
				</div>
			</div>

		</div>

	</div>

</form>
<script type="text/javascript">
	function seleciona_plano(codigo){

		 $.post('<?=DOMINIO?><?=$controller?>/imoveis_confere_plano', {codigo: codigo},function(data){
            if(data){
              $('#conteudo_anuncio').html(data);
            }
          });

	}
</script>