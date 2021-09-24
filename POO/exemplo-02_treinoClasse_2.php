<?php

class bancos{

    private $banco;

    public function getBanco(){
        return $this->banco;
    }
    public function setBanco($banco){
        $this->banco = $banco;
    }
}

$itau = new bancos();
$itau->setBanco("Itau SA.");
print_r($itau->getBanco());

echo "<br>";

class bandas{
    private $banda;
    private $estilo;

    public function getBanda(){
        return $this->banda;
    }
    public function setBanda($banda){
        $this->banda = $banda;
    }

    public function getEstilo(){
        return $this->estilo;
    }
    public function setEstilo($estilo){
        $this->estilo = $estilo;
    }
}

$metallica = new bandas();
$metallica->setBanda("Metallica.");
$metallica->setEstilo("Heavy-Metal");
print_r($metallica->getBanda());

class bibliotek{
    private $buch;
    private $schreiber;
}
    

?>