<?php

$nome = addcslashes($_POST['nome']);
$data = addcslashes($_POST['data']);
$estadocivil = addcslashes($_POST['estadocivil']);
$nacionalidade = addcslashes($_POST['nacionalidade']);
$endereco = addcslashes($_POST['endereco']);
$email = addcslashes($_POST['email']);
$telefone1 = addcslashes($_POST['telefone1']);
$telefone2 = addcslashes($_POST['telefone2']);
$formacao = addcslashes($_POST['formacao']);
$cursos = addcslashes($_POST['cursos']);
$experiencias = addcslashes($_POST['experiencias']);
$habilidades = addcslashes($_POST['habilidades']);
$cnh = addcslashes($_POST['cnh']);

$para = "curriculogobibay@gmail.com";
$assunto = "Coleta de dados currícular";

$corpo = "Nome: ".$nome."\n"."Data: ".$data."\n"."Estadocivil: ".$estadocivil."\n"."Nacionalidade: ".$nacionalidade."\n"."Endereco: ".$endereco."\n"."Email: ".$email."\n"."Telefone1: ".$telefone1."\n"."Telefone2: ".$telefone2."\n"."Formacao: ".$formacao."\n"."Cursos: ".$cursos."\n"."Experiencias: ".$experiencias."\n"."Habilidades: ".$habilidades."\n"."CNH: ".$cnh;

$cabeca = "From: contato.gobibay@gmail.com"."\n"."Reply-to: ".$email."\n"."X=Mailer:PHP/".phpversion();

if(mail($para,$assunto,$corpo,$cabeca)){
    echo("Dados enviados com sucesso! Seu currículo será entregue em breve.");
}else{
    echo("Houve um erro no envio dos dados. Tente novamente.");
}
?>