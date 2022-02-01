<?php
// Ej 1
echo "hola";


// $array = [];

// for($i=0;$i<10;$i++){
//     $array[$i] = mt_rand(0,10);
// };
// print_r($array);

$caras = 0;
$intentos = 0;
while($caras < 5){
    $intentos++;
    echo "Intento: $intentos\n";
    $dado = mt_rand(0,1);
    if($dado){
        echo "Es Cara!\n";
        $caras++;
    } else {
        echo "Cruz :(\n";
    }
}
echo "Se tardaron $intentos intentos para lograr $caras caras";