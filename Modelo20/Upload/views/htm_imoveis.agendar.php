<form action="<?=DOMINIO?><?=$controller?>/imoveis_agendar_enviar" method="post" name="form_imovel" id="form_imovel" >
	
	<div class="modal-header"> 
		<h4 class="modal-title">Agendar Visita</h4>
	</div>
	
	<div class="modal-body">	 

		<div class="row">

			<div class="col-xs-12 col-sm-12 col-md-12">

				<div class="form-group" >
					<label>Interesse no imovel ref.:</label>
					<input type="text" class="form-control cadastro_form" name='ref' value="<?=$data->id?> - <?=$data->titulo?>" disabled="" >
				</div> 
				
				<div class="form-group" >
					<label>Nome:</label>
					<input type="text" class="form-control cadastro_form" name='nome' placeholder="Digite seu nome">
				</div>

				<div class="form-group" >
					<label>Telefone:</label>
					<input type="text" class="form-control cadastro_form" name='fone' placeholder="Digite seu telefone" onKeyPress="Mascara(this,telefone)" onKeyDown="Mascara(this,telefone)" maxlength="15" >
				</div>

				<div class="form-group" >
					<label>E-mail:</label>
					<input type="text" class="form-control cadastro_form" name='email' placeholder="Digite seu e-mail">
				</div>

				<div class="form-group" >
					<label>Mensagem:</label>
					<textarea class="form-control" name="msg" style="width:100%; height:100px;" ></textarea>
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
				<input type="hidden" name="imovel" value="<?=$data->id?> - <?=$data->titulo?>" >
			</div>

		</div>
	</div>

</form>