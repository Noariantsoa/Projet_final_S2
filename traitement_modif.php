<?php
include('functions.php');

if (isset($_GET['id_produit']) && isset($_GET['new_name']) && isset($_GET['new_categorie']) && isset($_GET['new_prix'])){
    $new_name = $_GET['new_name'];
    $new_categorie = $_GET['new_categorie'];
    $new_prix = $_GET['new_prix'];
    $id_produit = $_GET['id_produit'];
    modif_produit($id_produit, $new_name, $new_categorie, $new_prix);
    header("Location:home.php");
}

if (isset($_GET['new_name']) && isset($_GET['new_categorie']) && isset($_GET['new_prix'])){
    $new_name = $_GET['new_name'];
    $new_categorie = $_GET['new_categorie'];
    $new_prix = $_GET['new_prix'];
    $id_produit = $_GET['id_produit'];
    ajout_produit($new_name, $new_categorie, $new_prix);
    header("Location:home.php");
}

?>