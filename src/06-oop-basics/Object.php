<?php

declare(strict_types=1);

class User
{
    public string $name;
    public string $email;
    public function showProfile()
    {
        echo "Nombre: {$this->name}, Email: {$this->email}\n";
    }
}

$user = new User();
echo "Objeto user fue creado correctamente\n";
var_dump($user);
$user->name = "Devi";
$user->email = "devi@mail.com";
echo "Su propiedad nombre tiene el valor: $user->name\n";
$user->showProfile();
