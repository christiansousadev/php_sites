<?php

Class model_produtos extends model{

	public function lista($grupo = null){
		
		$lista = array();
		
		if($grupo){

			$conexao = new mysql();
			$exec = $conexao->Executar("SELECT * FROM produtos_ordem where grupo='$grupo' ORDER BY id desc limit 1");
			$data_ordem = $exec->fetch_object();

			if(isset($data_ordem->data)){

				$order = explode(',', $data_ordem->data);

				$n = 0;
				foreach($order as $key => $value){

					$conexao = new mysql();
					$coisas = $conexao->Executar("SELECT * FROM produtos WHERE id='$value' ");
					$data = $coisas->fetch_object();

					if(isset($data->titulo)){

						$lista[$n]['id'] = $data->id;
						$lista[$n]['codigo'] = $data->codigo;
						$lista[$n]['titulo'] = $data->titulo;

						$n++;
					}
				}
			}
		}
				
		//echo "<pre>"; print_r($lista); echo "<pre>"; exit;
		return $lista;
	}
	
	public function lista_grupos($selecionado = null){
		return $this->lista_grupo_filho(0, $selecionado);
	}
	
	private function lista_grupo_filho($id_pai, $selecionado = null){
		
		$lista = array();
		
		$conexao = new mysql();
		$exec = $conexao->Executar("SELECT * FROM produtos_grupos_ordem where id_pai='$id_pai' ORDER BY id desc limit 1");
		$data_ordem = $exec->fetch_object();
		
		if(isset($data_ordem->data)){
			
			$order = explode(',', $data_ordem->data);
			
			$n = 0;
			foreach($order as $key => $value){
				
				$conexao = new mysql();
				$coisas = $conexao->Executar("SELECT * FROM produtos_grupos WHERE id='$value' ");
				$data = $coisas->fetch_object();
				
				if(isset($data->titulo)){
					
					$lista[$n]['id'] = $data->id;
					$lista[$n]['codigo'] = $data->codigo;
					$lista[$n]['titulo'] = $data->titulo;
					$lista[$n]['selected'] = '';
					
					if($selecionado == $data->codigo){
						$lista[$n]['selected'] = "selected";
					}
					
					$lista[$n]['filhos'] = $this->lista_grupo_filho($data->id, $selecionado);
					
					$n++;
				}
			}
		}

		return $lista;
	}

	// cores

	public function cores($selecionado = null){
		
		$retorno = array();
		$n = 0;

		$conexao = new mysql();
		$exec = $conexao->Executar("SELECT * FROM produtos_cores ORDER BY titulo asc");
		while($data = $exec->fetch_object()){

			$retorno[$n]['id'] = $data->id;
			$retorno[$n]['codigo'] = $data->codigo;
			$retorno[$n]['titulo'] = $data->titulo;
			$retorno[$n]['cor'] = $data->cor;

			$conexao = new mysql();
			$exec2 = $conexao->Executar("SELECT id FROM produtos_cores_sel WHERE codigo='".$data->codigo."' AND produto='$selecionado' ");
			if($exec2->num_rows != 0){
				$retorno[$n]['selecionado'] = true;
			} else {
				$retorno[$n]['selecionado'] = false;
			}

			$n++;
		}

		return $retorno;
	}

	public function cores_carregar($codigo){
		
		$conexao = new mysql();
		$exec = $conexao->Executar("SELECT * FROM produtos_cores WHERE codigo='$codigo' ");
		if($exec->num_rows != 0){
			return $exec->fetch_object();
		} else {
			return false;
		}
	}

	// tecidos

	public function tecidos($selecionado = null){
		
		$retorno = array();
		$n = 0;

		$conexao = new mysql();
		$exec = $conexao->Executar("SELECT * FROM produtos_tecidos ORDER BY titulo asc");
		while($data = $exec->fetch_object()){

			$retorno[$n]['id'] = $data->id;
			$retorno[$n]['codigo'] = $data->codigo;
			$retorno[$n]['titulo'] = $data->titulo;

			$conexao = new mysql();
			$exec2 = $conexao->Executar("SELECT id FROM produtos_tecidos_sel WHERE codigo='".$data->codigo."' AND produto='$selecionado' ");
			if($exec2->num_rows != 0){
				$retorno[$n]['selecionado'] = true;
			} else {
				$retorno[$n]['selecionado'] = false;
			}

			$n++;
		}

		return $retorno;
	}
	public function tecidos_carregar($codigo){
		
		$conexao = new mysql();
		$exec = $conexao->Executar("SELECT * FROM produtos_tecidos WHERE codigo='$codigo' ");
		if($exec->num_rows != 0){
			return $exec->fetch_object();
		} else {
			return false;
		}
	}

	// tamanhos

	public function tamanhos($selecionado = null){
		
		$retorno = array();
		$n = 0;

		$conexao = new mysql();
		$exec = $conexao->Executar("SELECT * FROM produtos_tamanhos ORDER BY titulo asc");
		while($data = $exec->fetch_object()){

			$retorno[$n]['id'] = $data->id;
			$retorno[$n]['codigo'] = $data->codigo;
			$retorno[$n]['titulo'] = $data->titulo;

			$conexao = new mysql();
			$exec2 = $conexao->Executar("SELECT id FROM produtos_tamanhos_sel WHERE codigo='".$data->codigo."' AND produto='$selecionado' ");
			if($exec2->num_rows != 0){
				$retorno[$n]['selecionado'] = true;
			} else {
				$retorno[$n]['selecionado'] = false;
			}

			$n++;
		}

		return $retorno;
	}
	public function tamanhos_carregar($codigo){
		
		$conexao = new mysql();
		$exec = $conexao->Executar("SELECT * FROM produtos_tamanhos WHERE codigo='$codigo' ");
		if($exec->num_rows != 0){
			return $exec->fetch_object();
		} else {
			return false;
		}
	}

	// personalizacoes
	
	public function personalizacoes($selecionado = null){
		
		$retorno = array();
		$n = 0;

		$conexao = new mysql();
		$exec = $conexao->Executar("SELECT * FROM produtos_personalizacoes ORDER BY titulo asc");
		while($data = $exec->fetch_object()){

			$retorno[$n]['id'] = $data->id;
			$retorno[$n]['codigo'] = $data->codigo;
			$retorno[$n]['titulo'] = $data->titulo;

			$conexao = new mysql();
			$exec2 = $conexao->Executar("SELECT id FROM produtos_personalizacoes_sel WHERE codigo='".$data->codigo."' AND produto='$selecionado' ");
			if($exec2->num_rows != 0){
				$retorno[$n]['selecionado'] = true;
			} else {
				$retorno[$n]['selecionado'] = false;
			}

			$n++;
		}

		return $retorno;
	}
	public function personalizacoes_carregar($codigo){
		
		$conexao = new mysql();
		$exec = $conexao->Executar("SELECT * FROM produtos_personalizacoes WHERE codigo='$codigo' ");
		if($exec->num_rows != 0){
			return $exec->fetch_object();
		} else {
			return false;
		}
	}

}
