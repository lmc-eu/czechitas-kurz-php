<?php require_once "hlavicka.php"; ?>

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
                        |
                        <?php
                        $slova = explode(" ", $clanek["obsah"]);
                        $pocetSlov = count($slova);

                        $dobaCteni = $pocetSlov / 200;
                        $dobaCteniZaokrouhlena = ceil($dobaCteni);  // BONUS

                        $minutyText = 'min';

                        // BONUS 2
                        if ($dobaCteniZaokrouhlena >= 2 && $dobaCteniZaokrouhlena < 5) {
                            $minutyText = 'minuty';
                        } elseif ($dobaCteniZaokrouhlena > 5) {
                            $minutyText = 'minut';
                        } else {
                            $minutyText = 'minuta';
                        }
                        ?>
                        Doba čtení: <?php echo $dobaCteniZaokrouhlena . " " . $minutyText ?>
                    </p>
                </li>
            <?php } ?>

        </ul>

<?php require_once "paticka.php"; ?>
