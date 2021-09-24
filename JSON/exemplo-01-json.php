<?php

$pessoas = array();

array_push($pessoas, array(
    'nome'=>'Junior-Unix',
    'email'=>array('nelson.almeida.junior@escola.pr.gov.br',
                   'sonjunior@live.com'),
    'telefone'=>'41 99867-4272'
    ));

array_push($pessoas, array(
    'nome'=>'Yhago Gabriel',
    'email'=>'ygsa@uber.com',
    'telefone'=>'41 9527-2005',
    ));

array_push ($pessoas, array(
    'nome'=>'Yoseph-code',
    'email'=>'yoseph@mkbank.com',
    'telefone'=>'41 99773-5033'
));

array_push($pessoas, array(
    'nome'=>'Rafael-core',
    'email'=>'rafael@fortao.com',
    'telefone'=>'mesmo@do.yo'
));

// print_r($pessoas[0]['email'][1]);
// print_r($pessoas[1]);
// print_r($pessoas[2]);
// print_r($pessoas[3]);

echo json_encode($pessoas);

?>