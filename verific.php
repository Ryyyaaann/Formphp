<?php 
    $nome = trim($_POST["nome"]);
    $email = trim($_POST["email"]);

    $SepName = explode(" ", $nome);

    if (empty($nome) || count($SepName) < 2) {
        echo "Nome inválido, Informe seu nome e sobrenome.<br>";
        exit;
    }else{
        echo "nome castrado com sucesso.<br>";
    }

    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo "Email válido.<br>";
    }else{
        echo "Email inválido.<br>";
    
    }

?>