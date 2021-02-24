<?php 


 include("php/phpemail/class.phpmailer.php"); 
 include("php/phpemail/class.smtp.php"); 
 include("controle_bd.php"); 

 //$mailDestino='baashir100@gmail.com';
//$nome='teste';
$assunto='Relato de bullying';
//$mensagem='teste msg de eric';

 $mail = new PHPMailer();
 $mail->IsSMTP(); 
 $mail->CharSet = 'UTF-8';
 //$mail->True;
 $mail->Host = "smtp.gmail.com"; // Servidor SMTP
 $mail->SMTPSecure = "tls"; // conexão segura com TLS
 $mail->Port = 587; 
 $mail->SMTPAuth = true; // Caso o servidor SMTP precise de autenticação
 $mail->Username = "ajudeme.bullying@gmail.com"; // SMTP username
 $mail->Password = "Ajude-me"; // SMTP password
 $mail->From = "ajudeme.bullying@gmail.com"; // From
 $mail->FromName = "Denúncia de Bullying" ; // Nome de quem envia o email
 $mail->AddAddress($mailDestino); // Email e nome de quem receberá //Responder
 $mail->WordWrap = 50; // Definir quebra de linha
 $mail->IsHTML = true ; // Enviar como HTML
 $mail->Subject = $assunto ; // Assunto
 $mail->Body = '<br/>' . $mensagem . '<br/>' ; //Corpo da mensagem caso seja HTML
 $mail->AltBody = "$mensagem" ; //PlainText, para caso quem receber o email não aceite o corpo HTML
 //$mail->SMTPDebug = 2;

/*
if(!$mail->Send()) // Envia o email
 { 
 echo "<script type='text/javascript'> alert('Erro no envio da Mensagem.'); </script>";
 }else{
 	echo "<script type='text/javascript'> alert('Email Enviado com Sucesso.'); </script>";

*/
$data = date("Y-m-d");


inserirDados($escola, $turma, $data);
//buscarDados();

 //} 



?>

