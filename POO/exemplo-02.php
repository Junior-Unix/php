<?php

class Familia{
    private $nome;
    private $idade;
    private $arvore;

    public function getNome(){
        return $this->nome;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getIdade():int{
        return $this->idade;
    }
    public function setIdade($idade){
        $this->idade = $idade;
    }

    public function getArvore(){
        return $this->arvore;
    }
    public function setArvore($arvore){
        $this->arvore = $arvore;
    }


    public function listarFamilia(){
        return array(
            "nome"=>$this->getNome(),
            "idade"=>$this->getIdade(),
            "arvore"=>$this->getArvore()
        );
    }
}

$pai = new Familia();
$pai->setNome("Nelson Leme de Almeida Junior");
$pai->setIdade("43");
$pai->setArvore("Pai");

$filho1 = new Familia();
$filho1->setNome("Yhago Gabriel Santos de Almeida");
$filho1->setIdade("24");
$filho1->setArvore("Primogênito");

$filho2 = new Familia();
$filho2->setNome("Yoseph Gustavo Leme de Almeida");
$filho2->setIdade("19");
$filho2->setArvore("Ultimogênito");


// print_r($pai->listarFamilia());
// echo "<br>";
// var_dump($pai->listarFamilia());


?>