<?php

function soma(float ...$valores):string{ //testar com int. Tipos escalares.
    return array_sum($valores);
}

echo var_dump(soma(2,2));// :string na saida da function deu cast em string.
echo"<br>";
echo soma(25,33);
echo"<br>";
echo soma(2.2,4.4);