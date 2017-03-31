<?php

require_once '../controle/Controle.php';

if(empty($_POST['usuario'])){
    echo ("<script>alert('Digte o usuário.') 
        window.location='../login.php';</script>");
}elseif (empty($_POST['senha'])) {
    echo ("<script>alert('Digite a senha.') 
        window.location='../login.php';</script>");
}else{
    
try {

    if (isset($_POST['login'])) {

        $controle = new Controle();

        $usuario = addslashes(trim(strip_tags($_POST['usuario'])));
        $senha = addslashes(trim(strip_tags(md5($_POST['senha']))));

        $count = $controle->login($usuario, $senha);

        if ($count > 0) {
             $value = $controle->findAll();
              foreach ($value as $row) {
              $_SESSION['usuario'] = $row['usuario'];
              } 

            session_start();
            $_SESSION['usuario'] = $usuario;
            echo("<script>window.alert('Bem vindo $usuario. Você está logado agora!')
                window.location='../bem_vindo.php';</script>");
        } else {
            echo("<script>window.alert('Sinto muito, mas você não está registrado.')
                window.location.href='../login.php';</script>");
        }
    }
} catch (Exception $ex) {
    echo "Erro: " . $x->getMessage();
}
}