<?php

// echo "hola chicos";
// echo "\n";
// print_r($argc);
// echo "\n";
    // print_r($argv);

// echo $argv[1] .' es ' . $argv[2] . ' del curso fullstack';

require './vendor/autoload.php';

$auto1 = new Auto('Fiat','Spazio');
// $auto1->marca = 'Fiat';
// $auto1->modelo = 'Spazio';
// $auto1->color = 'Blanco';
// $auto1->color = "Rojo"; DA ERROR PORQUE ES PRIVATE
// echo $auto1->color;DA ERROR PORQUE ES PRIVATE

$auto1->setColor('Rojo')->setMarca('Subaru');
echo $auto1->getColor() ."\n";
echo $auto1->marca ."\n";

print_r($auto1);

// $auto1->describir();
// $auto1->andar();
// print_r($auto1);
// $auto1->andar(12);
// print_r($auto1);


// $persona = new Persona('Santiago','Argilla');
// $persona->quienSoy();