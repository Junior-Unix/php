<?php

interface VEICULO{
    public function acelerar($velocidade);
    public function frenar($velocidade);
    public function trocarMarcha($marcha);
}

abstract class AUTOMOVEL implements VEICULO{

    public function acelerar($velocidade){
        echo "O veículo acelerou até " . $velocidade . " km/h";
    }

    public function frenar($velocidade){
        echo "O veículo frenou até " . $velocidade . " km/h";
    }

    public function trocarMarcha($marcha){
        echo "O veículo engatou a marcha " . $marcha;
    }
}

class DELREY extends AUTOMOVEL{
    public function empurrar(){

    }
}

$carro = new DELREY();
$carro->acelerar(200);


?>