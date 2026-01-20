<?php
// echo "Ejemplo con break:\n";
// for ($i = 1; $i <= 10; $i++) {
//     if ($i === 5) {
//         echo "Se encontró el valor 5, y se detiene el bucle\n";
//         break;
//     }
//     echo "Valor actual: $i\n";
// }
// echo "\n";
// echo "Ejemplo de continue:\n";
// for ($i = 1; $i <= 10; $i++) {
//     if ($i === 3) {
//         echo "Se encontró el valor 3\n";
//         continue;
//     }
//     echo "Valor actual: $i\n";
// }

echo "Filtrando valores negativos:\n";
$numbers = [10, -5, 23, -3, 16];
foreach ($numbers as $number) {
    if ($number < 0) {
        // echo "Se ignora el valor negativo\n";
        continue;
    }
    echo "Procesando número: $number\n";
}
echo "Buscando un nombre específico:\n";
$targetName = "Pedro";
$names = ["Devi", "Teddy", "Aylin"];
$found = false;
foreach ($names as $name) {
    if ($targetName === $name) {
        $found = true;
        break;
    }
}
echo $found
    ? "El nombre $targetName fue encontrado\n"
    : "El nombre $targetName no fue encontrado\n";