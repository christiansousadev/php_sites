<?php

Class model_meta extends model{
    
    public function carrega(){
    	
    	$dados = array();
		
		//detecta navegador 
		$navegador = new model_navegador();
		$dados['navegador'] = $navegador->nome();
		
		//informações basicas de metan
    	$db = new mysql();
		$config = $db->executar("select * from meta where id='1' ")->fetch_object();
		$dados['titulo_pagina'] = $config->titulo_pagina;
		$dados['descricao'] = $config->descricao;
		
		//favicon
		$imagem = new model_imagem();
		$dados['favicon'] = $imagem->codigo('147193111415927');
		$dados['logo'] = $imagem->codigo('147796771992551');
		$dados['logo_rodape'] = $imagem->codigo('152269870043546');		
		$dados['topo'] = $imagem->codigo('150725342012658');
		 
		// carrega cores do painel
		$cores = new model_cores();
		$dados['cor']  = $cores->lista();
		
		// menus
		$menu = new model_menu();
		$dados['menu'] = $menu->lista();
		$dados['menu_rodape'] = $menu->lista_rodape();
		
		// textos padroes
		$textos = new model_texto();
		
		$dados['topo_fone1'] = strip_tags($textos->conteudo('150845916183100'));
		$dados['topo_fone2'] = strip_tags($textos->conteudo('151500947536950'));
		$dados['topo_email'] = strip_tags($textos->conteudo('150724994313076'));

		$dados['rodape_contato1'] = strip_tags($textos->conteudo('151562992371683'));
		$dados['rodape_contato2'] = strip_tags($textos->conteudo('151562993096358'));
		$dados['rodape_contato3_a'] = strip_tags($textos->conteudo('151562993496607'));
		$dados['rodape_contato3_b'] = strip_tags($textos->conteudo('151563724167307'));
		$dados['rodape_contato4'] = strip_tags($textos->conteudo('151562993910175'));

		$dados['rodape_copyright'] = $textos->conteudo('151562752876166');
		$dados['rodape_desenvolvedor'] = $textos->conteudo('150849780617091');
		

		//retorna para a pagina a array com todos as informações
		return $dados;
	}

}