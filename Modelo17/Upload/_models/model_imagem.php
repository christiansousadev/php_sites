<?php

Class model_imagem extends model{
    
    public function codigo($codigo){
    	
    	$return = '';

		$db = new mysql();
		$exec = $db->executar("select * from imagem where codigo='$codigo' ");
		$data = $exec->fetch_object();
		
		if(isset($data->imagem)){
			$return = PASTA_CLIENTE.'imagens/'.$data->imagem;
		}		 
		
		return $return;
    }

    public function subimagens($codigo){
    	
    	$lista = array();
    	$n = 0;

		$db = new mysql();
		$exec = $db->executar("select * from imagem_itens where codigo='$codigo' ");
		while($data = $exec->fetch_object()){

			$lista[$n]['imagem'] = PASTA_CLIENTE.'imagens/'.$data->imagem;

		$n++;
		}		 	 
		
		return $lista;
    }

}