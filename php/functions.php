<?php

session_start();

require_once __DIR__ . '/db.php';


function redirect(string $path): void
{
    header(header: "Location: $path");
    die();
}


function validateLenPassword(string $password): bool
{
    if (strlen($password) < 8) {
        return true;
    }
    return false;
}

function comparePasswords(string $password, string $passwordConfirm): bool
{
    if ($password != $passwordConfirm) {
        return true;
    }
    return false;
}


function validatePassword(string $password): bool
{
    if (!preg_match("/^[a-zA-Z0-9]+$/", $password)) {
        return true;
    }
    return false;
}

function hasErrors(string $errorField): bool
{
    return isset($_SESSION['validation'][$errorField]);
}

function addValidationMessage(string $errorField, string $message): void
{
    $_SESSION['validation'][$errorField] = $message;
}

function ErrorMessage(string $errorField): mixed
{
    $message = $_SESSION['validation'][$errorField] ?? '';
    unset($_SESSION['validation'][$errorField]);
    return $message;
}

function fieldValue(string $key, mixed $value): void
{
    $_SESSION['fieldValue'][$key] = $value;
}

function getFieldValue(string $key): string
{
    $value =  $_SESSION['fieldValue'][$key] ?? '';
    unset($_SESSION['fieldValue'][$key]);
    return $value;
}

function hasAuthMessage(string $key): bool
{
    return isset($_SESSION['message']['$key']);
}

function setAuthMessage(string $key, string $message): void
{
    $_SESSION['message']['$key'] = $message;
}

function getAuthMessage(string $key): string
{
    $message = $_SESSION['message']['$key'] ?? '';
    unset($_SESSION['message']['$key']);
    return $message;
}

function getPDO()
{
    try {
        return new PDO('mysql:host=' . DB_HOST . ';port=' . DB_PORT . ';charset=utf8;dbname=' . DB_NAME, DB_USERNAME, DB_PASSWORD);
    } catch (PDOException $e) {
        die('Подключение не удалось: ' . $e->getMessage());
    }
}

function getUser(string $name): array|bool
{
    $pdo = getPDO();

    $stmt = $pdo->prepare(query: "SELECT * FROM users WHERE name = :name");
    $stmt->execute(['name' => $name]);
    return $stmt->fetch(mode: PDO::FETCH_ASSOC);
}

function logout(): void
{
    unset($_SESSION['user']['name']);
    redirect(path: '/');
}

function checkAuth(): void
{
    if (!isset($_SESSION['user']['name'])) {
        redirect('/');
    }
}

function checkRate(): string {
    $response = file_get_contents('https://api.coindesk.com/v1/bpi/currentprice.json');
    $response = json_decode($response, true); 
    return $response['bpi']['USD']['rate'];
}
