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
