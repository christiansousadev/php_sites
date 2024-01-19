<?php

Class model_orcamentos extends model{

	public function lista($status){
		
		$lista = array();
		$n = 0;

		$conexao = new mysql();
		$coisas = $conexao->Executar("SELECT * FROM orcamentos WHERE status='$status' ");
		while($data = $coisas->fetch_object()){

			$conexao = new mysql();
			$coisas2 = $conexao->Executar("SELECT nome, email, fone FROM orcamentos_cadastro WHERE codigo='$data->cadastro' ");
			$data2 = $coisas2->fetch_object();

			$lista[$n]['id'] = $data->id;
			$lista[$n]['dia'] = date('d/m/y', $data->data);
			$lista[$n]['codigo'] = $data->sessao;
			$lista[$n]['nome'] = $data2->nome;
			$lista[$n]['email'] = $data2->email;
			$lista[$n]['fone'] = $data2->fone;

			$n++;
		}
		
		//echo "<pre>"; print_r($lista); echo "<pre>"; exit;
		return $lista;
	}

	public function carrega($codigo){
		$db = new mysql();
		$exec = $db->executar("SELECT * FROM orcamentos where sessao='$codigo' ");
		return $exec->fetch_object();
	}

	public function carrega_cadastro($codigo){
		$db = new mysql();
		$exec = $db->executar("SELECT * FROM orcamentos_cadastro where codigo='$codigo' ");
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
				
				$lista[$i]['pacote'] = $data_carrinho->pacote;
				$lista[$i]['quantidade'] = $data_carrinho->quantidade;
				$lista[$i]['pessoas'] = $data_carrinho->pessoas;
				$lista[$i]['quartos'] = $data_carrinho->quartos;
				$lista[$i]['obs'] = $data_carrinho->obs;
				
				$i++;
			}
		}

		return $lista;
	}

}