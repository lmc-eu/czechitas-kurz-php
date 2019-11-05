<?php
require_once "sdilene.php";
?>
<!DOCTYPE html>
<html lang="en">
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
    </style>
</head>
<body>
    <div class="container">
        <!-- hlavička -->
        <div class="header navbar navbar-light bg-light rounded">
            <h1><?php echo $nazevBlogu . " blog"; ?></h1>
        </div>

        <!-- výpis článků -->
        <ul class="list-unstyled">

            <li class="jumbotron pt-2 pb-2 mt-3 mb-1">
                <h2><a href="#"><?php echo $clanky[0]["nadpis"]; ?></a></h2>
                <p><?php echo $clanky[0]["perex"]; ?></p>
                <p>
                    <a href="mailto:#"><?php echo $autoriJmena["ondra"]; ?></a> |
                    Počet zhlédnutí: <?php echo $clanky[0]["pocetZhlednutiText"]; ?>
                </p>
            </li>

            <li class="jumbotron pt-2 pb-2 mt-3 mb-1">
                <h2><a href="#"><?php echo $clanky[1]["nadpis"]; ?></a></h2>
                <p><?php echo $clanky[1]["perex"]; ?></p>
                <p>
                    <a href="mailto:#"><?php echo $autoriJmena["ondra"]; ?></a> |
                    Počet zhlédnutí: <?php echo $clanky[1]["pocetZhlednutiText"]; ?>
                </p>
            </li>

            <li class="jumbotron pt-2 pb-2 mt-3 mb-1">
                <h2><a href="#"><?php echo $clanky[2]["nadpis"]; ?></a></h2>
                <p><?php echo $clanky[2]["perex"]; ?></p>
                <p>
                    <a href="mailto:#"><?php echo $autoriJmena["ondra"]; ?></a> |
                    Počet zhlédnutí: <?php echo $clanky[2]["pocetZhlednutiText"]; ?>
                </p>
            </li>

        </ul>

        <!-- patička -->
        <div class="footer navbar navbar-light bg-light rounded">
            <p class="mb-0">Spolu s Czechitas jsme to s láskou upekli v LMC s.r.o. | Počet zhlédnutí blogu: <?php echo $pocetZhlednuti; ?></p>
        </div>
    </div>
</body>
</html>