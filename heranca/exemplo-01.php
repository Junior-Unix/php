<?php

class Documento{
    private $numero;

    public function getNumero(){
        return $this->numero;
    }

    public function setNumero($n){
        $this->numero = $n;
    }
}

class CPF extends Documento{
    public function validar():bool{
        $numeroCPF = $this->getNumero();

        // Aqui vai a fonte validarCPF, esperando aprender link de documentos.
        return true; // No momento declararemos true.
    }
}

$doc = new CPF();
$doc->setNumero("12345678912");

var_dump($doc->validar());
echo"<br>";
echo $doc->getNumero(); 
//Resposta no navegador: bool(true)
//                       12345678912


?>