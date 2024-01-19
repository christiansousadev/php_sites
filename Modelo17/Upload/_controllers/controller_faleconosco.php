<?php
class faleconosco extends controller {
	
	public function init(){
	}
	
	public function inicial(){
		
		$dados = array();
		$dados['_base'] = $this->base();
		$dados['objeto'] = DOMINIO.$this->_controller.'/';
		$dados['controller'] = $this->_controller;
		
		//banner
		$banners = new model_banners();
		$dados['banners'] = $banners->lista('149601285477607');
		
		//carrega texto e joga para o view
		$db = new model_texto();
		$dados['texto'] = $db->conteudo('153693597068266');	

		//carrega view e envia dados para a tela
		$this->view('faleconosco', $dados);
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
		$mensagem = $this->post('msg'); 
		$anexo = $_FILES['arquivo'];

		if(!$nome){
			echo "Preencha seu Nome";
			exit;
		}
		if(!$email){
			echo "Preencha seu E-mail";
			exit;
		}
		if(!$mensagem){
			echo "Digite sua Mensagem";
			exit;
		}

		/* mensagem */
		$msg = "<div style='padding:10px; font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#000;'><p>Contato enviado pelo Website</p></div>";	
		$msg .= "<div style='padding:10px; font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#000;'><p><strong>Nome:</strong> ".$nome."</p></div>";
		$msg .= "<div style='padding:10px; font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#000;'><p><strong>E-mail:</strong> ".$email."</p></div>";
		$msg .= "<div style='padding:10px; font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#000;'><p><strong>Telefone:</strong> ".$fone."</p></div>";
		$msg .= "<div style='padding:10px; font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#000;'><p><strong>Mensagem:</strong> ".$mensagem."</p></div>";
		
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

		//confere se foi anexado algo
		if($anexo['tmp_name']){

 			//confere extenções proibidas
			if(
				substr($_FILES['arquivo']['name'],-3)=="exe" || 
				substr($_FILES['arquivo']['name'],-3)=="php" || 
				substr($_FILES['arquivo']['name'],-4)=="php3" || 
				substr($_FILES['arquivo']['name'],-4)=="php4"
			){
				
				$this->msg('Não é permitido enviar arquivos com esta extenção!');
				$this->volta(1);

			} else {

				$array = explode(".", $anexo['name']);
				$extensao = end($array);

				$destino_arquivo = 'temp/'.time().'.'.$extensao;

				if(copy($anexo['tmp_name'], $destino_arquivo)){

					//anexando arquivos no email
					$mail->AddAttachment($destino_arquivo);

				} else {

					$this->msg('Não foi permitido anexar o arquivo!, tente um arquivo de menor tamanho!');
					$this->volta(1);

				}
			}
		}
		
		$mail->IsHTML(true); //enviar em HTML
		$mail->AddReplyTo("$email", "");
		$mail->Subject = "Contato website";
		$mail->Body = utf8_decode($msg);
		
		if($mail->Send()){
			
			$this->msg('Mensagem enviada com sucesso!');

			//remove anexo
			if($anexo['tmp_name']){
				unlink($destino_arquivo);
			}

			$this->volta(1);

		} else {
			$this->msg('Erro ao enviar mensagem!');
			$this->volta(1);
		}
		
	}
	
}