<?php

$dt = new DateTime();
$periodo = new DateInterval("P15D");//  criando classe com 15 dias mais.
echo $dt->format("d/m/Y H:i:s");

$dt->add($periodo); //09/10/2021 11:50:00 ("P15D).
echo "<br>";
echo $dt->format("d/m/Y H:i:s"); //resposta no navegador 24/09/2021 11:45:09.

?>