<?php
session_start();
unset($_SESSION["admin"]);
// redirect na hlavni stranku
header("Location: index.php");