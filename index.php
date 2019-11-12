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

        <p class="bg-light mt-2 p-2">
            Počet článků na blogu: <?php echo count($clanky); ?>
        </p>

        <!-- výpis článků -->
        <ul class="list-unstyled">

            <?php foreach ($clanky as $klicClanku => $clanek) { ?>
                <li class="jumbotron pt-2 pb-2 mt-3 mb-1">
                    <!-- nadpis článku -->
                    <h2>
                        <a href="./detail.php?clanek=<?php echo $klicClanku; ?>">
                            <?php echo $clanek["nadpis"]; ?>
                        </a>
                    </h2>

                    <!-- perex -->
                    <p>
                        <?php echo substr($clanek["perex"], 0, 133); ?>
                        <?php if (strlen($clanek["perex"]) > 133) { echo "..."; } ?>
                    </p>

                    <p>
                        <!-- jméno autora článku -->
                        <?php foreach ($clanek["autori"] as $autor => $emailAutora) { ?>
                            <a href="mailto:<?php echo $emailAutora;?>"><?php echo $autor;?></a>
                        <?php } ?>
                        <!-- výpis počtu zhlédnutí daného článku -->
                        |
                        Počet zhlédnutí: <?php echo $clanek["pocetZhlednutiText"]; ?>
                    </p>
                </li>
            <?php } ?>

        </ul>

        <!-- patička -->
        <div class="footer navbar navbar-light bg-light rounded">
            <p class="mb-0">
                Spolu s Czechitas jsme to s láskou upekli v LMC s.r.o.
                |
                Počet zhlédnutí blogu: <?php echo $pocetZhlednuti; ?>
                |
                Stránka vygenerována: <?php echo date('j. n. Y, H:i:s'); ?>
            </p>
        </div>
    </div>
</body>
</html>
