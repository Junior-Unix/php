<?php

class Documento{
    private $numero;

    public function getNumero(){
        return $this->numero;
    }
    public function setNumero($numero){
        $resultado = Documento::validarCPF($numero);
            if ($resultado === false) {

                throw new Exception("CPF informado não é válido.", 1);

            }
        $this->numero = $numero;
    }    


public static function validarCPF($cpf):bool{

if(empty($cpf)){
    return false;
}

$cpf = preg_match('/[0,9]/', $cpf)?$cpf:0;
$cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);

    if(strlen($cpf) != 11){
        echo"length";
        return false;
    }else 
        if( $cpf == '00000000000' ||
            $cpf == '11111111111' || 
            $cpf == '22222222222' || 
            $cpf == '33333333333' || 
            $cpf == '44444444444' || 
            $cpf == '55555555555' || 
            $cpf == '66666666666' || 
            $cpf == '77777777777' || 
            $cpf == '88888888888' || 
            $cpf == '99999999999'){
            
                return false;
        }else{
            for( $i = 9; $i < 11; $i++){
                for( $j = 0, $k = 0; $k < $i; $k++){
                    $j += $cpf{$k} * (($i +1) - $k);
                }
                $j = ((10 * $j) % 11) % 11;
                if( $cpf{$k} != $j){
                    return false;
                }
                
            }
            return true;
        }
    }
}
//Duas formas

// //Primeira.
$cpf = new Documento();
$cpf->setNumero("00000000001");
var_dump($cpf->getNumero());
//Segunda
var_dump(Documento::validarCPF("00000000000"));

?>