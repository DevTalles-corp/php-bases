<?php
require_once __DIR__ . "/Subtotal.php";
require_once __DIR__ . "/Discount.php";
require_once __DIR__ . "/Tax.php";
function processOrder(array $cart): array
{
    $subtotal = calculateSubtotal($cart);
    $withDiscount = applyDiscount($subtotal, 10);
    $total = calculateTotal($withDiscount, 13);
    return [
        'subtotal' => $subtotal,
        'discounted' => $withDiscount,
        'total' => $total
    ];
}
