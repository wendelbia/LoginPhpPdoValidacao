<?php

require_once '../controle/Controle.php';

if(empty($_POST['nome'])){
    echo ("<script>window.alert('Digite o nome!')
        window.location='../index.php';</script>");
}elseif (empty($_POST['email'])) {
    echo ("<script>window.alert('Digite o email!')
        window.location='../index.php';</script>");
}elseif (empty ($_POST['usuario'])) {
    echo ("<script>window.alert('Digite o usuario')
        window.location='../index.php';</script>");
}elseif(empty ($_POST['senha'])){
    echo ("<script>window.alert('Digite a senha')
        window.location='../index.php';</script>");
} else {

try {

    $controle = new Controle();
    
    $email = $_POST['email'];
    $count = $controle->countEmail($email);
    
    if ($count > 0) {
        echo ("<script>window.alert('Email: $email já existe! Cadastre novamente outra conta!')
                window.location='../index.php';</script>");
    } else {
        $usuario = $_POST['usuario'];
        $controle->insertUsuario();
        echo("<script>window.alert('$usuario seu cadastro foi realizado com sucesso! Vamos redirecioná-lo para a área de login!')
                window.location='../login.php';</script>");
    }
} catch (Exception $ex) {
    echo "Erro" . $ex->getMessage();
}
}

