<?php

class parceiros extends controller {
	
	public function init(){		
	}
	
	public function inicial(){
		
		$dados = array();
		$dados['_base'] = $this->base();
		$dados['objeto'] = DOMINIO.$this->_controller.'/';
		$dados['controller'] = $this->_controller;
		 
		$parceiros = new model_parceiros();
		$dados['parceiros'] = $parceiros->lista();

		//carrega view e envia dados para a tela
		$this->view('parceiros', $dados);
	}
	
}