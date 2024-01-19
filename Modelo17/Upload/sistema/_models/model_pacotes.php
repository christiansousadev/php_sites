<?php

Class model_pacotes extends model{

	public function lista(){
		
		$valores = new model_valores();
		$lista = array();
		$n = 0;

		$conexao = new mysql();
		$coisas = $conexao->Executar("SELECT * FROM pacotes ");
		while($data = $coisas->fetch_object()){

			$lista[$n]['id'] = $data->id;
			$lista[$n]['codigo'] = $data->codigo;
			$lista[$n]['titulo'] = $data->titulo;
			$lista[$n]['valor'] = $valores->trata_valor($data->valor);
			$lista[$n]['saida'] = $data->saida;

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

	public function lista_destinos($codigo){
		
		$lista = array();
		$n = 0;

		$conexao = new mysql();
		$coisas = $conexao->Executar("SELECT * FROM pacotes_destinos WHERE pacote='$codigo' ");
		while($data = $coisas->fetch_object()){
			
			$lista[$n]['id'] = $data->id;
			$lista[$n]['nome'] = $data->nome;
			
			$n++;
		}

		return $lista;
	}
	

}
