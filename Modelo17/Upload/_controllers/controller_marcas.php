<?php

class marcas extends controller {
	
	public function init(){		
	}
	
	public function inicial(){
		
		$dados = array();
		$dados['_base'] = $this->base();
		$dados['objeto'] = DOMINIO.$this->_controller.'/';
		$dados['controller'] = $this->_controller;
		 
		$marcas = new model_marcas();
		$dados['marcas'] = $marcas->lista();

		//carrega view e envia dados para a tela
		$this->view('marcas', $dados);
	}
	
}