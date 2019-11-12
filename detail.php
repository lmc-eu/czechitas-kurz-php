<?php
require_once "sdilene.php";

$zobrazitClanek = (int) $_GET["clanek"];

if ($zobrazitClanek != 0 && $zobrazitClanek != 1 && $zobrazitClanek != 2) {
    $zobrazitClanek = 0;
}

$dalsiClanek = $zobrazitClanek + 1;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $nazevBlogu; ?> blog | Detail článku</title>
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

        <!-- detail článku -->
        <section class="jumotron text-center pt-3 pb-3">
            <div class="container">
                <!-- nadpis -->
                <h1 class="jumbotron-heading"><?php echo $clanky[$zobrazitClanek]["nadpis"]?></h1>

                <!-- perex -->
                <p class="lead text-mutaded">
                    <?php echo $clanky[$zobrazitClanek]["perex"]?>
                </p>
            </div>
        </section>

        <div class="p-5 mb-2 bg-light">
            <!-- výpis autorů článku -->
            <p>
                <?php foreach ($clanky[$zobrazitClanek]["autori"] as $autor => $emailAutora) { ?>
                    <a href="mailto:<?php echo $emailAutora; ?>" class="badge badge-secondary"><?php echo $autor; ?></a>
                <?php } ?>
            </p>

            <!-- výpis obsahu článku -->
            <p>
                <?php echo $clanky[$zobrazitClanek]["obsah"]?>
            <p>
        </div>

        <!-- výpis počtu zhlédnutí článku -->
        <p class="float-right">
            <small>
                Počet zhlédnutí: <?php echo $clanky[$zobrazitClanek]["pocetZhlednutiText"]?>
            </small>
        </p>

        <?php if ($zobrazitClanek < 2) { ?>
            <!-- odkaz na další článek -->
            <p class="float-right mr-3">
                <small>
                    <a href="./detail.php?clanek=<?php echo $dalsiClanek; ?>">Další</a>
                </small>
            </p>
        <?php } ?>

        <div class="clearfix mb-3"></div>

        <!-- patička -->
        <div class="footer navbar navbar-light bg-light rounded">
            <p class="mb-0">
                Spolu s Czechitas jsme to s láskou upekli v LMC s.r.o.
                |
                Počet zhlédnutí blogu: <?php echo $pocetZhlednuti; ?>
            </p>
        </div>
    </div>
</body>
</html>
