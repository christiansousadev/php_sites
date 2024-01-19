<?php
class orcamentos extends controller {
	
	public function init(){
	}
	
	public function inicial(){
		$this->irpara(DOMINIO);
	}
	
	public function captcha(){
		
		$codigoCaptcha = substr(md5( time()) ,0,5);
		
		$_SESSION['captcha'] = $codigoCaptcha;
		
		$imagemCaptcha = imagecreatefrompng("_views/img/fundocaptch.png");

		$fonteCaptcha = imageloadfont("_views/img/anonymous.gdf");
		
		$corCaptcha = imagecolorallocate($imagemCaptcha,255,0,0);
		
		imagestring($imagemCaptcha,$fonteCaptcha,15,5,$codigoCaptcha,$corCaptcha);
		
		header("Content-type: image/png");
		
		imagepng($imagemCaptcha);
		
		imagedestroy($imagemCaptcha);
		exit;
	}

	public function enviar(){
		
		$nome = $this->post('nome');
		$email = $this->post('email');
		$fone = $this->post('fone');
		$pacote = $this->post('pacote');
		$pessoas = $this->post('pessoas');
		$quartos = $this->post('quartos'); 
		$mensagem = $this->post('msg'); 

		//$captcha = $this->post('captcha');
		//if($_SESSION['captcha'] != $captcha){			
		//	echo "Código inválido, tente novamente!";
		//	exit;
		//}
		
		if(!$pacote){
			echo "Selecione um pacote";
			exit;
		}
		if(!$nome){
			echo "Preencha seu Nome";
			exit;
		}
		if(!$email){
			echo "Preencha seu E-mail";
			exit;
		}
		if(!$fone){
			echo "Preencha seu Telefone";
			exit;
		}
		if(!$quartos){
			echo "Preencha o numero de Quartos";
			exit;
		}
		if(!$mensagem){
			echo "Digite sua Mensagem";
			exit;
		}

		// grava no banco

		$codigo = $this->gera_codigo();
		$cadastro = $this->gera_codigo();
		$time = time();

		$db = new mysql();
		$db->inserir("orcamentos", array(
			"sessao"=>"$codigo",
			"cadastro"=>"$cadastro",
			"data"=>"$time",
			"status"=>"0"
		));

		$db = new mysql();
		$db->inserir("orcamentos_cadastro", array(
			"codigo"=>"$cadastro",
			"data"=>"$time",
			"nome"=>"$nome",
			"email"=>"$email",
			"fone"=>"$fone"
		));

		$db = new mysql();
		$db->inserir("orcamentos_itens", array(
			"codigo"=>"$codigo",
			"quantidade"=>"1",
			"pacote"=>"$pacote",
			"pessoas"=>"$pessoas",
			"quartos"=>"$quartos",
			"obs"=>"$mensagem"
		));		
		
		/* mensagem */
		$msg = "<div style='font-size:12px; color:#000;'><p>Pedido de Orçamento</p></div>";	
		$msg .= "<div style='font-size:12px; color:#000;'><p><strong>Nome:</strong> ".$nome."</p></div>";
		$msg .= "<div style='font-size:12px; color:#000;'><p><strong>E-mail:</strong> ".$email."</p></div>";
		$msg .= "<div style='font-size:12px; color:#000;'><p><strong>Telefone:</strong> ".$fone."</p></div>";
		$msg .= "<div style='font-size:12px; color:#000;'><p><strong>Pacote:</strong> ".$pacote."</p></div>";
		$msg .= "<div style='font-size:12px; color:#000;'><p><strong>Adultos:</strong> ".$pessoas_adultos."</p></div>";
		$msg .= "<div style='font-size:12px; color:#000;'><p><strong>Crianças:</strong> ".$pessoas_criancas."</p></div>";
		$msg .= "<div style='font-size:12px; color:#000;'><p><strong>Mensagem:</strong> ".$mensagem."</p></div>";
		
		//pega do banco o email de destino cadastrado no painel
		
		$db = new mysql();
		$exec = $db->executar("SELECT * FROM adm_config WHERE id='1' ");
		$data_config = $exec->fetch_object();
		
		require_once("_api/phpmailer/class.phpmailer.php");
		$mail = new PHPMailer();
		$mail->IsSMTP();
		$mail->Host = $data_config->email_host;
		$mail->Port = $data_config->email_porta;
		$mail->SMTPAuth = true;
		$mail->Username = $data_config->email_usuario;
		$mail->Password = $data_config->email_senha;
		$mail->From = $data_config->email_origem;
		$mail->FromName = $data_config->email_nome;
		
		$db = new mysql();
		$exec = $db->executar("select * from contato ");
		while($data = $exec->fetch_object()){
			$mail->AddAddress($data->email, "");
		}
		
		$mail->WordWrap = 50;
		
		$mail->IsHTML(true); //enviar em HTML
		$mail->AddReplyTo("$email", "");
		$mail->Subject = "Contato website";
		$mail->Body = utf8_decode($msg);
		
		if($mail->Send()){			
			echo "Mensagem enviada com sucesso!";
			exit;			
		} else {
			echo "Erro ao enviar mensagem!";
			exit;
		}
		
	}
	
}