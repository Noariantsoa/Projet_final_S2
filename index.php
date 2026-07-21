<?php

if(isset($_GET['etu']))
{
    $etu = $_GET['etu'];
}

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
    <div class="card">
    <h2>Connectez-vous</h2>
    <?php if(!isset($_GET['error'])) { ?>
        <form action="traitement_login.php" method="get">
            <label>Saisir votre ETU <input type="text" class="form-control" value="00xxxx" name="etu"></label>
            <p><input type="submit" class="btn" value="Se connecter"></p>
        </form>
    <?php } ?>

    <?php if(isset($_GET['error'])) { ?>
        <form action="traitement_login.php" method="get">
            <label>Saisir votre ETU <input type="text" class="form-control" value="<?= $etu ?>" name="etu"></label>
            <p><label>Saisir votre nom </label><input type="text" class="form-control" name="nom"></p>
            <p><input type="submit" class="btn" value="S'inscrire"></p>
        </form>
    <?php } ?>
    </div>
    </div>
</body>
</html>