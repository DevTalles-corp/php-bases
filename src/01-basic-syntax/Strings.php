<?php
$name = "Devi";
$course = "\"PHP moderno\"";
$message = "Bienvenido " . $name . " al curso de " . $course;
echo $message . PHP_EOL;
$interpolatedMessage = "Bienvenido {$name} al curso de {$course}";
echo $interpolatedMessage . PHP_EOL;
$words = ['Bienvenido', $name, 'al', 'curso', $course];
$implodedMessage = implode(" ", $words);
echo $implodedMessage . PHP_EOL;
$calculatedMessage = "El resultado de la suma 5 + 3 es: " . (5 + 3);
echo $calculatedMessage . PHP_EOL;
