<?php

class acordeon extends controller {
	
	protected $_modulo_nome = "Acordeão/Expansivo";

	public function init(){
		$this->autenticacao();
		$this->nivel_acesso(120);
	}
	
	public function inicial(){
		
		$dados['_base'] = $this->base();
		$dados['_titulo'] = $this->_modulo_nome;
		$dados['_subtitulo'] = "";
		
		$acordeon = new model_acordeon();
		$dados['grupos'] = $acordeon->lista_grupos();

		$grupo = $this->get('grupo');
		if(!$grupo){
			if(isset($dados['grupos'][0]['codigo'])){
				$grupo = $dados['grupos'][0]['codigo'];
			} else {
				$grupo = 0;
			}
		}

		$dados['grupo_selecionado'] = $grupo;
		$dados['lista'] = $acordeon->lista($grupo);

		$this->view('acordeon', $dados);
	}

	public function ordem(){
		
		$grupo = $this->post('grupo');
		$list = $_POST['list'];

		if($grupo AND $list){

			$output = array();
			parse_str($list, $output);
			$ordem = implode(',', $output['item']);

			$db = new mysql();
			$db->apagar("acordeon_ordem", " grupo='$grupo' ");

			$db = new mysql();
			$db->inserir("acordeon_ordem", array(
				"grupo"=>$grupo,
				"data"=>$ordem
			));

		}
	}

	public function novo(){
		
		$dados['_base'] = $this->base();
		$dados['_titulo'] = $this->_modulo_nome;
		$dados['_subtitulo'] = "Novo";
		
		$dados['aba_selecionada'] = "dados";
		
		$acordeon = new model_acordeon();
		$dados['grupos'] = $acordeon->lista_grupos();

		$this->view('acordeon.novo', $dados);
	}

	public function novo_grv(){
		
		$titulo = $this->post('titulo');
		$grupo = $this->post('grupo');

		$this->valida($titulo);
		$this->valida($grupo);

		$codigo = $this->gera_codigo();

		$db = new mysql();
		$db->inserir("acordeon", array(
			"codigo"=>"$codigo",
			"grupo"=>"$grupo",
			"titulo"=>"$titulo"
		));

		$ultid = $db->ultimo_id();

		$db = new mysql();
		$exec = $db->executar("SELECT * FROM acordeon_ordem WHERE grupo='$grupo' order by id desc limit 1");
		$data = $exec->fetch_object();

		if(isset($data->data)){
			$novaordem = $data->data.",".$ultid;
		} else {
			$novaordem = $ultid;
		}

		$db = new mysql();
		$db->inserir("acordeon_ordem", array(
			"grupo"=>$grupo,
			"data"=>$novaordem
		));

		$this->irpara(DOMINIO.$this->_controller.'/alterar/aba/imagem/codigo/'.$codigo);
	}
	
	public function alterar(){
		
		$dados['_base'] = $this->base();
		$dados['_titulo'] = $this->_modulo_nome;
		$dados['_subtitulo'] = "Alterar";
		
		$codigo = $this->get('codigo');
		
		$aba = $this->get('aba');
		if($aba){
			$dados['aba_selecionada'] = $aba;
		} else {
			$dados['aba_selecionada'] = 'dados';
		}
		
		$db = new mysql();
		$exec = $db->Executar("SELECT * FROM acordeon where codigo='$codigo' ");
		$dados['data'] = $exec->fetch_object();
		
		$this->view('acordeon.alterar', $dados);
	}
	
	public function alterar_grv(){
		
		$codigo = $this->post('codigo');
		$titulo = $this->post('titulo');
		$previa = $this->post('previa');
		$conteudo = $_POST['conteudo']; 
		
		$this->valida($codigo);
		$this->valida($titulo);
		
		$db = new mysql();
		$db->alterar("acordeon", array(
			"titulo"=>"$titulo",
			"previa"=>"$previa",
			"conteudo"=>"$conteudo"
		), " codigo='$codigo' ");

		$this->irpara(DOMINIO.$this->_controller.'/alterar/codigo/'.$codigo);		
	}

	public function apagar_varios(){
		
		$db = new mysql();
		$exec = $db->Executar("SELECT * FROM acordeon ");
		while($data = $exec->fetch_object()){
			
			if($this->post('apagar_'.$data->id) == 1){ 

				if($data->imagem){
					unlink('../arquivos/img_acordeon/'.$data->imagem); 
				}
				
				$conexao = new mysql();
				$conexao->apagar("acordeon", " codigo='$data->codigo' ");
				
			}
		}
		
		$this->irpara(DOMINIO.$this->_controller.'/inicial');		
	}

	public function imagem(){

		$arquivo_original = $_FILES['arquivo'];
		$tmp_name = $_FILES['arquivo']['tmp_name'];

		//carrega model de gestao de imagens
		$arquivo = new model_arquivos_imagens();
		// Instancia
		$acordeon = new model_acordeon();		

		$codigo = $this->get('codigo');

		$diretorio = "../arquivos/img_acordeon/";

		if(!$arquivo->filtro($arquivo_original)){ $this->msg('Arquivo com formato inválido ou inexistente!'); $this->volta(1); } else {
			
			//pega a exteção
			$nome_original = $arquivo_original['name'];
			$extensao = $arquivo->extensao($nome_original);
			$nome_arquivo  = $arquivo->trata_nome($nome_original);
			
			if(copy($tmp_name, $diretorio.$nome_arquivo)){
				
				$db = new mysql();
				$db->alterar("acordeon", array(
					"imagem"=>"$nome_arquivo"
				), " codigo='$codigo' ");
				
				$this->irpara(DOMINIO.$this->_controller.'/alterar/codigo/'.$codigo.'/aba/imagem');

			} else {
				
				$this->msg('Erro ao gravar imagem!');
				$this->irpara(DOMINIO.$this->_controller."/alterar/codigo/".$codigo."/aba/imagem");
				
			}

		}
		
	}

