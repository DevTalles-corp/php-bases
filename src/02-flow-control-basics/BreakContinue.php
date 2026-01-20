<?php
echo "Ejemplo con break:\n";
for ($i = 1; $i <= 10; $i++) {
    if ($i === 5) {
        echo "Se encontró el valor 5, y se detiene el bucle\n";
        break;
    }
    echo "Valor actual: $i\n";
}
echo "\n";
echo "Ejemplo de continue:\n";
for ($i = 1; $i <= 10; $i++) {
    if ($i === 3) {
        echo "Se encontró el valor 3\n";
        continue;
    }
    echo "Valor actual: $i\n";
}
