<?php

declare(strict_types=1);
function validateUserForm(array $data): array
{
    $requiredFields = ["name", "email", "password"];
    return array_filter(
        $requiredFields,
        fn(string $field) =>
        !isset($data[$field]) ||
            trim((string)$data[$field]) === ""
    );
}
$formData =
    [
        "name" => "Devi",
        "email" => "devi@mail.com",
        "password" => "123"
    ];
$errors = validateUserForm($formData);
if (count($errors) > 0) {
    echo "Errores en el formulario: " . implode(", ", $errors) . ".\n";
} else {
    echo "Formulario es válido, listo para guardar la información\n";
}