<?php 

// function saludo($nombre){
//     return "Hola, mi nombre es: $nombre";
// }

// $saludo = saludo();

// $usuario = "Ashley";
// echo saludo("Nicole");

// echo saludo($nombre="Carlos");

function promedio_alumno($nota_1, $nota_2, $nota_3){
    $promedio = ($nota_1+$nota_2+$nota_3) / 3;
    return $promedio;
};

echo "El promedio es: " .promedio_alumno(7,9,6);
echo "<br>";
echo "El promedio es: " .promedio_alumno(5,3,6);
echo "<br>";
echo "El promedio es: " .promedio_alumno(7,4,2);
echo "<br>";
