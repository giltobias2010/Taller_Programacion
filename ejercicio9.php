<?php 

$c = 1;
$valor_fijo = 3500;
do {
    echo  "Pedido " . $c  . " = " . "$" . $c*$valor_fijo . "<br>";
    $c++;
} while ($c <= 10);

echo "Promoción finalizada";