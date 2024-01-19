<?php

class pacotes extends controller {
	
	protected $_modulo_nome = "Pacotes";
	
	public function init(){
		$this->autenticacao();
		$this->nivel_acesso(71);
	}

	public function inicial(){
		
		$dados['_base'] = $this->base_layout();
		$dados['_titulo'] = $this->_modulo_nome;
		$dados['_subtitulo'] = "";
		
		$pacotes = new model_pacotes();		
		$dados['lista'] = $pacotes->lista();
		
		$this->view('pacotes', $dados);
	}

	public function novo(){
		
		$dados['_base'] = $this->base_layout();
		$dados['_titulo'] = $this->_modulo_nome;
		$dados['_subtitulo'] = "Novo";

		$dados['aba_selecionada'] = "dados";

 		//pacotes
		$pacotes = new model_pacotes();
		$dados['lista_grupos'] = $pacotes->lista_grupos();
		
		$this->view('pacotes.novo', $dados);
	}

	public function novo_grv(){
		
		$valores = new model_valores();

		$titulo = $this->post('titulo');
		$valor = $this->post('valor');
		$valor_tratado = $valores->trata_valor_banco($valor);

		$saida = $this->post('saida');
		$descricao = $_POST['conteudo'];

		$this->valida($titulo);
		
		$codigo = $this->gera_codigo();

		$db = new mysql();
		$db->inserir("pacotes", array(
			"codigo"=>"$codigo", 
			"titulo"=>"$titulo",
			"valor"=>"$valor_tratado",
			"descricao"=>"$descricao",
			"saida"=>"$saida"
		));

		/////////////////////////////////////////////////
		// selecoes

		$conexao = new mysql();
		$coisas = $conexao->Executar("SELECT * FROM pacotes_grupos ");
		while($data = $coisas->fetch_object()){

			if( $this->post('grupo_'.$data->id) ){

				$db = new mysql();
				$db->inserir("pacotes_grupos_sel", array(
					"pacote"=>$codigo,
					"grupo"=>$data->codigo
				));

			}
		}

		///////////////////////////////////////////
		// cria destinos

		for ($i=1; $i < 30; $i++) {

			if($this->post('destino_'.$i)){

				$db = new mysql();
				$db->inserir("pacotes_destinos", array(
					"pacote"=>$codigo,
					"nome"=>$this->post('destino_'.$i),
					"ordem"=>$i
				));
			}
		}

		$this->irpara(DOMINIO.$this->_controller.'/alterar/aba/imagem/codigo/'.$codigo);
	}

	public function alterar(){

		$dados['_base'] = $this->base_layout();
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
		$exec = $db->Executar("SELECT * FROM pacotes where codigo='$codigo' ");
		$dados['data'] = $exec->fetch_object();

		$pacotes = new model_pacotes();

		$dados['lista_grupos'] = $pacotes->lista_grupos($codigo); 

		$valores = new model_valores();

		$dados['valor_tratado'] = $valores->trata_valor($dados['data']->valor);


		// destions
		$lista_destinos = array();
		for ($i=1; $i < 30; $i++) {

			$lista_destinos[$i]['nome'] = '';			
			
			$db = new mysql();
			$exec = $db->Executar("SELECT * FROM pacotes_destinos where pacote='$codigo' AND ordem='$i' ");
			if($exec->num_rows != 0){

				$data = $exec->fetch_object();
				$lista_destinos[$i]['nome'] = $data->nome;

			}
		}
		$dados['destinos'] = $lista_destinos;


 		//imagens
		$conexao = new mysql();
		$coisas_ordem = $conexao->Executar("SELECT * FROM pacotes_imagem_ordem WHERE codigo='$codigo' ORDER BY id desc limit 1");
		$data_ordem = $coisas_ordem->fetch_object();

		$n = 0;
		$imagens = array();
		if(isset($data_ordem->data)){

			$order = explode(',', $data_ordem->data); 

			foreach($order as $key => $value){

				$conexao = new mysql();
				$coisas_img = $conexao->Executar("SELECT * FROM pacotes_imagem WHERE id='$value'");
				$data_img = $coisas_img->fetch_object();                                

				if(isset($data_img->imagem)){

					$conexao = new mysql();
					$coisas_leg = $conexao->Executar("SELECT * FROM pacotes_imagem_legenda WHERE id_img='$value' ");
					$data_leg = $coisas_leg->fetch_object();

					if(isset($data_leg->legenda)){
						$imagens[$n]['legenda'] = $data_leg->legenda;
					} else {
						$imagens[$n]['legenda'] = "";
					}

					$imagens[$n]['id'] = $data_img->id;
					$imagens[$n]['imagem_p'] = PASTA_CLIENTE.'img_pacotes_p/'.$codigo.'/'.$data_img->imagem;
					$imagens[$n]['imagem_g'] = PASTA_CLIENTE.'img_pacotes_g/'.$codigo.'/'.$data_img->imagem;

					$n++;
				}
			}
		}
		$dados['imagens'] = $imagens;       

		$this->view('pacotes.alterar', $dados);
	}

