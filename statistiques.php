<?php
include("functions.php");

$montant_categories = get_montant_categories();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Les ventes par categorie</h2>
    <table border="1">
        <tr>
            <th>Categotie</th>
            <th>Montant</th>
        </tr>

        <?php foreach($montant_categories as $montant) { ?>
            <tr>
                <td><a href="stats_produit.php?categorie=<?= $montant['id_categorie']; ?>"><?= $montant['categorie']; ?></a></td>
                <td><?= $montant['montant']; ?> Ar</td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>