<?php

declare(strict_types=1);
function calculateTotal(float $price, int $quantity): float
{
    return $price * $quantity;
}
// $total = calculateTotal(50, 3);
$total = calculateTotal(quantity: 3, price: 50);
echo "El total a pagar: $total\n";
