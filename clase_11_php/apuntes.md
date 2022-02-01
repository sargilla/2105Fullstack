# Practica PHP

## Documentación

Es importante tener siempre a mano la documentación de PHP

[php.net](https://www.php.net/)

## Etiquetas y comentarios

```php
    /*
       Este es un comentario Multilineas que nos permite poder realizar
       comentarios más detallados de nuestro código
   */

    // Comentario una linea

    $var    = 'Roberto'; # variable simple con un string
    echo "$var"; # imprime "Roberto"

    $Var    = 'Juan';
    echo "$var, $Var";      // imprime "Roberto, Juan"

    // variables validos e invalidas
    $4site  = 'aun no';      // inválido; comienza con un número
    $_4site = 'aun no';     // válido; comienza con un carácter de subrayado
    $täyte  = 'mänsikka';    // válido; 'ä' es ASCII (Extendido) 228
?>

```

## Tipos de datos

```php
    $un_bool = TRUE;   // un valor booleano
    $un_str  = "foo";  // una cadena de caracteres
    $un_int  = 12;     // un número entero
    $un_float  = 12.2;     // un número con coma flotante

    echo gettype($un_bool); // imprime: boolean
    echo gettype($un_str);  // imprime: string
    echo var_dump($un_str) // imprime tipo ,longitud y contenido de la variable

```

### Arrays

```php
    $miArray = [];
	$miArray = ['hola', 'chau', 0, 42];

    $miArrayAsociativo = [
        'nombre' => 'Santiago',
        'apellido' => 'Argilla'
        'edad' => 28
    ];

    $auto = [];
	$auto['color'] = ['Negro', 'Verde'];
	$auto['marca'] = 'Ford';
	$auto['anio'] = 1992;

	var_dump($auto);

```

Funciones de tipo de dato:

```php

        // Si este valor es un entero, incrementarlo en cuatro
    if (is_int($un_int)) {
        $un_int += 4;
    }

    // Si $un_bool es una cadena, imprimirla
    // (no imprime nada)
    if (is_string($un_bool)) {
        echo "Cadena: $un_bool";
    }

```

## Operadores

### Operadores Aritmeticos

```php
    echo (5 + 3)."\n";         // muestra 8
    echo (5 - 3)."\n";         // muestra 2
    echo (5 * 3)."\n";         // muestra 15
    echo (5 / 3)."\n";         // muestra 1.66

```

### Operadores de Asignación

```php
    $a = 3;
    $a += 5; // establece $a en 8, como si se hubiera dicho: $a = $a + 5;
    $b = "Hola ";
    $b .= "ahí!"; // establece $b en "Hola ahí!", al igual que $b = $b . "ahí!";

```

### Operadores de Comparación

```php
    echo("1" == "01");      // 1 == 1       -> true
    echo("10" == (5+5));    // 10 == 10     -> true
    echo(100 == "1e2");     // 100 == 100   -> true
    echo(100 === "100");    // 100 == "100" -> false
    echo(100 != "100");     // 100 != "100" -> true
    echo(100 !== 100);      // 100 !== 100  -> false
    echo(99 < 100);         // 99 < 100     -> true
    echo(99 > 100);         // 99 > 100     -> false
    echo(99 >= 100);        // 99 >= 100    -> false
    echo(99 <= 100);        // 99 <= 100    -> true

```

### Operadores Lógicos

```php
    $v1 = 1;
    $v2 = 2;

    if ($v1 == 1 && $v2 > 1) {
        echo "ingresa";
    }

    if ($v1 == 1 || $v2 > 3) {
        echo "ingresa";
    }

    if ($v1 == 1 xor $v2 > 1) {
        echo "ingresa";
    }

```

## CONDICIONALES

### IF/ELSE

```php
    $clima = "soleado";
    $dia = "domingo";

    if ($clima == "soleado" && $dia == "domingo") {
        echo "Saldré a pasear";
    } else {
        echo "Me quedo en casa";
    }
```

```php
    $clima = "soleado";
    $dia = "domingo";

    if ($clima == "soleado" && $dia == "domingo") {
        echo "Saldré a pasear";
    } else if ($clima == "lluvioso") {
        echo "Me quedo en casa";
    } else {
        echo "¿Da para salir?";
    }

```

### IF TERNARIO

```php
    $num1 = 32;
    $num2 = 58;
    $elMayor = $num1 > $num2 ? $num1 : $num2;
    echo $elMayor;
```

### SWITCH

```php
$colorRemera = 'Rojo';
switch ($colorRemera) {
    case “Rojo”:
        echo “La remera es roja”;
    break;
    case “Azul”:
        echo “La remera es azul”;
    break;
    case “Amarillo”:
        echo “La remera es amarilla”;
    break;
        default:
        echo “La remera es multicolor”; break;
```

## BUCLES

### FOR

```php
for ($i = 1; $i <= 10; $i++) {
    if ($i == 3) {
        continue; // Salta la iteración
    }
    if ($i == 8) {
        break; // Termina el bucle
    }
    echo "$i manzana"; # sentencia de impresión por pantalla
}

```

### FOREACH

```php
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
    "Malta"=>"Valletta",
    "Austria" => "Vienna",
    "Polonia"=>"Warsaw"
] ;

foreach ($capitales as $pais => $ciudad){
    echo "$ciudad es la capital de $pais";
}

```

### WHILE

```php
    $contador = 5;
	while ($contador > 0) {
	    echo $contador;
	    $contador--;
        /* Es lo mismo que $contador = $contador - 1 */
    }

```

> Si la condición nunca deja de ser verdadera, el bucle se torna infinito.

### DO WHILE

```php
    $cantidad = 5;
    do {
        echo $cantidad;
        $cantidad--;
    } while ($cantidad > 0);

```

> A diferencia del while, éste ejecuta por lo menos una vez el código. Y si la condición del while es o se vuelve false, no se ejecuta más.
