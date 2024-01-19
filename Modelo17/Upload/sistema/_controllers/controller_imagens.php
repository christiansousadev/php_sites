<?php

class imagens extends controller {
	
	protected $_modulo_nome = "Imagens";

	public function init(){
		$this->autenticacao();
		$this->nivel_acesso(28);
	}

	public function inicial(){
		
		$dados['_base'] = $this->base_layout();
		$dados['_titulo'] = $this->_modulo_nome;
		$dados['_subtitulo'] = "";

		$lista = array();

		$conexao = new mysql();
		$coisas = $conexao->executar("SELECT * FROM imagem ORDER BY titulo asc");
		$n = 0;
		while($data = $coisas->fetch_object()){

			$lista[$n]['id'] = $data->id;
			$lista[$n]['codigo'] = $data->codigo;
			$lista[$n]['titulo'] = $data->titulo;

			$n++;
		}
		$dados['lista'] = $lista;
		
		$this->view('imagens', $dados);
	}	

	public function nova(){

		$this->nivel_acesso(32);

		$dados['_base'] = $this->base_layout();
		$dados['_titulo'] = $this->_modulo_nome;
		$dados['_subtitulo'] = "Nova";

		$dados['aba_selecionada'] = "dados";

		$this->view('imagens.nova', $dados);
	}

	public function nova_grv(){
		
		$this->nivel_acesso(32);

		$titulo = $this->post('titulo');

		$this->valida($titulo);

		$codigo = $this->gera_codigo();

		$db = new mysql();
		$db->inserir("imagem", array(
			"codigo"=>"$codigo",
			"titulo"=>"$titulo"
		));

		$this->irpara(DOMINIO.$this->_controller.'/alterar/aba/imagem/codigo/'.$codigo);
	}
	
	public function alterar(){
		
		$dados['_base'] = $this->base_layout();
		$dados['_titulo'] = $this->_modulo_nome;
		$dados['_subtitulo'] = "Alterar";

		$codigo = $this->get('codigo');

		if($this->nivel_acesso(32, false)){
			$dados['acesso_alterar_titulo'] = true;
		} else {
			$dados['acesso_alterar_titulo'] = false;
		}

		$aba = $this->get('aba');
		if($aba){
			$dados['aba_selecionada'] = $aba;
		} else {

			if($dados['acesso_alterar_titulo']){
				$dados['aba_selecionada'] = 'dados';
			} else {
				$dados['aba_selecionada'] = 'imagem';
			}

		}

		$db = new mysql();
		$exec = $db->Executar("SELECT * FROM imagem where codigo='$codigo' ");
		$dados['data'] = $exec->fetch_object();

		// imagens secundarias
		$lista = array();
		$n = 0;

		$db = new mysql();
		$exec = $db->Executar("SELECT * FROM imagem_itens where codigo='$codigo' ");
		while($data = $exec->fetch_object()){
			
			$lista[$n]['id'] = $data->id;
			$lista[$n]['imagem'] = $data->imagem;
			
			$n++;
		}
		$dados['sub_imagens'] = $lista;

		$this->view('imagens.alterar', $dados);
	}

	public function alterar_grv(){
		
		$this->nivel_acesso(32);
		
		$codigo = $this->post('codigo');		
		$titulo = $this->post('titulo'); 

		$this->valida($titulo);
		
		$db = new mysql();
		$db->alterar("imagem", array(
			"titulo"=>"$titulo"
		), " codigo='$codigo' ");


		$this->irpara(DOMINIO.$this->_controller.'/alterar/codigo/'.$codigo);		
	}

	public function imagem(){
		
		$arquivo_original = $_FILES['arquivo'];
		$tmp_name = $_FILES['arquivo']['tmp_name'];
		
		$arquivo = new model_arquivos_imagens();

		$codigo = $this->get('codigo');
		
		$diretorio = "arquivos/imagens/";
		
		if(!$arquivo->filtro($arquivo_original)){ $this->msg('Arquivo com formato inválido ou inexistente!'); $this->volta(1); } else {

			//pega a exteção
			$nome_original = $arquivo_original['name'];
			$extensao = $arquivo->extensao($nome_original);
			$nome_arquivo = $arquivo->trata_nome($nome_original);
			
			if(copy($tmp_name, $diretorio.$nome_arquivo)){
				
				$db = new mysql();
				$db->alterar("imagem", array(
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
			$exec = $db->executar("SELECT * FROM imagem where codigo='$codigo' ");
			$data = $exec->fetch_object();

			if($data->imagem){
				unlink('arquivos/imagens/'.$data->imagem);
			}
			
			$db = new mysql();
			$db->alterar("imagem", array(
				"imagem"=>""
			), " codigo='$codigo' ");
		}

		$this->irpara(DOMINIO.$this->_controller.'/alterar/codigo/'.$codigo.'/aba/imagem');
	}

	public function imagem2(){
		
		$arquivo_original = $_FILES['arquivo'];
		$tmp_name = $_FILES['arquivo']['tmp_name'];
		
		$arquivo = new model_arquivos_imagens();

		$codigo = $this->get('codigo');
		
		$diretorio = "arquivos/imagens/";
		
		if(!$arquivo->filtro($arquivo_original)){ $this->msg('Arquivo com formato inválido ou inexistente!'); $this->volta(1); } else {

			//pega a exteção
			$nome_original = $arquivo_original['name'];
			$extensao = $arquivo->extensao($nome_original);
			$nome_arquivo = $arquivo->trata_nome($nome_original);
			
			if(copy($tmp_name, $diretorio.$nome_arquivo)){
				
				$db = new mysql();
				$db->inserir("imagem_itens", array(
					"codigo"=>"$codigo",
					"imagem"=>"$nome_arquivo"
				));
				
				$this->irpara(DOMINIO.$this->_controller.'/alterar/codigo/'.$codigo.'/aba/imagem');
				
			} else {
				
				$this->msg('Erro ao gravar imagem!');
				$this->irpara(DOMINIO.$this->_controller."/alterar/codigo/".$codigo."/aba/imagem");
				
			}

		}
		
	}

	public function apagar_imagem2(){
		
		$codigo = $this->get('codigo');
		$id = $this->get('id');

		if($codigo AND $id){

			$db = new mysql();
			$exec = $db->executar("SELECT * FROM imagem_itens where codigo='$codigo' AND id='$id'");
			$data = $exec->fetch_object();

			if($data->imagem){
				unlink('arquivos/imagens/'.$data->imagem);
			}
			
			$db = new mysql();
			$db->apagar("imagem_itens", " codigo='$codigo' AND id='$id' ");
		}

		$this->irpara(DOMINIO.$this->_controller.'/alterar/codigo/'.$codigo.'/aba/imagem');
	}

}