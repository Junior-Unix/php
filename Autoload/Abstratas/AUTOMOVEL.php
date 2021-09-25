<?php

interface VEICULO{
    public function acelerar($velocidade);
    public function frenar($velocidade);
    public function trocarMarcha($marcha);
}

abstract class AUTOMOVEL implements VEICULO{
    public function acelerar($velocidade){
        echo "Acelerou a " . $velocidade . "<br>";
    }
    public function frenar($velocidade){
        echo "Frenou a " . $velocidade . "<br>";
    }
    public function trocarMarcha($marcha){
        echo "Marcha " . $marcha . "<br>";
    }
}

?>