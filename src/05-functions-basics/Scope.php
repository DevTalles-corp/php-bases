<?php

declare(strict_types=1);

if (true) {
    $message = "Hola desde el if\n";
}
echo $message;

foreach ([1, 2, 3] as $number) {
    $lastNumber = $number;
}
echo "Imprime último numero: $lastNumber\n";

$total = 100;
function showTotalWithGlobal()
{
    global $total;
    echo "Total usando una variable global: $total\n";
}
showTotalWithGlobal();

function showTotal(float $total): void
{
    echo "Total: $total\n";
}
showTotal(100);
echo "------Funciones-------\n";
$tax = 0.13;
$calcuteTax = function (float $amount) use ($tax): float {
    return $amount * $tax;
};
echo "Impuesto (closure): " . $calcuteTax(100) . PHP_EOL;
$calcuteTaxArrow = fn(float $amount): float => $amount * $tax;

echo "Impuesto (arrow): " . $calcuteTax(100) . PHP_EOL;