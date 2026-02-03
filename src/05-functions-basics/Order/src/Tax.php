<?php

declare(strict_types=1);

function calculateTotal(float $amount, float $taxPercent): float
{
    return $amount + ($amount * $taxPercent / 100);
}
