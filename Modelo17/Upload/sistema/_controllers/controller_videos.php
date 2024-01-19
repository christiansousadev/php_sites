<?php
class videos extends controller {
	
	protected $_modulo_nome = "Vídeos";

	public function init(){
		$this->autenticacao();
		$this->nivel_acesso(67);
	}
	
	public function inicial(){
		
		$dados['_base'] = $this->base_layout();
		$dados['_titulo'] = $this->_modulo_nome;
		$dados['_subtitulo'] = "";
		
		// instancia
		$videos = new model_videos(); 	
		$dados['lista'] = $videos->lista();
		
		$this->view('videos', $dados);
	}
	
	public function novo(){
		
		$dados['_base'] = $this->base_layout();
		$dados['_titulo'] = $this->_modulo_nome;
 		$dados['_subtitulo'] = "Novo";
 		
 		$dados['aba_selecionada'] = "dados";
 	 	
 	 	// instancia
		$videos = new model_videos();

		$this->view('videos.novo', $dados);
	}
	
	public function novo_grv(){
		
		$titulo = $this->post('titulo');
		$video = $_POST['video'];

		$this->valida($titulo);
		$this->valida($video);
		
		$codigo = $this->gera_codigo();
		
		$db = new mysql();
		$db->inserir("videos", array(
			"codigo"=>"$codigo",
			"titulo"=>"$titulo",
			"video"=>"$video"
		));
		
	 	$ultid = $db->ultimo_id();

		$conexao = new mysql();
		$coisas = $conexao->Executar("SELECT * FROM videos_ordem order by id desc limit 1");
		$data = $coisas->fetch_object();

		if(isset($data->data)){
			$novaordem = $data->data.",".$ultid;
		} else {
			$novaordem = $ultid;
		}

		$db = new mysql();
		$db->inserir("videos_ordem", array(
			"data"=>"$novaordem"
		));

		$this->irpara(DOMINIO.$this->_controller.'/alterar/codigo/'.$codigo);
	}
	
	public function alterar(){
		
		$dados['_base'] = $this->base_layout();
		$dados['_titulo'] = $this->_modulo_nome;
 		$dados['_subtitulo'] = "Alterar";

 		// instancia
		$videos = new model_videos();

 		$codigo = $this->get('codigo');

		$dados['data'] = $videos->carrega($codigo);
		
		$this->view('videos.alterar', $dados);
	}

	public function alterar_grv(){
		
		$codigo = $this->post('codigo');
		$titulo = $this->post('titulo');
		$video = $_POST['video'];

		$this->valida($codigo);
		$this->valida($titulo);
		$this->valida($video);

		$db = new mysql();
		$db->alterar("videos", array(
			"titulo"=>"$titulo",
			"video"=>"$video"
		), " codigo='$codigo' ");
	 	
		$this->irpara(DOMINIO.$this->_controller.'/alterar/codigo/'.$codigo);		
	}

	public function ordem(){

		$codigo = $this->post('codigo');
		$list = $this->post('list');

		$output = array();
		parse_str($list, $output);
		$ordem = implode(',', $output['item']);
				
		$db = new mysql();
		$db->inserir("videos_ordem", array(
			"data"=>"$ordem"
		));

	}

	public function apagar_varios(){
		
		$db = new mysql();
		$exec = $db->Executar("SELECT * FROM videos ");
		while($data = $exec->fetch_object()){
			
			if($this->post('apagar_'.$data->id) == 1){				
				$conexao = new mysql();
				$conexao->apagar("videos", " codigo='$data->codigo' ");
			}
		}
		
		$this->irpara(DOMINIO.$this->_controller.'/inicial');		
	}

}