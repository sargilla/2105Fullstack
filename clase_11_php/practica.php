<?php
// Ej 1
echo "hola";

// Ej 7
$mascotas = [
[
'animal' => 'perro',
'edad' => 5,
'altura' => 0.6
]
];

$mascotas[];
$mascotas[0]['animal'] = 'perro';
$mascotas[0]['edad'] = 5;
$mascotas[0]['altura'] = 0.6;


let var = '14';

let var = {
    'animal': 'perro',
    'edad': 5
}

// $array = array('','');
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