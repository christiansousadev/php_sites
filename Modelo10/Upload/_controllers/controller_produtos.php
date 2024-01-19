<?php
class produtos extends controller {
	
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
		
		//produtos
		$produtos = new model_produtos();
		
	 	$categoria = $this->get('categoria');
	 	
		$dados['categorias'] = $produtos->lista_grupos($categoria);
		
		if(!$categoria){
			if(isset($dados['categorias'][0]['codigo'])){
				$categoria = $dados['categorias'][0]['codigo'];
				$dados['categorias'] = $produtos->lista_grupos($categoria);
			} else {
				$categoria = false;
			}
		}
		$dados['categoria_selecionada'] = $categoria;

		$dados['produtos'] = $produtos->lista($categoria);
		
		
		//carrega view e envia dados para a tela
		$this->view('produtos', $dados);
	}

	public function detalhes(){

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
		
		//carrega texto 
		$db = new model_texto();
		$dados['conteudo'] = $db->conteudo('150832112272405');
		
		//produtos
		$produtos = new model_produtos();
		
	 	$codigo = $this->get('codigo');
	 	
		$dados['categorias'] = $produtos->lista_grupos();

		$conexao = new mysql();
		$coisas = $conexao->Executar("SELECT * FROM produtos WHERE codigo='$codigo' ");
		$dados['data'] = $coisas->fetch_object();

		$dados['categoria_selecionada'] = $dados['data']->grupo;
		$dados['imagens'] = $produtos->imagens($codigo);
		
		
		//carrega view e envia dados para a tela
		$this->view('produtos.detalhes', $dados);
	}
	
}