	public function alterar_grv(){

		$codigo = $this->post('codigo');

		$valores = new model_valores();

		$titulo = $this->post('titulo');
		$valor = $this->post('valor');
		$valor_tratado = $valores->trata_valor_banco($valor);

		$saida = $this->post('saida');
		$descricao = $_POST['conteudo'];

		$this->valida($titulo);
		
		
		$db = new mysql();
		$db->alterar("pacotes", array(
			"titulo"=>"$titulo",
			"valor"=>"$valor_tratado",
			"descricao"=>"$descricao",
			"saida"=>"$saida"
		), " codigo='$codigo' ");


		/////////////////////////////////////////////////
		// selecoes

		$conexao = new mysql();
		$coisas = $conexao->Executar("SELECT * FROM pacotes_grupos ");
		while($data = $coisas->fetch_object()){

			if( $this->post('grupo_'.$data->id) ){

				$db = new mysql();
				$db->inserir("pacotes_grupos_sel", array(
					"pacote"=>$codigo,
					"grupo"=>$data->codigo
				));

			} else {

				$conexao = new mysql();
				$conexao->apagar("pacotes_grupos_sel", " grupo='".$data->codigo."' AND pacote='$codigo' ");

			}

		}

		/////////////////////////////////////////////////
		// destinos

		for ($i=1; $i < 30; $i++) {

			$db = new mysql();
			$exec = $db->Executar("SELECT * FROM pacotes_destinos where pacote='$codigo' AND ordem='$i' ");
			$confere = $exec->num_rows;

			if($this->post('destino_'.$i)){

				if($confere == 1){

					$db = new mysql();
					$db->alterar("pacotes_destinos", array(
						"nome"=>$this->post('destino_'.$i)
					), " pacote='$codigo' AND ordem='$i' ");

				} else {

					$db = new mysql();
					$db->inserir("pacotes_destinos", array(
						"pacote"=>$codigo,
						"nome"=>$this->post('destino_'.$i),
						"ordem"=>$i
					));

				}

			} else {
				if($confere != 0){
					
					$db = new mysql();
					$db->apagar("pacotes_destinos", " pacote='$codigo' AND ordem='$i' ");
					
				}
			}
		}


		$this->irpara(DOMINIO.$this->_controller.'/alterar/codigo/'.$codigo);		
	}

	public function apagar_imagem(){

		$codigo = $this->get('codigo');
		$id = $this->get('id');

		if($id){

			$db = new mysql();
			$exec = $db->executar("SELECT * FROM pacotes_imagem where id='$id' ");
			$data = $exec->fetch_object();

			if($data->imagem){
				unlink('arquivos/img_pacotes_g/'.$codigo.'/'.$data->imagem);
				unlink('arquivos/img_pacotes_p/'.$codigo.'/'.$data->imagem);
			}

			$conexao = new mysql();
			$conexao->apagar("pacotes_imagem", " id='$id' ");
		}

		$this->irpara(DOMINIO.$this->_controller.'/alterar/codigo/'.$codigo.'/aba/imagem');
	}

	public function ordenar_imagem(){

		$codigo = $this->post('codigo');
		$list = $this->post('list');

		$this->valida($codigo);
		$this->valida($list);

		$output = array();
		parse_str($list, $output);
		$ordem = implode(',', $output['item']);

		$db = new mysql();
		$db->inserir("pacotes_imagem_ordem", array(
			"codigo"=>"$codigo",
			"data"=>"$ordem"
		));

	}

