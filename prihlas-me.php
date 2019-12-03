<?php
require_once "sdilene.php";

$uzivatelskeJmeno = '';
$uzivatelskeHeslo = '';

// pokud neexistuje session, zalozime si ji
if (!isset($_SESSION['pokusu_prihlaseni'])) {
    $_SESSION['pokusu_prihlaseni'] = 0;
}

// pokud se opravdu uzivatel snazi prihlasit, zapocitame mu to a zobrazime hlasku
if (isset($_POST['jmeno']) && isset($_POST['heslo'])) {
    $_SESSION['pokusu_prihlaseni']++;

    $_SESSION["status-prihlaseni"] = 403;

    $uzivatelskeJmeno = strtolower($_POST['jmeno']); // u jména nechceme řešit velikost písmen
    $uzivatelskeHeslo = $_POST['heslo'];

    // kontrola prihlaseni
    foreach ($admini as $admin) {
        if ($admin['jmeno'] == $uzivatelskeJmeno && $admin['heslo'] == $uzivatelskeHeslo) {
            $_SESSION["status-prihlaseni"] = 200;
            $_SESSION['uzivatel'] = [
                "jmeno" => $uzivatelskeJmeno,
            ];
            $uzivatelPrihlaseny = true;
        }
    }

    // redirect
    header("Location: ".$_SERVER['HTTP_REFERER'], true, 302);

// pokud se nesnazi prihlasit, jenom to rekneme
} else {
    echo "Toto není pokus o přihlášení, ale celkem jich bylo ".$_SESSION['pokusu_prihlaseni'];
}