<?php
class cadastrar_email extends controller {
	
	public function init(){		
	}
	
	public function inicial(){
		
		$nome = $this->get('nome');
		$email = $this->get('email');
		
		if(!$email){
			$this->msg('Preencha corretamente seu e-mail');
			$this->volta(1);
		}
		
		$valida = new model_valida();
		if(!$valida->email($email)){					
			$this->msg('Preencha corretamente seu e-mail');
			$this->volta(1);
		} else {
			
			$conexao = new mysql();
			$coisas = $conexao->Executar("select * from cadastro_email where email='$email' ");
			$linhas = $coisas->num_rows;
			
			if($linhas == 0){
				
				$conexao = new mysql();
				$conexao->inserir("cadastro_email", array(
					"nome"=>"$nome",
					"email"=>"$email",
					"interesse"=>"Receber Novidades"
				));
				
			}
			
			$this->msg('Obrigado por se cadastrar!<br>Em breve recebera nossas novidades por e-mail!');
			$this->volta(1);
			
		}		 

	}
	
}