	public function legenda(){

		$dados['_base'] = $this->base_layout();

		$id = $this->get('id');
		$codigo = $this->get('codigo');

		$dados['codigo'] = $codigo;
		$dados['id'] = $id;

		$db = new mysql();
		$exec = $db->executar("SELECT * FROM pacotes_imagem_legenda where id_img='$id' ");
		$data = $exec->fetch_object();

		if(isset($data->id)){
			$dados['legenda'] = $data->legenda;
		} else {
			$dados['legenda'] = '';
		}

		$this->view('pacotes.legenda', $dados);
	}

	public function legenda_grv(){

		$id = $this->post('id');
		$legenda = $this->post('legenda');
		$codigo = $this->post('codigo');

		$db = new mysql();
		$exec = $db->executar("SELECT * FROM pacotes_imagem_legenda where id_img='$id' ");
		$data = $exec->fetch_object();

		if(isset($data->id)){
			$db = new mysql();
			$db->alterar("pacotes_imagem_legenda", array(
				"legenda"=>"$legenda"
			), " id='$data->id' ");
		} else {
			$db = new mysql();
			$db->inserir("pacotes_imagem_legenda", array(
				"id_img"=>"$id",
				"legenda"=>"$legenda"
			));
		}

		$this->irpara(DOMINIO.$this->_controller.'/alterar/codigo/'.$codigo.'/aba/imagem');
	}

	public function apagar_varios(){

		$db = new mysql();
		$exec = $db->Executar("SELECT * FROM pacotes ");
		while($data = $exec->fetch_object()){

			if($this->post('apagar_'.$data->id) == 1){

				$db = new mysql();
				$exec_img = $db->executar("SELECT * FROM pacotes_imagem where codigo='$data->codigo' ");
				while($data_img = $exec_img->fetch_object()){

					if($data_img->imagem){
						unlink('arquivos/img_pacotes_g/'.$data->codigo.'/'.$data_img->imagem);
						unlink('arquivos/img_pacotes_p/'.$data->codigo.'/'.$data_img->imagem);
					}

				}
				
				$conexao = new mysql();
				$conexao->apagar("pacotes_imagem", " codigo='$data->codigo' ");

				$conexao = new mysql();
				$conexao->apagar("pacotes_destinos", " pacote='$data->codigo' ");

				$conexao = new mysql();
				$conexao->apagar("pacotes", " codigo='$data->codigo' ");

			}
		}

		$this->irpara(DOMINIO.$this->_controller.'/inicial');

	}



	public function grupos(){

		$dados['_base'] = $this->base_layout();
		$dados['_titulo'] = $this->_modulo_nome;
		$dados['_subtitulo'] = "Grupos";

		$pacotes = new model_pacotes();
		$dados['lista_grupos'] = $pacotes->lista_grupos(); 

		$this->view('pacotes.grupos', $dados);
	}

	public function novo_grupo(){

		$dados['_base'] = $this->base_layout();
		$dados['_titulo'] = $this->_modulo_nome;
		$dados['_subtitulo'] = "Novo Grupo";

		$this->view('pacotes.grupos.novo', $dados);
	}

	public function novo_grupo_grv(){

		$titulo = $this->post('titulo');		
		$this->valida($titulo);

		$codigo = $this->gera_codigo();

		$db = new mysql();
		$db->inserir("pacotes_grupos", array(
			"codigo"=>"$codigo",
			"titulo"=>"$titulo"
		));

		$ultid = $db->ultimo_id();

		$conexao = new mysql();
		$coisas = $conexao->Executar("SELECT * FROM pacotes_grupos_ordem order by id desc limit 1");
		$data = $coisas->fetch_object();

		if(isset($data->data)){
			$novaordem = $data->data.",".$ultid;
		} else {
			$novaordem = $ultid;
		}

		$db = new mysql();
		$db->inserir("pacotes_grupos_ordem", array(
			"id_pai"=>"0",
			"data"=>"$novaordem"
		));

		$this->irpara(DOMINIO.$this->_controller.'/alterar_grupo/codigo/'.$codigo.'/aba/imagem');		
	}

	public function alterar_grupo(){

		$dados['_base'] = $this->base_layout();
		$dados['_titulo'] = $this->_modulo_nome;
		$dados['_subtitulo'] = "Alterar Grupo";

		$aba = $this->get('aba');
		if($aba){
			$dados['aba_selecionada'] = $aba;
		} else {
			$dados['aba_selecionada'] = 'dados';
		}

		$codigo = $this->get('codigo');

		$db = new mysql();
		$exec = $db->executar("SELECT * FROM pacotes_grupos WHERE codigo='$codigo' ");
		$dados['data'] = $exec->fetch_object();

		if(!isset($dados['data']) ) {
			$this->irpara(DOMINIO.$this->_controller.'/grupos');
		}

		$this->view('pacotes.grupos.alterar', $dados);
	}

