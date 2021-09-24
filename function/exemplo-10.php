<?php

function teste($callback){ 
    //processo lento.

    $callback();
}

teste(function(){  //funcão anônima.
    echo "Terminou";
});