<?php

declare(strict_types=1);
// comentario de una sola línea
# comentario de una sola línea
/*
 varias líneas
 documentación
*/
echo "Hola mundo" . PHP_EOL;
class User
{
    public string $name;
}
$user = new User();
$user->name = "Devi";
prinln($user->name);
$user->name = "Teddy";
prinln($user->name);

function prinln(string $message)
{
    echo $message . PHP_EOL;
}
