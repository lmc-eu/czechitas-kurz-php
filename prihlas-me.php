<?php
require_once "sdilene.php";

// pokud neexistuje session, zalozime si ji
if (empty($_SESSION["pokusu_prihlaseni"])) {
    $_SESSION["pokusu_prihlaseni"] = 0;
}

// pokud se opravdu uzivatel snazi prihlasit, zapocitame mu to a zobrazime hlasku
if (!empty($_POST["jmeno"]) && !empty($_POST["heslo"])) {
    $_SESSION["pokusu_prihlaseni"] = $_SESSION["pokusu_prihlaseni"] + 1;

    //echo "Toto je " . $_SESSION["pokusu_prihlaseni"] . ". pokus o přihlášení.";

    if ($admin["jmeno"] == $_POST["jmeno"] && $admin["heslo"] == $_POST["heslo"]) {
        $_SESSION["admin"] = $admin["jmeno"];
        // redirect do administrace
        header("Location: editace.php");
    } else {
        // redirect na prihlasovaci stranku
        header("Location: prihlaseni.php");
    }
}