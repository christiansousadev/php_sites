<?php

Class model_cadastro_fone extends model{

	/////////////////////////////////////////////////////////////////////////////
	//

	private $tab_principal = "cadastro_fone";
	private $tab_grupos = "cadastro_fone_grupos";

	///////////////////////////////////////////////////////////////////////////
	//

    public function lista($grupo){
    	
    	$lista = array();
    	
    	$db = new mysql();
		$exec = $db->executar("SELECT * FROM ".$this->tab_principal." WHERE grupo_codigo='$grupo' order by fone asc");
		$i = 0;
		while($data = $exec->fetch_object()) {
			
			$lista[$i]['id'] = $data->id; 
			$lista[$i]['nome'] = $data->nome;
			$lista[$i]['fone'] = $data->fone;

		$i++;
		}
	  	
		return $lista;
	}
	
	///////////////////////////////////////////////////////////////////////////
	//
	
	public function carrega($codigo){
    	$db = new mysql();
		$exec = $db->executar("SELECT * FROM ".$this->tab_principal." where codigo='$codigo' ");
		return $exec->fetch_object();
    }

    ///////////////////////////////////////////////////////////////////////////
	//

	public function adiciona($vars){
 		
 		$codigo_grupo = $vars[2];

 		$data_grupo = $this->carrega_grupo($codigo_grupo);
 		$titulo_grupo = $data_grupo->titulo;

		// executa
		$db = new mysql();
		$db->inserir($this->tab_principal, array(
			'nome'=>$vars[0],
			'fone'=>$vars[1],
			'grupo_codigo'=>$codigo_grupo,
			'grupo_titulo'=>$titulo_grupo 
		));

	}

	///////////////////////////////////////////////////////////////////////////
	//

	public function apagar($id){
		
		// executa
		$db = new mysql();
		$db->apagar($this->tab_principal, " id='".$id."' ");
		
	}

	///////////////////////////////////////////////////////////////////////////
	//

	public function confere($fone, $grupo){
		
		$db = new mysql();
		$exec = $db->Executar("SELECT * FROM ".$this->tab_principal." where fone='$fone' AND grupo_codigo='$grupo' ");
		$linhas = $exec->num_rows;
		
		if($linhas == 0){
			return true;
		} else {
			return false;
		}

	}

	///////////////////////////////////////////////////////////////////////////
	//

	public function lista_grupos(){

		$categorias = array();
		$i = 0;

		$db = new mysql();
		$exec = $db->executar("SELECT * FROM ".$this->tab_grupos." order by titulo asc");		
		while($data = $exec->fetch_object()) {
			
			$categorias[$i]['id'] = $data->id;
			$categorias[$i]['codigo'] = $data->codigo;
			$categorias[$i]['titulo'] = $data->titulo;		 
			
			$i++;
		}
		return $categorias;
	}

	public function carrega_grupo($codigo){
    	$db = new mysql();
		$exec = $db->executar("SELECT * FROM ".$this->tab_grupos." where codigo='$codigo' ");
		return $exec->fetch_object();
    }	 
		
}