<?php 
require_once 'ukladani.php';

$clanekId = $_GET['clanek'];

smazClanek($clanekId);


header("Location: index.php");