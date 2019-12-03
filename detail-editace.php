<?php
require_once "hlavicka.php";

if (!$uzivatelPrihlaseny) {
    require_once "prihlaseni-formular.php";
} else {
?>

TODO: formulář na úpravu članku

<?php
} // prihlaseny uizvatel

require_once "paticka.php";
?>