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
