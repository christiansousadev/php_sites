<?php
class quemsomos extends controller {
	
	public function init(){
		
	}
	
	public function inicial(){
		
		//definições basicas (OBS: tudo que estiver na array dados é enviado como variavel para a view)
		$layout = new model_meta();
		$dados['_base'] = $layout->carrega();
		$dados['objeto'] = DOMINIO.$this->_controller.'/';
		$dados['controller'] = $this->_controller;
		
		//rede social
		$redessociais = new model_redes_sociais();
		$dados['facebook'] = $redessociais->pornome('facebook');
		$dados['listaredes'] = $redessociais->lista();

		// Serviços
		$servicos = new model_servicos();
		$dados['servicos'] = $servicos->lista_inicial();
		
		// instancia texto e imagem
		$imagem = new model_imagem();
		$texto = new model_texto();
		
		/////////////////////////////////////////////////////////
		//itens da pagina
		
		$dados['imagem_quemsomos'] = $imagem->codigo('147926047696687');
	  	$dados['imagem_quemsomos2'] = $imagem->codigo('151941206441684');
	  	
	  	$dados['texto_quemsomos'] = $texto->conteudo('147926044349872');
	  	$dados['texto_visao'] = $texto->conteudo('147926560751294');
	  	$dados['texto_missao'] = $texto->conteudo('147926492556886');
	  	$dados['texto_valores'] = $texto->conteudo('147926562040827');
	  	$dados['texto_quemsomos2'] = $texto->conteudo('151564980782486');
	  	
		//carrega view e envia dados para a tela
		$this->view('quemsomos', $dados);
	}
	
}