<?php

Class model_pacotes extends model{

	public $perpage = 100000; //itens por pagina
	public $numlinks = 10; //total de paginas mostradas na paginação
	public $busca = '-';
	public $categoria = 0;
	public $startitem = 0;
	public $startpage = 1;
	public $endpage = '';
	public $reven = 1;
	public $ordem = ''; // 'rand' para randomico ou em branco para data desc

	public function lista(){

	   	//define variaveis
		$perpage = $this->perpage;
		$numlinks = $this->numlinks;
		$busca = $this->busca;
		$categoria = $this->categoria;
		$startitem = $this->startitem;
		$startpage = $this->startpage;
		$endpage = $this->endpage;
		$reven = $this->reven;
		$ordem = $this->ordem;


		$valores = new model_valores();

		//retorno 
		$dados = array();

    	//FILTROS
		$query = "SELECT * FROM pacotes ";

		//se tiver busca ignora tudo e faz a busca
		if($busca != "-"){
			$query = "SELECT * FROM pacotes WHERE titulo LIKE '%$busca%' ";
		} else {
			//se selecionou a categoria
			if($categoria != 0){

				$query = "SELECT * FROM pacotes WHERE ";
				//$query .= " ( "; 

				$conexao = new mysql();
				$coisas = $conexao->Executar("SELECT * FROM pacotes_grupos_sel WHERE grupo='$categoria' ORDER BY id desc");
				while($data = $coisas->fetch_object()){
					$query .= " codigo='$data->pacote' OR ";
				}

				$query = substr($query, 0, strlen($query)-3);
				//$query .= " ) "; 

			}
		}
		
		//faz a busca no banco e retorno numero de itens para paginação
		$conexao = new mysql();
		$coisas_pacotes = $conexao->Executar($query);
		if($coisas_pacotes->num_rows) {
			$numitems = $coisas_pacotes->num_rows;
		} else {
			$numitems = 0;
		}
		$dados['numitems'] = $numitems;
		
		
		//calcula paginação
		if($numitems > 0) {
			$numpages = ceil($numitems / $perpage); 
			if($startitem + $perpage > $numitems) { $enditem = $numitems; } else { $enditem = $startitem + $perpage; }
			if(!$startpage) { $startpage = 1; }
			if(!$endpage) { 
				if($numpages > $numlinks) { $endpage = $numlinks; } else { $endpage = $numpages; }
			}
		} else {
			$numpages = 0;
		}

		$pacotes = array();
		$mes = new model_data();

		//ordena e limita aos itens da pagina
		if($ordem == 'rand'){
			$query .= " ORDER BY RAND() LIMIT $startitem, $perpage";
		} else {
			$query .= " ORDER BY id desc LIMIT $startitem, $perpage";
		}

		$conexao = new mysql();
		$coisas_pacotes = $conexao->Executar($query);
		$n = 0;
		while($data = $coisas_pacotes->fetch_object()){

			$lista[$n]['id'] = $data->id;
			$lista[$n]['codigo'] = $data->codigo;
			$lista[$n]['titulo'] = $data->titulo;
			$lista[$n]['valor'] = $valores->trata_valor($data->valor);
			$lista[$n]['saida'] = $data->saida;
			// destinos
			$lista[$n]['destinos'] = $this->destinos($data->codigo);
			$lista[$n]['imagens'] = $this->imagens($data->codigo);
			
			if(isset($lista[$n]['imagens'][0]['imagem'])){
				$lista[$n]['imagem_princial'] = $lista[$n]['imagens'][0]['imagem'];
			} else {
				$lista[$n]['imagem_princial'] = '';
			}
			
			$lista[$n]['endereco'] = DOMINIO."pacotes/detalhes/id/".$data->id."/t/".$this->trata_url_titulo($data->titulo);

			$n++;
		}
		$dados['lista'] = $lista;

		//lista paginação
		$paginacao = "<ul>";

		if($numpages > 1) { 
			if($startpage > 1) {
				$prevstartpage = $startpage - $numlinks;
				$prevstartitem = $prevstartpage - 1;
				$prevendpage = $startpage - 1;

				$link = DOMINIO."pacotes/lista/categoria/$categoria/busca/$busca/";
				$link .= "startitem/$prevstartitem/startpage/$prevstartpage/endpage/$prevendpage/reven/$prevstartpage/";

			}

			for($n = $startpage; $n <= $endpage; $n++) {

				$nextstartitem = ($n - 1) * $perpage;

				if($n != $reven) {

					$link = DOMINIO."pacotes/lista/categoria/$categoria/busca/$busca/";
					$link .= "startitem/$nextstartitem/startpage/$startpage/endpage/$endpage/reven/$n/";
					$paginacao .= "<li><a href='$link' >&nbsp;$n&nbsp;</a></li>";

				} else {
					$paginacao .= "<li><a href='#' class='active' >&nbsp;$n&nbsp;</a></li>";
				}
			}

			if($endpage < $numpages) {

				$nextstartpage = $endpage + 1;

				if(($endpage + $numlinks) < $numpages) { 
					$nextendpage = $endpage + $numlinks; 
				} else {
					$nextendpage = $numpages;
				}

				$nextstartitem = ($n - 1) * $perpage;

				$link = DOMINIO."pacotes/lista/categoria/$categoria/busca/$busca/";
				$link .= "startitem/$nextstartitem/startpage/$nextstartpage/endpage/$nextendpage/reven/$nextstartpage/";

			}
		}
		$paginacao .= "</ul>";

		$dados['paginacao'] = $paginacao;

		//retorna para a pagina a array com todos as informações
		return $dados;
	}
	
	//trata nome para url
	public function trata_url_titulo($titulo){
		
		//remove acentos
		$titulo_tratado = preg_replace(array("/(á|à|ã|â|ä)/","/(Á|À|Ã|Â|Ä)/","/(é|è|ê|ë)/","/(É|È|Ê|Ë)/","/(í|ì|î|ï)/","/(Í|Ì|Î|Ï)/","/(ó|ò|õ|ô|ö)/","/(Ó|Ò|Õ|Ô|Ö)/","/(ú|ù|û|ü)/","/(Ú|Ù|Û|Ü)/","/(ñ)/","/(Ñ)/"),explode(" ","a A e E i I o O u U n N"), $titulo);

		//remove caracteres indesejados
		$titulo_tratado = str_replace(array("?", ",", ".", "+", "'", "/", ")", "(", "&", "%", "#", "@", "!", "=", ">", "<", ";", ":", "|", "*", "$"), "", $titulo_tratado);
		//coloca ifen para separar palavras
		$titulo_tratado = str_replace(array(" ", "_", "+"), "-", $titulo_tratado);
		//certifica que não tem ifens repetidos
		$titulo_tratado = preg_replace('/(.)\1+/', '$1', $titulo_tratado);		 

		return $titulo_tratado;
	}
	
	public function pacotes_orcamento(){
		
		$lista = array();
		$n = 0;

		$conexao = new mysql();
		$coisas = $conexao->Executar("SELECT codigo, titulo FROM pacotes order by titulo asc");
		while($data = $coisas->fetch_object()){

			$lista[$n]['codigo'] = $data->codigo;
			$lista[$n]['titulo'] = $data->titulo;
			
			$n++;
		}

		return $lista;
	}
	
	public function lista_inicial($limite = 9999999){
		
		$valores = new model_valores();
		$lista = array();
		$n = 0;

		$conexao = new mysql();
		$coisas = $conexao->Executar("SELECT * FROM pacotes order by RAND() limit $limite ");
		while($data = $coisas->fetch_object()){

			$lista[$n]['id'] = $data->id;
			$lista[$n]['codigo'] = $data->codigo;
			$lista[$n]['titulo'] = $data->titulo;
			$lista[$n]['valor'] = $valores->trata_valor($data->valor);
			$lista[$n]['saida'] = $data->saida;
			// destinos
			$lista[$n]['destinos'] = $this->destinos($data->codigo);
			$lista[$n]['imagens'] = $this->imagens($data->codigo);

			if(isset($lista[$n]['imagens'][0]['imagem'])){
				$lista[$n]['imagem_princial'] = $lista[$n]['imagens'][0]['imagem'];
			} else {
				$lista[$n]['imagem_princial'] = '';
			}

			$lista[$n]['endereco'] = DOMINIO."pacotes/detalhes/id/".$data->id."/t/".$this->trata_url_titulo($data->titulo);

			$n++;
		}

		return $lista;
	}

	public function destinos($codigo){
		
		$lista = array();
		$n = 0;

		$conexao = new mysql();
		$coisas = $conexao->Executar("SELECT nome FROM pacotes_destinos WHERE pacote='$codigo' order by ordem asc ");
		while($data = $coisas->fetch_object()){
			$lista[$n]['nome'] = $data->nome;
			$n++;
		}

		return $lista;
	}

	public function lista_grupos($selecionado = null){
		return $this->lista_grupo_filho(0, $selecionado);
	}

	private function lista_grupo_filho($id_pai, $selecionado = null){

		$lista = array();

		$conexao = new mysql();
		$exec = $conexao->Executar("SELECT * FROM pacotes_grupos_ordem where id_pai='$id_pai' ORDER BY id desc limit 1");
		$data_ordem = $exec->fetch_object();

		if(isset($data_ordem->data)){

			$order = explode(',', $data_ordem->data);

			$n = 0;
			foreach($order as $key => $value){

				$conexao = new mysql();
				$coisas = $conexao->Executar("SELECT * FROM pacotes_grupos WHERE id='$value' ");
				$data = $coisas->fetch_object();

				if(isset($data->titulo)){

					$lista[$n]['id'] = $data->id;
					$lista[$n]['codigo'] = $data->codigo;
					$lista[$n]['titulo'] = $data->titulo;
					$lista[$n]['selected'] = '';

					if($selecionado){

						$conexao = new mysql();
						$coisas = $conexao->Executar("SELECT id FROM pacotes_grupos_sel WHERE grupo='$data->codigo' AND pacote='$selecionado' ");
						if($coisas->num_rows != 0){
							$lista[$n]['selected'] = "selected";
						}

					}

					$lista[$n]['filhos'] = $this->lista_grupo_filho($data->id, $selecionado);

					$n++;
				}
			}
		}

		return $lista;
	}

	public function imagens($codigo){

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

					$imagens[$n]['id'] = $data_img->id;
					$imagens[$n]['imagem_p'] = PASTA_CLIENTE.'img_pacotes_p/'.$codigo.'/'.$data_img->imagem;
					$imagens[$n]['imagem'] = PASTA_CLIENTE.'img_pacotes_g/'.$codigo.'/'.$data_img->imagem;

					$n++;
				}
			}
		}
		return $imagens;

	}

}