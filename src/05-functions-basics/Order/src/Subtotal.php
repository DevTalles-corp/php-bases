<?php
function calculateSubtotal(array $items): float
{
    if (empty($items)) {
        return 0;
    }
    $subtotal = 0;
    foreach ($items as $item) {
        if (!isset($item['price'], $item['quantity'])) {
            continue;
        }
        $subtotal += $item['price'] * $item['quantity'];
    }
    return $subtotal;
}