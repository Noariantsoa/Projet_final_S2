<?php
include('functions.php');
$choice = $_GET['choix'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modification</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
    <h3>Veuilez remplir le formulaire suivant :</h3>
    <?php if ( $choice == "modify") {?>
        <div class="card">
            <form action="traitement_modif.php" method="get">
                <input type="hidden" name="id_produit" value="<?php echo $_GET['id'] ?>">
                <p><label>Entrez le nouveau nom : </label><input type="text" class="form-control" name="new_name"></p>
                <p><label>Choisir l'id de la nouvelle categorie : </label><input type="text" class="form-control" name="new_categorie"></p>
                <p><label>Entrez le nouveau prix de reference : </label><input type="number" class="form-control" name="new_prix"></p>
                <p><label>Perime </label><input type="checkbox" name="peremption" ></input></p>
                <input type="submit" class="btn" value="Entrez"></input>
            </form>
            </div>
    <?php } ?>
    <?php if ( $choice == "add") {?>
        <div class="card">
        <form action="traitement_modif.php" method="get">
            <p><label>Entrez le nouveau nom : </label><input type="text" class="form-control" name="new_name"></p>
            <p><label>Choisir l'id de sa categorie : </label><input type="text" class="form-control" name="new_categorie"></p>
            <p><label>Entrez le prix de reference : </label><input type="number" class="form-control" name="new_prix"></p>
            <p><label>Perime </label><input type="checkbox"  name="peremption" ></input></p>
            <input type="submit" class="btn" value="Entrez"></input>
        </form>
        </div>
    <?php } ?>
    </div>
</body>
</html>