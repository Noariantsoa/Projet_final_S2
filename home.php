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
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <p><a href="vendre.php">Vendre</a></p>
    <!-- <p><a href="modifier.php?choix=modify">Modifier produit</a></p> -->
    <p><a href="modifier.php?choix=add">Ajouter produit</a></p>
    <p><a href="statistiques.php">Voir les statistiques par categorie</a></p>
<nav class="navbar">
        <ul>
            <li><a href="vendre.php">Vendre</a></li>
            <li><a href="modifier.php?choix=add">Ajouter produit</a></li>
            <li><a href="statistiques.php">Voir les statistiques par categorie</a></li>
        </ul>
    </nav>
    <div class=container>
    
    <h3>Tous les produits que nous vendons :</h3>
    <a href="#?message='filtrer'" class="btn">Filtrer</a>
    <p>
    <?php if (isset($_GET['message'])) { ?>
    <form action=""></form>    
    <?php } ?>
    </p>
    <table border="1" class=table>
        <tr>
        <th>Num ETU</th>
        <th>Nom etudiant</th>
        <th>Produits</th>
        <th>Quantites dispo</th>
        </tr>

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
    <p class="text-muted">(cliquer sur le produit pour le modifier)</p>

    
    <?php 
    if( isset ($_GET['produit_achat']) ){ 
        ?>
        <div class="card">
        <form action="traitement_achat.php" method="get">
            <input type="hidden" value="<?php echo $_GET['id_produit']?>"  name="id_produit_vendu"></input>
            <input type="hidden" value="<?php echo $_GET['id_mpivarotra']?>"  name="id_membre"></input>
            <input type="hidden" value="<?php echo $_GET['quantite_initial']?>"  name="quantite_initial"></input>
            <input type="hidden" value="<?php echo $_GET['id_produit_membre']?>"  name="id_produit_membre"></input>
            <div class="form-group">
            <label>Le produit a acheter : <input type="text" class="form-control" value="<?php echo $_GET['produit_achat']?>" name="produit_acheter" ></input></label>
            </div>
            <div class="form-group">
            <label>Quantites voulu : <input type="number" class="form-control" name="quantite_achat"></label>
            </div>
            <p ><input type="submit" class="btn" value="Acheter"></p>
        </form>
    </div>
    <?php } 
    if (isset($_GET['message']) && $_GET['message'] == 0){
        echo "Merci pour votre achat";
    }
    else if (isset($_GET['message']) && $_GET['message'] == 1){
        echo "Veuillez verifier la quantite entrer";
    }
    ?>
    </div>
</body>
</html>