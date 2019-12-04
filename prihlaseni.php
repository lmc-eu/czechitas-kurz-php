<?php
require_once "sdilene.php";
?>
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
    </style>
</head>
<body>
    <div class="container">
        <!-- hlavička -->
        <div class="header navbar navbar-light bg-light rounded">
            <h1><?php echo $nazevBlogu . " blog"; ?></h1>
        </div>

        <!-- přihlašovací formulář -->
        <form class="form-signin" action="prihlas-me.php" method="get">
            <h1 class="h3 mb-3 font-weight-normal">Prosím přihlaste se</h1>
            <label for="jmeno">Uživatelské jméno</label>
            <input type="text" name="jmeno" id="jmeno" class="form-control" placeholder="uživatelské jméno" required autofocus>
            <label for="heslo" class="mt-2">Heslo</label>
            <input type="password" name="heslo" id="heslo" class="form-control mb-4" placeholder="heslo" required>
            <input class="btn btn-lg btn-primary btn-block" type="submit" value="Přihlásit" />
        </form>

    </div>
</body>
</html>