<?php

class Pessoa{
    public $nome = "Junior-Unix";
    protected $idade = "43";
    private $senha = "password";

    public function verDados(){
        echo $this->nome . "<br>";
        echo $this->idade . "<br>";
        echo $this->senha . "<br>";
    }
}

$object = new Pessoa(); // Só verá public.
//echo $object->senha . "<br>"; //Ao comentar, acesso do proximo clone $object libera.

$object->verDados(); // Acessa de dentro, tem permissão total.
