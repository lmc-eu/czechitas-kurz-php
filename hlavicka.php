<?php require_once "sdilene.php"; ?>
<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $nazevBlogu; ?> blog</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
    .container .jumbotron h2 a {color: #e5007d}
    .container .jumbotron h2 a:hover {color: #273582; text-decoration:none;}
    .footer { font-size: 0.7em; }

    .form-signin {width: 100%;max-width: 330px;padding: 15px;margin: 0 auto;}
    .form-signin .form-control {position: relative;box-sizing: border-box;height: auto;padding: 10px;font-size: 16px;}
    .form-signin .form-control:focus {z-index: 2;}
    .form-signin input[type="text"] {margin-bottom: -1px;border-bottom-right-radius: 0;border-bottom-left-radius: 0;}
    .form-signin input[type="password"] {margin-bottom: 10px;border-top-left-radius: 0;border-top-right-radius: 0;}
    </style>
</head>
<body>
    <div class="container">
        <!-- hlavička -->
        <div class="header navbar navbar-light bg-light rounded">
            <h1><?php echo $nazevBlogu . " blog"; ?></h1>
        </div>

        <?php
        if (isset($_SESSION["status-prihlaseni"])) {
            $statusClass = "alert-danger";
            if ($_SESSION["status-prihlaseni"] == 200) {
                $statusClass = "alert-success";
                $statusContent = "Uživatel byl přihlášen, vítejte.";
            } elseif ($_SESSION["status-prihlaseni"] == 403) {
                $statusContent = "Přihlášení se nezdařilo, špatné jméno nebo heslo.";
            } elseif ($_SESSION["status-prihlaseni"] == 401) {
                $statusClass = "alert-success";
                $statusContent = "Uživatel byl odhlášen.";
            } else {
                $statusContent = "Přihlášení se nezdařilo.";
            }
            unset($_SESSION["status-prihlaseni"]);
            ?>
            <div class="alert <?php echo $statusClass; ?>" role="alert"><?php echo $statusContent; ?></div>
            <?php
        }
        ?>