<?php
// ************************************************
// ************************************************
// ***********   Array por indexación   ***********
// ************************************************
// ************************************************
// $precios = [10, 20, 4, 8, 5];
// $juguetes = ['carro', 'moto', 'avión', 'bici'];
// $productos2 = [
//     [10, 20, 4, 8, 5],
//     ['carro', 'moto', 'avión', 'bici']
// ];
// $ejemplo = [[], []];
// echo $productos2[1][1];

// echo $precios[4];
// echo 'Juegue 1 :' .$juguetes[1] . ' <br> cuesta: ' .$precios[1]; 

// var_dump($precios);
// $i = 0;
// while ($i < count($precios)) {
//     echo 'El número ' . $i . ' es igual a: ' .$precios[$i] . '<br>';
//     $i++;
// }

// $cantidad_Elementos_de_mi_array = count($precios);
// echo $cantidad_Elementos_de_mi_array;

// for ($i = 0; $i < count($precios); $i++) {
//     echo 'El resultado de la posición ' . $i .' es: ' .$precios[$i] . '<br>';
// }


// Qué vamos recorrer 
// Acceder a su llave o indice
// Cómo lo vamos a llamar
// foreach ($precios as $key => $p) {
//     echo 'El resultado de la posición '. $key.' es igual a: ' . $p .'<br>';
// }


// $array = array();

// Array asociativo
// ************************************************
// ************************************************
// ***********   Array por asociación   ***********
// ************************************************
// ************************************************
// El array asociativo se define por clave y valor
// $productos = [
//     'Leche' => 3050,
//     'pan' => 900,
//     'arroz' => 5000,
//     'pasta' => 300,
//     'papas' => 120
// ];

// echo $productos['papas'];


// Ciclo while.
// $i = 0;
// $key = array_keys($productos);
// var_dump($key);
// while ($i < count($productos)) {
//     $clave = $key[$i];
//     echo 'El producto ' . $clave .' vale: ' . $productos[$clave] . '<br>';
//     $i++;
// }

// $key = array_keys($productos);
// for ($i=0; $i < count($productos); $i++) {
//     $clave = $key[$i];
//     echo 'El producto ' . $clave .' vale: ' . $productos[$clave] . '<br>';
// }

// $productos = [
//     'Leche' => 3050,
//     'pan' => 900,
//     'arroz' => 5000,
//     'pasta' => 300,
//     'papas' => 120
// ];

// foreach($productos as $key => $p) {
//     echo 'El valor del producto '.$key.' es igual a: ' . $p . '<br>';
// }