	public function apagar_imagem(){
		
		$codigo = $this->get('codigo');
		
		if($codigo){
			
			$db = new mysql();
			$exec = $db->Executar("SELECT * FROM acordeon WHERE codigo='$codigo' ");
			$data = $exec->fetch_object();

			if($data->imagem){
				unlink('../arquivos/img_acordeon/'.$data->imagem);
			}
			//grava banco
			$db = new mysql();
			$db->alterar("acordeon", array(
				"imagem"=>""
			), " codigo='$codigo' ");
			
		}
		
		$this->irpara(DOMINIO.$this->_controller.'/alterar/codigo/'.$codigo.'/aba/imagem');
	}


	// grupos


	public function grupos(){
		
		$dados['_base'] = $this->base();
		$dados['_titulo'] = $this->_modulo_nome;
		$dados['_subtitulo'] = "Grupos";

		// Instancia
		$acordeon = new model_acordeon();
		
		$dados['grupos'] = $acordeon->lista_grupos();
		
		$this->view('acordeon.grupos', $dados);
	}

	public function grupos_novo(){
		
		$dados['_base'] = $this->base();
		$dados['_titulo'] = $this->_modulo_nome;
		$dados['_subtitulo'] = "Novo Grupo";

		$this->view('acordeon.grupos.novo', $dados);
	}

	public function grupos_novo_grv(){

		$titulo = $this->post('titulo');

		$this->valida($titulo);
		
		// Instancia
		$acordeon = new model_acordeon();

		$codigo = $this->gera_codigo();

		$db = new mysql();
		$db->inserir('acordeon_grupos', array(
			'codigo'=>$codigo,
			'titulo'=>$titulo
		));

		// layout
		$layout = new model_layout();
		$tipo = "acordeon";
		$titulo_pagina = "Acordeão/Expansivo - $titulo";
		$layout->adicionar_pagina($codigo, $titulo_pagina, $tipo);
		$layout->adiciona_cores($tipo, $codigo);
		
		$this->irpara(DOMINIO.$this->_controller.'/grupos');		
	}

	public function grupos_alterar(){

		$dados['_base'] = $this->base();
		$dados['_titulo'] = $this->_modulo_nome;
		$dados['_subtitulo'] = "Alterar Grupo";

		$codigo = $this->get('codigo');

		if(!$codigo){
			echo "Item inválido!";
			exit;
		}

		$acordeon = new model_acordeon();
		$dados['data'] = $acordeon->carrega_grupo($codigo);

		$layout = new model_layout();
		$dados['cores'] = $layout->lista_cores($codigo);
		
		$this->view('acordeon.grupos.alterar', $dados);
	}

	public function grupos_alterar_grv(){
		
		$codigo = $this->post('codigo');
		$titulo = $this->post('titulo');
		$mostrar_titulo = $this->post('mostrar_titulo'); 
		
		$this->valida($codigo);
		$this->valida($titulo);

		$db = new mysql();
		$db->alterar("acordeon_grupos", array(
			'titulo'=>$titulo,
			'mostrar_titulo'=>$mostrar_titulo
		), " codigo='$codigo' ");
		
		
		// layout
		$layout = new model_layout();
		$tipo = "acordeon";
		$titulo_pagina = "Acordeão/Expansivo - $titulo";
		$layout->altera_paginas($codigo, $titulo_pagina);
		$layout->adiciona_cores($tipo, $codigo);

		$cores = $layout->lista_cores($codigo);
		foreach ($cores as $key => $value) {
			$cor_nova = $this->post('cor_'.$value['id']);
			if($cor_nova){
				$db = new mysql();
				$db->alterar("layout_itens_cores_sel", array(
					'cor'=>$cor_nova
				), " id='".$value['id']."' ");
			}
		}

		$this->irpara(DOMINIO.$this->_controller.'/grupos');		
	}

	public function grupos_apagar(){
		
		// Instancia
		$acordeon = new model_acordeon();

		foreach ($acordeon->lista_grupos() as $key => $value) {
			
			if($this->post('apagar_'.$value['id']) == $value['codigo']){
				
				$db = new mysql();
				$db->apagar('acordeon_grupos', " codigo='".$value['codigo']."' ");

				$db = new mysql();
				$db->apagar('acordeon', " grupo='".$value['codigo']."' ");
				
				$db = new mysql();
				$db->apagar('acordeon_ordem', " grupo='".$value['codigo']."' ");
				
				// layout
				$layout = new model_layout(); 
				$layout->apagar_pagina($value['codigo']);
				$layout->apagar_cores($value['codigo']);

			}
		}

		$this->irpara(DOMINIO.$this->_controller.'/grupos');		
	}

//termina classe
}