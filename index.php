<?php
$nazevBlogu = "Czechitas";

$pocetZhlednuti = 20;

if ($pocetZhlednuti == 0 || $pocetZhlednuti < 0) {
    $pocetZhlednuti = "žádné zhlédnutí";
} elseif ($pocetZhlednuti >= 10) {
    $pocetZhlednuti = "vidělo to hodně lidí";
} else {
    $pocetZhlednuti = "vidělo to pár lidí";
}
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
                <h2><a href="#">Pole a lány</a></h2>
                <p>
                Vítr skoro nefouká a tak by se na první pohled mohlo zdát, že se balónky snad vůbec nepohybují.
                Jenom tak klidně levitují ve vzduchu. Jelikož slunce jasně září a na obloze byste od východu
                k západu hledali mráček marně, balónky působí jako jakási fata morgána uprostřed pouště.
                Zkrátka široko daleko nikde nic, jen zelenkavá tráva, jasně modrá obloha a tři křiklavě
                barevné pouťové balónky, které se téměř nepozorovatelně pohupují ani ne moc vysoko, ani moc
                nízko nad zemí. Kdyby pod balónky nebyla sytě zelenkavá tráva, ale třeba suchá silnice či beton,
                možná by bylo vidět jejich barevné stíny - to jak přes poloprůsvitné barevné balónky prochází ostré sluneční paprsky.
                </p>
                <p><a href="mailto:#">Pan Lipsum cézet</a> | Počet zhlédnutí: 20</p>
            </li>
        </ul>

        <!-- patička -->
        <div class="footer navbar navbar-light bg-light rounded">
            <p class="mb-0">Spolu s Czechitas jsme to s láskou upekli v LMC s.r.o. | Počet zhlédnutí blogu: <?php echo $pocetZhlednuti; ?></p>
        </div>
    </div> 
</body>
</html>