<?php
class busca extends controller {
	
	public function init(){
	}
	
	public function inicial(){

		$dados = array();
		$dados['_base'] = $this->base();
		$dados['objeto'] = DOMINIO.$this->_controller.'/';
		$dados['controller'] = $this->_controller;
		
		//banner
		$banners = new model_banners();
		$dados['banners'] = $banners->lista('149601285477607');
		
		$busca = $this->post('busca');
		
		$lista = array();
		$n = 0;

		// faz busca em diversos pontos do site

		// busca em textos e paginas
		$conexao = new mysql();
		$exec = $conexao->Executar("SELECT * FROM texto where conteudo LIKE '%$busca%' OR titulo LIKE '%$busca%'");
		while($data = $exec->fetch_object()){

			$lista[$n]['titulo'] = $data->titulo;
			$lista[$n]['link'] = DOMINIO.'conteudo/pag/id/'.$data->url;
			$n++;

		}

		// busca em depoimentos
		$conexao = new mysql();
		$exec = $conexao->Executar("SELECT * FROM depoimento where conteudo LIKE '%$busca%' OR nome LIKE '%$busca%'");
		while($data = $exec->fetch_object()){

			$lista[$n]['titulo'] = 'Depoimentos de '.$data->nome;
			$lista[$n]['link'] = DOMINIO.'index#depoimentos';
			$n++;

		}

		$dados['lista'] = $lista;
 	
		//carrega view e envia dados para a tela
		$this->view('busca', $dados);
	}
	
}