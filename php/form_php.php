<?php

if(isset($_POST['email']) && !empty($_POST['email'])){

$nome = addslashes($_POST['name']);
$email = addslashes($_POST['email']);
$telefone = addslashes($_POST['telefone']);
$cpf = addslashes($_POST['cpf']);
$assunto = addslashes($_POST['assunto']);
$message = addslashes($_POST['message']);

$to = "marketing@biadiesel.com.br";
$subject = "CONTATO SITE";
$body = "Nome: ".$nome. "\r\n".
		"Email: ".$email. "\r\n".
		"Telefone: ".$telefone. "\r\n".
		"Cpf/CNPJ: ".$cpf."\r\n".
		"Assunto: ".$assunto."\r\n".
	    "Mensagem: ".$message;

$header = "From: nfe@biadiesel.com.br"."\r\n"."Reply-To:".$email."\r\n".
		  "X=Mailer:PHP/".phpversion();


if(mail($to,$subject,$body,$header)){
	echo("Email enviado com sucesso!");
}else{
	echo("Email não pode ser enviado");
}

}


?>