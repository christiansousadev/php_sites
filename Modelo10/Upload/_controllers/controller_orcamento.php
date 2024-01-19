<?php
class orcamento extends controller {
	
	public function init(){
	}
	
	public function inicial(){
		
		//definições basicas (OBS: tudo que estiver na array dados é enviado como variavel para a view)
		$layout = new model_meta();
		$dados['_base'] = $layout->carrega();
		$dados['objeto'] = DOMINIO.$this->_controller.'/';
		$dados['controller'] = $this->_controller;
		
		//rede social
		$redessociais = new model_redes_sociais();
		$dados['facebook'] = $redessociais->pornome('facebook');
		$dados['listaredes'] = $redessociais->lista();

		// Serviços
		$servicos = new model_servicos();
		$dados['servicos'] = $servicos->lista_inicial();
		
		/////////////////////////////////////////////////////////
		//itens da pagina
		$imagem = new model_imagem();
		$texto = new model_texto();
		
		//produtos
		$orcamento = new model_orcamento();
		$produtos = new model_produtos();
		
	 	$categoria = $this->get('categoria');	 	
		$dados['categorias'] = $produtos->lista_grupos($categoria);
		
		if(!$categoria){
			if(isset($dados['categorias'][0]['codigo'])){
				$categoria = $dados['categorias'][0]['codigo'];
				$dados['categorias'] = $produtos->lista_grupos($categoria);
			} else {
				$categoria = false;
			}
		}
		$dados['categoria_selecionada'] = $categoria;

		$sessao = $this->_sessao;

		$lista_produtos = $produtos->lista($categoria);

		$dados['produtos'] = $orcamento->lista($sessao, $lista_produtos);

		if($data_orc = $orcamento->carrega($sessao)){

			$dados['nome'] = $data_orc->nome;
			$dados['fone'] = $data_orc->fone;
			$dados['celular'] = $data_orc->celular;
			$dados['email'] = $data_orc->email;
			$dados['endereco'] = $data_orc->endereco;
			$dados['numero'] = $data_orc->numero;
			$dados['bairro'] = $data_orc->bairro;
			$dados['cep'] = $data_orc->cep;
			$dados['cidade'] = $data_orc->cidade;
			$dados['metragem'] = $data_orc->metragem;

		} else {

			$dados['nome'] = "";
			$dados['fone'] = "";
			$dados['celular'] = "";
			$dados['email'] = "";
			$dados['endereco'] = "";
			$dados['numero'] = "";
			$dados['bairro'] = "";
			$dados['cep'] = "";
			$dados['cidade'] = "";
			$dados['metragem'] = "";

		}

		//carrega view e envia dados para a tela
		$this->view('orcamento', $dados);
	}

	public function adicionar(){

		$produto = $this->get('codigo');
		$sessao = $this->_sessao;

		if($produto AND $sessao){

			$db = new mysql();
			$db->inserir("orcamentos_itens", array(
				"codigo"=>"$sessao",
				"produto"=>"$produto",
				"quantidade"=>"1"
			));
			
			echo "ok";
		}
		
	}

	public function remover(){

		$produto = $this->get('codigo');
		$sessao = $this->_sessao;

		if($produto AND $sessao){

			$db = new mysql();
			$db->apagar("orcamentos_itens", " codigo='$sessao' AND produto='$produto' ");			 

			echo "ok";
		}
		
	}

	public function salva_form(){

		$campo = $this->post('campo');
		$valor = $this->post('valor');
		$sessao = $this->_sessao;

		if($campo AND $valor AND $sessao){

			// verificar se ja existe a linha na tabela se nao tiver adiciona ou altera se ja tiver 
			$conexao = new mysql();
			$exec = $conexao->Executar("SELECT id FROM orcamentos where codigo='$sessao' ");
			if($exec->num_rows == 0){

				$time = time();

				$db = new mysql();
				$db->inserir("orcamentos", array(
					"codigo"=>"$sessao",
					"data"=>"$time",
					$campo=>$valor,
					"status"=>"0"
				));

			} else {

				$db = new mysql();
				$db->alterar("orcamentos", array(
					$campo=>$valor
				), " codigo='$sessao' " );

			}

		}
	}

	public function enviar(){

		$sessao = $this->_sessao;

		$orcamento = new model_orcamento();
		$envio = new model_envio();

		$data_orc = $orcamento->carrega($sessao);

		if( $data_orc->nome AND $data_orc->email AND $data_orc->fone AND $data_orc->celular AND $data_orc->cidade AND $data_orc->cep AND $data_orc->endereco AND $data_orc->numero AND $data_orc->bairro AND $data_orc->metragem ){ } else {

			$this->msg('Preencha todos os campos antes de continuar!');
			$this->volta(1);
			
		}

		// envia mudando o status do pedido
		
		$db = new mysql();
		$db->alterar("orcamentos", array(
			"status"=>"1"
		), " codigo='$sessao' " );

		// manda email avisando do novo orçamento 

		$db = new mysql();
		$exec = $db->executar("select * from contato ");
		$lista_envio_adm = array();
		$n_envio = 0;
		while($data = $exec->fetch_object()){
			$lista_envio_adm[$n_envio] = $data->email;
			$n_envio++;
		}

		$texto_email_admin = "Olá você tem uma nova solicitação de orçamento, acesse o sistema para mais informações.<br><br>Email do Cliente: $data_orc->email";
		$envio->enviar("Nova Solicitação de Orçamento", $texto_email_admin, $lista_envio_adm);


		// zera a sessão e retorna ao site

		session_destroy();
		
		$this->msg('Enviado com sucesso!');
		$this->irpara(DOMINIO.'orcamento');
	}



}