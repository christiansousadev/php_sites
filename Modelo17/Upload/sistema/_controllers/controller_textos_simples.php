<?php

class textos_simples extends controller {
	
	protected $_modulo_nome = "Textos Simples";

	public function init(){
		$this->autenticacao();
		$this->nivel_acesso(70);
	}
	
	public function inicial(){
		
		$dados['_base'] = $this->base_layout();
		$dados['_titulo'] = $this->_modulo_nome;
		$dados['_subtitulo'] = "";
		
		$textos = new model_textos();
		$dados['lista'] = $textos->lista_simples();
		
		$this->view('textos_simples', $dados);
	}
	
	public function novo(){ 
		
		$dados['_base'] = $this->base_layout();
		$dados['_titulo'] = $this->_modulo_nome;
 		$dados['_subtitulo'] = "Novo";

 		$dados['aba_selecionada'] = "dados";

		$this->view('textos_simples.novo', $dados);
	}

	public function novo_grv(){		 

		$titulo = $this->post('titulo');
		$conteudo = $_POST['conteudo'];

		$this->valida($titulo);

		$codigo = $this->gera_codigo();

		$db = new mysql();
		$db->inserir("texto_simples", array(
			"codigo"=>"$codigo",
			"titulo"=>"$titulo",
			"conteudo"=>"$conteudo"
		));
	 	
		$this->irpara(DOMINIO.$this->_controller.'/alterar/codigo/'.$codigo);
	}
	
	public function alterar(){
		
		$dados['_base'] = $this->base_layout();
		$dados['_titulo'] = $this->_modulo_nome;
 		$dados['_subtitulo'] = "Alterar";
 		
 		$codigo = $this->get('codigo');
 		
 		$dados['aba_selecionada'] = "dados";
 		
 		$dados['acesso_alterar_titulo'] = true;
 		
 		$db = new mysql();
 		$exec = $db->Executar("SELECT * FROM texto_simples where codigo='$codigo' ");
		$dados['data'] = $exec->fetch_object();
 		

		$this->view('textos_simples.alterar', $dados);
	}

	public function alterar_grv(){
		
		$codigo = $this->post('codigo');
		$titulo = $this->post('titulo');
		$conteudo = $_POST['conteudo'];

		$this->valida($titulo);
		
		$db = new mysql();
		$db->alterar("texto_simples", array(
			"titulo"=>"$titulo",
			"conteudo"=>"$conteudo"
		), " codigo='$codigo' ");
 		

		$this->irpara(DOMINIO.$this->_controller.'/alterar/codigo/'.$codigo);		
	}

	public function apagar_varios(){
		
		$db = new mysql();
		$exec = $db->Executar("SELECT * FROM texto_simples ");
		while($data = $exec->fetch_object()){
			
			if($this->post('apagar_'.$data->id) == 1){				
				 
				$conexao = new mysql();
				$conexao->apagar("texto_simples", " id='$data->id' ");
				
			}
		}

		$this->irpara(DOMINIO.$this->_controller);
	}


}