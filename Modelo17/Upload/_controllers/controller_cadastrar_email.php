<?php
class cadastrar_email extends controller {
	
	public function init(){		
	}
	
	public function inicial(){
		$this->irpara(DOMINIO);
	}

	public function enviar(){
				
		$nome = $this->post('nome');
		$email = $this->post('email');
		
		if(!$nome){
			echo "Preencha corretamente seu nome";
			exit;
		}
		if(!$email){
			echo "Preencha corretamente seu e-mail";
			exit;
		}
		
		$valida = new model_valida();
		if(!$valida->email($email)){					
			echo "Preencha corretamente seu e-mail";
			exit;
		} else {
			
			$conexao = new mysql();
			$coisas = $conexao->Executar("select * from cadastro_email where email='$email' ");
			$linhas = $coisas->num_rows;
			
			if($linhas == 0){
				
				$conexao = new mysql();
				$conexao->inserir("cadastro_email", array(
					"nome"=>"$nome",
					"email"=>"$email",
					"interesse"=>"Receber Promoções"
				));
				
			}
			
			echo "Obrigado por se cadastrar!<br><br>Em breve recebera nossas novidades por e-mail.";
			exit;

		}
	}
	
}