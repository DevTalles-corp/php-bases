<?php
$products = ["Laptop", "Mouse", "Teclado"];
array_push($products, "Monitor");
foreach ($products as $product) {
    echo "Producto: $product\n";
}
echo "Eliminando el ultimo elemento:\n";
array_pop($products);
foreach ($products as $product) {
    echo "Producto: $product\n";
}
$user =
    [
        "name" => "Devi",
        "email" => "devi@example.com",
        "role" => "admin"
    ];
echo "Nombre: {$user["name"]}\n";

$users =
    [
        [
            "name" => "Devi",
            "email" => "devi@example.com",
            "role" => "admin"
        ],
        [
            "name" => "Fernando",
            "email" => "fernando@example.com",
            "role" => "user"
        ]
    ];
foreach ($users as $user) {
    echo "Usuario: {$user["name"]}\n";
}