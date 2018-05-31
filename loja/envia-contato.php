<?php 
session_start();
$nome = $_POST['nome'];
$email = $_POST['email'];
$mensagem = $_POST["mensagem"];

require_once("PHPMailerAutoload.php");

$mail = new PHPMailer();
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPsecure = 'tls'; 
$mail->SMTPAuth = true;
$mail->Username = 'diogo.br91@gmail.com';
$mail->Password = "senha"; //senha do seu gmail

//Para mandar email no gmail ativar nas configurações, Permitir aplicativos menos seguros: ATIVADA 

$mail->setFrom("diogo.br91@gmail.com", "Email da Loja");
$mail->addAddress("diogo.br91@gmail.com");
$mail->Subject = "Email de Contato da loja";
$mail->msgHTML("<html>De: {$nome}<br/>Email: {$email}<br/>Mensagem: {$mensagem}</html>");
$mail->AltBody = "de: {$nome}'\n'email:{$email}'\n'mensagem: {$mensagem}";


if($mail->send()) {
	$_SESSION["success"] = "Mensagem enviada com sucesso";
	header("Location: index.php");

} else {
	$_SESSION["danger"] = "Erro ao enviar mensagem" . $mail->ErrorInfo;
	header("Location: contato.php");
}
die();
