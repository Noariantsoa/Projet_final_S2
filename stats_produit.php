<?php
include("functions.php");

$categorie = $_GET['categorie'];
$produits = get_montant_produit($categorie);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
    <h2>Les ventes par produit</h2>
    <table class="table" border="1">
        <tr>
            <th>Produits</th>
            <th>Montant</th>
        </tr>
        <?php foreach($produits as $produit) { ?>
            <tr>
                <td><a href="stats_membre.php?produit=<?= $produit['id'] ?>"><?= $produit['produit'] ?></a></td>
                <td><?= $produit['montant'] ?> Ar</td>
            </tr>
        <?php } ?>
    </table>
    </div>
</body>
</html>