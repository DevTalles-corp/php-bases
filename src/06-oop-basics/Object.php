<?php

declare(strict_types=1);

class User
{
    private int $id;
    public string $name;
    public string $email;
    private string $password;

    public function __construct(int $id, string $name, string $email, string $password)
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }
    public function showProfile()
    {
        echo "Nombre: {$this->name}, Email: {$this->email}\n";
    }
    public function verifyPassword(string $password): bool
    {
        return $this->password === $password;
    }
    public function getId(): int
    {
        return $this->id;
    }
}

$user = new User(1, "Devi", "devi@mail.com", "123456");
$user->name = "Teddy";

echo "Objeto user fue creado correctamente\n";
var_dump($user);
echo "Su propiedad nombre tiene el valor: $user->name\n";
$user->showProfile();
echo $user->verifyPassword("1234568")
    ? "Contraseña correcta\n"
    : "Contraseña incorrecta\n";

echo "ID: {$user->getId()}\n";
