<?php

declare(strict_types=1);

function requireField(array $data, string $field): string
{
    if (
        !array_key_exists($field, $data) ||
        trim($data[$field]) === ""
    ) {
        throw new InvalidArgumentException("El campo '{$field}' es obligatorio");
    }
    return (string)$data[$field];
}
function calculateTotal(float $price, int $quantity): float
{
    if ($price < 0) {
        throw new InvalidArgumentException("El precio no puede ser negativo.");
    }
    if ($quantity <= 0) {
        throw new InvalidArgumentException("La cantidad debe ser mayor a cero.");
    }
    return $price * $quantity;
}
function divide(int $a, int $b): float
{
    if ($b === 0) {
        throw new DivisionByZeroError("División por cero no permitida. El divisor (b) no puede ser 0.");
    }
    return $a / $b;
}

function getArrayItem(array $items, int $index): string
{
    return "Implementar función";
}

function greet(string $name): string
{
    if (func_num_args() > 1) {
        return "No deberías mandar mas de un argumento\n";
    }
    return "Hola, $name!\n";
}

try {
    $formData = [
        "name" => "Devi",
        "email" => "devi@mail.com"
    ];

    $email = requireField($formData, "email");
    echo "Email recibido: {$email}\n";

    $total = calculateTotal(100.03, 2);
    echo "Total a pagar: {$total}\n";

    $result = divide(10, 2);
    echo "Resultado de la división: {$result}\n";

    $fruits = ["manzana", "banana", "naranja"];
    // echo getArrayItem($fruits, 3) . "\n";

    // echo greet("Devi", "Test");
} catch (InvalidArgumentException $e) {
    echo "Error de validación: " . $e->getMessage() . "\n";
} catch (DivisionByZeroError $e) {
    echo "Error matemático: " . $e->getMessage() . "\n";
} catch (OutOfBoundsException $e) {
    echo "Error de datos: " . $e->getMessage() . "\n";
} catch (ArgumentCountError $e) {
    echo "Error de uso: Número incorrecto de argumentos. " . $e->getMessage() . "\n";
} catch (TypeError $e) {
    echo "Error de tipos: Revisa los tipos de datos enviados. " . $e->getMessage() . "\n";
} catch (Throwable $e) {
    echo "Ocurrió un error inesperado. Intenta nuevamente.\n";
}
