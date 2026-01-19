<?php

declare(strict_types=1);

echo "🛒 Operadores en PHP\n\n";

$price = 100;
$qty = 1;
$stock = 2;
$coupon = "DEV100";

$canBuy = ($qty <= $stock) && ($qty > 0); // false

echo "Stock: $stock | Pedido: $qty\n";
echo "¿Se puede comprar? " . ($canBuy ? "Sí ✅" : "No ❌") . "\n";
if (!$canBuy) {
    echo "Motivo: stock insuficiente o cantidad inválida \n";
    exit;
}
$subototal = $price * $qty;
$hasDiscount = ($coupon == "DEV10") || ($qty > 5);
$discount = 0;
if ($hasDiscount) {
    $discount = $subototal * 0.10;
}
$total = 0.0;
$total += $subototal;
$total -= $discount;
$stock -= $qty;
$orderNumber = 99;
echo "Orden # " . ++$orderNumber . " confirmada\n";
echo "Descuento: $discount Total: $total\n";
echo "Stock Final: $stock\n";
