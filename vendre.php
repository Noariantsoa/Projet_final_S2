<?php
include("functions.php");

$produits = get_produits_envente();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Vendre des produits</h2>

    <form action="traitement_vendre.php" method="post">
        <p>Selectioner le produit que vous voulez vendre<select name="produit"></p>
            <?php foreach($produits as $produit) { ?>
                <option value="<?= $produit['id_produit'] ?>"><?= $produit['nom'] ?></option>
            <?php } ?>
        </select>
        <p>Quantite: <input type="number" value="1" name="quantite"></p>
        <p>Inserrez votre prix: <input type="number" name="prix"></p>
        <p>Disponible a partir du: <input type="date" name="date"></p>
        <p>Photo du produit: </p><input type="file" name="photo" >
        <p><input type="submit" value="Vendre"></p>
    </form>
</body>
</html>