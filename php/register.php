<?php

require_once __DIR__ . '/functions.php';


$login = $_POST['login'];
$email = $_POST['email'];
$pass = $_POST['password'];
$passConfirmation = $_POST['passwordConfirmation'];


if (empty($login)) {
    addValidationMessage('login', 'Поле имя не может быть пустым');
}

if (validateLenPassword($pass)) {
    addValidationMessage('password', 'Пароль должен быть не менее 8 символов');
}

if (validatePassword($pass)) {
    addValidationMessage('password', 'Пароль должен содержать только латинские символы и цифры');
}

if (comparePasswords($pass, $passConfirmation)) {
    addValidationMessage('password', 'Пароли не совпадают');
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    addValidationMessage('email', 'Электронная почта введена некорректно');
}

if (!empty($_SESSION['validation'])) {
    fieldValue('login', $login);
    fieldValue('email', $email);
    redirect(path: '/registration.php');
}

$pdo = getPDO();

$user = getUser($login);

if ($user) {
    addValidationMessage('login', 'Это имя пользователя уже занято');
    redirect(path: '/registration.php');
    die;
}


$query = "INSERT INTO `users` (name, email, password, hashpassword) VALUES (:name, :email, :password, :haspassword)";
$params = [
    'name' => $login,
    'email' => $email,
    'password' => $pass,
    'haspassword' => password_hash($pass, algo:PASSWORD_DEFAULT)
];


$stmt = $pdo->prepare($query);

try {
    $stmt->execute($params);
} catch (Exception $e) {
    die($e->getMessage());
}

redirect(path: '/');
