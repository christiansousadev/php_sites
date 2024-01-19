<?php

class controller extends system {

	public function init(){ //inicialização
	}

	protected function base(){
		
		$dados = array();
		
		//informações basicas de metan
		$db = new mysql();
		$config = $db->executar("select titulo_pagina, descricao from meta where id='1' ")->fetch_object();
		$dados['titulo_pagina'] = $config->titulo_pagina;
		$dados['descricao'] = $config->descricao;
		
		//carrega imagens do setadas no painel de controle
		$db = new mysql();
		$exec = $db->executar("select codigo, imagem from imagem ");
		while($data = $exec->fetch_object()){
			if($data->imagem){
				$dados['imagem'][$data->codigo] = PASTA_CLIENTE.'imagens/'.$data->imagem;
			} else {
				$dados['imagem'][$data->codigo] = '';
			}
		}
		
		// carrega cores do painel
		$cores = new model_cores();
		$dados['cor']  = $cores->lista();
		
		// menus
		$menu = new model_menu();
		$dados['menu'] = $menu->lista();
		$dados['menu_rodape'] = $menu->lista_rodape();

		// textos padroes
		$textos = new model_texto();

		$dados['topo_txt1'] = $textos->conteudo_simples('152298512034027');
		$dados['topo_txt2'] = $textos->conteudo_simples('150830565116506');
		$dados['topo_txt3'] = $textos->conteudo_simples('153205273449036');
		
		$dados['rodape_texto'] = $textos->conteudo_simples('154330127935411');

		$dados['rodape_email1'] = $textos->conteudo_simples('154330103742070');
		$dados['rodape_email2'] = $textos->conteudo_simples('154330097193315');

		$dados['rodape_fone1'] = $textos->conteudo_simples('153205396425589');
		$dados['rodape_fone2'] = $textos->conteudo_simples('153205397486618');

		$dados['rodape_endereco1'] = $textos->conteudo_simples('153205405444726'); 
		$dados['rodape_endereco2'] = $textos->conteudo_simples('153205406130147');

		$dados['copy'] = $textos->conteudo_simples('153205270283769');
		
		//rede social
		$redessociais = new model_redes_sociais();
		$dados['listaredes'] = $redessociais->lista();
		
		//retorna para a pagina a array com todos as informações
		return $dados;
	}
	
	//carrega o html 
	protected function view( $arquivo, $vars = null ){
		
		if( is_array($vars) && count($vars) > 0){
			//transforma array em variavel
			//com prefixo
			//extract($vars, EXTR_PREFIX_ALL, 'htm_');
			//se ouver variaveis iguais adiciona prefixo
			extract($vars, EXTR_PREFIX_SAME, 'htm_');
		}

		$url_view = VIEWS."htm_".$arquivo.".php";
		
		if(!file_exists($url_view)){
			$this->erro();
		} else {
			return require_once($url_view);
		}
		
	}
	
	//gera codigo que nunca se repete
	protected function gera_codigo(){
		return substr(time().rand(10000,99999),-15);
	}
	
	//confere se foi preenchido um campo post ou get
	protected function valida($var, $msg = null){
		if(!$var){
			if($msg){
				$this->msg($msg);
				$this->volta(1);
			} else {
				$this->msg('Preencha todos os campos e tente novamente!');
				$this->volta(1);
			}
		}
	}	
	
}