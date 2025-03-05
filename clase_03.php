<?php

// Realizar un juego que consista en adivinar un número, indicando si es mayor o menor hasta acertar. El número a adivinar se introducirá en primer lugar.  ejercicio para viernes.
///////  DESARROLLO 1  ///////

// $num_adivinar = random_int(1, 100);
// $num = 0;
// while(true) {
//     echo 'Ingrese un número: ';
//     $num = (int) fgets(STDIN);
//     if ($num === $num_adivinar) {
//         echo 'Haz ganado ', PHP_EOL;
//         break;
//     }
//     if($num > $num_adivinar) {
//         echo 'Casi!, más bajo', PHP_EOL;
//     }
//     if ($num < $num_adivinar) {
//         echo 'Casi!, más alto', PHP_EOL;
//     }
// }





// Realizar un programa que muestre los números del 1 al 100, ambos incluidos, que sean divisibles entre 2 y 3 (al mismo tiempo).

// for ($i=1; $i <= 100; $i++) {
//     echo 'Número: ' .$i . PHP_EOL;
//     if ($i%2 == 0 && $i%3==0) {
//         echo 'El numero: ' .$i . ' es divisible por 2 y 3' . PHP_EOL;
//     }
// }

// $i = 1;
// while($i <= 100) {
//     echo 'Número '. $i . PHP_EOL;
//     $i++;
// }






// Pedir por teclado la cantidad de números que se quieren sumar. Hará la suma desde el 1 hasta el número que hayamos introducido por teclado. Por ejemplo, si introducimos el 3, el resultado será 1+2+3 = 6.



// Realizar un programa que pida una nota del 0 al 10. Traducir esa nota a insuficiente, suficiente, bien, notable y sobresaliente y mostrarlo por pantalla

// 0 - 4 Insuficiente
// 5 - 6 Suficiente
// 7 - 8 Bien
// 9 Notable
// 10 Sobresaliente


// $nota;
// echo 'Ingrese su nota ' .PHP_EOL;
// $nota = (int) fgets(STDIN);

// if ($nota > 0 && $nota < 5) {
//     echo 'Su nota es insuficiente';
// } elseif ($nota >= 5 && $nota < 7) {
//     echo 'Su nota es Suficiente';
// } elseif ($nota >= 7 && $nota < 9) {
//     echo 'Su nota es Bien';
// } elseif ($nota === 9) {
//     echo 'Su nota es Notable';
// } elseif ($nota === 10) {
//     echo 'Su nota es Sobresaliente';
// } else {
//     echo 'Esa nota no es válida';
// }


// Pida a un usuario 4 notas consecutivas y saque el promedio de esas notas
// el rango de calificación es de 0 a 5, si saca más de 3 pasa la asignatura

$notas;
$suma = null;
$promedio;
$contador = 0;
$i = 1;

while ($i < 4) {
    echo 'Ingrese su nota: ' . PHP_EOL;
    $notas = fgets(STDIN);
    $suma += $notas;
    $contador++;
    $i++; 
}

// var_dump($promedio);
// echo 'Contador: '. $contador . PHP_EOL;
// echo 'Sumatoria: '. $suma . PHP_EOL;
// echo 'variable op: '. $op. PHP_EOL;

if ($contador > 0) {
    $promedio = ($suma/$contador);
}
echo 'Promedio: '. $promedio . PHP_EOL;
if ($promedio >= 3) {
    echo 'Felicidades, ha pasado la asignatura de programación';
} else {
    echo 'Ha perdido la asignatura';
}