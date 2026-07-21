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
</head>
<body>
    <h3>Veuilez remplir le formulaire suivant :</h3>
    <?php if ( $choice == "modify") {?>
            <form action="traitement_modif.php" method="get">
                <input type="hidden" name="id_produit" value="<?php echo $_GET['id'] ?>">
                <p>Entrez le nouveau nom : <input type="text" name="new_name"></p>
                <p>Choisir l'id de la nouvelle categorie : <input type="text" name="new_categorie"></p>
                <p>Entrez le nouveau prix de reference : <input type="number" name="new_prix"></p>
                <p>Perime <input type="checkbox" name="peremption" ></input></p>
                <input type="submit" value="Entrez"></input>
            </form>
    <?php } ?>
    <?php if ( $choice == "add") {?>
        <form action="traitement_modif.php" method="get">
            <p>Entrez le nouveau nom : <input type="text" name="new_name"></p>
            <p>Choisir l'id de sa categorie : <input type="text" name="new_categorie"></p>
            <p>Entrez le prix de reference : <input type="number" name="new_prix"></p>
            <p>Perime <input type="checkbox" name="peremption" ></input></p>
            <input type="submit" value="Entrez"></input>
        </form>
    <?php } ?>
</body>
</html>