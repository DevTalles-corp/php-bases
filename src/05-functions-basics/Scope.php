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
    echo "Total usando una variable global: $total";
}
showTotalWithGlobal();

function showTotal(float $total): void
{
    echo "Total: $total";
}
showTotal(100);
