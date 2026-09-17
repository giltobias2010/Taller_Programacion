<?php 

$clave = "HolaMundo123";

// echo hash("md5", $clave). "<br>";

// foreach (hash_algos() as $algoritmos) {
//     echo $algoritmos. "  -  " .hash($algoritmos, $clave). "<br>";
// }

// echo password_hash($clave, PASSWORD_BCRYPT, ["cost"=> 11]);

$clave_procesada = password_hash($clave, PASSWORD_BCRYPT, ["cost"=> 11]);

$clave_2 = "1234567";

if(password_verify($clave, $clave_procesada)){
    echo "Las claves coinciden";
}else{
    echo "Las claves coinciden";
}

