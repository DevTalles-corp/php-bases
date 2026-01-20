<?php
declare(strict_types=1);

function calculateTotal(float $price, int $quantity): float
{
    return $price * $quantity;
}
$total = calculateTotal(10.5, 3);
echo "El total a pagar es $total";
