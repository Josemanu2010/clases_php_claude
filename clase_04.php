<?php

// Pide un números y muestra si es positivo, negativo o cero
$numero;
echo 'Ingrese un número', PHP_EOL;
$numero = (int) fgets(STDIN);
if ($numero > 0) {
    echo 'El número '. $numero.' es Positivo', PHP_EOL;
} else if ($numero < 0) {
    echo 'El número '. $numero.' es Negativo', PHP_EOL;
} else {
    echo 'El número '. $numero.' Es igual a Cero';
}


// Pida números por pantalla y muestra si es positivo o negativo
// El programa termina cuando el número ingresado es igual a 0

