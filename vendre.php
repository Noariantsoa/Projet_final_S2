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
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
    <h2>Vendre des produits</h2>
    <div class="card">
    <form action="traitement_vendre.php" method="post">
        <p><label>Selectioner le produit que vous voulez vendre</label><select name="produit" class="form-control"></p>
            <?php foreach($produits as $produit) { ?>
                <option value="<?= $produit['id_produit'] ?>"><?= $produit['nom'] ?></option>
            <?php } ?>
        </select>
        <p><label>Quantite: </label><input type="number" value="1" class="form-control" name="quantite"></p>
        <p><label>Inserrez votre prix: </label><input type="number" class="form-control" name="prix"></p>
        <p><label>Disponible a partir du: </label><input type="date" class="form-control" name="date"></p>
        <p><label>Photo du produit: </label></p><input type="file" name="photo" class="form-control">
        <p><input type="submit" class="btn" value="Vendre"></p>
    </form>
    </div>
    </div>
</body>
</html>