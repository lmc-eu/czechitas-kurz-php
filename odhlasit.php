<?php
session_start();
if (isset($_GET['odhlasit']) && $_GET['odhlasit'] == '1') {
    $_SESSION['uzivatel'] = false;
    $uzivatelPrihlaseny = false;
}