<?php

$darky = [
    [
        "jmeno" => "Martin",
        "popis" => "Lezecké boty",
        "cena" => 333,
        "koupeno" => true,
    ],
    [
        "jmeno" => "Petr",
        "popis" => "Knížka o programování",
        "cena" => 129,
        "koupeno" => false,
    ],
    [
        "jmeno" => "Markéta",
        "popis" => "Zimní bunda",
        "cena" => 950,
        "koupeno" => true,
    ],
    [
        "jmeno" => "Petr",
        "popis" => "Sluchátka",
        "cena" => 1500,
        "koupeno" => false,
    ],
    [
        "jmeno" => "Jirka",
        "popis" => "Svetr se soby",
        "cena" => 500,
        "koupeno" => false,
    ],
];
?>
<!DOCTYPE html>
<html lang  ="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vánoční dárky</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="data:image/x-icon;base64,AAABAAEAEBAAAAEAIABoBAAAFgAAACgAAAAQAAAAIAAAAAEAIAAAAAAAAAQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACAgIP8gICD/ICAg/yAgIP8AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADPz883RERE1iAjLv/48Lj/+PC4//jImP/4yJj/ICMu/0RERNbPz883AAAAAAAAAAAAAAAAAAAAAJCQkH90dHSfOztH/1Icv/8qLHP/+PC4//jwuP/4yJj/+MiY/yosc/9SHL//OztH/3R0dJ+QkJB/AAAAAAAAAAAgICD/5dim/6efkP9SHL//Kixz//jwuP/48Lj/+MiY//jImP8qLHP/Uhy//6ePg//luY3/ICAg/wAAAAAAAAAAICAg//jwuP+nqJf/Uhy//yosc//48Lj/+PC4//jImP/4yJj/Kixz/1Icv/+nj4P/+MiY/yAgIP8AAAAAAAAAACAgIP/48Lj/p6iX/1Icv/8qLHP/+PC4//jwuP/4yJj/+MiY/yosc/9SHL//p4+D//jImP8gICD/AAAAAAAAAAAgICD/+PC4/6eol/9SHL//Kixz/yAwYP/4+Pj/+Pj4//jwuP8qLHP/Uhy//6ePg//4yJj/ICAg/wAAAAAAAAAAICAg//jwuP+nqJf/dXu//2Yp0/8gMGD/IDBg//jImP8gMGD/dyP4/3V7v/+nj4P/+MiY/yAgIP8AAAAAAAAAACAgIP/luY3/+O7j/3FxhP8gLVL/Txqs/08Xn/8wIET/LR5E/yAtUv9xcYT/+O7j/+W5jf8gICD/AAAAAAAAAACQkJB/dHR0n4x0XP8qHjv/SBiM/yAgIP8gICD/RSB1/z4bc/8+G3P/Kh47/4x0XP90dHSfkJCQfwAAAAAAAAAAAAAAAOXl5SAtLS3/IyMj/zEdTv8gLVL/yqR+/8qkfv8gLVL/LR5E/yMjI/8tLS3/5eXlIAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAICAg/yAgIP8gICD/ICAg/wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA//8AAP//AAD8PwAA8A8AAMADAACAAQAAgAEAAIABAACAAQAAgAEAAIABAADAAwAA4AcAAPw/AAD//wAA//8AAA==" rel="icon" type="image/x-icon" />
    <style>
        .display-5 { font-size: 2.5rem; font-weight: 300; line-height: 1.2;}
    </style>
</head>
<body>

<div class="container">
    <!-- hlavička -->
    <div class="header navbar navbar-light bg-success text-white rounded mt-2 mb-4">
        <h1>Vánoční dárky</h1>
    </div>

    <!-- Zde uděláme výpis dárků -->
    <h2>Seznam dárků</h2>

    <ul class="list-group my-3">
        <?php foreach ($darky as $darek) { ?>
            <li class="list-group-item">
                <!-- Zobrazení fajfky u již zakoupených dárků a křížku u nezakoupených (úkol 1.) -->
                <?php if ($darek["koupeno"]) { echo "✅";} else {echo "❌";}?>

                <!-- Popis dárku -->
                <?php echo $darek["popis"];?>

                <!-- Štítek s cenou -->
                <?php
                if ($darek["cena"] < 200) {
                    $barva = "badge-success";
                } elseif ($darek["cena"] > 1000) {
                    $barva = "badge-warning";
                } else {
                    $barva = "badge-secondary";
                }
                ?>
                <span class="badge <?php echo $barva; ?>"><?php echo $darek["cena"]; ?> Kč</span>
            </li>
        <?php } ?>
    </ul>

    <p>
        <strong>Celkem dárků: <?php echo count($darky);?></strong>
    </p>

    <!-- úkol 2. -->
    <h2>Příliš drahé dárky</h2>
    <ul class="list-group my-3">
        <?php foreach ($darky as $darek) {
            if ($darek["cena"] > 1000) { ?>
                <li class="list-group-item"><?php echo $darek["popis"]; ?></li>
            <?php }
        } ?>
    </ul>

    <!-- úkol 3. -->
    <h2 class="mt-2">Etikety</h2>
    <?php foreach ($darky as $darek) { ?>
        <div class="card mt-1 w-25">
            <div class="card-body display-3">
                <?php echo $darek["jmeno"]; ?>
            </div>
        </div>
    <?php } ?>

    <!-- úkol 4. -->
    <h2 class="mt-2">Etikety (s přizpůsobením velikosti písma)</h2>
    <?php foreach ($darky as $darek) {
        $velikostPisma = "display-3";

        if (strlen($darek["jmeno"]) > 7) {
            $velikostPisma = "display-4";
        }
        ?>
        <div class="card mt-1 w-25">
            <div class="card-body <?php echo $velikostPisma; ?>">
                <?php echo $darek["jmeno"]; ?>
                <!-- délka: <?php echo strlen($darek["jmeno"]); ?> -->
            </div>
        </div>
    <?php } ?>

</div>

</body>
</html>
