<?php
require_once "sdilene.php";

$uzivatelskeJmeno = '';
$uzivatelskeHeslo = '';

// pokud neexistuje session, zalozime si ji
if (!isset($_SESSION['pokusu_prihlaseni'])) {
    $_SESSION['pokusu_prihlaseni'] = 0;
}

// pokud se opravdu uzivatel snazi prihlasit, zapocitame mu to a zobrazime hlasku
if (isset($_GET['jmeno']) && isset($_GET['heslo'])) {
    $_SESSION['pokusu_prihlaseni']++;

    echo "Toto je ".$_SESSION['pokusu_prihlaseni'].". pokus o přihlášení.";

    $uzivatelskeJmeno = strtolower($_GET['jmeno']); // u jména nechceme řešit velikost písmen
    $uzivatelskeHeslo = $_GET['heslo'];

    // kontrola prihlaseni
    foreach ($admini as $admin) {
        if ($admin['jmeno'] == $uzivatelskeJmeno && $admin['heslo'] == $uzivatelskeHeslo) {
            $_SESSION['uzivatel'] = [
                "jmeno" => $uzivatelskeJmeno,
            ];
            $uzivatelPrihlaseny = true;
        }
    }

    if (!isset($_SESSION['uzivatel'])) {
        echo "Špatně zadané uživatelské jméno nebo heslo.";
    }

// pokud se nesnazi prihlasit, jenom to rekneme
} else {
    echo "Toto není pokus o přihlášení, ale celkem jich bylo ".$_SESSION['pokusu_prihlaseni'];
}