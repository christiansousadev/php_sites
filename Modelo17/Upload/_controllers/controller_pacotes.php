<?php
class pacotes extends controller {
	
	public function init(){		
	}
	
	public function inicial(){				
		$this->irpara(DOMINIO.'pacotes/lista/');
	}
	
	public function lista($categoria_interna = null){
		
		$dados = array();
		$dados['_base'] = $this->base();
		$dados['objeto'] = DOMINIO.$this->_controller.'/';
		$dados['controller'] = $this->_controller;
		
		//banner
		$banners = new model_banners();
		$dados['banners'] = $banners->lista('147502866622777');

		// categoria
		$dados['categoria_codigo'] = '';
		if($categoria_interna){
			$dados['categoria_codigo'] = $categoria_interna;
		}
		if($this->get('categoria')){
			$dados['categoria_codigo'] = $this->get('categoria');
		}

		//carrega modulo de pacotes
		$pacotes = new model_pacotes();
		$pacotes->perpage = 6;

		//define variaveis
		
		//gets caso for preenchido define a configuraçao
		if($this->get('busca')){ $pacotes->busca = $this->get('busca'); }
		if($dados['categoria_codigo']){ $pacotes->categoria = $dados['categoria_codigo']; }
		if($this->get('startitem')){ $pacotes->startitem = $this->get('startitem'); }
		if($this->get('startpage')){ $pacotes->startpage = $this->get('startpage'); }
		if($this->get('endpage')){ $pacotes->endpage = $this->get('endpage'); }
		if($this->get('reven')){ $pacotes->reven = $this->get('reven'); }
		
		$pacotesarray = $pacotes->lista();
		$dados['lista'] = $pacotesarray['lista'];
		$dados['paginacao'] = $pacotesarray['paginacao'];
		$dados['numitems'] = $pacotesarray['numitems'];
		
		//lista categorias para lateral 
		$dados['categorias'] = $pacotes->lista_grupos();		 


		//carrega view e envia dados para a tela
		$this->view('pacotes', $dados);
	}

	public function detalhes(){

		$dados = array();
		$dados['_base'] = $this->base();
		$dados['objeto'] = DOMINIO.$this->_controller.'/';
		$dados['controller'] = $this->_controller;

		//banner
		$banners = new model_banners();
		$dados['banners'] = $banners->lista('147502866622777');
		
		$valores = new model_valores();
		$pacotes = new model_pacotes();
		$dados['categorias'] = $pacotes->lista_grupos();	
		$dados['categoria_codigo'] = '';

		// pacotes
		$id = $this->get('id');
		
		//Pega dados da pacotes
		$db = new mysql();
		$exec = $db->executar("select * from pacotes WHERE id='$id' ");
		$dados['data'] = $exec->fetch_object();
		

		$dados['valor'] = $valores->trata_valor($dados['data']->valor);
		
		//codigo da pacotes
		$codigo = $dados['data']->codigo;
		
		$dados['destinos'] = $pacotes->destinos($codigo);
		
		//endereco da pacotes
		$postagem = new model_pacotes();		
		$dados['endereco_pacotes'] = DOMINIO."pacotes/detalhes/id/".$dados['data']->id."/pacotes/".$postagem->trata_url_titulo($dados['data']->titulo);
		
		//pega imagens
		$imagens = array();
		$conexao = new mysql();
		$coisas_ordem = $conexao->Executar("SELECT * FROM pacotes_imagem_ordem WHERE codigo='$codigo' ORDER BY id desc limit 1");
		$data_ordem = $coisas_ordem->fetch_object();
		
		if(isset($data_ordem->data)){
			
			$order = explode(',', $data_ordem->data);
			
			$ii = 0;
			foreach($order as $key => $value){
				
				$conexao = new mysql();
				$coisas_img = $conexao->Executar("SELECT id, imagem FROM pacotes_imagem WHERE id='$value'");
				$data_img = $coisas_img->fetch_object();

				if(isset($data_img->imagem)){
					
					if($ii == 0){
						$dados['imagem_principal'] = PASTA_CLIENTE."img_pacotes_g/".$codigo."/".$data_img->imagem;
					}
					
					$imagens[$ii]['id'] = $data_img->id;
					$imagens[$ii]['imagem_g'] = PASTA_CLIENTE."img_pacotes_g/".$codigo."/".$data_img->imagem;
					$imagens[$ii]['imagem_p'] = PASTA_CLIENTE."img_pacotes_p/".$codigo."/".$data_img->imagem;
					
					$ii++;
				}

			}
		}
		$dados['imagens'] = $imagens;
		

		//carrega view e envia dados para a tela
		$this->view('pacotes.detalhes', $dados);
	}
	
}