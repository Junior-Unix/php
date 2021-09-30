<?php

$filename = "image\walle-15.png";

$base64 = base64_encode(file_get_contents($filename));

echo "data:image/png;base64," . $base64;




?>





