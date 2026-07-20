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

        </form>
    <?php } ?>
    <?php if ( $choice == "add") {?>
        <form action="traitement_add.php" method="get">

        </form>
    <?php } ?>
</body>
</html>