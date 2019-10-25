<?php
$nazevBlogu = "Czechitas";
$pocetZhlednuti = 20;

if ($pocetZhlednuti == 0 || $pocetZhlednuti < 0) {
    $pocetZhlednuti = "nikdo nás neviděl";
} elseif ($pocetZhlednuti >= 10) {
    $pocetZhlednuti = "hodně lidí";
} else {
    $pocetZhlednuti = "pár lidí";
}

$clanky = [
    "Pole a lány",
    "Podmínky a náhody",
    "Úvodní slovo",
];

$clankyPocetZhlednuti = [1, 4, 51];

$clankyPerex = [
    "Vítr skoro nefouká a tak by se na první pohled mohlo zdát, že se balónky snad vůbec nepohybují.
nízko nad zemí. Kdyby pod balónky nebyla sytě zelenkavá tráva, ale třeba suchá silnice či beton,
možná by bylo vidět jejich barevné stíny - to jak přes poloprůsvitné barevné balónky prochází ostré sluneční paprsky.",
    "Když svítí slunce tak silně jako nyní, tak se stuha třpytí jako kapka rosy a jen málokdo vydrží dívat se na ni
přímo déle než pár chvil. Jak vlastně vypadají ony balónky?.",
"Kdyby pod balónky nebyla sytě zelenkavá tráva, ale třeba suchá silnice či beton, možná by bylo
a ani do stran se příliš nepohybují. Proti slunci to vypadá, že se slunce pohybuje k západu rychleji než balónky, a možná to tak skutečně je.",
];

$autoriJmena = [
    "ondra" => "Ondra Machulda",
    "martinb" => "Martin Baranek",
    "martinh" => "Martin Holcman",
];

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
                <h2><a href="#"><?php echo $clanky[0]; ?></a></h2>
                <p><?php echo $clankyPerex[0]; ?></p>
                <p>
                    <a href="mailto:#"><?php echo $autoriJmena["ondra"]; ?></a> |
                    Počet zhlédnutí: <?php
                    if ($clankyPocetZhlednuti[0] < 1) {
                        $pocetZhlednutiText = "žádné zobrazení";
                    } elseif ($clankyPocetZhlednuti[0] == 1) {
                        $pocetZhlednutiText = "1 osoba";
                    } elseif ($clankyPocetZhlednuti[0] > 1 && $clankyPocetZhlednuti[0] < 5) {
                        $pocetZhlednutiText = $clankyPocetZhlednuti[0] . " osoby";
                    } else {
                        $pocetZhlednutiText = $clankyPocetZhlednuti[0] . " osob";
                    }
                    echo $pocetZhlednutiText; ?>
                </p>
            </li>

            <li class="jumbotron pt-2 pb-2 mt-3 mb-1">
                <h2><a href="#"><?php echo $clanky[1]; ?></a></h2>
                <p><?php echo $clankyPerex[1]; ?></p>
                <p>
                    <a href="mailto:#"><?php echo $autoriJmena["martinb"]; ?></a> |
                    Počet zhlédnutí: <?php
                    if ($clankyPocetZhlednuti[1] < 1) {
                        $pocetZhlednutiText = "žádné zobrazení";
                    } elseif ($clankyPocetZhlednuti[1] == 1) {
                        $pocetZhlednutiText = "1 osoba";
                    } elseif ($clankyPocetZhlednuti[1] > 1 && $clankyPocetZhlednuti[1] < 5) {
                        $pocetZhlednutiText = $clankyPocetZhlednuti[1] . " osoby";
                    } else {
                        $pocetZhlednutiText = $clankyPocetZhlednuti[1] . " osob";
                    }
                    echo $pocetZhlednutiText; ?>
                </p>
            </li>

            <li class="jumbotron pt-2 pb-2 mt-3 mb-1">
                <h2><a href="#"><?php echo $clanky[2]; ?></a></h2>
                <p><?php echo $clankyPerex[2]; ?></p>
                <p>
                    <a href="mailto:#"><?php echo $autoriJmena["martinh"]; ?></a> |
                    Počet zhlédnutí: <?php
                    if ($clankyPocetZhlednuti[2] < 1) {
                        $pocetZhlednutiText = "žádné zobrazení";
                    } elseif ($clankyPocetZhlednuti[2] == 1) {
                        $pocetZhlednutiText = "1 osoba";
                    } elseif ($clankyPocetZhlednuti[2] > 1 && $clankyPocetZhlednuti[2] < 5) {
                        $pocetZhlednutiText = $clankyPocetZhlednuti[2] . " osoby";
                    } else {
                        $pocetZhlednutiText = $clankyPocetZhlednuti[2] . " osob";
                    }
                    echo $pocetZhlednutiText; ?>
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