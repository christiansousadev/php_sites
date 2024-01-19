<?php

class orcamentos extends controller {
	
	protected $_modulo_nome = "Orçamentos";
	
	public function init(){
		$this->autenticacao();
		$this->nivel_acesso(68);
	}
	
	public function inicial(){
		
		$dados['_base'] = $this->base_layout();
		$dados['_titulo'] = $this->_modulo_nome;
		$dados['_subtitulo'] = "";
 		
 		$aba = $this->get('aba');
 		if($aba){
 			$dados['aba_selecionada'] = $aba;
 		} else {
 			$dados['aba_selecionada'] = 'aguardando';
 		}

		$orcamentos = new model_orcamentos();

		$dados['aguardando'] = $orcamentos->lista(1);
		$dados['finalizados'] = $orcamentos->lista(2);

		$this->view('orcamentos', $dados);
	}

	public function detalhes(){
		
		$dados['_base'] = $this->base_layout();
		$dados['_titulo'] = $this->_modulo_nome;
 		$dados['_subtitulo'] = "Detalhes";
 		
 		$codigo = $this->get('codigo');
 		
 		$this->valida($codigo);
 		
 		// instancia
		$orcamentos = new model_orcamentos();
		
 		$dados['data'] = $orcamentos->carrega($codigo);
		$dados['lista_itens'] = $orcamentos->lista_itens($codigo);
		

		$this->view('orcamentos.detalhes', $dados);
	}

	public function salvar_pedido(){

		$codigo = $this->get('codigo');
		$status = $this->post('status');
		
		$this->valida($codigo);
		$this->valida($status);
		
		$db = new mysql();
		$db->alterar("orcamentos", array(
			"status"=>"$status"
		), " codigo='$codigo' " );
		

		$this->irpara(DOMINIO.'orcamentos');
	}
	

//termina classe
}