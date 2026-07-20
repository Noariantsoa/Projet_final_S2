<?php
include('functions.php');
$id_mpivarotra = $_GET ['id_membre'];
$id_produit = $_GET['id_produit_vendu'];
$id_produit_membre = $_GET['id_produit_membre'];
$quantite = $_GET['quantite_achat'];
$quantite_initial =$_GET['quantite_initial'];

$message=mividy($id_produit, $quantite, $quantite_initial, $id_mpivarotra, $id_produit_membre);
header("Location:home.php?message=$message");


?>