<?php

include('functions.php');
session_start();

$produit = $_POST['produit'];
$quantite = $_POST['quantite'];
$prix = $_POST['prix'];
$date_dispo = $_POST['date'];
$photo = $_POST['photo'];
// echo $photo;

vendre ($produit, $quantite, $prix, $date_dispo, $_SESSION['user']);
verif_and_upload ();

header("Location:home.php");
?>