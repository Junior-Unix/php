<?php

$file = fopen("log.txt", "a+");

fwrite($file, date("Y-m-d H:i:s") . "\r\r");

fclose($file);

echo "a+.";