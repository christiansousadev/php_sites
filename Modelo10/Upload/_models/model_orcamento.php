<?php

Class model_orcamento extends model{

	public function lista($sessao, $itens){
		
		$lista = array();
		$n = 0;

		foreach ($itens as $key => $value) {
			
			$lista[$n]['id'] = $value['id'];
			$lista[$n]['codigo'] = $value['codigo'];
			$lista[$n]['titulo'] = $value['titulo'];
			$lista[$n]['previa'] = $value['previa'];
			$lista[$n]['imagem'] = $value['imagem'];

			$conexao = new mysql();
			$exec = $conexao->Executar("SELECT id FROM orcamentos_itens where codigo='$sessao' AND produto='".$value['codigo']."' ");
			
			if($exec->num_rows != 0){
				$lista[$n]['sel'] = true;
			} else {
				$lista[$n]['sel'] = false;
			}

		$n++;
		}
 		
 		return $lista;
	}

	public function carrega($codigo){
		$db = new mysql();
		$exec = $db->executar("SELECT * FROM orcamentos where codigo='$codigo' ");
		if($exec->num_rows != 0){
			return $exec->fetch_object();
		} else {
			return false;
		}	
	}

}