<?php

Class model_usuarios extends model{
	
	/////////////////////////////////////////////////////////////////////////////
	//

	public function lista(){
    	
    	$lista = array();
    	
    	$db = new mysql();
		$exec = $db->executar("SELECT * FROM adm_usuario WHERE codigo!='1' ");
		$i = 0;
		while($data = $exec->fetch_object()) {
			
			$lista[$i]['id'] = $data->id;
			$lista[$i]['codigo'] = $data->codigo;
			$lista[$i]['nome'] = $data->nome;
			$lista[$i]['email'] = $data->email_recuperacao;
			
		$i++;
		}
	  	
		return $lista;
	}

	///////////////////////////////////////////////////////////////////////////
	//

	public function selecionar($codigo){ 

    	$db = new mysql();
		$exec = $db->executar("SELECT * FROM adm_usuario WHERE codigo='$codigo' ");
		$num = $exec->num_rows;
		if($num == 1){
			return $exec->fetch_object();	
		} else {
			return false;
		}

	}

	///////////////////////////////////////////////////////////////////////////
	//

	public function nome($codigo){ 
		
    	$db = new mysql();
		$exec = $db->executar("SELECT nome FROM adm_usuario WHERE codigo='$codigo' ");
		$num = $exec->num_rows;
		if($num == 1){
			return $exec->fetch_object()->nome;	
		} else {
			return 'Este usuário foi removido';
		}

	}

	///////////////////////////////////////////////////////////////////////////
	//

	public function confere_usuario($usuario, $cod_usuario = null){
    	
    	$usuario_md5 = md5($usuario);

    	$db = new mysql();
    	if( isset($cod_usuario) ){
    		$confere = $db->executar("SELECT * FROM adm_usuario WHERE usuario='$usuario_md5' AND codigo!='$cod_usuario' ");
		} else {
			$confere = $db->executar("SELECT * FROM adm_usuario WHERE usuario='$usuario_md5' ");
		}
		
		if($confere->num_rows != 0){
			return false;
		} else {
			return true;
		}		
    }

    ///////////////////////////////////////////////////////////////////////////
	//

    public function confere_login($usuario, $senha){
    	$db = new mysql();
		$exec = $db->executar("SELECT codigo, usuario FROM adm_usuario WHERE usuario='$usuario' AND senha='$senha' ");
		if($exec->num_rows == 1){
			return $exec->fetch_object();
		} else {
			return false;
		}
    }

    ///////////////////////////////////////////////////////////////////////////
	//
    
    public function confere_acesso($usuario, $setor){
    	
    	if($usuario == 1){
    		return true;
    	} else {

	    	$db = new mysql();
			$exec = $db->executar("SELECT id FROM adm_setores_usuario WHERE usuario='$usuario' AND setor='$setor' ");
			if($exec->num_rows == 0){
				return false;
			} else {
				return true;
			}
		}
    }	

}