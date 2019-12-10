<?php require_once "hlavicka.php";

$zobrazitClanek = (int) $_GET["clanek"];

// Pokud článek $zobrazitClanek neexistuje v poli $clanky
if (empty($clanky[$zobrazitClanek])) {
    // Uložíme do proměnné $zobrazitClanek náhodný klíč z pole $clanky
    $zobrazitClanek = array_rand($clanky);
}

$dalsiClanek = $zobrazitClanek + 1;
?>
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
                <?php if (empty($clanky[$zobrazitClanek]["autori"])) {
                    echo "Anonymní autor";
                }
                ?>
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

<?php require_once "paticka.php"; ?>
