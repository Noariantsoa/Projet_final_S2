<?php

include('functions.php');
session_start();

$produit = $_POST['produit'];
$quantite = $_POST['quantite'];
$prix = $_POST['prix'];
$date_dispo = $_POST['date'];

vendre ($produit, $quantite, $prix, $date_dispo, $_SESSION['user']);
verif_and_upload ("photo");

header("Location:home.php");
?>