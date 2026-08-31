<?php 

// $pc = ["SO", "SSD", "GPU", "RAM", "CPU"];
// foreach ($pc as $componente) {
//     if($componente=="GPU"){
//         continue;
//     }
//     echo $componente."<br>";
// }

$i = 1;

for ($i=1; $i<=10; $i++) {
    if($i==5){
        continue;
    } 
    echo $i . "<br>";
}

while($i<=10) {
    if($i==3){
        $i++;
        continue;
    } 
    echo $i . "<br>";
    $i++;
}