<?php

declare(strict_types=1);

$formData =
    [
        "name" => "Devi"
    ];
if (isset($formData["email"])) {
    echo "Email recibido: " . $formData["email"] . "\n";
} else {
    echo "Error el campo email es obligatorio\n";
}
function calculateTotal(float $price, int $quanity): float
{
    return $price * $quanity;
}
$total = calculateTotal(100.3, 2);
echo "Total a pagar es: $total\n";

function divide(int $a, int $b): float
{
    if ($b === 0) {
        echo "Error: División por cero no permitida\n";
        return 0;
    }
    return $a / $b;
}
$result = divide(10, 0);
echo "Resultado de la división es: $result\n";

$fruits = ["manzana", "banana", "naranja"];
if (isset($fruits[3])) {

    echo "$fruits[3]\n";
} else {
    echo "Error: Índice 3 no existe en el array\n";
}

function greet(string $name): string
{
    if (func_num_args() > 1) {
        return "No deberías mandar mas de un argumento\n";
    }
    return "Hola, $name!\n";
}
echo greet("Devi");