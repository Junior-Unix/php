<?php //cadastro cliente.

namespace Cliente;

class Cadastro extends \Cadastro{

    public function registrarVenda(){
        echo "estou dentro da pasta class\Cliente\Cadastro.php".$this->getNome();
    }
}

?>