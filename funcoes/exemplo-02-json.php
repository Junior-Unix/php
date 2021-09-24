<?php

$json = '[{sonjunior@live.comArray ( [nome] => Yhago Gabriel [email] => ygsa@uber.com [telefone] => 41 9527-2005 ) Array ( [nome] => Yoseph-code [email] => yoseph@mkbank.com [telefone] => 41 99773-5033 ) Array ( [nome] => Rafael-core [email] => rafael@fortao.com [telefone] => mesmo@do.yo ) [{"nome":"Junior-Unix","email":["nelson.almeida.junior@escola.pr.gov.br","sonjunior@live.com"],"telefone":"41 99867-4272"},{"nome":"Yhago Gabriel","email":"ygsa@uber.com","telefone":"41 9527-2005"},{"nome":"Yoseph-code","email":"yoseph@mkbank.com","telefone":"41 99773-5033"},{"nome":"Rafael-core","email":"rafael@fortao.com","telefone":"mesmo@do.yo"}]'

$data = json_decode($json,true);


?>