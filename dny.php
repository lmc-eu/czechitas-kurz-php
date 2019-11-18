<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php $dny = ["po", "út", "st", "čt", "pá", "so", "ne"]; ?>
<ul>
<?php foreach ($dny as $den) { ?>
    <li>
        <?php
            echo $den;
            if ($den == "so" || $den == "ne") {
                echo " - to máme zavřeno";
            } else {
                echo " - 9-18";
            }
        ?>
    </li>
<?php } ?>
</ul>

<!-- Sem zkuste vypsat všechny dny v týdnu z pole $dny tak, aby mezi nimi byla čárka -->
<?php
echo implode(", ", $dny)
?>

</body>
</html>
