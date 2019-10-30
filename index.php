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

$clanek1 = [
    "nadpis" => "Pole a lány",
    "perex" => "Vítr skoro nefouká a tak by se na první pohled mohlo zdát, že se balónky snad vůbec nepohybují.",
    "obsah" => "Vítr skoro nefouká a tak by se na první pohled mohlo zdát, že se balónky snad vůbec nepohybují.
        nízko nad zemí. Kdyby pod balónky nebyla sytě zelenkavá tráva, ale třeba suchá silnice či beton,
        možná by bylo vidět jejich barevné stíny - to jak přes poloprůsvitné barevné balónky prochází ostré sluneční paprsky.",
    "pocetZhlednuti" => 1,
];

if ($clanek1["pocetZhlednuti"] < 1) {
    $pocetZhlednutiText = "žádné zobrazení";
} elseif ($clanek1["pocetZhlednuti"] == 1) {
    $pocetZhlednutiText = "1 osoba";
} elseif ($clanek1["pocetZhlednuti"] > 1 && $clanek1["pocetZhlednuti"] < 5) {
    $pocetZhlednutiText = $clanek1["pocetZhlednuti"] . " osoby";
} else {
    $pocetZhlednutiText = $clanek1["pocetZhlednuti"] . " osob";
}

$clanek1["pocetZhlednutiText"] = $pocetZhlednutiText;

$clanek2 = [
    "nadpis" => "Podmínky a náhody",
    "perex" => "Když svítí slunce tak silně jako nyní, tak se stuha třpytí jako kapka rosy a jen málokdo vydrží dívat se na ni
        přímo déle než pár chvil. Jak vlastně vypadají ony balónky?.",
    "obsah" => "Když svítí slunce tak silně jako nyní, tak se stuha třpytí jako kapka rosy a jen málokdo vydrží dívat se na ni
        přímo déle než pár chvil. Jak vlastně vypadají ony balónky?.",
    "pocetZhlednuti" => 4,
];

if ($clanek2["pocetZhlednuti"] < 1) {
    $pocetZhlednutiText = "žádné zobrazení";
} elseif ($clanek2["pocetZhlednuti"] == 1) {
    $pocetZhlednutiText = "1 osoba";
} elseif ($clanek2["pocetZhlednuti"] > 1 && $clanek2["pocetZhlednuti"] < 5) {
    $pocetZhlednutiText = $clanek2["pocetZhlednuti"] . " osoby";
} else {
    $pocetZhlednutiText = $clanek2["pocetZhlednuti"] . " osob";
}

$clanek2["pocetZhlednutiText"] = $pocetZhlednutiText;

$clanek3 = [
    "nadpis" => "Úvodní slovo",
    "perex" => "Kdyby pod balónky nebyla sytě zelenkavá tráva, ale třeba suchá silnice či beton, možná by bylo
        a ani do stran se příliš nepohybují. Proti slunci to vypadá, že se slunce pohybuje k západu rychleji než balónky, a možná to tak skutečně je.",

    "obsah" => "Vítr skoro nefouká a tak by se na první pohled mohlo zdát, že se balónky snad vůbec nepohybují.
        nízko nad zemí. Kdyby pod balónky nebyla sytě zelenkavá tráva, ale třeba suchá silnice či beton,
        možná by bylo vidět jejich barevné stíny - to jak přes poloprůsvitné barevné balónky prochází ostré sluneční paprsky.",
    "pocetZhlednuti" => 51,
];

if ($clanek3["pocetZhlednuti"] < 1) {
    $pocetZhlednutiText = "žádné zobrazení";
} elseif ($clanek3["pocetZhlednuti"] == 1) {
    $pocetZhlednutiText = "1 osoba";
} elseif ($clanek3["pocetZhlednuti"] > 1 && $clanek3["pocetZhlednuti"] < 5) {
    $pocetZhlednutiText = $clanek3["pocetZhlednuti"] . " osoby";
} else {
    $pocetZhlednutiText = $clanek3["pocetZhlednuti"] . " osob";
}

$clanek3["pocetZhlednutiText"] = $pocetZhlednutiText;

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
                <h2><a href="#"><?php echo $clanek1["nadpis"]; ?></a></h2>
                <p><?php echo $clanek1["perex"]; ?></p>
                <p>
                    <a href="mailto:#"><?php echo $autoriJmena["ondra"]; ?></a> |
                    Počet zhlédnutí: <?php echo $clanek1["pocetZhlednutiText"]; ?>
                </p>
            </li>

            <li class="jumbotron pt-2 pb-2 mt-3 mb-1">
                <h2><a href="#"><?php echo $clanek2["nadpis"]; ?></a></h2>
                <p><?php echo $clanek2["perex"]; ?></p>
                <p>
                    <a href="mailto:#"><?php echo $autoriJmena["ondra"]; ?></a> |
                    Počet zhlédnutí: <?php echo $clanek2["pocetZhlednutiText"]; ?>
                </p>
            </li>

            <li class="jumbotron pt-2 pb-2 mt-3 mb-1">
                <h2><a href="#"><?php echo $clanek3["nadpis"]; ?></a></h2>
                <p><?php echo $clanek3["perex"]; ?></p>
                <p>
                    <a href="mailto:#"><?php echo $autoriJmena["ondra"]; ?></a> |
                    Počet zhlédnutí: <?php echo $clanek3["pocetZhlednutiText"]; ?>
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