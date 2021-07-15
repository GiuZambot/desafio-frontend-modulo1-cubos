<?php
    if (isset($_POST["enviar"])){
        $nome=$_POST["nome"];
        $email=$_POST["email"];
        $msg=$_POST["msg"];
        $destinatario = "giuzambot@gmail.com";

        // monta o e-mail na variavel $body

        $body = "===================================" . "\n";
        $body = $body . "Mensagem Site - Desafio Módulo 1" . "\n";
        $body = $body . "===================================" . "\n\n";
        $body = $body . "Nome: " . $nome . "\n";
        $body = $body . "Email: " . $email . "\n";
        $body = $body . "Mensagem: " . $msg . "\n\n";
        $body = $body . "===================================" . "\n";

        // envia o email
        mail($destinatario, "E-mail do form site desafio 1" , $body, "From: $email\r\n");

        // redireciona para a página de obrigado
        header("location:contato.html");
    }
?>