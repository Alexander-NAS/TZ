<?php

require_once __DIR__ . '/php/functions.php';

?>


<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- fonts -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Bootstrap -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Css -->

    <link rel="stylesheet" href="static/css/style.css">
    <title>ТЗ - Регистрация</title>

</head>

<body>

    <div class="wrapper">
        <main class="main">

            <div class="container-fluid bg-dark">

                <div class="row align-items-center justify-content-center">
                    <div class="col-auto">

                        <form class="someClass p-5 bg-light" action="php/register.php" method="post">
                            <div class="w-100 text-center mb-4"><h3>Регистрация</h3></div>
                            <div class="mb-3">
                                <label for="name" class="form-label">Имя</label>
                                <input type="text" class="form-control" id="name"
                                 name="login" value="<?php echo getFieldValue('login')?>"
                                 placeholder="Введите имя" required>

                                <?php if(hasErrors(errorField:'login')): ?>
                                    <div class="errorDiv text-center p-1 m-1"><?php echo ErrorMessage(errorField:'login') ?></div>
                                <?php endif; ?>

                            </div>
                            <div class="...">
                                <label for="name" class="form-label">E-mail</label>
                                <input type="email" class="form-control" id="name"
                                 name="email" value="<?php echo getFieldValue(key:'email')?>"
                                 placeholder="Введите email" >

                                <?php if(hasErrors(errorField:'email')): ?>
                                    <div class="errorDiv text-center p-1 m-1"><?php echo ErrorMessage(errorField:'email') ?></div>
                                <?php endif; ?>

                            </div>
                            <div class="mb-3 d-sm-flex flex-row">
                                <div class="mt-3 me-2">
                                    <label for="password" class="form-label">Пароль</label>
                                    <input type="password" class="form-control" id="password"
                                    placeholder="Введите пароль" name="password" required>
                                </div>
                                <div class="mt-3">
                                    <label for="passwordConfirmation" class="form-label">Подтвердите пароль</label>
                                    <input type="password" class="form-control" id="passwordConfirmation"
                                     placeholder="Введите пароль" name="passwordConfirmation" required>
                                </div>
                            </div>

                            <?php if(hasErrors(errorField:'password')): ?>
                                <div class="errorDiv text-center p-1 m-1"><?php echo ErrorMessage(errorField:'password') ?></div>
                            <?php endif; ?>

                            <div class="mb-3">
                                <p>У меня уже есть <a class="text-decoration-none" href="/">аккаунт</a></p>
                            </div>
                            <button type="submit" class="btn btn-success">Войти</button>
                        </form>

                        <div class="someClass p-3 m-5 bg-light text-center">
                            <b>Курс биткоина - <?php echo checkRate() ?> $</b>
                        </div>
                        
                    </div>
                </div>
                
            </div>

        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

</body>

</html>