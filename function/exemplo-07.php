<?php

function soma(float ...$valores){ //testar com int. Tipos escalares.
    return array_sum($valores);
}

echo soma(2,2);
echo"<br>";
echo soma(25,33);
echo"<br>";
echo soma(2.2,4.4);