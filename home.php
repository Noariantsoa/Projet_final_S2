<?php
include('functions.php');

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
    <p><a href="vendre.php">Vendre</a></p>
    <!-- <p><a href="modifier.php?choix=modify">Modifier produit</a></p> -->
    <p><a href="modifier.php?choix=add">Ajouter produit</a></p>
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
                <td><a href="mes_ventes.php?id_membre=<?php echo $produit['id_membre'] ?>&num_etu=<?php echo $produit['numero_etu'] ?>"><?php echo $produit['numero_etu'] ?></a></td>
                <td><?php echo $produit['nom'] ?></td>
                <td><a href="modifier.php?choix=modify&id=<?php echo $produit['id_produit'] ?>"><?php echo $produit['nom_produit'] ?></a></td>
                <td><?php echo $produit['quantite_dispo'] ?></td>
                <td><a href="?produit_achat=<?php echo $produit['nom_produit'] ?>&id_produit=<?php echo $produit['id_produit'] ?>&id_mpivarotra=<?php echo $produit['id_membre'] ?>&quantite_initial=<?php echo $produit['quantite_dispo'] ?>&id_produit_membre=<?php echo $produit['id_produit_membre'] ?>">Acheter</a></td>
            </tr>
        <?php } ?>
    </table>
    <p>(cliquer sur le lien du produit pour le modifier)</p>
    <?php 
    if( isset ($_GET['produit_achat']) ){ 
        ?>
        <form action="traitement_achat.php" method="get">
            <input type="hidden" value="<?php echo $_GET['id_produit']?>"  name="id_produit_vendu"></input>
            <input type="hidden" value="<?php echo $_GET['id_mpivarotra']?>"  name="id_membre"></input>
            <input type="hidden" value="<?php echo $_GET['quantite_initial']?>"  name="quantite_initial"></input>
            <input type="hidden" value="<?php echo $_GET['id_produit_membre']?>"  name="id_produit_membre"></input>
            <p>Le produit a acheter : <input type="text" value="<?php echo $_GET['produit_achat']?>" name="produit_acheter" ></input></p>
            <p>Quantites voulu : <input type="number" name="quantite_achat"></p>
            <p><input type="submit" value="Acheter"></p>
        </form>
    <?php } 
    if (isset($_GET['message']) && $_GET['message'] == 0){
        echo "Merci pour votre achat";
    }
    else if (isset($_GET['message']) && $_GET['message'] == 1){
        echo "Veuillez verifier la quantite entrer";
    }
    ?>
</body>
</html>