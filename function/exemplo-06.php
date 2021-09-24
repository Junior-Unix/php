<?php

$pessoa = array(
    'nome'=>'Junior',
    'idade'=>'43'
);

foreach($pessoa as &$value){ //testar sem o &$value, $value.
    if(gettype($value) === 'integer') $value += 10;
    echo $value.'<br>';
}

print_r($pessoa);


