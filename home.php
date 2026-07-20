<?php
include('functions.php');
session_start();
$info_produit = get_all_produits();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Tous les produits que nous vendons :</h3>
    <table border="1" width=800>
        <tr>
        <th>Num ETU</th>
        <th>Nom etudiant</th>
        <th>Produits en vente</th>
        <th>Quantites disponible</th>
        <th></th></tr>

        <?php foreach ($info_produit as $produit){ ?>
            <tr>
                <td><?php echo $produit['numero_etu'] ?></td>
                <td><?php echo $produit['nom'] ?></td>
                <td><?php echo $produit['nom_produit'] ?></td>
                <td><?php echo $produit['quantite_dispo'] ?></td>
                <td><a href="?produit_achat=<?php echo $produit['nom_produit'] ?>">Acheter</a></td>
            </tr>
        <?php } ?>
    </table>
    <?php 
    if( isset ($_GET['produit_achat']) ){ 
        ?>
        <form action="traitement_achat.php" method="get">
            <p>Le produit a acheter : <input type="text" value="<?php echo $_GET['produit_achat']?>" name="produit_acheter" ></input></p>
            <p>Quantites voulu : <input type="number" name="quantite_achat"></p>
        </form>
    <?php } ?>
</body>
</html>