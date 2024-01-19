<?php
class galeria extends controller {
	
	public function init(){		
	}
	
	public function inicial(){				
		$this->irpara(DOMINIO).'index/#viagens';
	}
	
	public function detalhes(){

		$dados = array();
		$dados['_base'] = $this->base();
		$dados['objeto'] = DOMINIO.$this->_controller.'/';
		$dados['controller'] = $this->_controller;

		//banner
		$banners = new model_banners();
		$dados['banners'] = $banners->lista('147502866622777');

		// pacotes
		$codigo = $this->get('codigo');
		
		//Pega dados da pacotes
		$db = new mysql();
		$exec = $db->executar("select * from fotos WHERE codigo='$codigo' ");
		$dados['data'] = $exec->fetch_object();
		
		//pega imagens
		$imagens = array();
		$conexao = new mysql();
		$coisas_ordem = $conexao->Executar("SELECT * FROM fotos_imagem_ordem WHERE codigo='$codigo' ORDER BY id desc limit 1");
		$data_ordem = $coisas_ordem->fetch_object();
		
		if(isset($data_ordem->data)){
			
			$order = explode(',', $data_ordem->data);
			
			$ii = 0;
			foreach($order as $key => $value){
				
				$conexao = new mysql();
				$coisas_img = $conexao->Executar("SELECT id, imagem FROM fotos_imagem WHERE id='$value'");
				$data_img = $coisas_img->fetch_object();

				if(isset($data_img->imagem)){
					
					if($ii == 0){
						$dados['imagem_principal'] = PASTA_CLIENTE."img_fotos_g/".$codigo."/".$data_img->imagem;
					}
					
					$imagens[$ii]['id'] = $data_img->id;
					$imagens[$ii]['imagem_g'] = PASTA_CLIENTE."img_fotos_g/".$codigo."/".$data_img->imagem;
					$imagens[$ii]['imagem_p'] = PASTA_CLIENTE."img_fotos_p/".$codigo."/".$data_img->imagem;
					
					$ii++;
				}

			}
		}
		$dados['imagens'] = $imagens;
		

		//carrega view e envia dados para a tela
		$this->view('fotos.detalhes', $dados);
	}
	
}