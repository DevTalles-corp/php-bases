<?php

declare(strict_types=1);
function isValidEmail(string $email): bool
{
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}
function sanitizeUserId(string $userId): int
{
    $sanitized = filter_var($userId, FILTER_SANITIZE_NUMBER_INT);
    return (int)$sanitized;
}

$email = "test@mail.com";
echo isValidEmail($email)
    ? "El email es válido\n"
    : "El email no es válido\n";
$userId = "45";
$result = sanitizeUserId($userId);
echo $result > 0
    ? "ID de usuario válido: $result\n"
    : "ID de usuario no es válido";