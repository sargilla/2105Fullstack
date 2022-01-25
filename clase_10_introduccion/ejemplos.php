<?php

// echo "hola mundo";
// Variable
// $nombre = "Santiago Argilla";
// $numero =12;
// $bool = false;
// $bool = false;
// echo "<br>";
// var_dump($nombre);
// var_dump($numero);
// var_dump($bool);

// echo "<br>";
// $nombre .= " es el mejor profe";
// print_r($nombre);
// exit;


// echo $nombre;

// $numero1 = 12;
// $numero2 = 5;

    // echo "<br>";
    // echo "La suma de los numeros da: " . $numero1 + $numero2;
    // echo "<br>";

// var_dump($numero1 != $numero2);


// echo "<br>";


// if($numero1 < $numero2 && $numero2 > 0){
//     echo "no me gustan los negativos";
// } else {
//     echo "La resta de los numeros da: " . $numero1-$numero2;
// }


// Definicion de la funcion
function sumar($sumando1,$sumando2){
    return $sumando1 + $sumando2;
}
function restar($operando1,$operando2){
    return $operando1 - $operando2;
}

function multiplicar($operando1,$operando2){
    return $operando1 * $operando2;
}


function calculadora($n1,$n2,$operacion){
    return $operacion($n1,$n2);
}

echo "<br>";

echo calculadora(12,15,'sumar');
echo "<br>";

echo calculadora(17,3,'restar');


// echo sumar(12,245);

// echo "<br>";
// echo sumar(12,5);

// echo "<br>";
// echo sumar($numero1,$numero2);

