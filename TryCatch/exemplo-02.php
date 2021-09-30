<?php

function trataNome($name){
    if(!$name){
        throw new Exeption("Erro", 1);
    }
    echo ucfirst($name)."<br/>";
}

try{
    trataNome("Junior-Unix");
    trataNome("");
}catch(Exeption $e){
    echo $e->getMessage();
}finally{
    echo "Executou o Try!";
}

?>