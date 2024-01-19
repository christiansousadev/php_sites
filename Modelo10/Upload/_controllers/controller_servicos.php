<?php
class servicos extends controller {
	
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
		
		$dados['imagem_serv'] = $imagem->codigo('151565032051243');
		
		
		//carrega view e envia dados para a tela
		$this->view('servicos', $dados);
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
		//produtos
				
	 	$codigo = $this->get('codigo');

		$conexao = new mysql();
		$coisas = $conexao->Executar("SELECT * FROM servicos WHERE codigo='$codigo' ");
		$dados['data'] = $coisas->fetch_object();
		
		$dados['imagens'] = $servicos->imagens($codigo);
		
		
		//carrega view e envia dados para a tela
		$this->view('servicos.detalhes', $dados);
	}

}