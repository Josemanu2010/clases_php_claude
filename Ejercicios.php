<?php
/*
    realize un programa que pida numeros por pantalla hasta que  los números 
    que va introduciendo el usuario sean almacenados en un array hasta que haya 
    un número negativo. cuando esto ocurra el programa dira al usuario “Has 
    introducido un número negativo” y mostrará el tamaño del array ,ademas de 
    mostrar el tamaño del array ,tendra que recorrerlo para mostrar los 
    numeros que ha introducido el usuario
*/

// Pida números y esos números guardelos en un array
// Cuando el usuario introduzca un número negativo se acaba el programa 
//          (Mostrar mensaje y tamaño del array y mostrar todos sus datos)


$num = 0;
$numsArrays = [];
$i = 0;

// num = 6
// num = 12

while (true) {
    echo 'Ingrese un número: ';
    $num = (int) fgets(STDIN);
    $numsArrays[$i] = $num;
    if ($num < 0) {
        $tamanoArray = count($numsArrays);
        echo 'Has introducido un número negativo' . PHP_EOL;
        echo 'El tamaño del array es: ' . $tamanoArray . PHP_EOL;
        foreach ($numsArrays as $key => $n) {
            echo 'El número en la posición: ' . $key .' es: '. $n . PHP_EOL;
        }
        break;
    }
    $i++;
}





