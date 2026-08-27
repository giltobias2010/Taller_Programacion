<?php

// $equipo_1 = "Argentina";
// $equipo_2 = "Jordania";
// $equipo_3 = "Austria";
// $equipo_4 = "Argelia";

$grupo_j=array("Argentina", "Jordania", "Austria", "Argelia");

$partidos_argentina=array("3", "2", "2");
$partidos_jordania=array("1", "0", "2");
$partidos_austria=array("2", "1", "0");
$partidos_argelia=array("0", "2", "3");

$puntos_argentina = 0;
$puntos_jordania = 0;
$puntos_austria = 0;
$puntos_argelia = 0;

// PARTIDOS ARGENTINA

if($partidos_argentina[0] > $partidos_jordania[0]){
    echo "Suma 3 puntos la seleccion de: " .$grupo_j[0], "<br>";
    $puntos_argentina = $puntos_argentina + 3;
}else{
    echo "Suma 3 puntos la seleccion de: " .$grupo_j[1], "<br>";
    $puntos_jordania = $puntos_jordania + 3;
};

if($partidos_argentina[1] > $partidos_austria[1]){
    echo "Suma 3 puntos la seleccion de: " .$grupo_j[0], "<br>";
    $puntos_argentina = $puntos_argentina + 3;
}else{
    echo "Suma 3 puntos la seleccion de: " .$grupo_j[2], "<br>";
    $puntos_austria = $puntos_austria + 3;
};

if($partidos_argentina[2] > $partidos_argelia[2]){
    echo "Suma 3 puntos la seleccion de: " .$grupo_j[0], "<br>";
    $puntos_argentina = $puntos_argentina + 3;
}else{
    echo "Suma 3 puntos la seleccion de: " .$grupo_j[3], "<br>";
    $puntos_argelia = $puntos_argelia + 3;
}; 

// PARTIDOS JORDANIA

if($partidos_jordania[1] > $partidos_austria[0]){
    echo "Suma 3 puntos la seleccion de: " .$grupo_j[1], "<br>";
    $partidos_jordania = $partidos_jordania + 3;
}else{
    echo "Suma 3 puntos la seleccion de: " .$grupo_j[2], "<br>";
    $puntos_austria = $puntos_austria + 3;
};

if($partidos_jordania[2] > $partidos_argelia[1]){
    echo "Suma 3 puntos la seleccion de: " .$grupo_j[1], "<br>";
    $partidos_jordania = $partidos_jordania + 3;
}else{
    echo "Suma 3 puntos la seleccion de: " .$grupo_j[3], "<br>";
    $puntos_argelia = $puntos_argelia + 3;
}; 

// PARTIDOS AUSTRIA

if($partidos_austria[2] > $partidos_argelia[0]){
    echo "Suma 3 puntos la seleccion de: " .$grupo_j[2], "<br>";
    $partidos_austria = $partidos_austria + 3;
}else{
    echo "Suma 3 puntos la seleccion de: " .$grupo_j[3], "<br>";
    $puntos_argelia = $puntos_argelia + 3;
}; 

// VER SI PASA O NO

// echo $puntos_argentina , "<br>";
// echo $puntos_jordania , "<br>";
// echo $puntos_austria , "<br>";
// echo $puntos_argelia , "<br>";

if((int)$puntos_argentina > (int)$puntos_jordania && (int)$puntos_argelia && (int)$puntos_austria){
    echo ("Argentina pasa con " .$puntos_argentina), "<br>";
}else{
    echo ("Argentina no pasa con " .$puntos_argentina), "<br>";
};

if((int)$puntos_jordania > (int)$puntos_argentina && (int)$puntos_austria && (int)$puntos_argelia){
    echo ("Jordania pasa con " .$puntos_jordania), "<br>";
}else{
    echo ("Jordania no pasa con " .$puntos_jordania), "<br>";
};

if((int)$puntos_austria > (int)$puntos_jordania && (int)$puntos_argentina && (int)$puntos_argelia){
    echo ("Austria pasa con " .$puntos_austria), "<br>";
}else{
    echo ("Austria no pasa con " .$puntos_austria), "<br>";
};

if((int)$puntos_argelia > (int)$puntos_jordania && (int)$puntos_argentina && (int)$puntos_austria){
    echo ("Argelia pasa con " .$puntos_argelia), "<br>";
}else{
    echo ("Argelia no pasa con " .$puntos_argelia), "<br>";
};