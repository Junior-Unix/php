<?php

class Pessoa{

    public $nome; //Atributo.

    public function falar(){//Metodo
        
        return "O meu nome eh ".$this->nome;
    
    }
}

$junior = new Pessoa();
$junior->nome = "Junior-Unix";
echo $junior->falar();

class Familia{

    public $filhos;

    public function arbeit(){
        return "Trabalha em ".$this->arbeit;
    }
}

$yoseph = new Familia();
$yoseph->arbeit = "Programador";
echo $yoseph->arbeit();

echo"<br>";

$yhago = new Familia();
$yhago->arbeit = "Empresário";
echo $yhago->arbeit();

$rafael = new Familia();
$rafael->arbeit = "Ainda não trabalha";
echo $rafael->arbeit();



?>