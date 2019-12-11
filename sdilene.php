<?php
session_start();

require_once 'ukladani.php';

$nazevBlogu = "Czechitas";
$pocetZhlednuti = 20;

$clanky = nactiVsechnyClanky();

$admin = [
    "jmeno" => "ema",
    "heslo" => "bflmpsvz",
];