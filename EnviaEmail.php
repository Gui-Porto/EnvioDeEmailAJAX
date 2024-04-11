<?php
require_once('PHPMailer/class.phpmailer.php');

$nome 		= $_POST['name'];
$telefone 	= $_POST['telefone'];
$subject 	= $_POST['subject'];
$email 		= $_POST['email'];
$observacoes 	= $_POST['observacoes'];

#ENVIA EMAIL
define('USER', 'SEUEMAIL@GMAIL.COM');
define('PWD',  'SENHA DO EMAIL');	

function smtpmailer($para, $de, $de_nome, $subject, $corpo) { 
	global $error;
	$mail = new PHPMailer();
	$mail->IsSMTP();			// Ativar SMTP
	$mail->SMTPDebug = 1;		// Debugar: 1 = erros e mensagens, 2 = mensagens apenas
	$mail->SMTPAuth = true;		// Autenticação ativada

	$mail->SMTPSecure = true;	// SSL REQUERIDO
	$mail->Host = 'sua host';			// SMTP utilizado
	$mail->Port = 465;  		// A porta 587 deverá estar aberta em seu servidor

	$mail->Username = USER;
	$mail->Password = PWD;
	$mail->SetFrom($de, $de_nome);
	$mail->CharSet = 'UTF-8';
	$mail->IsHTML(true);
	$mail->Subject = $subject;
	$mail->Body = $corpo;
	$mail->AddAddress($para);
	if(!$mail->Send()) {
		$error = 'Mail error: '.$mail->ErrorInfo; 
		return false;
	} else {
		$error = 1;
		return true;
	}
} 

$corpo = "<b>Nome: </b>".$nome.'<br>';
$corpo .= "<b>Assunto: </b>".$subject.'<br>';
$corpo .= "<b>Email: </b>".$email.'<br>';
$corpo .= "<b>Mensagem: </b>".$observacoes.'<br>';

smtpmailer('seu email', USER, $nome, $subject, $corpo);

if ($error == 1) {
	echo 1;
}else{
	echo $error;
}






?>