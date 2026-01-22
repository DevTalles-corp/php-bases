<?php
$users = [
    [
        "id" => 1,
        "name" => "Ana García",
        "username" => "ana.garcia",
        "email" => "ana.garcia@example.com",
        "role" => "user",
        "status" => "active",
        "last_login" => "2026-01-20 09:15"
    ],
    [
        "id" => 2,
        "name" => "Luis Pérez",
        "username" => "luis.perez",
        "email" => "luis.perez@example.com",
        "role" => "admin",
        "status" => "active",
        "last_login" => "2026-01-21 08:40"
    ],
    [
        "id" => 3,
        "name" => "María López",
        "username" => "maria.lopez",
        "email" => "maria.lopez@example.com",
        "role" => "editor",
        "status" => "inactive",
        "last_login" => "2026-01-15 18:10"
    ]
];
// $totalUsers = count($users);
// echo "Total de usuarios: $totalUsers\n";
// $userNames = array_map(
//     fn(array $user): string => $user["username"],
//     $users
// );
// foreach ($userNames as $userName) {
//     echo "Username: $userName\n";
// }
// $adminUsers = array_filter(
//     $users,
//     fn(array $user) => $user["role"] === "admin",
// );
// foreach ($adminUsers as $adminUser) {
//     echo "Usuario con el rol admin: {$adminUser["name"]}\n";
// }

$allowedRoles = array_map(
    fn(array $user): string => $user["role"],
    $users
);
$currentRole = "client";
echo in_array($currentRole, $allowedRoles)
    ? "El rol $currentRole es válido\n"
    : "El rol $currentRole no es válido\n";

$maria = $users[2];
if (array_key_exists("password", $maria)) {
    echo "Existe la llave proporcionada\n";
} else {
    echo "No existe la llave proporcionada\n";
}

$cart = [
    ["product" => "Laptop", "price" => 1200],
    ["product" => "Mouse", "price" => 20],
    ["product" => "Teclado", "price" => 80]
];
$totalCart = array_reduce(
    $cart,
    function ($total, $product) {
        return $total + (float)$product["price"];
    },
    0
);
echo "El total del carrito es: $totalCart\n";
