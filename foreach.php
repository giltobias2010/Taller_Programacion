<?php 

$laptop = ["Acer nitro 5", "Windows 11", "AMD Ryzen 5 4600H", "SSD 256GB", "RAM 24GB"];

$frutas = [
    "Fresas" => 100,
    "Peras" => 30,
    "Sandias" => 10,
    "Melocotones" => 17,
    "Manzanas" => 9
];

foreach ($frutas as $clave => $valor) {
    echo "Hay ". $valor. " " .$clave." en el inventario"."<br>";
}

// $productos = [
//     ["codigo" => "A0001", "descripcion" => "Mouse"],
//     ["codigo" => "A0002", "descripcion" => "Teclado"],
//     ["codigo" => "A0003", "descripcion" => "Monitor"],
//     ["codigo" => "A0004", "descripcion" => "Impresor"],
// ];

// foreach ($productos as $prod) {
//     echo $prod["codigo"]. " - " . $prod["descripcion"] . "<br>";
// }