	public function alterar_grupo_grv(){

		$codigo = $this->post('codigo');
		$titulo = $this->post('titulo');

		$this->valida($codigo);
		$this->valida($titulo);

		$db = new mysql();
		$db->alterar("pacotes_grupos", array(
			"titulo"=>"$titulo"
		), " codigo='$codigo' ");

		$this->irpara(DOMINIO.$this->_controller.'/grupos');
	}

	public function apagar_grupo(){

		$codigo = $this->get('codigo');

		$db = new mysql();
		$exec = $db->Executar("SELECT * FROM pacotes_grupos where codigo='$codigo' ");

		if($exec->num_rows == 1){

			$data = $exec->fetch_object();

			$conexao = new mysql();
			$conexao->apagar("pacotes_grupos", " id='$data->id' ");

		}

		$this->irpara(DOMINIO.$this->_controller.'/grupos');
	}

	public function salvar_ordem_grupos(){

		$ordem = stripcslashes($_POST['ordem']);		 

		if($ordem){

			$json = json_decode($ordem, true);

			function converte_array_para_banco($jsonArray, $id_pai = 0) {

				$lista = "";

				foreach ($jsonArray as $subArray) {

					$lista .= $subArray['id'].",";

					if (isset($subArray['children'])) {
						converte_array_para_banco($subArray['children'], $subArray['id']);
					} else {
						$pai_remover = $subArray['id'];
						$db = new mysql();
						$db->apagar("pacotes_grupos_ordem", " id_pai='$pai_remover' ");
					}

				}

				$novaordem = substr($lista,0,-1);

				$db = new mysql();
				$db->inserir("pacotes_grupos_ordem", array(
					"id_pai"=>"$id_pai",
					"data"=>"$novaordem"
				));

			}
			converte_array_para_banco($json);

			$this->irpara(DOMINIO.$this->_controller.'/grupos');

		} else {
			$this->msg('Ocorreu um erro ao carregar ordem!');
			$this->volta(1);
		}
	}



	public function upload(){

		//carrega normal
		$dados['_base'] = $this->base_layout();

		$codigo = $this->get('codigo');
		$dados['codigo'] = $codigo;

		$this->view('enviar_imagens', $dados);
	}

	public function imagem_redimencionada(){

		$codigo = $this->post('codigo');

		//pasta onde vai ser salvo os arquivos
		$pasta = "pacotes";
		$diretorio_g = "arquivos/img_".$pasta."_g/".$codigo."/";
		$diretorio_p = "arquivos/img_".$pasta."_p/".$codigo."/";

		//confere e cria pasta se necessario
		if(!is_dir($diretorio_g)) {
			mkdir($diretorio_g);
		}
		if(!is_dir($diretorio_p)) {
			mkdir($diretorio_p);
		}

		//carrega model de gestao de imagens
		$img = new model_arquivos_imagens();

		// Recuperando imagem em base64
		// Exemplo: data:image/png;base64,AAAFBfj42Pj4
		$imagem = $_POST['imagem'];
		$nome_original = $this->post('nomeimagem');

		$nome_foto  = $img->trata_nome($nome_original);
		$extensao = $img->extensao($nome_original);

		// Separando tipo dos dados da imagem
		// $tipo: data:image/png
		// $dados: base64,AAAFBfj42Pj4
		list($tipo, $dados) = explode(';', $imagem);

		// Isolando apenas o tipo da imagem
		// $tipo: image/png
		list(, $tipo) = explode(':', $tipo);

		// Isolando apenas os dados da imagem
		// $dados: AAAFBfj42Pj4
		list(, $dados) = explode(',', $dados);

		// Convertendo base64 para imagem
		$dados = base64_decode($dados);

		// Gerando nome aleatório para a imagem
		$nome = md5(uniqid(time()));

		// Salvando imagem em disco
		if(file_put_contents($diretorio_g.$nome_foto, $dados)) {			

				//confere e se jpg reduz a miniatura
			if( ($extensao == "jpg") OR ($extensao == "jpeg") OR ($extensao == "JPG") OR ($extensao == "JPEG") ){

				copy($diretorio_g.$nome_foto, $diretorio_p.$nome_foto);

					// foto grande
				$largura_g = 1200;
				$altura_g = $img->calcula_altura_jpg($tmp_name, $largura_g);
					// foto minuatura
				$largura_p = 300;
				$altura_p = $img->calcula_altura_jpg($tmp_name, $largura_p);
					//redimenciona
				$img->jpg($diretorio_g.$nome_foto, $largura_g , $altura_g , $diretorio_g.$nome_foto);
				$img->jpg($diretorio_p.$nome_foto, $largura_p , $altura_p , $diretorio_p.$nome_foto);

			} else {

					//caso nao possa redimencionar copia a imagem original para a pasta de miniaturas
				copy($diretorio_g.$nome_foto, $diretorio_p.$nome_foto);

			} 

				//grava banco
			$db = new mysql();
			$db->inserir("pacotes_imagem", array(
				"codigo"=>"$codigo",
				"imagem"=>"$nome_foto"
			));	
			$ultid = $db->ultimo_id();

				//ordem
			$db = new mysql();
			$exec = $db->executar("SELECT * FROM pacotes_imagem_ordem where codigo='$codigo' order by id desc limit 1");
			$data = $exec->fetch_object();

			if(isset($data->data)){
				$novaordem = $data->data.",".$ultid;
			} else {
				$novaordem = $ultid;
			}

			$db = new mysql();
			$db->inserir("pacotes_imagem_ordem", array(
				"codigo"=>"$codigo",
				"data"=>"$novaordem"
			));

		}

	}

