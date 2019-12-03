<?php
session_start();

$nazevBlogu = "Czechitas";
$pocetZhlednuti = 20;

if ($pocetZhlednuti == 0 || $pocetZhlednuti < 0) {
    $pocetZhlednuti = "nikdo nás neviděl";
} elseif ($pocetZhlednuti >= 10) {
    $pocetZhlednuti = "hodně lidí";
} else {
    $pocetZhlednuti = "pár lidí";
}

$clanek1 = [
    "nadpis" => "Pole a lány",
    "perex" => "Vítr skoro nefouká a tak by se na první pohled mohlo zdát, že se balónky snad vůbec nepohybují.",
    "obsah" => "Vítr skoro nefouká a tak by se na první pohled mohlo zdát, že se balónky snad vůbec nepohybují.
        nízko nad zemí. Kdyby pod balónky nebyla sytě zelenkavá tráva, ale třeba suchá silnice či beton,
        nízko nad zemí. Kdyby pod balónky nebyla sytě zelenkavá tráva, ale třeba suchá silnice či beton,
        nízko nad zemí. Kdyby pod balónky nebyla sytě zelenkavá tráva, ale třeba suchá silnice či beton,
        nízko nad zemí. Kdyby pod balónky nebyla sytě zelenkavá tráva, ale třeba suchá silnice či beton,
        nízko nad zemí. Kdyby pod balónky nebyla sytě zelenkavá tráva, ale třeba suchá silnice či beton,
        nízko nad zemí. Kdyby pod balónky nebyla sytě zelenkavá tráva, ale třeba suchá silnice či beton,
        nízko nad zemí. Kdyby pod balónky nebyla sytě zelenkavá tráva, ale třeba suchá silnice či beton,
        nízko nad zemí. Kdyby pod balónky nebyla sytě zelenkavá tráva, ale třeba suchá silnice či beton,
        nízko nad zemí. Kdyby pod balónky nebyla sytě zelenkavá tráva, ale třeba suchá silnice či beton,
        možná by bylo vidět jejich barevné stíny - to jak přes poloprůsvitné barevné balónky prochází ostré sluneční paprsky.",
    "pocetZhlednuti" => 1,
    "autori" => [
        "Honza Kuthan" => 'jan.kuthan@lmc.eu',
        "Ondra Machulda" => 'ondrej.machulda@lmc.eu',
    ]
];

if ($clanek1["pocetZhlednuti"] < 1) {
    $pocetZhlednutiText = "žádné zobrazení";
} elseif ($clanek1["pocetZhlednuti"] == 1) {
    $pocetZhlednutiText = "1 osoba";
} elseif ($clanek1["pocetZhlednuti"] > 1 && $clanek1["pocetZhlednuti"] < 5) {
    $pocetZhlednutiText = $clanek1["pocetZhlednuti"] . " osoby";
} else {
    $pocetZhlednutiText = $clanek1["pocetZhlednuti"] . " osob";
}

$clanek1["pocetZhlednutiText"] = $pocetZhlednutiText;

$clanek2 = [
    "nadpis" => "Podmínky a náhody",
    "perex" => "Když svítí slunce tak silně jako nyní, tak se stuha třpytí jako kapka rosy a jen málokdo vydrží dívat se na ni
        přímo déle než pár chvil.",
    "obsah" => "Když svítí slunce tak silně jako nyní, tak se stuha třpytí jako kapka rosy a jen málokdo vydrží dívat se na ni
        přímo déle než pár chvil. Jak vlastně vypadají ony balónky?.",
    "pocetZhlednuti" => 4,
    "autori" => [],
];

if ($clanek2["pocetZhlednuti"] < 1) {
    $pocetZhlednutiText = "žádné zobrazení";
} elseif ($clanek2["pocetZhlednuti"] == 1) {
    $pocetZhlednutiText = "1 osoba";
} elseif ($clanek2["pocetZhlednuti"] > 1 && $clanek2["pocetZhlednuti"] < 5) {
    $pocetZhlednutiText = $clanek2["pocetZhlednuti"] . " osoby";
} else {
    $pocetZhlednutiText = $clanek2["pocetZhlednuti"] . " osob";
}

$clanek2["pocetZhlednutiText"] = $pocetZhlednutiText;

$clanek3 = [
    "nadpis" => "Úvodní slovo",
    "perex" => "Kdyby pod balónky nebyla sytě zelenkavá tráva, ale třeba suchá silnice či beton.",
    "obsah" => "Vítr skoro nefouká a tak by se na první pohled mohlo zdát, že se balónky snad vůbec nepohybují.
        nízko nad zemí. Kdyby pod balónky nebyla sytě zelenkavá tráva, ale třeba suchá silnice či beton,
        možná by bylo vidět jejich barevné stíny - to jak přes poloprůsvitné barevné balónky prochází ostré sluneční paprsky.",
    "pocetZhlednuti" => 51,
    "autori" => [
        "Markéta Filipová" => 'marketa.filipova@lmc.eu',
    ],
];

if ($clanek3["pocetZhlednuti"] < 1) {
    $pocetZhlednutiText = "žádné zobrazení";
} elseif ($clanek3["pocetZhlednuti"] == 1) {
    $pocetZhlednutiText = "1 osoba";
} elseif ($clanek3["pocetZhlednuti"] > 1 && $clanek3["pocetZhlednuti"] < 5) {
    $pocetZhlednutiText = $clanek3["pocetZhlednuti"] . " osoby";
} else {
    $pocetZhlednutiText = $clanek3["pocetZhlednuti"] . " osob";
}

$clanek3["pocetZhlednutiText"] = $pocetZhlednutiText;

$clanky = [
    $clanek1,
    $clanek2,
    $clanek3,
];

// definice přístupových údajů
$admini = [
    [
        "jmeno" => "martinh",
        "heslo" => "bflmpsvz"
    ], [
        "jmeno" => "ondra",
        "heslo" => "tajne_heslo"
    ],
];

// kontrola, zda je uživatel přihlášený a nastavení proměnné
$uzivatelPrihlaseny = false;
if (isset($_SESSION['uzivatel'])) {
    $uzivatelPrihlaseny = true;
}