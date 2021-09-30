<?php

try{



}catch(Exeption $e){
    echo json_encode(array(
        "messege"=>$e->getMessege(),
        "line"=>$e->geLine(),
        "file"=>$e->getFile(),
        "code"=>$e->getCode()
    ));
}


?>