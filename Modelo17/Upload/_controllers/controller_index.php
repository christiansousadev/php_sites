<?php

class index extends controller {
	
	public function init(){		
	}
	
	public function inicial(){
		
		$dados = array();
		$dados['_base'] = $this->base();
		$dados['objeto'] = DOMINIO.$this->_controller.'/';
		$dados['controller'] = $this->_controller;
		
		//banner
		$banners = new model_banners();
		$dados['banners'] = $banners->lista('147502866622777');
		
		// pacotes
		$pacotes = new model_pacotes();
		$dados['pacotes'] = $pacotes->lista_inicial(12);
		$dados['pacotes_orcamento'] = $pacotes->pacotes_orcamento();
		
		// parceiros 
		$parceiros = new model_parceiros();
		$dados['parceiros'] = $parceiros->lista();

		$galeria = new model_portfolio();
		$dados['galeria'] = $galeria->lista_inicio('150672655960185');

		//textos
		$texto = new model_texto();
		$dados['mapa'] = $texto->conteudo('147928640917138');
		$dados['instagram'] = $texto->conteudo('151564980782486');
		
		
		//carrega view e envia dados para a tela
		$this->view('index', $dados);
	}
	
}