 <?php

$a = 10;

function trocaValor(&$a){ //esse $a não é o mesmo $a do começo do código.Para passagem por referencia &$a.

    $a += 50;

    return $a;
}

echo trocaValor($a);
echo"<br>";
echo trocaValor($a);
echo"<br>";
echo $a;