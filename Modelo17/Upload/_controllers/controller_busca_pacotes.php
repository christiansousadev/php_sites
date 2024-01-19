<?php
class busca_pacotes extends controller {
	
	public function init(){		
	}
	
	public function inicial(){
		
		$busca = $this->post('busca');		
		$this->irpara(DOMINIO.'pacotes/lista/busca/'.$busca.'/#corpo');
		
	}
	
}