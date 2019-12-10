<?php
/**
 * Příklad vytvoření nového článku:
 * <?php ulozNovyClanek("Muj nadpis", "Perex článku", "Obsah článku", ["Michal", "Honza"]); ?>
 * 
 * Příklad editace existujícího článku:
 * <?php ulozUpravenyClanek(0, "Muj aktualizovaný nadpis", "Perex článku", "Obsah článku", ["Michal", "Honza"]); ?>
 * 
 * Příklad smazání článku:
 * <?php smazClanek(0); ?>
 */

/**
 * Vytvoří nový článek
 */
function ulozNovyClanek($nadpis = '', $perex = '', $obsah = '', $autori = []) {
    $clanky = nactiVsechnyClanky();

    $novyClanek = vytvorPoleClanku($nadpis, $perex, $obsah, $autori, 0);

    $clanky[] = $novyClanek;

    ulozVsechnyClanky($clanky);
}

/**
 * Aktualizuje již existující článek
 */
function ulozUpravenyClanek($id, $nadpis = '', $perex = '', $obsah = '', $autori = []) {
    $clanky = nactiVsechnyClanky();

    // když se pokoušíme editovat neexistující článek
    if (!isset($clanky[$id])) {
        throw new Exception("Invalid ID, allowed values are 'null' or 'integer'!");
    }
    
    $novyClanek = vytvorPoleClanku($nadpis, $perex, $obsah, $autori);

    $clanky[$id] = $novyClanek;

    ulozVsechnyClanky($clanky);
}

/**
 * Zajišťuje správný formát pole článku a dopočítává hodnotu počtu zhlédnutí
 */
function vytvorPoleClanku($nadpis = '', $perex = '', $obsah = '', $autori = [], $pocetZhlednuti = null, $id = null) {

    $novyClanek = [
        "nadpis" => $nadpis,
        "perex" => $perex,
        "obsah" => $obsah,
        "autori" => $autori,
    ];

    if ($pocetZhlednuti !== null) {
        $novyClanek["pocetZhlednuti"] = $pocetZhlednuti;
        $novyClanek["pocetZhlednutiText"] = ziskejPocetZhlednutiText($pocetZhlednuti);
    }

    return $novyClanek;
}

/**
 * Načte všechny články a vrátí námi jeden požadovaný
 */
function nactiClanek($id) {
    $clanky = nactiVsechnyClanky();

    return $clanky[$id];
}

/**
 * Načte všechny články, vrátí námi požadovaný a zvýší mu hodnotu počtu přečtení
 */
function nactiClanekANavysShlednuti($id) {
    navysPocetZhlednuti($id);
    
    return nactiClanek($id);
}

/**
 * Odstraní článek
 */
function smazClanek($id) {
    $clanky = nactiVsechnyClanky();

    if (empty($clanky[$id])) {
        throw new Exception("Cannot delete 'clanek' with this ID. Id not exists...");
    }
    
    unset($clanky[$id]);

    ulozVsechnyClanky();
}

/**
 * Uloží pole se všemi články do json souboru
 */
function ulozVsechnyClanky($clanky) {
    if (!file_put_contents("clanky.json", json_encode($clanky))) {
        throw new Exception("Cannot save 'clanky' to json file!");
    }
}

/**
 * Načte ze souboru pole s články, pokud soubor neexistuje, vrátí nám pole prázdné
 */
function nactiVsechnyClanky() {
    if (!file_exists("clanky.json")) {
        return [];
    }

    return json_decode(file_get_contents("clanky.json"), true);
}

/**
 * Načte články, a u článku s námi vybraným ID zvedne počet zhlédnutí o 1
 */
function navysPocetZhlednuti($id) {
    $clanky = nactiVsechnyClanky();

    $clanky[$id]['pocetZhlednuti'] = $clanky[$id]['pocetZhlednuti'] + 1;
    $clanky[$id]['pocetZhlednutiText'] = ziskejPocetZhlednutiText($clanky[$id]['pocetZhlednuti']);

    ulozVsechnyClanky($clanky);
}

/**
 * Podle počtu zhlédnutí vytvoří textový popis pro zobrazení
 */
function ziskejPocetZhlednutiText($pocetZhlednuti) {
    if ($pocetZhlednuti < 1) {
        $pocetZhlednutiText = "žádné zobrazení";
    } elseif ($pocetZhlednuti == 1) {
        $pocetZhlednutiText = "1 osoba";
    } elseif ($pocetZhlednuti > 1 && $pocetZhlednuti < 5) {
        $pocetZhlednutiText = $pocetZhlednuti . " osoby";
    } else {
        $pocetZhlednutiText = $pocetZhlednuti . " osob";
    }

    return $pocetZhlednutiText;
}
