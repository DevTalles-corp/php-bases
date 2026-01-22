<?php
$formData =
    [
        "name" => "Devi",
        "email" => "devi@mail.com",
        "password" => "12312"
    ];
$requiredFields = ["name", "email", "password"];
$missingFields = array_filter(
    $requiredFields,
    fn(string $field) => !array_key_exists($field, $formData) ||
        trim((string)$formData[$field]) === ""
);
if (count($missingFields) > 0) {
    echo "Faltan campos requeridos: " . implode(", ", $missingFields) . "\n";
} else {
    echo "El formulario está completo y listo para procesar\n";
}
