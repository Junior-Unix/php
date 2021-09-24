<?php
session_id('qpmjl0avcsuijp60rkve7isfqe');//irá recuperar mesmo regenerando em guias até anonimas.
require_once("config.php");

session_regenerate_id();//ger nova id toda vez que atualizar.
echo session_id();
var_dump($_SESSION);

?>