<?php include '../functions/functions.php';


session_start();
$bascket = $_SESSION['bascket'];

$name = $_POST['name'];
$adress = $_POST['adress'];

getOrder($name, $adress, $bascket);