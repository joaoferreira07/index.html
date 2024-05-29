<?php

    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $telefone = addslashes($_POST['felefone']);
    $mensagem = addslashes($_POST['mensagem']);

    $para = "technology.jvl@gmail.com";
    $assunto = "Contact";

    $corpo = "Nome: ".$nome."\n"."E-mail: ".$email."\n"."Telefone: ".$felefone."\n"."mensagem: ".$mensagem;

    $cabeca = "From: tecnologiacontas@hmail.com"."\n"."Reply-to: ".$email."\n"."X=Mailer:PHP/".phpversion();

    if(mail($para,$assunto,$corpo,$cabeca)){
        echo("E-mail enviado com sucesso!");
    }else{
        echo("Houve um erro ao enviar o email!");
    }

?>