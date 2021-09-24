<?php

require_once("config.php");

echo session_save_path();
echo "<br>";
var_dump(session_status());
echo "<br>";

switch(session_status()){
    case PHP_SESSION_DISABLED:
        echo "valor (0):As sessões estão desabilitadas!";
        break;
    case PHP_SESSION_NONE:
        echo "valor (1):A sessão foi habilitada mas não inicializada!";
        break;
    case PHP_SESSION_ACTIVE:
        echo "valor (2):As sessões estiveram habilidadas, e uma existe!";
        break;
}

?>