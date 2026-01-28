<?php
function getPriceWithTax(float $price): float
{
    if ($price < 0) {
        throw new Exception("El precio no puede ser negativo\n");
    }
    // $taxRate = 0.10;
    // $tax = $price * $taxRate;
    // return $price + $tax;
    return $price * 1.10;
}
try {
    $finalPrice =  getPriceWithTax(100);
    echo "Precio final con impuesto: $finalPrice\n";
} catch (Exception $exception) {
    echo "Error: " . $exception->getMessage();
}