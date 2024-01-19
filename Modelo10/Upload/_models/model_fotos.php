<?php

Class model_fotos extends model{

	public $perpage = 10; //itens por pagina
	public $numlinks = 10; //total de paginas mostradas na paginação 
	public $categoria = 0;
	public $startitem = 0;
	public $startpage = 1;
	public $endpage = '';
	public $reven = 1;

	public function lista(){
		
		//define variaveis
		$perpage = $this->perpage;
		$numlinks = $this->numlinks; 
		$grupo = $this->categoria;
		$startitem = $this->startitem;
		$startpage = $this->startpage;
		$endpage = $this->endpage;
		$reven = $this->reven;
		
		$lista = array();
		$n = 0;
		$dados['numitems'] = 0;

		if($grupo){

			$itens = $this->lista_totas_imagens($grupo);
			$numitems = count($itens);
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
			
			foreach($itens as $key => $value){

				$ate = $startitem + $perpage;
				
				if( ($n >= $startitem) AND ($n < $ate) ){
				 	$lista[$n]['imagem_p'] = $value['imagem_p'];
				 	$lista[$n]['imagem'] = $value['imagem'];
				}
				$n++;

			}
		}

		$dados['lista'] = $lista;
		$dados['paginacao'] = '';

		if($n != 0){

		//lista paginação
		$paginacao = "<ul class='pagination'>";

		if($numpages > 1) { 
			if($startpage > 1) {
				$prevstartpage = $startpage - $numlinks;
				$prevstartitem = $prevstartpage - 1;
				$prevendpage = $startpage - 1;

				$link = DOMINIO."portfolio/inicial/categoria/$grupo/";
				$link .= "startitem/$prevstartitem/startpage/$prevstartpage/endpage/$prevendpage/reven/$prevstartpage/";

            }

			for($n = $startpage; $n <= $endpage; $n++) {

				$nextstartitem = ($n - 1) * $perpage;

				if($n != $reven) {
					
					$link = DOMINIO."portfolio/inicial/categoria/$grupo/";
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

				$link = DOMINIO."portfolio/inicial/categoria/$grupo/";
				$link .= "startitem/$nextstartitem/startpage/$nextstartpage/endpage/$nextendpage/reven/$nextstartpage/";

			}
		}
		$paginacao .= "</ul>";		 

		$dados['paginacao'] = $paginacao;
		}

		//echo "<pre>"; print_r($lista); echo "<pre>"; exit;
		return $dados;
	}

	public function lista_totas_imagens($grupo){
		
		$lista = array();
		$n = 0; 

		if($grupo){

			$conexao = new mysql();
			$exec = $conexao->Executar("SELECT * FROM fotos_ordem where grupo='$grupo' ORDER BY id desc limit 1");
			$data_ordem = $exec->fetch_object();
			
			if(isset($data_ordem->data)){
				
				$order = explode(',', $data_ordem->data);
				
				foreach($order as $key => $value){
				 	
					$conexao = new mysql();
					$coisas = $conexao->Executar("SELECT codigo FROM fotos WHERE id='$value' ");
					$data = $coisas->fetch_object();
					
					if(isset($data->codigo)){
						
						$imagens = $this->imagens($data->codigo);
						foreach ($imagens as $key2 => $value2) {
							
							$lista[$n]['imagem_p'] = $value2['imagem_p'];
							$lista[$n]['imagem'] = $value2['imagem'];
							
							$n++;
						}

					} 
				}
			}
		}
		
		return $lista;
	}
	
	public function lista_inicial($limit = 100){
		
		$n = 0;
		$lista = array();

		$conexao = new mysql();
		$coisas = $conexao->Executar("SELECT codigo FROM fotos order by RAND() limit $limit");
		while($data = $coisas->fetch_object()){

			$imagens = $this->imagens($data->codigo);

			if( (isset($imagens[0]['imagem'])) AND ( ($n+1) <= $limit) ){
				$lista[$n]['imagem'] = $imagens[0]['imagem_p']; 
				$n++; 
			}
		 	
		}
		
		return $lista;
	}
	
    public function lista_grupos($selecionado = null){
		return $this->lista_grupo_filho(0, $selecionado);
	}
	
	private function lista_grupo_filho($id_pai, $selecionado = null){
		
		$lista = array();
		
		$conexao = new mysql();
		$exec = $conexao->Executar("SELECT * FROM fotos_grupos_ordem where id_pai='$id_pai' ORDER BY id desc limit 1");
		$data_ordem = $exec->fetch_object();
		
		if(isset($data_ordem->data)){
			
			$order = explode(',', $data_ordem->data);
			
			$n = 0;
			foreach($order as $key => $value){

				$conexao = new mysql();
				$coisas = $conexao->Executar("SELECT * FROM fotos_grupos WHERE id='$value' ");
				$data = $coisas->fetch_object();
				
				if(isset($data->titulo)){
					
					$lista[$n]['id'] = $data->id;
					$lista[$n]['codigo'] = $data->codigo;
					$lista[$n]['titulo'] = $data->titulo;
					$lista[$n]['selected'] = false;
					
					if($selecionado == $data->codigo){
						$lista[$n]['selected'] = true;
					}

					$lista[$n]['filhos'] = $this->lista_grupo_filho($data->id, $selecionado);
					
					// deixa selecionado caso algum dos filhos for selecionado
					foreach($lista[$n]['filhos'] as $key2 => $value2){
						if($value2['selected']){
							$lista[$n]['selected'] = true;
						}
					}
					
					$n++;
				}
			}
		}
	  	
		return $lista;
	}

	public function lista_grupos_inicial($grupo = null){
    	
    	$lista = array();
		
		$conexao = new mysql();
		$exec = $conexao->Executar("SELECT * FROM fotos_grupos_ordem where id_pai='0' ORDER BY id desc limit 1");
		$data_ordem = $exec->fetch_object();
		
		if(isset($data_ordem->data)){
			
			$order = explode(',', $data_ordem->data);
			
			$n = 0;
			foreach($order as $key => $value){
				
				$conexao = new mysql();
				$coisas = $conexao->Executar("SELECT * FROM fotos_grupos WHERE id='$value' ");
				$data = $coisas->fetch_object();
				
				if(isset($data->imagem)){
					
					$lista[$n]['id'] = $data->id;
					$lista[$n]['codigo'] = $data->codigo;
					$lista[$n]['titulo'] = $data->titulo;
					$lista[$n]['imagem'] = PASTA_CLIENTE."img_fotos_grupos/".$data->imagem;
					
					$lista[$n]['selected'] = false;
					
					if( ($n == 0) AND (!$grupo) ){					 
						$lista[$n]['selected'] = true;
					} else {
						if($grupo == $data->codigo){
							$lista[$n]['selected'] = true;
						}
					}
					
					$n++;
				}
			}
		}
	  	
		return $lista;
	}


	public function imagens($codigo){

		//imagens
 		$conexao = new mysql();
        $coisas_ordem = $conexao->Executar("SELECT * FROM fotos_imagem_ordem WHERE codigo='$codigo' ORDER BY id desc limit 1");
        $data_ordem = $coisas_ordem->fetch_object();

        $n = 0;
        $imagens = array();
        if(isset($data_ordem->data)){

        	$order = explode(',', $data_ordem->data); 

        	foreach($order as $key => $value){

                $conexao = new mysql();
                $coisas_img = $conexao->Executar("SELECT * FROM fotos_imagem WHERE id='$value'");
                $data_img = $coisas_img->fetch_object();                                

                if(isset($data_img->imagem)){

                	$conexao = new mysql();
	                $coisas_leg = $conexao->Executar("SELECT * FROM fotos_imagem_legenda WHERE id_img='$value' ");
	                $data_leg = $coisas_leg->fetch_object();
	                
	                if(isset($data_leg->legenda)){
	                	$imagens[$n]['legenda'] = $data_leg->legenda;
	                } else {
	                	$imagens[$n]['legenda'] = "";
	                }

                	$imagens[$n]['id'] = $data_img->id;
               		$imagens[$n]['imagem_p'] = PASTA_CLIENTE.'img_fotos_p/'.$codigo.'/'.$data_img->imagem;
               		$imagens[$n]['imagem'] = PASTA_CLIENTE.'img_fotos_g/'.$codigo.'/'.$data_img->imagem;

                $n++;
                }
            }
        }
        return $imagens;

	}

}