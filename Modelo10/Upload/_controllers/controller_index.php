<?php
class index extends controller {
	
	public function init(){
		
	}
	
	public function inicial(){
		
		//definições basicas (OBS: tudo que estiver na array dados é enviado como variavel para a view)
		$layout = new model_meta();
		$dados['_base'] = $layout->carrega();
		$dados['objeto'] = DOMINIO.$this->_controller.'/';
		$dados['controller'] = $this->_controller;
		
		//banner
		$banners = new model_banners();
		$dados['banners_grande'] = $banners->lista('147502866622777');	
		
		//rede social
		$redessociais = new model_redes_sociais();
		$dados['facebook'] = $redessociais->pornome('facebook');
		$dados['listaredes'] = $redessociais->lista();
		
		// produtos
		$produtos = new model_produtos();
		$dados['produtos'] = $produtos->lista_inicial();

		// textos		 
		$textos = new model_texto();
		$dados['quemsomos_texto'] = $textos->conteudo('151556344140802');

		// portfolio
		$fotos = new model_fotos();
		$dados['portfolio'] = $fotos->lista_inicial(4);

		// Serviços
		$servicos = new model_servicos();
		$dados['servicos'] = $servicos->lista_inicial();
		
		// parceiros
		$parceiros = new model_parceiros();	
		$dados['parceiros'] = $parceiros->lista();
		

		//carrega view e envia dados para a tela
		$this->view('index', $dados);
	}
	
}