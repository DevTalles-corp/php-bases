<?php
echo "Bucle for del 1 al 5:\n";
for ($i = 1; $i <= 5; $i++) {
    echo "Número: $i\n";
}
echo "\n";
echo "Bucle while con intentos:\n";
$attempts = 0;
while ($attempts < 3) {
    $attempts++;
    echo "Intento número: $attempts\n";
}
echo "\n";
echo "foreach recorriendo valores:\n";
$names = ["Devi", "Teddy", "Luis"];
foreach ($names as $name) {
    echo "Hola, $name\n";
}
echo "foreach recorriendo índices y valores:\n";
foreach ($names as $index => $name) {
    echo "Posición $index: $name\n";
}
echo "\n";