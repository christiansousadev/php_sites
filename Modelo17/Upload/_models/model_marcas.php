<?php

Class model_marcas extends model{
 	
	public function lista(){
    	
    	$lista = array();
    	
		$conexao = new mysql();
		$exec = $conexao->Executar("SELECT * FROM marcas_ordem ORDER BY id desc limit 1");
		$data_ordem = $exec->fetch_object();

		if(isset($data_ordem->data)){

			$order = explode(',', $data_ordem->data);

			$n = 0;
			foreach($order as $key => $value){
				
				$conexao = new mysql();
				$coisas = $conexao->Executar("SELECT * FROM marcas WHERE id='$value' ");
				$data = $coisas->fetch_object();
				
				if(isset($data->titulo)){
					
					$lista[$n]['id'] = $data->id;
					$lista[$n]['codigo'] = $data->codigo;
					$lista[$n]['titulo'] = $data->titulo;
					$lista[$n]['imagem'] = PASTA_CLIENTE.'img_marcas/'.$data->imagem;
					
				$n++;
				}
			}
		}
	  	
		return $lista;
	}

	///////////////////////////////////////////////////////////////////////////
	//

	public function carregar($codigo){
    	$db = new mysql();
		$exec = $db->executar("SELECT * FROM marcas where codigo='$codigo' ");
		return $exec->fetch_object();
    }

	///////////////////////////////////////////////////////////////////////////
	//

	public function ordem(){ 
    	$conexao = new mysql();
		$exec = $conexao->Executar("SELECT * FROM marcas_ordem ORDER BY id desc limit 1");
		$data_ordem = $exec->fetch_object();
		if(isset($data_ordem->data)){
			return $data_ordem->data;
		} else {
			return "";
		}
	}
	
}