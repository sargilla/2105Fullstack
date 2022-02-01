<?php

/* 
Este es un mensaje de comentario

Otra linea aca


*/

// hasdasdasd


// $nombre_completo = 'santiago argilla';

// $curso = "Fullstack";



// echo "$nombre_completo es el profe de el curso de $curso";

// $nombre ="asd";

// $nombre = 25;

// var_dump($nombre);

$miArray = ['hola', 'chau', 0, 42,true,'as'];

// print_r($miArray);

// var_dump($miArray[0]);
// echo $miArray[1];

$auto = [
    'marca' => 'toyota',
    'modelo' => 'corolla',
    'color' => 'gris',
];

// echo $auto['modelo'];

$autos = [
    [ // 0
        'marca' => 'toyota',
        'modelo' => 'corolla',
        'color' => 'gris',
    ],
    [ // 1
        'marca' => 'fiat',
        'modelo' => 'cronos',// modelo
        'color' => 'rojo',
    ]
];

// echo $autos[1]['modelo'];

$variable = " A adasd        ";
// var_dump(strtoupper(trim($variable)));

// include 'config.php';

// echo $config;


$hola = 'hola';

$nombre ='florencia';

$texto = $hola;

$texto .= ' ';

$texto .= $nombre;
$texto .= ' como estas';


// echo $texto;

$numero = 5;

$numero += 3;
$numero ++;
$numero --;

// echo $numero;


// echo("1" == "01"); // true
// echo "\n";
// echo(1 === 1); // true

$clima = "soleado";
$dia = "domingo";

// if ($clima == "soleado") {
//     echo "Saldré a pasear";
// } else if($clima == 'lluvioso') {
//     echo "Me quedo en casa";
// } else if($clima == 'nublado') {
//     echo "Me voy al club";
// } else {
//     echo "Da para salir?";
// }


// switch ($clima) {
//     case 'soleado':
//         echo "Saldré a pasear";
//         break;
//     case 'lluvioso':
//         echo "Lleva paraguas";
//         break;
//     case 'nublado':
//         echo "Me voy al club";
//         break;
//     default:
//         echo "Da para salir?";
//         break;
// }
// $num1 = 99;
// $num2 = 63;
// $resultado = $num1 > $num2 ? 'El numero 1 es mayor ': 'El numero 2 es mayor';

// echo $resultado;

// for ($i = 1; $i <= 10; $i++) {
//     if ($i == 3) {
//         continue; // Salta la iteración
//     }
//     // if ($i == 8) {
//     //     break; // Termina el bucle
//     // }
//     echo "$i manzana\n"; # sentencia de impresión por pantalla
// }

$capitales = [
    "Italia"=>"Roma",
    "Luxembourg"=>"Luxembourg",
    "Bélgica"=> "Bruselas",
    "Dinamarca"=>"Copenhagen",
    "Finlandia"=>"Helsinki",
    "Francia" => "Paris",
    "Slovakia"=>"Bratislava",
    "Eslovenia"=>"Ljubljana",
    "Alemania" => "Berlin",
    "Grecia" => "Athenas",
    "Irlanda"=>"Dublin",
    "Holanda"=>"Amsterdam",
    "Portugal"=>"Lisbon",
    "España"=>"Madrid",
    "Suecia"=>"Stockholm",
    "Reino Unido"=>"London",
    "Chipre"=>"Nicosia",
    "Lithuania"=>"Vilnius",
    "Republica Checa"=>"Prague",
    "Estonia"=>"Tallin",
    "Hungría"=>"Budapest",
    "Latvia"=>"Riga",
    "Malta"=>["Valletta","Otra"],
    "Austria" => "Vienna",
    "Polonia"=>"Warsaw"
] ;




// foreach ($capitales as $pais => $ciudad){
//     if(is_array($ciudad)){
//         foreach($ciudad as $otra){
//             echo "$otra es una de las capitales de  $pais \n";
//         }
//     } else {

//         echo  "$ciudad es la capital nacional de  $pais \n";
//     }
// }


// $contador = 0;
// while ($contador > 0) {
//     echo $contador."\n";
//     $contador--;
//     /* Es lo mismo que $contador = $contador - 1 */
// }

$cantidad = 0;
do {
    echo $cantidad . "\n";
    $cantidad--;
} while ($cantidad > 0);