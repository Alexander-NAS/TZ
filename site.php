<?php

require_once __DIR__ . '/php/functions.php';

checkAuth();

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
    <title>ТЗ - Сайт</title>

</head>

<body>

    <div class="wrapper">
        <main class="main">

            <div class="container-fluid bg-dark">

                <div class="row align-items-center justify-content-center">
                    <div class="col-auto">

                        <div class="someClass p-5 bg-light">
                            <div class="w-100 text-center mb-4"><h3>Добро пожаловать <?php echo $_SESSION['user']['name'] ?? '' ?></h3></div>
                            <div class="mb-3">
                                <li>Open Server - 6.0</li>
                                <li>Php - 8.2</li>
                                <li>MySql - 8.0</li>
                                <li>Bootstrap - 5.0.2</li>
                            </div>
                            <form action="/php/logout.php" method="post">
                                <button type="submit" class="btn btn-success w-100">Выйти</button>
                            </form>
                        </div>

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