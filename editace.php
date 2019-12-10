<?php
require_once 'hlavicka.php';

if (empty($_SESSION["admin"])) {
    header("Location: index.php");
}

$zobrazitClanek = (int) $_GET["clanek"];

echo "<pre>";
var_dump($clanky[$zobrazitClanek]);
echo "</pre>";

require_once 'paticka.php';