<?php

class Usuarios{

	private $idusuario;
	private $deslogin;
	private $dessenha;
	private $dtcadasto;

	public function getUsuario(){
		return $this->idusuario;
	}
	public function setUsuario($value){
		$this->usuario = $value;
	}


	public function getDeslogin(){
		return $this->deslogin;
	}
	public function setDeslogin($value){
		$this->deslogin = $value;
	}

	public function getDessenha(){
		return $this->dessenha;
	}
	public function setDessenha($value){
		$this->dessenha = $value
	}

	public function getDtcadastro(){
		return $this->dtcadasto;
	}
	public function setDtcadastro($value){
		$this->dtcadastro = $value;
	}


public function LoadById($id){
 $sql = new Sql();

 $results = $sql->select("SELECT * FROM tb_usuarios WHERE idusuario = :ID", array(":ID"=>$id));
	if(count($results) > 0{
		$this->setData($results[0];	
	}
}

public static function getList(){
 $sql = new Sql();
 return $sql->select("SELECT * FROM tb_usuarios WHERE deslogin;");

}

public static function search($login){
 $sql = new Sql();
 
 return $sql->select("SELECT * FROM tb_usuarios WHERE deslogin 
	 	      LIKE :SEARCH ORDER BY deslogin", array(
		      					     ':SEARCH'=>"%".$login."%"));
}

public function login($login, $password){
	$sql = new Sql();
}


}



}


?>
