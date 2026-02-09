<?php

class BaseUser
{
    protected string $name;
    public function __construct(string $name)
    {
        $this->name = $name;
    }
    protected function logAccess(): void
    {
        echo "Acceso registrado para el nombre: {$this->name}\n";
    }
}
class AdminUser extends BaseUser
{
    public function showRole(): void
    {
        echo "El usuario {$this->name} es administrador\n";
    }
    public function dashboard(): void
    {
        $this->logAccess();
        echo "Accede al panel de administración\n";
    }
}

$admin = new AdminUser("Devi");
$admin->showRole();
$admin->dashboard();