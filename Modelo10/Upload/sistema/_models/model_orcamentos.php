<?php

Class model_orcamentos extends model{

	public function lista($status){
		
		$lista = array();
		$n = 0;

		$conexao = new mysql();
		$coisas = $conexao->Executar("SELECT * FROM orcamentos WHERE status='$status' ");
		while($data = $coisas->fetch_object()){

			$lista[$n]['id'] = $data->id;
			$lista[$n]['dia'] = date('d/m/y', $data->data);
			$lista[$n]['codigo'] = $data->codigo;
			$lista[$n]['nome'] = $data->nome;
			$lista[$n]['email'] = $data->email;
			$lista[$n]['fone'] = $data->fone;

			$n++;
		}
		
		//echo "<pre>"; print_r($lista); echo "<pre>"; exit;
		return $lista;
	}

	public function carrega($codigo){
		$db = new mysql();
		$exec = $db->executar("SELECT * FROM orcamentos where codigo='$codigo' ");
		return $exec->fetch_object();
	}

	public function lista_itens($codigo){
		
    	$lista = array();
    	$i = 0;

    	$conexao = new mysql();
    	$coisas_carrinho = $conexao->Executar("SELECT * FROM orcamentos_itens WHERE codigo='$codigo' ");
    	$linha_carrinho = $coisas_carrinho->num_rows;
    	
		if($linha_carrinho != 0){
			while($data_carrinho = $coisas_carrinho->fetch_object()){
				
				$conexao = new mysql();
    			$coisas_prod = $conexao->Executar("SELECT titulo FROM produtos WHERE codigo='$data_carrinho->produto' ");
    			$data_prod = $coisas_prod->fetch_object();

				$lista[$i]['produto'] = $data_carrinho->produto;
                $lista[$i]['produto_titulo'] = $data_prod->titulo;
                $lista[$i]['quantidade'] = $data_carrinho->quantidade;
				
            $i++;
    		}
    	}
	  	
		return $lista;
	}

}