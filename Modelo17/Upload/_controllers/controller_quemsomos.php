<?php
class quemsomos extends controller {
	
	public function init(){
	}
	
	public function inicial(){

		$dados = array();
		$dados['_base'] = $this->base();
		$dados['objeto'] = DOMINIO.$this->_controller.'/';
		$dados['controller'] = $this->_controller;
		
		//banner
		$banners = new model_banners();
		$dados['banners'] = $banners->lista('147502866622777');
		
		//textos
		$texto = new model_texto();
		$dados['conteudo'] = $texto->conteudo("151556344140802");
		
		$dados['conteudo_missao'] = $texto->conteudo("147926492556886");
		$dados['conteudo_visao'] = $texto->conteudo("147926560751294");
		$dados['conteudo_valores'] = $texto->conteudo("147926562040827");
		
		$imagens = new model_imagem();
	  	$dados['sub_imagens'] = $imagens->subimagens('147926047696687');
	  	
		//carrega view e envia dados para a tela
		$this->view('quemsomos', $dados);
	}
	
}