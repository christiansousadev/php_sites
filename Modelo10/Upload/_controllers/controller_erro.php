<?php
class erro extends controller {
	
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
		
		/////////////////////////////////////////////////////////
		//itens da pagina
		
	 
		
		//carrega view e envia dados para a tela
		$this->view('erro', $dados);
	}
	
}