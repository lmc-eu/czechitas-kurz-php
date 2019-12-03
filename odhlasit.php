<?php
session_start();
unset($_SESSION['uzivatel']);
$_SESSION['status-prihlaseni'] = 401;
header("Location: ".$_SERVER['HTTP_REFERER'], true, 302);
