<?php
/**
 * Código para envio de e-mail utilizando a classe PHPMailer
 *
 * @author Leo Baiano <leobaiano@leobaiano.com>
 * @version 1.0
*/
 

function my_send_email(){
	// Chama a classe PHPMailer (pode baixar ela aqui: http://phpmailer.sourceforge.net)
	require_once('phpmailer/class.phpmailer.php');
	 
	// Instancia o objeto $mail a partir da Classe PHPMailer
	$mail = new PHPMailer();
	 
	// Recupera os dados do formulário
	$ema  = $_POST['email'];
	$nom  = $_POST['nome'];
	$fon  = $_POST['telefone'];
	$ori  = $_POST['origem'];
	
	// $npessoas  = $_POST['numero-pessoas'];
	// $ncriancas  = $_POST['numero-criancas'];
	// $nvoo  = $_POST['numero-voo'];
	
	// $origem  = $_POST['origem'];
	// $destino  = $_POST['destino'];
	
	// $horarioinicio  = $_POST['horario-inicio'];
	// $horariosaida  = $_POST['horario-saida'];
	
	
	//$men = $_POST['mensagem'];
	 
	// Recupera o nome do arquivo
	 $arquivo_nome = $cur['name'];
	// Recupera o caminho temporario do arquivo no servidor
	 $arquivo_caminho = $cur['tmp_name'];
	
	// Monta a mensagem que será enviada
	$corpo = "
			<strong>[Site] Novo orçamento formulário</strong><br /><br />
			<strong>Nome:</strong> $ema<br />
			<strong>E-mail:</strong> $nom<br />				
			<strong>Telefone:</strong> $fon<br />
			<br />
			<strong>CPF:</strong> $ori<br />
			
			 <br />
			<strong>Mensagem:</strong> $ema<br />
		";
	$corpoSimples = "
			[Site] Novo e-mail do formulário\n
			Nome: $nom\n
			E-mail: $ema\n				
			Telefone: $fon\n
			CPF: $ori\n
			\n
			Experiência: $ema\n
			
			 \n
			Mensagem:</strong> $nom\n
		";
	
	$mail->Subject = "[Site] Novo e-mail formulário - $nom";
	// Define que a codificação do conteúdo da mensagem será utf-8
	$mail->CharSet = "utf-8";	
	// Informo o Host, From, subject e para quem o e-mail será enviado
	$mail->Host = 'mail.convertte.com.br';
	$mail->FromName = $nom;
	$mail->From = 'mendes@convertte.com.br';
	$mail->AddAddress('mendes@convertte.com.br');
	//Define o email que receberá resposta desta mensagem, quando o destinatário responder
	$mail->AddReplyTo($ema, $mail->FromName);
	
	//Endereço de resposta
	/* $mail->AddReplyTo($ema);
	$mail->Body = $mensagem;
	$mail->AltBody = " ESPAÇO DO ALT-BODY"; */
	 
	 
	// Informa que a mensagem deve ser enviada em HTML
	$mail->IsHTML(true);
	 
	// Informa o corpo da mensagem
	$mail->Body = $corpo;
	 
	// Se o e-mail destino não suportar HTML ele envia o texto simples
	$mail->AltBody = $corpoSimples;
	 
	// Anexa o arquivo
	$mail->AddAttachment($arquivo_caminho, $arquivo_nome);
	 
	
	// Tenta enviar o e-mail e analisa o resultado
	if ($mail->Send()) {
		// echo '<script type="text/javascript">alert("Sua mensagem foi enviada!");
		// window.history.go(-1);</script>';
	}
	else {
		// echo 'Erro:' . $mail->ErrorInfo;
	}
	
}
add_action('wp_ajax_my_send_email', 'my_send_email');
add_action('wp_ajax_nopriv_my_send_email', 'my_send_email');

?>