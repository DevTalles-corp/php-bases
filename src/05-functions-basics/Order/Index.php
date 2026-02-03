<?php

declare(strict_types=1);

require_once __DIR__ . '/src/ProcessOrder.php';

$cart = [
    ["name" => "Mouse", "price" => 100, "quantity" => 2],
    ["name" => "Teclado", "price" => 150, "quantity" => 1],
    ["name" => "Producto roto"], // sin price/quantity -> salta
];

$result = processOrder($cart);

echo "Subtotal: {$result['subtotal']}\n"; // 350
echo "Con descuento: {$result['discounted']}\n"; // 315
echo "Total final: {$result['total']}\n"; // 355.95