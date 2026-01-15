<?php
$name = "Devi";
$city = "Madrid";
echo "Nombre: $name" . PHP_EOL;
$age = 25;
echo "Edad: $age" . PHP_EOL;
$height = 1.75;
echo "Altura: $height" . PHP_EOL;
$isAvailable = false;
echo "¿Disponible? " . ($isAvailable ? "Si" : "No") . PHP_EOL;
$empty = null;
echo "Valor nulo: " . var_export($empty, true) . PHP_EOL;
$colors = array("rojo", "amarillo", "verde");
$fruits = ["manzana", "platano", "pera"];
echo "Frutas: " . implode(", ", $fruits) . PHP_EOL;
$person =
    [
        'name' => 'Devi',
        'age' => 23,
        'email' => 'devi@example.com'
    ];
echo "Nombre: {$person['name']}" . PHP_EOL;
const API_URL = "https://api.example.com";
echo "URL: " . API_URL . PHP_EOL;
echo "Tipo de dato de edad: " . gettype($age) . PHP_EOL;
echo "Tipo de dato de Altura: " . gettype($height) . PHP_EOL;
