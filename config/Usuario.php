<?php
require 'BancoDados.php';

/**
* 
*/
abstract class Usuario extends BancoDados
{
	
	protected $table;
	private $nome;
	private $email;
	private $usuario;
	private $senha;

	public function setNome($nome){
		$this->nome = $nome;
	}

	public function getNome(){
		return $this->nome;
	}

	public function setEmail($email){
		$this->email = $email;
	}

	public function getEmail(){
		return $this->email;
	}

	public function setUsuario($usuario){
		$this->usuario = $usuario;
	}

	public function getUsuario(){
		return $this->usuario;
	}

	public function setSenha($senha){
		$this->senha = $senha;
	}

	public function getSenha(){
		return $this->senha;
	}

}
 ?>