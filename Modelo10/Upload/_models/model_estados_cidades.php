<?php
Class model_estados_cidades extends model{
	
    public function lista_estados(){

    	  	$lista = array();

			$n = 0;
	    	$db = new mysql();
	    	$exec = $db->executar("SELECT * FROM estado order by nome asc");
	    	while($data = $exec->fetch_object()){

	    		$lista[$n]['id'] = $data->id;
	    		$lista[$n]['nome'] = $data->nome;
	    		$lista[$n]['uf'] = $data->uf;
	    		
	    		$n++;
	    	}
			return $lista;
	}

	public function lista_cidades($uf = null){

    	  	$lista = array();

    	  	if(isset($uf)){

				$n = 0;
		    	$db = new mysql();
		    	$exec = $db->executar("SELECT * FROM cidade WHERE uf='$uf' order by nome asc");
		    	while($data = $exec->fetch_object()){

		    		$lista[$n]['id'] = $data->id;
		    		$lista[$n]['nome'] = $data->nome;
		    		$lista[$n]['uf'] = $data->uf;
		    		
		    		$n++;
		    	}
		    }
		    
			return $lista;
	}
	
	public function nome_estado( $tipo, $valor){
		
		if($tipo == 'id'){
			$db = new mysql();
		    $exec = $db->executar("SELECT * FROM estado where id='$valor' ");
		    $data = $exec->fetch_object();
			return $data->nome;
		}
		if($tipo == 'uf'){
			$db = new mysql();
		    $exec = $db->executar("SELECT * FROM estado where uf='$valor' ");
		    $data = $exec->fetch_object();
			return $data->nome;
		}

	}

	public function nome_cidade($valor){

		$db = new mysql();
		$exec = $db->executar("SELECT * FROM cidade where id='$valor' ");
		$data = $exec->fetch_object();
		return $data->nome;
		
	}

}