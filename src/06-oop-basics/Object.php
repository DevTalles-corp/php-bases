<?php

declare(strict_types=1);

class User
{
    public string $name;
    public string $email;

    public function __construct(string $name, string $email)
    {
        $this->name = $name;
        $this->email = $email;
    }
    public function showProfile()
    {
        echo "Nombre: {$this->name}, Email: {$this->email}\n";
    }
}

$user = new User("Devi", "devi@mail.com");
echo "Objeto user fue creado correctamente\n";
var_dump($user);
echo "Su propiedad nombre tiene el valor: $user->name\n";
$user->showProfile();
