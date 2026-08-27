<?php 

// echo 1=="1";

//var_dump(2=="1");

$valor_1 = 1; 
var_dump($valor_1 == "1"); // te pregunta si son igual - TRUE
var_dump($valor_1 === "1"); // te pregunta si son identicos - FALSE  
var_dump($valor_1 != "1"); // te pregunta si son diferentes - FALSE
var_dump($valor_1 <> "1"); // te pregunta si son diferentes ( lo mismo que el de arriba) - FALSE
var_dump($valor_1 !== "3"); // no identico - TRUE
var_dump($valor_1 < "4"); //menor que - FALSE
var_dump($valor_1 > "9"); // mayor que - TRUE
var_dump($valor_1 <= "4"); //menor o igual que - TRUE
var_dump($valor_1 >= "9"); // mayor o igual que - FALSE