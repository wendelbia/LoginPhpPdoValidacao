<?php 

require 'config.php';

/**
* 
*/
class BancoDados{
	
	private static $instance;

	public static function getInstance(){
		if (!isset(self::$instance)) {
			try {
				self::$instance = new PDO('mysql:host=' . HOST . ';dbname=' . DB, USER, PASS);
				self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			} catch (Exception $e) {
				echo"Erro".$e->getMessage();
			}
		}
		return self::$instance;
	}

	public static function prepare($sql){
		return self::getInstance()->prepare($sql);
	}
}
 ?>