<?php
//cadastro cliente.
namespace Cliente;

class Cadastro extends \Cadastro{

    public function registrarVenda(){
        echo "Registro venda".$this->getNome();
    }
}

?>