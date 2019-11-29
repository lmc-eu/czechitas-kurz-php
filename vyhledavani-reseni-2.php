<?php
    session_start();
    require_once "mb.php";

    // ================== Začátek ÚKOLŮ (ostatní kód není třeba měnit) ==================

    // ÚKOL 1. - upravte následující kód tak, aby se hledané slovo bralo z URL parametru "najdi"
    $hledaneSlovo = "";
    if (!empty($_GET["najdi"])) {
        $hledaneSlovo = $_GET["najdi"];
    }

    $mamHotovyUkol1 = true;

    // ÚKOL 2. - upravte následující kód tak, aby se hledaná slova uživateli ukládala
    $zacinamSUkolem2 = true;

    if (!empty($hledaneSlovo)) {
        $_SESSION["hledanaSlova"][] = $hledaneSlovo;
    }

    $hledanaSlova = [];

    if (!empty($_SESSION["hledanaSlova"])) {
        $hledanaSlova = $_SESSION["hledanaSlova"];
    }


    $mamHotovyUkol2 = false;

    // ================== Konec ÚKOLŮ (ostatní kód není třeba měnit) ==================

    $knihy = [
        "Malý princ",
        "Čistý kód",
        "Harry Potter a Kámen mudrců",
        "Harry Potter a Tajemná komnata",
        "Harry Potter a vězeň z Azkabanu",
        "Harry Potter a Ohnivý pohár",
        "Harry Potter a Fénixův řád",
        "Harry Potter a princ dvojí krve",
        "Harry Potter a Relikvie smrti - část 1",
        "Harry Potter a Relikvie smrti - část 2",
    ];

    $nalezeneKnihy = [];

    if (empty($hledaneSlovo)) {
        $nalezeneKnihy = $knihy;
    } else {
        foreach ($knihy as $kniha) {
            if (mb_stripos($kniha, $hledaneSlovo) !== false) {
                $nalezeneKnihy[] = $kniha;
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vyhledávání</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <!-- hlavička -->
        <div class="header row navbar navbar-light bg-light rounded mb-4">
            <div class="col-4">
                <h1>Vyhledávání</h1>
            </div>

            <?php if ($mamHotovyUkol1) { ?>
                <div class="col-4">
                    <!-- formulář pro hledání -->
                    <form class="card card-sm">
                        <div class="card-body row no-gutters align-items-center">
                            <div class="col-auto">
                                <i class="fas fa-search h4 text-body"></i>
                            </div>
                            <div class="col">
                                <input name="najdi" class="form-control form-control-lg form-control-borderless" type="search" placeholder="Najděte si knihu">
                            </div>
                            <div class="col-auto">
                                <button class="btn btn-lg btn-success" type="submit">Hledej</button>
                            </div>
                        </div>
                    </form>
                </div>
            <?php } ?>
        </div>

        <!-- výpis stavu hledání -->
        <h2 class="mb-4">
            Hledáte: "<?php echo $hledaneSlovo?>"
            | zobrazeno: <?php echo count($nalezeneKnihy); ?>/<?php echo count($knihy); ?>

            <?php if ($mamHotovyUkol1 && $zacinamSUkolem2) { ?>
                | hledaná slova: <?php echo implode(', ', array_unique($hledanaSlova)); ?>
            <?php } ?>
        </h2>

        <!-- výpis nalezenych knih -->
        <ol>
            <?php foreach ($nalezeneKnihy as $kniha) { ?>
                <li><?php echo $kniha ?></li>
            <?php } ?>
        </ol>

        <?php if ($mamHotovyUkol1 && $mamHotovyUkol2) { ?>
            <h1 class="text-center text-success">Gratuluji! Máte hotovo! 🎉 </h1>
        <?php } ?>

        <?php if ($mamHotovyUkol1) { ?>
            <!-- výpis obsahu proměnných -->
            <hr style="margin-top: 100px">
            <div class="row">
                <div class="col-6">
                    <h3>GET</h3>
                    <pre><?php var_dump($_GET); ?></pre>
                </div>
                <?php if ($mamHotovyUkol1 && $zacinamSUkolem2) { ?>
                    <div class="col-6">
                    <h3>SESSION</h3>
                    <pre><?php var_dump($_SESSION); ?></pre>
                    </div>
                <?php } ?>
            </div>
        <?php } ?>
    </div>
</body>
</html>