<?php

declare(strict_types=1);

$age = 16;
if ($age >= 18) {
    echo "El usuario es: mayor de edad\n";
} else {
    echo "El usuario es: menor de edad\n";
}
$status = ($age >= 18)
    ? "mayor de edad\n"
    : "menor de edad\n";
echo "El usuario es: $status\n";

$score = 85;
if ($score >= 90) {
    echo "Calificación excelente\n";
} elseif ($score >= 70) {
    echo "Calificación aprobatoria\n";
} else {
    echo "Calificación reprobatoria\n";
}
