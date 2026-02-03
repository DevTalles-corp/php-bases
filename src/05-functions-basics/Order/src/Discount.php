<?php

declare(strict_types=1);

function applyDiscount(float $amount, float $discountPercent): float
{
    if ($discountPercent <= 0) {
        return $amount;
    }
    return $amount - ($amount * $discountPercent / 100);
}
