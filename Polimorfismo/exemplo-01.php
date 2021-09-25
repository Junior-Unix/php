<?php

abstract class ANIMAL{
    public function falar(){
        return "Som";
    }
    public function mover(){
        return "Anda";
    }
}

class CACHORRO extends ANIMAL{
    public function falar(){
        return "Late.";
    }
}

class GATO extends ANIMAL{
    public function falar(){
        return "Mia.";
    }
}

class PASSARO extends ANIMAL{
    public function falar(){
        return "Canta.";
    }
    public function mover(){
        return "Voa" . parent::mover(); //acessar classe pai.
    }
}

$pluto = new CACHORRO();
echo $pluto->falar() . "<br>";
echo $pluto->mover() . "<br>";

echo "--------------------------------" . "<br>";
$garfield = new GATO();
echo $garfield->mover() . "<br>";
echo $garfield->falar() . "<br>";

echo "--------------------------------" . "<br>";

$piupiu = new PASSARO();
echo $piupiu->falar() . "<br>";
echo $piupiu->mover() . "<br>";


?>