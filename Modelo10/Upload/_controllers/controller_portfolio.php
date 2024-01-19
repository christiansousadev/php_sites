<?php
class portfolio extends controller {
	
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
		$imagem = new model_imagem();
		$texto = new model_texto();
		
		//fotos
		$fotos = new model_fotos();
		
	 	$categoria = $this->get('categoria');
	 	
		$dados['categorias'] = $fotos->lista_grupos($categoria);
		
		if(!$categoria){
			if(isset($dados['categorias'][0]['codigo'])){
				$categoria = $dados['categorias'][0]['codigo'];
				$dados['categorias'] = $fotos->lista_grupos($categoria);
			} else {
				$categoria = false;
			}
		}
		$dados['categoria_selecionada'] = $categoria;
		
		//define variaveis
		$fotos->perpage = 12;
		//gets caso for preenchido define a configuraçao 
		if($this->get('categoria')){ $fotos->categoria = $categoria; }
		if($this->get('startitem')){ $fotos->startitem = $this->get('startitem'); }
		if($this->get('startpage')){ $fotos->startpage = $this->get('startpage'); }
		if($this->get('endpage')){ $fotos->endpage = $this->get('endpage'); }
		if($this->get('reven')){ $fotos->reven = $this->get('reven'); }
		
	 	//retorno das fotos pra variavel
		$array = $fotos->lista();
	 	$dados['portfolio'] = $array['lista'];
	 	$dados['paginacao'] = $array['paginacao'];
		$dados['numitems'] = $array['numitems'];

		
		//carrega view e envia dados para a tela
		$this->view('portfolio', $dados);
	}
		
}