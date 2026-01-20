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
println($user->name);
$user->name = "Teddy";
println($user->name);

function println(string $message)
{
    echo $message . PHP_EOL;
}
