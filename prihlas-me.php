<?php
session_start();

$uzivatelskeJmeno = "";
$uzivatelskeHeslo = "";

// pokud neexistuje session, zalozime si ji
if (empty($_SESSION["pokusu_prihlaseni"])) {
    $_SESSION["pokusu_prihlaseni"] = 0;
}

// pokud se opravdu uzivatel snazi prihlasit, zapocitame mu to a zobrazime hlasku
if (!empty($_GET["jmeno"]) && !empty($_GET["heslo"])) {
    $_SESSION["pokusu_prihlaseni"] = $_SESSION["pokusu_prihlaseni"] + 1;

    echo "Toto je " . $_SESSION["pokusu_prihlaseni"] . ". pokus o přihlášení.";

    $uzivatelskeJmeno = $_GET["jmeno"];
    $uzivatelskeHeslo = $_GET["heslo"];
// pokud se nesnazi prihlasit, jenom to rekneme
} else {
    echo "Toto není pokus o přihlášení, ale celkem jich bylo " . $_SESSION["pokusu_prihlaseni"];
}