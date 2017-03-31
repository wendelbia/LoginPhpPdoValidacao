<?php

require_once '../config/Usuario.php';

class Controle extends Usuario {

    protected $table = 'tb_usuario';

    public function countEmail($email) {
        $email = addslashes(trim(strip_tags($_POST['email'])));
        $stmt = BancoDados::prepare("SELECT * FROM tb_usuario WHERE email=?");
        $stmt->bindValue(1, $email, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->rowCount();
    }

    public function insertUsuario() {
        
        $nome = addslashes(trim(strip_tags($_POST['nome'])));
        $email = addslashes(trim(strip_tags($_POST['email'])));
        $usuario = addslashes(trim(strip_tags($_POST['usuario'])));
        $senha = addslashes(trim(strip_tags(md5($_POST['senha']))));
        
        $stmt = BancoDados::prepare("INSERT INTO tb_usuario (nome, email, usuario, senha) VALUES (?,?,?,?)");
        $stmt->bindValue(1, $nome, PDO::PARAM_STR);
        $stmt->bindValue(2, $email, PDO::PARAM_STR);
        $stmt->bindValue(3, $usuario, PDO::PARAM_STR);
        $stmt->bindValue(4, $senha, PDO::PARAM_STR);

        return $stmt->execute();
    }
    
    public function login($usuario, $senha){
        
        $usuario = addslashes(trim(strip_tags($_POST['usuario'])));
        $senha = addslashes(trim(strip_tags(md5($_POST['senha']))));
        
        $sql = "SELECT * FROM tb_usuario WHERE usuario = ? AND senha = ?";
        $stmt = BancoDados::prepare($sql);
        $usuario = addslashes(trim(strip_tags($_POST['usuario'])));
        $senha = addslashes(trim(strip_tags(md5($_POST['senha']))));
        
        $stmt->bindValue(1, $usuario, PDO::PARAM_STR);
        $stmt->bindValue(2, $senha, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->rowCount();
    }
    
    public function findAll(){
        $sql = "SELECT * FROM $this->table";
        $stmt = BancoDados::prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

}
