<?php

require_once __DIR__ . '/functions.php';

$login = $_POST['login'];
$pass = $_POST['password'];

if (empty($login)) {
    addValidationMessage('login', 'Поле имя не может быть пустым');
}

if (validateLenPassword($pass)) {
    addValidationMessage('password', 'Пароль должен быть не менее 8 символов');
}

if (validatePassword($pass)) {
    addValidationMessage('password', 'Пароль должен содержать только латинские символы и цифры');
}

if (!empty($_SESSION['validation'])) {
    fieldValue('login', $login);
    redirect(path: '/');
}

$user = getUser($login);

if (!$user || $pass != $user['password']) {
    setAuthMessage(key: 'error', message: 'Логин или пароль введены неверно');
    redirect(path: '/');
}

// if (!password_verify($pass, $user['haspassword'])) {
//     setAuthMessage(key: 'error', message: 'Логин или пароль введены неверно');
//     redirect(path: '/');
// }

$_SESSION['user']['name'] = $user['name'];

redirect(path:'/site.php');
