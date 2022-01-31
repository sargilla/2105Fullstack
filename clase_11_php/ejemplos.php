<?php
for ($i = 1; $i <= 10; $i++) {
    if ($i == 3) {
        continue; // Salta la iteración
    }
    echo "$i manzana\n"; # sentencia de impresión por pantalla
    if ($i == 8) {
        break; // Termina el bucle
    }
}