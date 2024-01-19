<?php

Class model_texto extends model{
    
    public function conteudo($codigo){
    	
		$db = new mysql();
		$exec = $db->executar("select * from texto WHERE codigo='$codigo' ");
		$data = $exec->fetch_object();
		
		if(isset($data->conteudo)){
			$conteudo = $data->conteudo;
		} else {
			$conteudo = '';
		}
		
		return $conteudo;
    }

    public function titulo($codigo){
    	
		$db = new mysql();
		$exec = $db->executar("select * from texto WHERE codigo='$codigo' ");
		$data = $exec->fetch_object();
		
		if(isset($data->titulo)){
			$conteudo = $data->titulo;
		} else {
			$conteudo = '';
		}
		
		return $conteudo;
    }

    public function conteudo_url($codigo){
    		
		$db = new mysql();
		$exec = $db->executar("select * from texto WHERE url='$codigo' ");
		$data = $exec->fetch_object();
		
		$retorno = array();

		if(isset($data->conteudo)){
			$retorno['conteudo'] = $data->conteudo;
			$retorno['titulo'] = $data->titulo;
		}
		
		return $retorno;
    }

}