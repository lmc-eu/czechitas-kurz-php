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
</head>
<body>
    <div class="container">
        <h1 class="pt-3"><?php echo $nazevBlogu . " blog"; ?></h1>
        <h2>Počet zhlédnutí: <?php echo $pocetZhlednuti; ?></h2>
    </div> 
</body>
</html>