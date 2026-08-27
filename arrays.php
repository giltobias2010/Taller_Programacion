<?php

$verduleria=array("Lechuga","Tomate","Pera","Repollo","Banana");

$verduleria[0]="Calabaza";
$verduleria[1]="Manzana";
$verduleria[2]="Ciruela";
$verduleria[3]="Uva";
$verduleria[4]="Durazno";

$precios={
    "calabaza"=> 1000;
    "manzana"=> 2400;
    "ciruela"=> 3800;
    "uva"=> 800;
    "durazno"=> 1200;
}

echo $precios["calabaza", "manzana", "ciruela", "uva", "durazno"];