	public function imagem_manual(){

		$arquivo = $_FILES['arquivo'];
		$tmp_name = $_FILES['arquivo']['tmp_name'];

		$codigo = $this->get('codigo');		

		$nome_original = $_FILES['arquivo']['name'];

		//definições de pasta
		$pasta = "pacotes";
		$diretorio_g = "arquivos/img_".$pasta."_g/".$codigo."/";
		$diretorio_p = "arquivos/img_".$pasta."_p/".$codigo."/";

		if(!is_dir($diretorio_g)) {
			mkdir($diretorio_g);
		}
		if(!is_dir($diretorio_p)) {
			mkdir($diretorio_p);
		}

		$img = new model_arquivos_imagens();

		if($tmp_name) {

			$nome_foto  = $img->trata_nome($nome_original);
			$extensao = $img->extensao($nome_original);

			if(copy($tmp_name, $diretorio_g.$nome_foto)){

				//confere e se jpg reduz a miniatura
				if( ($extensao == "jpg") OR ($extensao == "jpeg") OR ($extensao == "JPG") OR ($extensao == "JPEG") ){

					copy($diretorio_g.$nome_foto, $diretorio_p.$nome_foto);

					// foto grande
					$largura_g = 1200;
					$altura_g = $img->calcula_altura_jpg($tmp_name, $largura_g);
					// foto minuatura
					$largura_p = 300;
					$altura_p = $img->calcula_altura_jpg($tmp_name, $largura_p);
					//redimenciona
					$img->jpg($diretorio_g.$nome_foto, $largura_g , $altura_g , $diretorio_g.$nome_foto);
					$img->jpg($diretorio_p.$nome_foto, $largura_p , $altura_p , $diretorio_p.$nome_foto);

				} else {

					//caso nao possa redimencionar copia a imagem original para a pasta de miniaturas
					copy($diretorio_g.$nome_foto, $diretorio_p.$nome_foto);

				} 

				//grava banco
				$db = new mysql();
				$db->inserir("pacotes_imagem", array(
					"codigo"=>"$codigo",
					"imagem"=>"$nome_foto"
				));
				$ultid = $db->ultimo_id();

				//ordem
				$db = new mysql();
				$exec = $db->executar("SELECT * FROM pacotes_imagem_ordem where codigo='$codigo' order by id desc limit 1");
				$data = $exec->fetch_object();

				if(isset($data->data)){
					$novaordem = $data->data.",".$ultid;
				} else {
					$novaordem = $ultid;
				}

				$db = new mysql();
				$db->inserir("pacotes_imagem_ordem", array(
					"codigo"=>"$codigo",
					"data"=>"$novaordem"
				));

			} else {
				$this->msg('Erro ao gravar imagem!');				
			}

			$this->irpara(DOMINIO.$this->_controller."/alterar/codigo/".$codigo."/aba/imagem");
		}

	}


//termina classe
}
