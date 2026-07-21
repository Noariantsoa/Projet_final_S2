<?php
include("functions.php");

$produit = $_GET['produit'];
// $montants = get_montant_membres($produit);
$stats = get_montant_membres($produit);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Les ventes par membres</h2>
    <table border="1">
        <tr>
            <th>Membre</th>
            <th>Montant</th>
        </tr>
        <?php foreach($stats as $stat) { ?>
            <tr>
                <td><?= $stat['nom'] ?></td>
                <td><?= $stat['montant'] ?> Ar</td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>