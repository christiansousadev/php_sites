<form action="<?=DOMINIO?><?=$controller?>/ligamospravc_enviar" method="post" name="form_imovel" id="form_imovel" >

	<div class="modal-header"> 
		<h4 class="modal-title">Nós Ligamos pra Você</h4>
	</div>

	<div class="modal-body">	 

		<div class="row">

			<div class="col-xs-12 col-sm-12 col-md-12">

				<div class="form-group" >
					<label>Nome:</label>
					<input type="text" class="form-control cadastro_form" name='nome' placeholder="Digite seu nome">
				</div>
				
				<div class="form-group" >
					<label>Telefone:</label>
					<input type="text" class="form-control cadastro_form" name='fone' placeholder="Digite seu telefone" onKeyPress="Mascara(this,telefone)" onKeyDown="Mascara(this,telefone)" maxlength="15" >
				</div>
				
				<div class="form-group" >
					<label>Melhor Horário:</label>
					<input type="text" class="form-control cadastro_form" name='hora' placeholder="Horário">
				</div>

			</div>      

		</div>

	</div>

	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12">

			<div class="g-recaptcha" data-sitekey="<?=recaptcha_key?>"></div>

		</div>
		<div class="col-xs-12 col-sm-12 col-md-12">
			
			<div class="modal-footer">
				<button type="button" class="btn botao_padrao" onClick="form_imovel.submit();" >Enviar</button>
			</div>

		</div>
	</div>

</form>