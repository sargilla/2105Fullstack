# TIPOS DE DATOS
Los datos o atributos de cada registro de una tabla tienen que ser de un tipo de dato concreto.
Cuando diseñamos una base de datos tenemos que pensar qué tipo de dato nos sirve para nuestro modelo.

## NUMÉRICO
TINYINT         -128 a 128, 0 a 255
SMALLINT        -32768 a 32767, 0 a 65535
MEDIUMINT       -8388608 a 8388607, 0 a 16777215
INT             -2147483648 to 214748364, 0 a 4294967295
BIGINT          -9223372036854775808 a 9223372036854775807, 0 a 18446744073709551615

## NUMÉRICO CON DECIMALES
FLOAT   pequeños números decimales
DOUBLE  grandes números decimales
DECIMAL grandes números decimales de punto fijo


## BOOLEANS
MySQL guarda los booleanos por detrás como un cero o como un uno. Por cuestiones de performance, no se recomienda utilizar este tipo de dato en en MySQL.

En caso de querer guardar valores "verdaderos" y "falsos" podemos usar el tipo de dato tinyint 

## FECHA
DATE        formato YYYY-MM-DD
TIME        formato HH:MM:SS
DATETIME    formato YYYY-MM-DD HH:MM:SS

## TEXTO
CHAR(num)       El número entre paréntesis va a indicar la cantidad exacta de caracteres.
VARCHAR(num)    El número entre paréntesis va a indicar la cantidad máxima de caracteres
TEXT            Determina un dato de tipo texto sin límite de caracteres. Se suele usar para post de un blog, por ejemplo.


## CONSTRAINTS
Son restricciones a nivel tabla

UNIQUE KEYS     Una unique key es una restricción que solo permite valores únicos para uno (o múltiples) campos
NULL / NOTNULL  NULL Significa que el valor para ese campo no existe. NULL NO es vacío ‘ ’ (blank) ni cero (0).
DEFAULT         Se usa para definir un valor por defecto para una columna. 
AUTO_INCREMENT  Genera un número único y lo incrementa automáticamente con cada nuevo registro en la tabla. Se suele usar a menudo para el campo **ID**.
