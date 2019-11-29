<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>var_dump</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-4">
        <div class="row">
            <h2 class="col-12 text-center m-4">Bez použití PRE</h2>

            <div class="col-6">
                <h3>Text</h3>
                <?php var_dump("Ahoj světe!"); ?>
            </div>

            <div class="col-6">
                <h3>Celé číslo</h3>
                <?php var_dump(42); ?>
            </div>

            <div class="col-6">
                <h3>Pole</h3>
                <?php var_dump([1, 2, 3, 4, 5]); ?>
            </div>

            <div class="col-6">
                <h3>Asociativní Pole</h3>
                <?php
                $knihy = [
                    [
                        "nazev" => "Čistý kód",
                        "cena" => 200,
                    ],
                    [
                        "nazev" => "Harry Potter a Kámen mudrců",
                        "cena" => 600,
                    ],
                ];
                ?>
                <?php var_dump($knihy); ?>
            </div>
        </div>
        <hr>
        <div class="row">
            <h2 class="col-12 text-center m-4">S použitím PRE</h2>

            <div class="col-6">
                <h3>Text</h3>
                <pre><?php var_dump("Ahoj světe!"); ?></pre>
            </div>

            <div class="col-6">
                <h3>Celé číslo</h3>
                <pre><?php var_dump(42); ?></pre>
            </div>

            <div class="col-6">
                <h3>Pole</h3>
                <pre><?php var_dump([1, 2, 3, 4, 5]); ?></pre>
            </div>

            <div class="col-6">
                <h3>Asociativní Pole</h3>
                <?php
                $knihy = [
                    [
                        "nazev" => "Čistý kód",
                        "cena" => 200,
                    ],
                    [
                        "nazev" => "Harry Potter a Kámen mudrců",
                        "cena" => 600,
                    ],
                ];
                ?>
                <pre><?php var_dump($knihy); ?></pre>
            </div>
        </div>
    </div>
</body>
</html>